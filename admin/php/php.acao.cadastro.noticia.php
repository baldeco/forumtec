<?php

require_once("inc/inc.NoticiaCtrl.php");

switch ($acao) {
  case 'cadastrar':
    $a_noticia = array();
    $a_noticia['titulo'] = $_POST['titulo'];
    $a_noticia['id_autor'] = (int)$_POST['id_autor'];
    $a_noticia['img_divulgar'] = $_FILES['img_divulgar'];
    $a_noticia['status'] = $_POST['status'];
    $a_noticia['texto'] = addslashes($_POST['texto']);
    inserirNoticia($a_noticia);
    break;

  case 'alterar':
    $a_noticia = array();
    $a_noticia['id_noticia'] = (int)$_POST['id_noticia'];
    $a_noticia['titulo'] = $_POST['titulo'];
    $a_noticia['id_autor'] = (int)$_POST['id_autor'];
    $a_noticia['img_divulgar'] = $_FILES['img_divulgar'];
    $a_noticia['status'] = $_POST['status'];
    $a_noticia['texto'] = addslashes($_POST['texto']);
    $a_noticia['foto_atual'] = $_POST['f_foto_atual'];

    alterarNoticia($a_noticia);
    break;

  case 'deletar':
    $id_noticia = (int)$_GET['id_noticia'];
    excluirNoticia($id_noticia);
    break;

  default:
    die('Seção inválida');
}