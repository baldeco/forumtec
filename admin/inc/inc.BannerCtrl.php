<?php

	function alterarBannerPrincipal($banners){

		global $conexao;

		$cont = 1;

		foreach ($banners as $banner) {

			$sql = 'UPDATE banner
					SET id_vinculo = "'.explode('/', $banner)[0].'",
						tipo_vinculo = "'.explode('/', $banner)[1].'"
					WHERE id_banner = '.$cont;

			executa($sql, $conexao);
			$cont++;	
		}
	}

	function alterarBannerSecundario1($banner){

		global $conexao;

		$sql = 'UPDATE banner
				SET id_vinculo = "'.explode('/', $banner)[0].'",
					tipo_vinculo = "'.explode('/', $banner)[1].'"
				WHERE id_banner = 4';

		executa($sql, $conexao);

	}

	function alterarBannerSecundario2($banner){

		global $conexao;

		$sql = 'UPDATE banner
				SET id_vinculo = "'.explode('/', $banner)[0].'",
					tipo_vinculo = "'.explode('/', $banner)[1].'"
				WHERE id_banner = 5';

		executa($sql, $conexao);

	}

	function buscarBanners(){

		global $conexao;

		$sql = 'SELECT id_vinculo, tipo_vinculo
				FROM banner';

		$rs = executa($sql, $conexao);
		$a_banners = buscar($rs);

		for($i=0; $i < sizeof($a_banners); $i++){
			$a_banners[$i]['valor'] = $a_banners[$i]['id_vinculo'].'/'.$a_banners[$i]['tipo_vinculo'];
		}

		return $a_banners;

	}

	function resetarBanner($id_vinculo, $tipo_vinculo){

		global $conexao;

		$sql = 'UPDATE banner
				SET id_vinculo = 0,
					tipo_vinculo = null
				WHERE id_vinculo = '.$id_vinculo.' && tipo_vinculo = "'.$tipo_vinculo.'"';

		executa($sql, $conexao);

	}

?>