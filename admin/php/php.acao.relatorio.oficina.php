<?php

require_once('inc/inc.functions.php');

switch ($acao) {
	case 'relatorio':
		$data = reverteData($_POST['f_data']);
		break;
	
	default:
		die('Seção inválida');
		break;
}