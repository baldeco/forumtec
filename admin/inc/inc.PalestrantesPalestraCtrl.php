<?php

	function inserirPalestrantesPalestra($palestrantes, $id_palestra){

		global $conexao;

		if(empty($palestrantes) || empty($id_palestra)){
			return false;
		}

		foreach ($palestrantes as $palestrante) {

			$sql = 'INSERT INTO palestrante_palestra
					VALUES(DEFAULT,
						   '.$palestrante.',
						   '.$id_palestra.')';

			executa($sql, $conexao);

		}

	}

	function deletarPalestrantesPalestra($id_palestra){

		global $conexao;

		$sql = 'DELETE FROM palestrante_palestra
				WHERE id_palestra = '.$id_palestra;

		executa($sql, $conexao);

	}

	function vincularPalestrantesPalestra($a_palestrantes, $id_palestra) {

		global $conexao;

		$sql = 'SELECT pp.id_palestrante, pp.id_palestra
				FROM palestrante_palestra as pp
				WHERE pp.id_palestra = '.$id_palestra;

		$rs = executa($sql, $conexao);
		
		$a_palestrantes_palestra = buscar($rs);

		for ($i=0; $i < sizeof($a_palestrantes); $i++) {
			foreach ($a_palestrantes_palestra as $link_palestra) {

				if($a_palestrantes[$i]['id_palestrante'] == $link_palestra['id_palestrante']
					&& $link_palestra['id_palestra'] == $id_palestra){

					$a_palestrantes[$i]['ativo'] = 1;
				}

			}
		}

		return $a_palestrantes;

	}

	function buscarPalestrantesPalestra($id_palestra){

		global $conexao;

		if(empty($id_palestra)){
			return false;
		}


		$sql = 'SELECT p.nome as nome_palestrante
				FROM palestrante_palestra as pp
				INNER JOIN palestrante as p
				ON pp.id_palestrante = p.id_palestrante
				WHERE pp.id_palestra = '.$id_palestra;

		$rs = executa($sql, $conexao);

		$a_palestrantes_palestra = buscar($rs);

		return $a_palestrantes_palestra;


	}

?>