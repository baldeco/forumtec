<?php

require_once('inc/inc.UsuarioCtrl.php');

$acao = 'cadastrar';

if (isset($_GET['id_usuario']) && !empty($_GET['id_usuario'])) {
  $id_usuario = (int)$_GET['id_usuario'];

  $a_usuario = buscarUsuario($id_usuario);

  if (!empty($a_usuario)) {
    $acao = 'alterar';
    $smarty->assign('a_usuario', $a_usuario);
  } else {
    die('id do usuário inválido');
  }
}

$a_usuarios = buscarUsuarios();

$smarty->assign('a_usuarios', $a_usuarios);
$smarty->assign('acao', $acao);