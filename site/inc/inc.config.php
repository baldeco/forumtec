<?php

error_reporting(E_STRICT); //E_ALL | E_STRICT | E_ERROR | E_WARNING | E_PARSE

date_default_timezone_set('Brazil/East');

header('Content-Type: text/html; charset=utf-8');

function IniSmarty() {
  global $smarty, $cf;

  if (is_file('smarty/Smarty.class.php')) {
    require_once 'smarty/Smarty.class.php';
  } elseif (is_file('../smarty/Smarty.class.php')) {
    require_once '../smarty/Smarty.class.php';
  }

  $smarty = new Smarty;
  $smarty->debugging = $cf['debug'];
  $smarty->left_delimiter = '<!--{';
  $smarty->right_delimiter = '}-->';
}
