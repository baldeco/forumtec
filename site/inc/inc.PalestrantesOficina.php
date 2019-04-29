<?php

	function buscarPalestrantesOficina($id_oficina) {

		global $conexao;

		$sql = 'SELECT p.nome as nome_palestrante
				FROM palestrante_oficina as po
				RIGHT JOIN palestrante as p
				ON po.id_palestrante = p.id_palestrante
				WHERE po.id_oficina = '.$id_oficina;

		$rs = executa($sql, $conexao);
		$a_palestrantes = buscar($rs);

		if($a_palestrantes != false){
			return $a_palestrantes;

		}

		return null;
	
	}


?>