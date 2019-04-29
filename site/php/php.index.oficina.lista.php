<?php

require_once('inc/inc.OficinaCtrl.php');

$a_oficinas = buscarOficinas();

$smarty->assign("a_oficinas", $a_oficinas);