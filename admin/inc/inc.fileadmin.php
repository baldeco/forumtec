<?php

	require_once('Canvas.php');

	//Diretórios padrões para salvamento das imagens
	define("DIR_PALESTRAS","../img/palestras/");
	define("DIR_OFICINAS","../img/oficinas/");
	define("DIR_NOTICIAS","../img/noticias/");
	define("DIR_PATROCINADORES","../img/patrocinadores/");

	//Diretórios padrões para salvamento de anexos
	define("DIR_ANEXO_PALESTRA", "../anexos/palestras/");
	define("DIR_ANEXO_OFICINA", "../anexos/oficinas/");

	//Array associativo com os tamanhos das imagens (definir como um array constante (PHP 7) posteriormente)
	$TAMANHOS = array('sm' => array('largura' => 270, 'altura' => 203),
					  'md' => array('largura' => 390, 'altura' => 293), 
					  'bg' => array('largura' => 750, 'altura' => 471));

	//Função responsável por salvar uma imagem redimensionada
	function salvarImagem($imagem ,$largura, $altura, $diretorio){

		//Verifica se a imagem é válida
		if(!verificaTipo($imagem)){
			die('Tipo de arquivo inválido');
		}

		//Criando uma instância do Canvas
		$canvas = Canvas::Instance();

		/*
			
			1 - Verifica se a imagem é png para possível preenchimento de fundo
			2 - Carregando a imagem de sua pasta temporária
			3 - Defini a cor de fundo (será usuada em caso de necessidade de preenchimento de fundo)
			4 - Redimensionando a imagem com a largura e altura recebida; preenche o fundo caso for preciso
			5 - Gravando a imagem na pasta desejada

		*/

		$preenchimento = '';

		if(explode('/', $imagem['type'])[1] == 'png'){
			$preenchimento = 'preenchimento';
		}

		$canvas->carrega($imagem['tmp_name'])
			   ->hexa('#FFFFFF')
			   ->redimensiona($largura, $altura, $preenchimento)
			   ->grava($diretorio.$imagem['name']);

	}

	//Função responsável por salvar três imagens com tamanhos padrões fornecidos pelo sistema
	function salvarImagens($imagem, $diretorio){

		global $TAMANHOS;

		//Verifica se a imagem é válida
		if(!verificaTipo($imagem)){
			die('Tipo de arquivo inválido');
		}

		//Criando uma instância do Canvas
		$canvas = Canvas::Instance();

		//Percorre o array associativo de tamanhos padrões das imagens
		foreach ($TAMANHOS as $prefixo => $tamanho) {
			
			//Criando o nome de salvamento da imagem

			//Armazenando o id na primeira posição
			$nomeFoto[0] = explode('.', $imagem['name'])[0];

			//Armazenando: 	id _ prefixo do tamamnho . extensão
			$nomeFoto[1] = $prefixo.'.'.explode('.', $imagem['name'])[1];
			
			//Criando a string completa
			$nomeFormatado = implode('_', $nomeFoto);

			/*

				1 - Carregando a imagem de sua pasta temporária
				2 - Redimensionando a imagem com a largura e altura recebida
				3 - Gravando a imagem na pasta desejada

			*/
			$canvas->carrega($imagem['tmp_name'])
				   ->redimensiona($tamanho['largura'], $tamanho['altura'])
				   ->grava($diretorio.$nomeFormatado);

		}

	}

	//Função responsável por salvar um anexo no servidor
	function salvarArquivo($arquivo, $diretorio){
		return move_uploaded_file($arquivo['tmp_name'], $diretorio.$arquivo['name']);
	}

	//Função que verifica se o tipo do arquivo é válido
	function verificaTipo($arquivo){

		if(explode('/', $arquivo['type'])[0] != 'image'){
			return false;
		}

		return true;
	}

	//Função que deleta um arquivo no servidor
	function deletarArquivo($nome_arquivo, $pasta){
		return unlink($pasta.$nome_arquivo);
	}

	//Função que deleta as imagens padrões no servidor
	function deletarImagens($nome_imagem, $pasta){

		global $TAMANHOS;

		//Variável que verifica se todas as imagens foram apagadas
		$verifica = 0;

		foreach ($TAMANHOS as $prefixo => $tamanho) {

			//Criando o nome da imagem

			//Armazenando o id na primeira posição
			$nomeFoto[0] = explode('.', $nome_imagem)[0];

			//Armazenando: 	id_prefixo do tamamnho.extensão
			$nomeFoto[1] = $prefixo.'.'.explode('.', $nome_imagem)[1];
			
			//Criando a string completa
			$nomeFormatado = implode('_', $nomeFoto);

			if(!unlink($pasta.$nomeFormatado)){
				$verifica++;
			}
		}

		if($verifica > 0){
			return false;
		}

		return true;

	}

	function formataNomeArquivo($novoNome, $arquivo){

		$partes_nome_arquivo = explode('.',$arquivo['name']);
		$index_extensao = sizeof($partes_nome_arquivo) - 1;

		return $novoNome.'.'.$partes_nome_arquivo[$index_extensao];
	}

?>