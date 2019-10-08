<?php

require_once('inc/inc.InscricoesPalestraCtrl.php');
require_once('inc/inc.PalestraCtrl.php');

$acao = 'relatorio';

if (isset($_GET['data']) && !empty($_GET['data'])) 
{
	
    $a_data = $_GET['data'];
	
	$a_participantes = buscarParticipantesEvento($a_data);
}
else
{
	$mensagem_tabela = "Não a realizada a filtragem";
	$a_participantes = 1; // Valor qualquer para não deixar a variável nula.
}
    $smarty->assign('mensagem_tabela', $mensagem_tabela);
	$smarty->assign('a_participantes', $a_participantes);

