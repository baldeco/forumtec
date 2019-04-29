<?php

	require_once("inc/inc.NoticiaCtrl.php");
	require_once("inc/inc.PalestraCtrl.php");
	require_once("inc/inc.OficinaCtrl.php");
	require_once("inc/inc.BannerCtrl.php");

	$a_noticias = buscarNoticias(6);
	$a_palestras = buscarPalestras(4);
	$a_oficinas = buscarOficinas(4);
	$a_banners = buscarBanners();

	$smarty->assign('a_noticias', $a_noticias);
	$smarty->assign('a_palestras', $a_palestras);
	$smarty->assign('a_oficinas', $a_oficinas);
	$smarty->assign('a_banners', $a_banners);


?>

