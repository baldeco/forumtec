<?php

require_once('inc/inc.ParticipanteCtrl.php');
require_once('inc/inc.functions.php');

switch ($acao) {
  case 'cadastrar':

    if(valida_email($_POST['email'])){
        $a_dados['email'] = $_POST['email'];
    }else{

        $erro = 'E-mail inválido';
        die(header('Location: index.php?secao=cadastro&modulo=participante&erro='.$erro));
    }

    $a_dados['id_instituicao'] = !empty($_POST['id_instituicao']) ? (int)$_POST['id_instituicao'] : 'NULL';
    $a_dados['nome'] = $_POST['nome'];
    $a_dados['cpf'] = $_POST['cpf'];
    $a_dados['telefone'] = $_POST['telefone'];
    $a_dados['status'] = $_POST['status'];

    inserirParticipante($a_dados);
    break;

  case 'alterar':
    
    if(valida_email($_POST['email'])){
        $a_dados['email'] = $_POST['email'];
    }else{

        $erro = 'E-mail inválido';
        die(header('Location: index.php?secao=cadastro&modulo=participante&id_participante='.$a_dados['id_participante'].'&erro='.$erro));
    }

    $a_dados['id_participante'] = (int)$_POST['id_participante'];
    $a_dados['id_instituicao'] = !empty($_POST['id_instituicao']) ? (int)$_POST['id_instituicao'] : 'NULL';
    $a_dados['nome'] = $_POST['nome'];
    $a_dados['cpf'] = $_POST['cpf'];
    $a_dados['telefone'] = $_POST['telefone'];
    $a_dados['status'] = $_POST['status'];

    alterarParticipante($a_dados);
    break;

  case 'deletar':
    $id_participante = (int)$_GET['id_participante'];

    deletarParticipante($id_participante);
    break;

  default:
    die('Seção inválida');
}
