<?php

require_once('inc/inc.config.php');

$secao = $_REQUEST['secao'] ? $_REQUEST['secao'] : false;
$modulo = $_REQUEST['modulo'] ? $_REQUEST['modulo'] : false;
$acao = $_REQUEST['acao'] ? $_REQUEST['acao'] : false;

switch ($secao) {
  case 'cadastro':
    switch ($modulo) {
      case 'autor':
        include_once('php/php.acao.cadastro.autor.php');
        break;

      case 'instituicao':
        include_once('php/php.acao.cadastro.instituicao.php');
        break;

      case 'local':
        include_once('php/php.acao.cadastro.local.php');
        break;

      case 'noticia':
        include_once('php/php.acao.cadastro.noticia.php');
        break;

      case 'oficina':
        include_once('php/php.acao.cadastro.oficina.php');
        break;

      case 'palestra':
        include_once('php/php.acao.cadastro.palestra.php');
        break;

      case 'palestrante':
        include_once('php/php.acao.cadastro.palestrante.php');
        break;

      case 'participante':
        include_once('php/php.acao.cadastro.participante.php');
        break;

      case 'patrocinador':
        include_once('php/php.acao.cadastro.patrocinador.php');
        break;

      case 'banner':
        include_once('php/php.acao.cadastro.banner.php');
        break;

      case 'usuario':
        include_once('php/php.acao.cadastro.usuario.php');
        break;
    }
    header('Location: index.php?secao='.$secao.'&modulo='.$modulo.$complemento);
    die();
    break;

  case 'relatorio':
    switch ($modulo) {
      case 'palestra':
        include_once('php/php.acao.relatorio.palestra.php');
        break;
    }
    header('Location: index.php?secao='.$secao.'&modulo='.$modulo.$complemento);
    die();
    break;

  default:
    header('Location: ../index.php');
    break;
}