<?php

	//Diretórios padrões das imagens
	define("DIR_PALESTRAS","../img/palestras/");
	define("DIR_OFICINAS","../img/oficinas/");
	define("DIR_NOTICIAS","../img/noticias/");
	define("DIR_PATROCINADORES","../img/patrocinadores/");
	define("DIR_GERAL","../img/geral/");

	//Diretórios padrões dos anexos
	define("DIR_ANEXO_PALESTRA", "../anexos/palestras/");
	define("DIR_ANEXO_OFICINA", "../anexos/oficinas/");

	//Array associativo com os tamanhos das imagens (definir como um array constante (PHP 7) posteriormente)
	$TAMANHOS = array('sm' => array('largura' => 270, 'altura' => 203),
					  'md' => array('largura' => 390, 'altura' => 293), 
					  'bg' => array('largura' => 750, 'altura' => 471));


	//Função que retorna uma matriz associativa com os diretórios das imagens de um determinado registro
	function criarNomeImagens($nome_imagem, $pasta){

		global $TAMANHOS;

		if(empty($nome_imagem)){
			return null;
		}

		$nomesImagens = array();

		//Percorre o array associativo de tamanhos padrões das imagens
		foreach ($TAMANHOS as $prefixo => $tamanho) {
			
			//Criando o nome da imagem

			//Armazenando o id na primeira posição
			$nomeFoto[0] = explode('.', $nome_imagem)[0];

			//Armazenando: 	id_prefixo do tamamnho.extensão
			$nomeFoto[1] = $prefixo.'.'.explode('.', $nome_imagem)[1];

			//Criando a string completa
			$nomeFormatado = $pasta;
			$nomeFormatado .= implode('_', $nomeFoto);

			$nomesImagens[$prefixo] = $nomeFormatado;

		}

		return $nomesImagens;

	}

	//Função que retorna o diretório de um arquivo
	function criarNomeArquivo($nome_arquivo, $pasta){

		if(empty($nome_arquivo)){
			return null;
		}

		return $pasta.$nome_arquivo;

	}

?>