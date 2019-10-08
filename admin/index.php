<?php

require_once('inc/inc.config.php');

if(!isset($user) || !$user->is_logged()){
  header('Location: login.php');
  exit;
}

$secao = (isset($_REQUEST['secao']) && (ereg('^[[:alpha:]]+$', $_REQUEST['secao'])))
    ? $_REQUEST['secao']
    : 'dashboard';
$modulo = (isset($_REQUEST['modulo']) && (ereg('^[[:alpha:]]+$', $_REQUEST['modulo'])))
    ? $_REQUEST['modulo']
    : 'home';
$acao = (isset($_REQUEST['acao']) && (ereg('^[[:alpha:]]+$', $_REQUEST['acao'])))
    ? $_REQUEST['acao']
    : '';

$smarty->assign('secao', $secao);
$smarty->assign('modulo', $modulo);
$smarty->assign('acao', $acao);

$_template = $secao.'_'.$modulo;
$template = 'index.htm';

############################# INICIO PROGRAMA ###################################

switch ($secao) {

  case 'dashboard':
    switch ($modulo) {
      case 'home':
        include_once('php/php.index.dashboard.home.php');
        break;
    }
    break;

  case 'cadastro':
    switch ($modulo) {

      case 'autor':
        include_once('php/php.index.cadastro.autor.php');
        break;

      case 'instituicao':
        include_once('php/php.index.cadastro.instituicao.php');
        break;

      case 'local':
        include_once('php/php.index.cadastro.local.php');
        break;

      case 'noticia':
        include_once('php/php.index.cadastro.noticia.php');
        break;

      case 'oficina':
        include_once('php/php.index.cadastro.oficina.php');
        break;

      case 'palestra':
        include_once('php/php.index.cadastro.palestra.php');
        break;

      case 'palestrante':
        include_once('php/php.index.cadastro.palestrante.php');
        break;

      case 'participante':
        include_once('php/php.index.cadastro.participante.php');
        break;

      case 'patrocinador':
        include_once('php/php.index.cadastro.patrocinador.php');
        break;

      case 'banner':
        include_once('php/php.index.cadastro.banner.php');
        break;

      case 'usuario':
        include_once('php/php.index.cadastro.usuario.php');
        break;
    }
    break;

  case 'relatorio':
    switch($modulo){

      case 'palestra':
        include_once('php/php.index.relatorio.palestra.php');
        break;
      case 'oficina':
        include_once('php/php.index.relatorio.oficina.php');
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
//$smarty->assign('tx',$_tx);
//if($_REQUEST['debug'] != '1') $smarty->debugging = TRUE;
$smarty->display($template);
