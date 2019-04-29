<?php

session_start();

error_reporting(E_STRICT); //E_ALL | E_STRICT | E_ERROR | E_WARNING | E_PARSE

date_default_timezone_set('Brazil/East');

header('Content-Type: text/html; charset=utf-8');

define('CIPHER', MCRYPT_RIJNDAEL_192);
define('MODE', MCRYPT_MODE_CFB);
define('KEY', 'OxNELuud6qTmgjDlbRVpRFrLBgzaLz5H');
define('IV', 'UvOSochKOykRNQ51qxS0ZNRm');

require_once('inc.dbadmin.php');
require_once('inc.functions.php');

$conexao = criarConexao();

spl_autoload_register(function ($class) {
  $class = strtolower($class);
  $classpath = "classes/class.".$class.".php";
  if (file_exists($classpath)) require_once $classpath;
  $classpath = "../classes/class.".$class.".php";
  if (file_exists($classpath)) require_once $classpath;
  $classpath = "../../classes/class.".$class.".php";
  if (file_exists($classpath)) require_once $classpath;
  $classpath = "../../../classes/class.".$class.".php";
  if (file_exists($classpath)) require_once $classpath;
});

$user = new User($conexao);

if (file_exists('smarty/Smarty.class.php')) require_once 'smarty/Smarty.class.php';
elseif (file_exists('../smarty/Smarty.class.php')) require_once '../smarty/Smarty.class.php';
elseif (file_exists('../../smarty/Smarty.class.php')) require_once '../../smarty/Smarty.class.php';

$smarty = new Smarty;
//$smarty->debugging = $cf['debug'];
$smarty->left_delimiter = '<!--{';
$smarty->right_delimiter = '}-->';
