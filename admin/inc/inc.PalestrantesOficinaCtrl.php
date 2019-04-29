<?php

	function inserirPalestrantesOficina($palestrantes, $id_oficina){

		global $conexao;

		if(empty($palestrantes) || empty($id_oficina)){
			return false;
		}

		foreach ($palestrantes as $palestrante) {

			$sql = 'INSERT INTO palestrante_oficina
					VALUES(DEFAULT,
					'.$palestrante.',
					'.$id_oficina.')';

			executa($sql, $conexao);

		}

	}

	function deletarPalestrantesOficina($id_oficina){

		global $conexao;

		$sql = 'DELETE FROM palestrante_oficina
				WHERE id_oficina = '.$id_oficina;

		executa($sql, $conexao);

	}

	function vincularPalestrantesOficina($a_palestrantes, $id_oficina) {

		global $conexao;

		$sql = 'SELECT po.id_palestrante, po.id_oficina
				FROM palestrante_oficina as po
				WHERE po.id_oficina = '.$id_oficina;

		$rs = executa($sql, $conexao);
		$a_palestrantes_oficina = buscar($rs);

		for ($i=0; $i < sizeof($a_palestrantes); $i++) {
			foreach ($a_palestrantes_oficina as $link_oficina) {

				if($a_palestrantes[$i]['id_palestrante'] == $link_oficina['id_palestrante']
					&& $link_oficina['id_oficina'] == $id_oficina){

					$a_palestrantes[$i]['ativo'] = 1;
				}
			}
		}

		return $a_palestrantes;

	}

	function buscarPalestrantesOficina($id_oficina){

		global $conexao;

		if(empty($id_oficina)){
			return false;
		}


		$sql = 'SELECT p.nome as nome_palestrante
				FROM palestrante_oficina as pp
				INNER JOIN palestrante as p
				ON pp.id_palestrante = p.id_palestrante
				WHERE pp.id_oficina = '.$id_oficina;

		$rs = executa($sql, $conexao);

		$a_palestrantes_oficina = buscar($rs);

		return $a_palestrantes_oficina;

	}

?>