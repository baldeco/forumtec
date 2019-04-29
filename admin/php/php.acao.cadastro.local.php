<?php

require_once('inc/inc.LocalCtrl.php');

switch ($acao) {
  case 'cadastrar':
    $a_form['nome'] = $_POST['nome'];
    $a_form['capacidade'] = $_POST['capacidade'];
    $a_form['status'] = $_POST['f_status'];

    inserirLocal($a_form);
    break;

  case 'alterar':
    $a_form['id'] = (int)$_POST['id_local'];
    $a_form['nome'] = $_POST['nome'];
    $a_form['capacidade'] = $_POST['capacidade'];
    $a_form['status'] = $_POST['f_status'];

    alterarLocal($a_form);
    break;

  case 'deletar':
    $id_local = (int)$_GET['id_local'];
    deletarLocal($id_local);
    break;

  default:
    die('Seção inválida');
}