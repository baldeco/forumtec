<?php

require_once("inc/inc.PalestraCtrl.php");

if (isset($_GET['token']) && !empty($_GET['token'])) {

  $token = $_GET['token'];

  $a_palestra = buscarPalestraToken($token);

  if ($a_palestra == false) die('Palestra não identificada!');

  $smarty->assign('a_palestra', $a_palestra);
} else {
  exit('Palestra não identificada!');
}
