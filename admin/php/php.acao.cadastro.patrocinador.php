<?php

require_once('inc/inc.patrocinadorCtrl.php');
require_once('inc/inc.functions.php');

switch ($acao) {
  case 'cadastrar':

    if(valida_email($_POST['email'])){
        $a_dados['email'] = $_POST['email'];
    }else{

        $erro = 'E-mail inválido';
        die(header('Location: index.php?secao=cadastro&modulo=patrocinador&erro='.$erro));
    }
    
    $a_dados['nome'] = $_POST['nome'];
    $a_dados['cnpj'] = $_POST['cnpj'];
    $a_dados['tipo'] = $_POST['tipo'];
    $a_dados['logo'] = $_FILES['logo'];
    $a_dados['status'] = $_POST['status'];

    inserirPatrocinador($a_dados);
    break;

  case 'alterar':
    
    if(valida_email($_POST['email'])){
        $a_dados['email'] = $_POST['email'];
    }else{

        $erro = 'E-mail inválido';
        die(header('Location: index.php?secao=cadastro&modulo=patrocinador&id_patrocinador='.$a_dados['id_patrocinador'].'&erro='.$erro));
    }

    $a_dados['id_patrocinador'] = (int)$_POST['id_patrocinador'];
    $a_dados['nome'] = $_POST['nome'];
    $a_dados['cnpj'] = $_POST['cnpj'];
    $a_dados['tipo'] = $_POST['tipo'];
    $a_dados['logo_atual'] = $_POST['logo_atual'];
    $a_dados['logo'] = $_FILES['logo'];
    $a_dados['status'] = $_POST['status'];

    alterarPatrocinador($a_dados);
    break;

  case 'deletar':
    $id_patrocinador = (int)$_GET['id_patrocinador'];
    deletarPatrocinador($id_patrocinador);
    break;

  default:
    die('Seção inválida');
}