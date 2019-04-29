<?php

require_once('inc/inc.PalestranteCtrl.php');

$acao = 'cadastrar';

if (isset($_GET['id_palestrante']) && !empty($_GET['id_palestrante'])) {
  $id_palestrante = (int)$_GET['id_palestrante'];
  $a_palestrante = buscarPalestrante($id_palestrante);
  if ($a_palestrante == false) die('id do palestrante é inválido');
  $acao = 'alterar';
  $smarty->assign('a_palestrante', $a_palestrante);
}

$a_palestrantes = buscarPalestrantes();

$smarty->assign('a_palestrantes', $a_palestrantes);
$smarty->assign('acao', $acao);