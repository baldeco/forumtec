<?php

require_once("inc/inc.InstituicaoCtrl.php");

$acao = 'cadastrar';

if (isset($_GET['id_instituicao']) && !empty($_GET['id_instituicao'])) {
  $id_instituicao = (int)$_GET['id_instituicao'];
  $a_instituicao = buscarInstituicao($id_instituicao);
  if ($a_instituicao == false) die('Id da instituição é inválido');
  $acao = 'alterar';
  $smarty->assign('a_instituicao', $a_instituicao);
}

$a_instituicoes = buscarInstituicoes();

$smarty->assign('a_instituicoes', $a_instituicoes);
$smarty->assign('acao', $acao);