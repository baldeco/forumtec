<?php

require_once('inc/inc.NoticiaCtrl.php');
require_once('inc/inc.AutorCtrl.php');

$acao = 'cadastrar';

if (isset($_GET['id_noticia']) && !empty($_GET['id_noticia'])) {
  $id_noticia = (int)$_GET['id_noticia'];
  $a_noticia = buscarNoticia($id_noticia);
  if ($a_noticia == false) die('ID da palestra inválido');
  $acao = 'alterar';
  $smarty->assign('a_noticia', $a_noticia);
}

$a_noticias = buscarNoticias();
$a_autores = buscarAutores();

$smarty->assign("a_noticias", $a_noticias);
$smarty->assign("a_autores", $a_autores);