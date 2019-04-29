<?php

	require_once('inc/inc.BannerCtrl.php');

	switch($_POST['tipo']){

		case 'principal':{

			$a_dados = array();

			$a_dados['banner_1'] = empty($_POST['banner_slide_1']) ? '/' : $_POST['banner_slide_1'];
			$a_dados['banner_2'] = empty($_POST['banner_slide_2']) ? '/' : $_POST['banner_slide_2'];
			$a_dados['banner_3'] = empty($_POST['banner_slide_3']) ? '/' : $_POST['banner_slide_3'];
			alterarBannerPrincipal($a_dados);
			break;

		}

		case 'secundario_1':{

			$banner = empty($_POST['dados_selecionados']) ? '/' : $_POST['dados_selecionados'];
			alterarBannerSecundario1($banner);
			break;

		}

		case 'secundario_2':{

			$banner = empty($_POST['dados_selecionados']) ? '/' : $_POST['dados_selecionados'];
			alterarBannerSecundario2($banner);
			break;

		}

		default:
			die('Seção inválida');

	}

?>