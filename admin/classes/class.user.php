<?php

include_once('class.crypto.php');

class User extends Crypto {

  private $conn;

  function __construct($conn) {
    parent::__construct();
    $this->conn = $conn;
  }

  public function is_logged() {
    if (isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])) {
      try {
        $sql = "SELECT * FROM usuarios_log WHERE id_usuario = ".$_SESSION['id_usuario']." AND fim > NOW() AND session_id = '".session_id()."' AND status = 'A'";
        $query = mysql_query($sql, $this->conn);

        if ($query && mysql_num_rows($query) > 0) {
          $sql = "UPDATE usuarios_log SET fim = DATE_ADD(NOW(), INTERVAL 30 MINUTE) WHERE id_usuario = ".$_SESSION['id_usuario']." AND session_id = '".session_id()."' AND status = 'A'";
          if (mysql_query($sql, $this->conn)) return true;
          return false;
        }

        mysql_query("UPDATE usuarios_log SET status = 'I' WHERE id_usuario = ".$_SESSION['id_usuario']);

      } catch (Exception $e) {
        return '<p class="error">'.$e->getMessage().'</p>';
      }
    }
    return false;
  }

  public function salva_senha($senha, $novaSenha) {
    try {
      $sql = "SELECT email FROM usuarios WHERE id_usuario = ".$_SESSION['id_usuario']." AND senha = '".$this->encrypt($senha)."' AND status = 'A' LIMIT 1";
      $query = mysql_query($sql, $this->conn);

      if (mysql_num_rows($query) > 0) {
        $sql = "UPDATE usuarios SET senha = '".$this->encrypt($novaSenha)."' WHERE id_usuario = ".$_SESSION['id_usuario'];
        if (mysql_query($sql, $this->conn)) return 'ok';
        return 'Erro ao gravar a nova senha!';
      }
      return 'Senha incorreta!';
    } catch (Exception $e) {
      return $e->getMessage();
    }
  }

  public function login($email, $senha) {
    $remote_addr = $_SERVER['REMOTE_ADDR'];

    // VERIFICA SE O IP FOI BLOQUEADO (APÓS 5 TENTATIVAS ERRADAS)
    $sql = "SELECT * FROM usuarios_erro WHERE user_ip = '".$remote_addr."' AND data > DATE_SUB(NOW(), INTERVAL 12 HOURS)";
    $query = mysql_query($sql, $this->conn);
    if ($query && mysql_num_rows($query) > 5) {
      echo "<script>alert('IP bloqueado por exceder 5 tentativas de conexão!\\nEntre em contato com o Administrador');</script>";
      return false;
    }

    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $host = $_SERVER['HTTP_HOST'];

    // BUSCA USUARIO NO DB
    $query = mysql_query("SELECT * FROM usuarios WHERE email = '".$email."' LIMIT 1", $this->conn);

    if ($query && mysql_num_rows($query) > 0) {
      $row = mysql_fetch_assoc($query);
      if ($row['senha'] == $this->encrypt($senha)) {
        // VERIFICA SE O USUARIO ESTÁ INATIVO
        if ($row['status'] == 'I') {
          echo "<script>alert('Usuário inativo!');</script>";
          return false;
        }
        // INATIVA TODOS ACESSOS ANTERIORES DO USUARIO NO LOG
        if (!mysql_query("UPDATE usuarios_log SET status = 'I' WHERE id_usuario = ".$row['id_usuario'], $this->conn)) {
          echo "<script>alert('Falha ao tentar efetuar login!');</script>";
          return false;
        }
        // REGISTRA ACESSO ATUAL NO LOG
        $sql = "INSERT INTO usuarios_log
                     VALUES (
                            NULL,
                            ".$row['id_usuario'].",
                            NOW(),
                            DATE_ADD(NOW(), INTERVAL 30 MINUTE),
                            '".session_id()."',
                            '".$remote_addr."',
                            '".$user_agent."',
                            '".$_SERVER['HTTP_HOST']."',
                            'A'
                            )";
        if (!mysql_query($sql, $this->conn)) {
          echo "<script>alert('Ocorreu uma falha interna!');</script>";
          return false;
        }

        // RECUPERA DO DB DATAHORA DO ULTIMO ACESSO
        $sql = "SELECT fim FROM usuarios_log WHERE id_usuario = ".$row['id_usuario']." ORDER BY fim DESC LIMIT 1 ";
        $query_last = mysql_query($sql, $this->conn);

        $_SESSION['ultimo_acesso'] = $query_last[0]['fim'];
        $_SESSION['id_usuario'] = $row['id_usuario'];
        $_SESSION['usuario'] = abrevia_nome($row['nome']);
        return true;
      }
    }

    $sql = "INSERT INTO usuarios_erro
                 VALUES (
                        NULL,
                        NOW(),
                        '".$email."',
                        '".$senha."',
                        '".$remote_addr."',
                        '".$user_agent."',
                        '".$host."'
                        )";
    mysql_query($sql, $this->conn);
    echo "<script>alert('Usuário e/ou Senha incorretos!');</script>";
    return false;
  }

  public function logout() {
    session_destroy();
  }
}
