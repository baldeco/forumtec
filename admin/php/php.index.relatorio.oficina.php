<?php
require_once("inc/inc.InscricoesOficinaCtrl.php");

$acao = 'relatorio';

$acao = 'relatorio';

if (isset($_GET['data']) && !empty($_GET['data'])) 
{
	
    $a_data = $_GET['data'];
	
	$a_participantes = buscarParticipantesEvento($a_data);

	/*
	if ($a_participantes != NULL) 
	{
	    print_r($a_participantes);
	    //exit();
	}
	echo "vazio";
	exit();
	*/
	
}

else
{
	$mensagem_tabela = "Não realizada a filtragem";
	$a_participantes = 1; // Valor qualquer para não deixar a variável nula.
}

    $smarty->assign('mensagem_tabela', $mensagem_tabela);
	$smarty->assign('a_participantes', $a_participantes);
	$smarty->assign('acao', $acao);
