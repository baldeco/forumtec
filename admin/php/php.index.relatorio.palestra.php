<?php

require_once('inc/inc.ParticipanteCtrl.php');
require_once('inc/inc.InstituicaoCtrl.php');
require_once('inc/inc.LocalCtrl.php');

$acao = 'relatorio';

if (isset($_GET['id_participante']) && !empty($_GET['id_participante'])) {
  $id_participante = (int)$_GET['id_participante'];
  $a_participante = buscarParticipante($id_participante);
  if ($a_participante == false) die('id do participante é inválido');
  $acao = 'alterar';
  $smarty->assign('a_participante', $a_participante);
}

$a_participantes = buscarParticipantes();
$a_instituicoes = buscarInstituicoes();
$a_locais = buscarLocais();

$smarty->assign('a_participantes', $a_participantes);
$smarty->assign('a_instituicoes', $a_instituicoes);
$smarty->assign('a_locais', $a_locais);
$smarty->assign('acao', $acao);

