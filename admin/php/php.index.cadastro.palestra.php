<?php

require_once('inc/inc.PalestraCtrl.php');
require_once('inc/inc.PalestranteCtrl.php');
require_once('inc/inc.PalestrantesPalestraCtrl.php');
require_once('inc/inc.LocalCtrl.php');

$acao = 'cadastrar';
$a_palestrantes = buscarPalestrantes();

if (isset($_GET['id_palestra']) && !empty($_GET['id_palestra'])) {
  
  $id_palestra = (int)$_GET['id_palestra'];
 
  $a_palestra = buscarPalestra($id_palestra);
 
  $a_palestrantes = vincularPalestrantesPalestra($a_palestrantes, $id_palestra);
 
  if ($a_palestra == false) die('id da palestra é inválido');
 
  $acao = 'alterar';
 
  $smarty->assign('a_palestra', $a_palestra);

}

$a_palestras = buscarPalestras();
$a_locais = buscarLocais();

$smarty->assign('a_palestras', $a_palestras);
$smarty->assign('a_palestrantes', $a_palestrantes);
$smarty->assign('a_locais', $a_locais);
$smarty->assign('acao', $acao);
