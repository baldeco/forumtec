<?php

require_once('inc/inc.PalestraCtrl.php');

$a_palestras = buscarPalestras();

$smarty->assign("a_palestras", $a_palestras);