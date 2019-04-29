<?php

	require_once('inc/inc.NoticiaCtrl.php');
	require_once('inc/inc.PalestraCtrl.php');
	require_once('inc/inc.OficinasCtrl.php');
	require_once('inc/inc.BannerCtrl.php');

	$a_noticias = buscarNoticias();
	$a_palestras = buscarPalestras();
	$a_oficinas = buscarOficinas();
	$a_banners = buscarBanners();

	$smarty->assign('a_noticias', $a_noticias);
	$smarty->assign('a_palestras', $a_palestras);
	$smarty->assign('a_oficinas', $a_oficinas);
	$smarty->assign('a_banners', $a_banners);

?>