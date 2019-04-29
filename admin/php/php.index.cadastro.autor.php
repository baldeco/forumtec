<?php

require_once('inc/inc.AutorCtrl.php');

/**
 * Verifica se o id de algum autor foi enviado para a index, se sim, quer dizer
 * que se deseja fazer a alteração do autor.
 */

$a_autores = buscarAutores();

$acao = 'cadastrar';

if (isset($_GET['id_autor']) and !empty($_GET['id_autor'])) {
  $id_autor = (int)$_GET['id_autor'];

  $a_autor = buscarAutor($id_autor);

  if (!empty($a_autor)) {
    $acao = 'alterar';
    $smarty->assign('a_autor', $a_autor);
  } else {
    die('id do autor inválido');
  }
}

$smarty->assign('a_autores', $a_autores);
$smarty->assign('acao', $acao);