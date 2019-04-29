<?php

require_once('inc/inc.InstituicaoCtrl.php');

switch ($acao) {
  case 'cadastrar':
    $a_dados = array();
    $a_dados['nome'] = $_POST['f_nome'];
    $a_dados['cidade'] = $_POST['f_cidade'];
    $a_dados['status'] = $_POST['f_status'];

    inserirInstituicao($a_dados);
    break;

  case "alterar":
    $a_dados = array();
    $a_dados['id'] = (int)$_POST['id_instituicao'];
    $a_dados['nome'] = $_POST['f_nome'];
    $a_dados['cidade'] = $_POST['f_cidade'];
    $a_dados['status'] = $_POST['f_status'];

    alterarInstituicao($a_dados);
    break;

  case 'deletar':
    $id_instituicao = (int)$_GET['id_instituicao'];

    deletarInstituicao($id_instituicao);
    break;

  default:
    die('Seção inválida');
}