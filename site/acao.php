<?php

require_once('inc/inc.config.php');
require_once('inc/inc.functions.php');
require_once('inc/inc.dbadmin.php');

date_default_timezone_set('America/Sao_Paulo');

session_start();

IniSmarty();

$secao = (isset($_REQUEST['secao']) && !empty($_REQUEST['secao'])) ? $_REQUEST['secao'] : false;
$modulo = (isset($_REQUEST['modulo']) && !empty($_REQUEST['modulo'])) ? $_REQUEST['modulo'] : false;
$acao = (isset($_REQUEST['acao']) && !empty($_REQUEST['acao'])) ? $_REQUEST['acao'] : false;

$conexao = criarConexao();

switch ($secao) {

  case 'palestra':
    switch ($modulo) {
      case 'checkin':
        include_once('php/php.acao.palestra.checkin.php');
        break;
    }
    break;

  case 'inscricao':
    switch ($modulo) {
      case 'participante':
        include_once('php/php.acao.inscricao.participante.php');
        break;
    }
    break;

  default:
    header('Location: ../index.php');

}

header('Location: index.php?secao='.$secao.'&modulo='.$modulo.$complemento);
exit();
