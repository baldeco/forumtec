<?php

	function buscarPalestrantesPalestra($id_palestra) {

		global $conexao;

		$sql = 'SELECT p.nome as nome_palestrante
				FROM palestrante_palestra as pp
				RIGHT JOIN palestrante as p
				ON pp.id_palestrante = p.id_palestrante
				WHERE pp.id_palestra = '.$id_palestra;

		$rs = executa($sql, $conexao);
		$a_palestrantes = buscar($rs);

		if($a_palestrantes != false){
			return $a_palestrantes;

		}

		return null;
	
	}

?>