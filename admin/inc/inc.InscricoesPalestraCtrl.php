<?php

	function buscarParticipantesPalestra($id_palestra){

		global $conexao;

		$sql = 'SELECT  participante.nome,
						participante.email,
						participante.telefone,
		                date_format(participante_palestra.entrada, "%H:%i") AS entrada_participante_format,
						date_format(participante_palestra.saida, "%H:%i") AS saida_participante_format
				FROM participante_palestra
				INNER JOIN participante
				ON participante_palestra.id_participante = participante.id_participante
				INNER JOIN palestra
				ON participante_palestra.id_palestra = palestra.id_palestra
				WHERE participante_palestra.id_palestra = '.$id_palestra;

		$rs = executa($sql, $conexao);
		$a_participantes_palestra = buscar($rs);

		return $a_participantes_palestra;

	}

	function deletarInscricoesPalestra($id_palestra){

		global $conexao;

		$sql = 'DELETE FROM participante_palestra
				WHERE id_palestra = '.$id_palestra;

		executa($sql , $conexao);

	}

	function deletarParticipantePalestra($id_participante){

		global $conexao;

		$sql = 'DELETE FROM participante_palestra
				WHERE id_participante = '.$id_participante;

		executa($sql , $conexao);

	}


?>