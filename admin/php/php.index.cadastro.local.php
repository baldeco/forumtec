<?php

require_once("inc/inc.LocalCtrl.php");

$acao = 'cadastrar';

if (isset($_GET['id_local']) && !empty($_GET['id_local'])) {
  $id_local = (int)$_GET['id_local'];
  $a_local = buscarLocal($id_local);
  if ($a_local == false) die('id do local é inválido');
  $acao = 'alterar';
  $smarty->assign('a_local', $a_local);
}

$a_locais = buscarLocais();

$smarty->assign('a_locais', $a_locais);
$smarty->assign('acao', $acao);
