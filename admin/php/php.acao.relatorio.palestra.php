<?php

require_once('inc/inc.PalestraCtrl.php');
require_once('inc/inc.ParticipanteCtrl.php');
require_once('inc/inc.functions.php');



switch ($acao) {
	case 'relatorio':

		$data = reverteData($_POST['f_data']);

		$palestras = buscarPalestrasDoDia($limite,$data);

		//print_r($palestras);
		//exit;

		//$limite = '';
		
		//buscarParticipantesDoDia($limite,$palestras);

		
		// Filtrar os participantes relacionados com as palestras do dia

		
		break;
	
	default:
		die('Seção inválida');
		break;
}