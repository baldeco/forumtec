<?php

require_once('inc/inc.UsuarioCtrl.php');
require_once('inc/inc.functions.php');

switch ($acao) {
  case 'cadastrar':
    $a_dados = array();
    
    if(valida_email($_POST['f_email'])){
        $a_dados['email'] = $_POST['f_email'];
    }else{

        $erro = 'E-mail inválido';
        die(header('Location: index.php?secao=cadastro&modulo=usuario&erro='.$erro));
    }
    
    $a_dados['nome'] = $_POST['f_nome'];
    $a_dados['status'] = $_POST['f_status'];

    inserirUsuario($a_dados);
    break;

  case 'alterar':
    $a_dados = array();
    
    if(valida_email($_POST['f_email'])){
        $a_dados['email'] = $_POST['f_email'];
    }else{

        $erro = 'E-mail inválido';
        die(header('Location: index.php?secao=cadastro&modulo=usuario&id_usuario='.$a_dados['id_usuario'].'&erro='.$erro));
    }

    $a_dados['id_usuario'] = (int)$_POST['id_usuario'];
    $a_dados['nome'] = $_POST['f_nome'];
    $a_dados['status'] = $_POST['f_status'];

    alterarUsuario($a_dados);
    break;

  case 'deletar':
    $id_usuario = (int)$_GET['id_usuario'];
    deletarUsuario($id_usuario);
    break;

  default:
    die('Seção inválida');
}