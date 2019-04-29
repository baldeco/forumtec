<?php

require_once('inc/inc.InscricoesPalestraCtrl.php');
require_once('inc/inc.PalestraCtrl.php');

if (isset($_GET['id_palestra']) && !empty($_GET['id_palestra'])) {
  
  $id_palestra = (int)$_GET['id_palestra'];
 
  $a_palestra = buscarPalestra($id_palestra);
 
  if ($a_palestra == false) die('id da palestra é inválido');
 
  $a_participantes_palestra = buscarParticipantesPalestra($id_palestra);

  $smarty->assign('a_palestra', $a_palestra);
  $smarty->assign('a_participantes_palestra', $a_participantes_palestra);

}

