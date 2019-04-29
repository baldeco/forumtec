<?php

	require_once("inc/inc.OficinaCtrl.php");

	if(isset($_GET['id_oficina']) && !empty($_GET['id_oficina'])){

		$id_oficina = (int)$_GET['id_oficina'];
		$a_oficina = buscarOficina($id_oficina);

		if($a_oficina == false) die('id da oficina é inválido');

		$smarty->assign('a_oficina', $a_oficina);
		
	}else{
		header('Location: index.php?secao=oficina&modulo=lista');
	}

?>