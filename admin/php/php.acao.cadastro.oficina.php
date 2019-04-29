<?php

require_once('inc/inc.functions.php');
require_once('inc/inc.OficinasCtrl.php');

switch ($acao) {
    
  case 'cadastrar':

    $a_dados = array();
    $a_dados['id_local'] = !empty($_POST['f_id_local']) ? (int)$_POST['f_id_local'] : 'NULL';
    $a_dados['nome'] = addslashes($_POST['f_nome']);
    $a_dados['palestrantes'] = $_POST['f_palestrantes'];
    $a_dados['inicio'] = reverteData($_POST['f_data']).' '.$_POST['f_hora_inicio'].':'.$_POST['f_minuto_inicio'].':00';
    $a_dados['fim'] = calculaDataHoraFinal($a_dados['inicio'], $_POST['f_hora_fim'].':'.$_POST['f_minuto_fim']);
    $a_dados['descricao'] = addslashes($_POST['f_descricao']);
    $a_dados['img_divulgar'] = $_FILES['f_img_divulgar'];
    $a_dados['status'] = $_POST['f_status'];
    $a_dados['anexo'] = $_FILES['f_anexo'];
    $a_dados['legenda_anexo'] = $_POST['f_legenda_anexo'];

    inserirOficina($a_dados);
    break;

  case 'alterar':
    $a_dados = array();
    $a_dados['id_oficina'] = (int)$_POST['id_oficina'];
    $a_dados['id_local'] = !empty($_POST['f_id_local']) ? (int)$_POST['f_id_local'] : 'NULL';
    $a_dados['nome'] = addslashes($_POST['f_nome']);
    $a_dados['palestrantes'] = $_POST['f_palestrantes'];
    $a_dados['inicio'] = reverteData($_POST['f_data']).' '.$_POST['f_hora_inicio'].':'.$_POST['f_minuto_inicio'].':00';
    $a_dados['fim'] = calculaDataHoraFinal($a_dados['inicio'], $_POST['f_hora_fim'].':'.$_POST['f_minuto_fim']);
    $a_dados['descricao'] = addslashes($_POST['f_descricao']);
    $a_dados['img_divulgar'] = $_FILES['f_img_divulgar'];
    $a_dados['status'] = $_POST['f_status'];
    $a_dados['foto_atual'] = $_POST['f_foto_atual'];
    $a_dados['anexo_atual'] = $_POST['f_anexo_atual'];
    $a_dados['anexo'] = $_FILES['f_anexo'];
    $a_dados['legenda_anexo'] = $_POST['f_legenda_anexo'];

    alterarOficina($a_dados);
    break;

  case 'deletar':
    
    $id_oficina = (int)$_GET['id_oficina'];
    deletarOficina($id_oficina);
    break;

  default:
    die('Seção inválida');

}