<?php

	require_once("inc/inc.NoticiaCtrl.php");

	if(isset($_GET['id_noticia']) && !empty($_GET['id_noticia'])){

		$id_noticia = (int)$_GET['id_noticia'];
		$a_noticia = buscarNoticia($id_noticia);

		if($a_noticia == false) die('id da notícia é inválido');

		$smarty->assign('a_noticia', $a_noticia);
	
	}else{
		header('Location: index.php?secao=noticia&modulo=lista');
	}

?>