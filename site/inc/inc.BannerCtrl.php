<?php

	function buscarBanners(){

		global $conexao;

		$sql = 'SELECT id_vinculo, tipo_vinculo
				FROM banner';

		$rs = executa($sql, $conexao);
		$a_banners = buscar($rs);

		return buscarConteudoBanners($a_banners);

	}

	function buscarConteudoBanners($a_banners){

		global $conexao;

		for ($i=0; $i < sizeof($a_banners); $i++) {
			
			$tipo = $a_banners[$i]['tipo_vinculo'];

			switch($tipo){

				case 'n':{

					$a_banners[$i] = buscarNoticia($a_banners[$i]['id_vinculo']);
					$a_banners[$i]['link'] = 'index.php?secao=noticia&modulo=detalhes&id_noticia='.$a_banners[$i]['id_noticia'];
					$a_banners[$i]['tipo'] = 'noticia';
					break;

				}

				case 'p':{

					$a_banners[$i] = buscarPalestra($a_banners[$i]['id_vinculo']);
					$a_banners[$i]['link'] = 'index.php?secao=palestra&modulo=detalhes&id_palestra='.$a_banners[$i]['id_palestra'];
					$a_banners[$i]['tipo'] = 'palestra';
					break;
				
				}

				case 'o':{

					$a_banners[$i] = buscarOficina($a_banners[$i]['id_vinculo']);
					$a_banners[$i]['link'] = 'index.php?secao=oficina&modulo=detalhes&id_oficina='.$a_banners[$i]['id_oficina'];
					$a_banners[$i]['tipo'] = 'oficina';
					break;
				
				}

				default:
					$a_banners[$i] = null;

			}
		}

		return $a_banners;

	}

?>