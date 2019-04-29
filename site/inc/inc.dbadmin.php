<?php

function criarConexao() {
  switch ($_SERVER['SERVER_NAME']) {
    case 'localhost':
      define("URL", "localhost");
      define("USER", "root");
      define("PASSWORD", "");
      define("BD", "forumtec");
      break;

    default:
      define("URL", "localhost");
      define("USER", "id5976422_forumtec");
      define("PASSWORD", "fabrica18");
      define("BD", "id5976422_forumtec");
      break;
  }

  $conexao = mysql_connect(URL, USER, PASSWORD) or die ("Erro ao realizar a conexão com o banco de dados");
  mysql_select_db(BD) or die ("Erro ao selecionar o banco de dados");

  return $conexao;
}

function executa($sql, $conexao) {
  $rs = mysql_query($sql, $conexao);
  return $rs;
}

function buscar($rs) {
  $result = array();
  if ($rs != false) {
    while ($busca = mysql_fetch_assoc($rs)) {
      $result[] = $busca;
    }
    return $result;
  }
  return false;
}

function lastID($conexao) {
  return mysql_insert_id($conexao);
}

function numLinhasSelecionadas($rs){
  return mysql_num_rows($rs);

}
