<?php

	function deletarInscricoesOficina($id_oficina)
	{

		global $conexao;

		$sql = 'DELETE FROM participante_oficina
				WHERE id_oficina = '.$id_oficina;

		executa($sql , $conexao);

	}

	function deletarParticipanteOficina($id_participante)
	{

		global $conexao;

		$sql = 'DELETE FROM participante_oficina
				WHERE id_participante = '.$id_participante;

		executa($sql , $conexao);

	}

	function buscarParticipantesEvento($data)
	{
		global $conexao;

	    $sql = 'SELECT  participante_oficina.id_participante_oficina,
	        		    participante.nome,
	        		    participante.cpf,
						participante.email,
						participante.telefone,
					    instituicao.nome AS instituicao
				FROM oficina
				INNER JOIN participante_oficina
				ON oficina.id_oficina = participante_oficina.id_oficina
				INNER JOIN participante
				ON participante_oficina.id_participante = participante.id_participante
				INNER JOIN instituicao
				ON participante.id_instituicao = instituicao.id_instituicao
				WHERE oficina.inicio LIKE "'.$data.'%"';

		$rs = executa($sql, $conexao);

		$a_participantes_oficina = buscar($rs);

		return $a_participantes_oficina;
	}
?>