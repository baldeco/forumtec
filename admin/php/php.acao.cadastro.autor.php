<?php

require_once('inc/inc.AutorCtrl.php');
require_once('inc/inc.functions.php');

switch ($acao) {
  case 'cadastrar':
    $a_dados = array();
    
    if(valida_email($_POST['f_email'])){
        $a_dados['email'] = $_POST['f_email'];
    }else{

        $erro = 'E-mail inválido';
        die(header('Location: index.php?secao=cadastro&modulo=autor&erro='.$erro));
    }

    $a_dados['nome'] = $_POST['f_nome'];
    $a_dados['cpf'] = $_POST['f_cpf'];
    $a_dados['telefone'] = $_POST['f_telefone'];
    $a_dados['status'] = $_POST['f_status'];

    inserirAutor($a_dados);
    break;

  case 'alterar':
    $a_dados = array();
    
    if(valida_email($_POST['f_email'])){
        $a_dados['email'] = $_POST['f_email'];
    }else{

        $erro = 'E-mail inválido';
        die(header('Location: index.php?secao=cadastro&modulo=autor&id_autor='.$a_dados['id_autor'].'&erro='.$erro));
    }
    
    $a_dados['id_autor'] = (int)$_POST['id_autor'];
    $a_dados['nome'] = $_POST['f_nome'];
    $a_dados['cpf'] = $_POST['f_cpf'];
    $a_dados['telefone'] = $_POST['f_telefone'];
    $a_dados['status'] = $_POST['f_status'];

    alterarAutor($a_dados);
    break;

  case 'deletar':
    $id_autor = (int)$_GET['id_autor'];
    deletarAutor($id_autor);
    break;

  default:
    die('Seção inválida');
}