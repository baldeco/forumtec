<?php

require_once('inc/inc.config.php');
require_once('../admin/inc/inc.dbadmin.php');
require_once("inc/inc.fileadmin.php");

date_default_timezone_set('America/Sao_Paulo');

session_start();

IniSmarty();

// ini_set('display_errors',1);
// ini_set('display_startup_erros',1);
// error_reporting(E_ALL);

$secao = (isset($_REQUEST['secao']) && (ereg('^[[:alpha:]]+$', $_REQUEST['secao'])))
    ? $_REQUEST['secao']
    : 'dashboard';
$modulo = (isset($_REQUEST['modulo']) && (ereg('^[[:alpha:]]+$', $_REQUEST['modulo'])))
    ? $_REQUEST['modulo']
    : 'home';
$acao = (isset($_REQUEST['acao']) && (ereg('^[[:alpha:]]+$', $_REQUEST['acao'])))
    ? $_REQUEST['acao']
    : '';

$conexao = criarConexao();

$smarty->assign('secao', $secao);
$smarty->assign('modulo', $modulo);
$smarty->assign('acao', $acao);

$_template = $secao.'_'.$modulo;

$template = 'index.htm';

############################# INICIO PROGRAMA ###################################

switch ($secao) {
  
  case 'dashboard':
    include_once('php/php.index.menu.lateral.php');
    switch ($modulo) {
      case 'home':
        include_once('php/php.index.dashboard.home.php');
        break;
    }
    break;

  case 'noticia':
    include_once('php/php.index.menu.lateral.php');
    switch ($modulo) {
      case 'lista':
        include_once('php/php.index.noticia.lista.php');
        break;

      case 'detalhes':
        include_once('php/php.index.noticia.detalhes.php');
        break;
    }
    break;

  case 'palestra':
    include_once('php/php.index.menu.lateral.php');
    switch ($modulo) {
      case 'lista':
        include_once('php/php.index.palestra.lista.php');
        break;

      case 'detalhes':
        include_once('php/php.index.palestra.detalhes.php');
        break;

      case 'checkin':
        include_once('php/php.index.palestra.checkin.php');
        break;
    }
    break;

  case 'oficina':
    include_once('php/php.index.menu.lateral.php');
    switch ($modulo) {
      case 'lista':
        include_once('php/php.index.oficina.lista.php');
        break;

      case 'detalhes':
        include_once('php/php.index.oficina.detalhes.php');
        break;
    }
    break;

  case 'inscricao':
    switch ($modulo) {
      case 'palestra':
        include_once('php/php.index.palestra.inscricao.php');
        break;

      case 'dia':
        include_once('php/php.index.palestra.inscricao.php');
        break;

      case 'oficina':
        include_once('php/php.index.oficina.inscricao.php');
        break;
    }
    break;


}

############################# FIM PROGRAMA ###################################

## VERIFICA SE O TEMPLATE DO CONTEUDO EXISTE
$_template .= '.htm';
if (!$smarty->template_exists(strtolower($_template))) {
  $smarty->assign('template_x', $_template);
  $_template = false;
}

## ENVIA VARIAVEIS PARA O TEMPLATE
$smarty->assign('secao', $secao);
$smarty->assign('modulo', $modulo);
$smarty->assign('acao', $acao);
$smarty->assign('template', $_template);
//$smarty->assign('tx', $_tx);
//if($_REQUEST['debug'] != '1') $smarty->debugging = TRUE;
$smarty->display($template);