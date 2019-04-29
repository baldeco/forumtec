<?php

require_once("inc/inc.PalestraCtrl.php");

if (isset($_GET['id_palestra']) && !empty($_GET['id_palestra'])) {

  $id_palestra = (int)$_GET['id_palestra'];
  $a_palestra = buscarPalestra($id_palestra);

  if ($a_palestra == false) die('id da palestra é inválido');

  $smarty->assign('a_palestra', $a_palestra);

} else {
  header('Location: index.php?secao=palestra&modulo=lista');
}
