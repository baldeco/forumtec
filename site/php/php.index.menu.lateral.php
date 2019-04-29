<?php
	
	require_once("inc/inc.PalestraCtrl.php");
	require_once("inc/inc.patrocinadorCtrl.php");
	require_once("inc/inc.OficinaCtrl.php");

	$a_proximas_palestras = buscarProximasPalestras(5);
	$a_proximas_oficinas = buscarProximasOficinas(5);
	$a_patrocinadores = buscarPatrocinadores();

	$smarty->assign('a_proximas_palestras', $a_proximas_palestras);
	$smarty->assign('a_proximas_oficinas', $a_proximas_oficinas);
	$smarty->assign('a_patrocinadores', $a_patrocinadores);

?>