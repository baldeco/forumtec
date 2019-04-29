<?php

	function deletarInscricoesOficina($id_oficina){

		global $conexao;

		$sql = 'DELETE FROM participante_oficina
				WHERE id_oficina = '.$id_oficina;

		executa($sql , $conexao);

	}

	function deletarParticipanteOficina($id_participante){

		global $conexao;

		$sql = 'DELETE FROM participante_oficina
				WHERE id_participante = '.$id_participante;

		executa($sql , $conexao);

	}


?>