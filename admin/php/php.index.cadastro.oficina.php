<?php

require_once("inc/inc.OficinasCtrl.php");
require_once("inc/inc.PalestranteCtrl.php");
require_once("inc/inc.PalestrantesOficinaCtrl.php");
require_once("inc/inc.LocalCtrl.php");

$acao = 'cadastrar';
$a_palestrantes = buscarPalestrantes();

if (isset($_GET['id_oficina']) and !empty($_GET['id_oficina'])) {
  
  $id_oficina = (int)$_GET['id_oficina'];
  
  $a_oficina = buscarOficina($id_oficina);
  
  $a_palestrantes = vincularPalestrantesOficina($a_palestrantes, $id_oficina);
  
  if ($a_oficina == false) die('Id da Oficina é inválido');
  
  $acao = 'alterar';
  
  $smarty->assign('a_oficina', $a_oficina);
}

$a_oficinas = buscarOficinas();
$a_locais = buscarLocais();

$smarty->assign('a_palestrantes', $a_palestrantes);
$smarty->assign('a_locais', $a_locais);
$smarty->assign('a_oficinas', $a_oficinas);
$smarty->assign('acao', $acao);