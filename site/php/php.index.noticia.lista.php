<?php

require_once('inc/inc.NoticiaCtrl.php');

$a_noticias = buscarNoticias();

$smarty->assign("a_noticias", $a_noticias);