<?php

require_once('inc/inc.PalestranteCtrl.php');
require_once('inc/inc.functions.php');

switch ($acao) {
  case 'cadastrar':

    if(valida_email($_POST['email'])){
        $a_dados['email'] = $_POST['email'];
    }else{

        $erro = 'E-mail inválido';
        die(header('Location: index.php?secao=cadastro&modulo=palestrante&erro='.$erro));
    }

    $a_dados['nome'] = $_POST['nome'];
    $a_dados['cpf'] = $_POST['cpf'];
    $a_dados['endereco'] = $_POST['endereco'];
    $a_dados['bairro'] = $_POST['bairro'];
    $a_dados['cidade'] = $_POST['cidade'];
    $a_dados['cep'] = $_POST['cep'];
    $a_dados['uf'] = $_POST['uf'];
    $a_dados['telefone'] = $_POST['telefone'];
    $a_dados['descricao'] = addslashes($_POST['descricao']);
    $a_dados['status'] = $_POST['status'];

    inserirPalestrante($a_dados);
    break;

  case 'alterar':
    
    if(valida_email($_POST['email'])){
        $a_dados['email'] = $_POST['email'];
    }else{

        $erro = 'E-mail inválido';
        die(header('Location: index.php?secao=cadastro&modulo=palestrante&id_palestrante='.$a_dados['id_palestrante'].'&erro='.$erro));
    }

    $a_dados['id_palestrante'] = (int)$_POST['id_palestrante'];
    $a_dados['nome'] = $_POST['nome'];
    $a_dados['cpf'] = $_POST['cpf'];
    $a_dados['endereco'] = $_POST['endereco'];
    $a_dados['bairro'] = $_POST['bairro'];
    $a_dados['cidade'] = $_POST['cidade'];
    $a_dados['cep'] = $_POST['cep'];
    $a_dados['uf'] = $_POST['uf'];
    $a_dados['telefone'] = $_POST['telefone'];
    $a_dados['descricao'] = addslashes($_POST['descricao']);
    $a_dados['status'] = $_POST['status'];

    alterarPalestrante($a_dados);
    break;

  case 'deletar':
    $id_palestrante = (int)$_GET['id_palestrante'];
    deletarPalestrante($id_palestrante);
    break;

  default:
    die('Seção inválida');
}