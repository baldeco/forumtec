<?php

require_once('inc/inc.patrocinadorCtrl.php');

$acao = 'cadastrar';

if (isset($_GET['id_patrocinador']) && !empty($_GET['id_patrocinador'])) {
  $id_patrocinador = (int)$_GET['id_patrocinador'];
  $a_patrocinador = buscarPatrocinador($id_patrocinador);
  if ($a_patrocinador == false) die('ID do patrocinador inválido');
  $acao = 'alterar';
  $smarty->assign('a_patrocinador', $a_patrocinador);
}

$a_patrocinadores = buscarPatrocinadores();

$smarty->assign('a_patrocinadores', $a_patrocinadores);
$smarty->assign('acao', $acao);