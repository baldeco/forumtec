<?php

require_once('inc.fileadmin.php');
require_once("inc/inc.PalestrantesOficinaCtrl.php");
require_once("inc/inc.InscricoesOficinaCtrl.php");
require_once("inc/inc.BannerCtrl.php");

function inserirOficina($a_dados) {

  global $conexao;

  $sql = 'INSERT INTO oficina VALUES (
                      NULL,
                      '.$a_dados['id_local'].',
                      "'.$a_dados['nome'].'",
                      "'.$a_dados['descricao'].'",
                      "'.$a_dados['inicio'].'",
                      "'.$a_dados['fim'].'",
                      NULL,
                      NULL,
                      NULL,
                      "'.$a_dados['status'].'")';

  if(executa($sql, $conexao) ==  false){
    die('Erro ao cadastrar a oficina no banco de dados: '.mysql_error());
  }

  //Verifica se foi selecionada alguma imagem de envio
  if(!empty($a_dados['img_divulgar']['name'])){

    //Pega o id da última inserção feita no banco de dados
    $id = lastID($conexao);

    //Formata o nome da imagem para id.extensão
    $a_dados['img_divulgar']['name'] = formataNomeArquivo($id, $a_dados['img_divulgar']);

    //Usa a função de salvarImagens para criar os três formatos de imagens padrões do sistema
    salvarImagens($a_dados['img_divulgar'], DIR_OFICINAS);

    //Inclui a imagem no registro da notícia 
    $sql = 'UPDATE oficina
            SET imagem ="'.$a_dados['img_divulgar']['name'].'"
            WHERE id_oficina = '.$id;

    //Verifica se o update na oficina deu errado
    if(executa($sql, $conexao) == false){

      //Deleta as três imagens criadas 
      deletarImagens($a_dados['img_divulgar']['name'], DIR_OFICINAS);

      die('Erro ao salvar a imagem no banco de dados');
    }

    //Salvando os links entre os palestrantes e a oficina
    inserirPalestrantesOficina($a_dados['palestrantes'], $id);

  }

  //Verifica se foi selecionada algum anexo
  if (!empty($a_dados['anexo']['name'])) {

    //Formata o nome do anexo para id.extensão
    $a_dados['anexo']['name'] = formataNomeArquivo($id, $a_dados['anexo']);

    //Usa a função de salvarArquivo para salvar o anexo no servidor
    salvarArquivo($a_dados['anexo'], DIR_ANEXO_OFICINA);

    //Inclui o anexo no registro da oficina
    $sql = 'UPDATE oficina
            SET anexo = "'.$a_dados['anexo']['name'].'",
                legendaAnexo = "'.$a_dados['legenda_anexo'].'"
            WHERE id_oficina = '.$id;

    //Verifica se o update na oficina deu errado
    if (executa($sql, $conexao) == false) {

      //Deleta o anexo criado
      deletarArquivo($a_dados['anexo']['name'], DIR_ANEXO_OFICINA);

      die('Erro ao salvar o anexo no banco de dados');
    }
  }

}

function alterarOficina($a_dados) {

  global $conexao;

  //Verifica a necessidade de alterar a imagem
  if (!empty($a_dados['img_divulgar']['name'])) {

    //Deletando a imagem atual
    deletarImagens($a_dados['foto_atual'], DIR_OFICINAS);

    //Formata o nome da imagem para id.extensão
    $a_dados['img_divulgar']['name'] = formataNomeArquivo($a_dados['id_oficina'], $a_dados['img_divulgar']);  

    //Usa a função de salvarImagens para criar os três formatos de imagens padrões do sistema
    salvarImagens($a_dados['img_divulgar'], DIR_OFICINAS);
    
  } else {
    $a_dados['img_divulgar']['name'] = $a_dados['foto_atual'];
  }

  //Verifica a necessidade de alterar o anexo
  if (!empty($a_dados['anexo']['name'])) {

    //Deletando o anexo atual
    deletarArquivo($a_dados['anexo_atual'], DIR_ANEXO_OFICINA);

    //Formata o nome do anexo para id.extensão
    $a_dados['anexo']['name'] = formataNomeArquivo($a_dados['id_oficina'], $a_dados['anexo']);

    //Usa a função de salvarArquivo para salvar o novo anexo
    salvarArquivo($a_dados['anexo'], DIR_ANEXO_OFICINA);

  } else {
    $a_dados['anexo']['name'] = $a_dados['anexo_atual'];
  }

  $sql = 'UPDATE oficina SET id_local = '.$a_dados['id_local'].',
                             titulo = "'.$a_dados['nome'].'",
                             descricao = "'.$a_dados['descricao'].'",
                             inicio = "'.$a_dados['inicio'].'",
                             fim = "'.$a_dados['fim'].'",
                             anexo = "'.$a_dados['anexo']['name'].'",
                             legendaAnexo = "'.$a_dados['legenda_anexo'].'",
                             imagem = "'.$a_dados['img_divulgar']['name'].'",
                             status = "'.$a_dados['status'].'" 
                       WHERE id_oficina = '.$a_dados['id_oficina'];

  //Alterando os links entre a oficina e os palestrantes
  deletarPalestrantesOficina($a_dados['id_oficina']);
  inserirPalestrantesOficina($a_dados['palestrantes'], $a_dados['id_oficina']);

  executa($sql, $conexao);

}

function deletarOficina($id_oficina) {

  global $conexao;

  //Buscando a imagem e o anexo da oficina para deletar do servidor
  $sql = "SELECT imagem, anexo 
          FROM oficina 
          WHERE id_oficina = $id_oficina";

  $res = executa($sql, $conexao);
  $oficina = buscar($res)[0];  

  $sql = 'DELETE FROM oficina WHERE id_oficina ='.$id_oficina;

  //Deletando os links entre a oficina e os palestrantes
  deletarPalestrantesOficina($id_oficina);
  
  //Deletando as inscrições da oficina
  deletarInscricoesOficina($id_oficina);

  //Deletando possíveis banners linkados à oficina
  resetarBanner($id_oficina, 'o');

  if(executa($sql, $conexao) ==  false){
    die('Erro ao deletar a oficina no banco de dados: '.mysql_error());
  }

  //Deletando a imagem do servidor
  deletarImagens($oficina['imagem'], DIR_OFICINAS);

  //Deletando o anexo do servidor
  deletarArquivo($oficina['anexo'], DIR_ANEXO_OFICINA);

}

function buscarOficinas($limite='') {

  global $conexao;

  if(!empty($limite) && $limite > 0){
    $limite = 'LIMIT '.$limite;
    
  }else{
    $limite = '';
  }

  $sql = 'SELECT o.*,
                 l.nome AS nome_local,
                 date_format(inicio, "%d/%m/%Y") AS data_format,
                 date_format(inicio, "%H:%i") as hora_inicio_format,
                 date_format(fim, "%H:%i") as hora_fim_format
          FROM oficina AS o
          LEFT JOIN local AS l ON o.id_local = l.id_local
          '.$limite;

  $res = executa($sql, $conexao);
  $a_oficinas = buscar($res);

  for($i=0; $i < sizeof($a_oficinas); $i++){
    $a_oficinas[$i]['palestrantes'] = buscarPalestrantesOficina($a_oficinas[$i]['id_oficina']);
  }

  return $a_oficinas;
    
}

function buscarOficina($id_oficina) {

  global $conexao;

  $sql = 'SELECT o.*,
                 date_format(o.inicio, "%d/%m/%Y") AS data_format,
                 date_format(o.inicio, "%H") AS hora_inicio,
                 date_format(o.inicio, "%i") AS minuto_inicio,
                 date_format(o.fim, "%H") AS hora_fim,
                 date_format(o.fim, "%i") AS minuto_fim
            FROM oficina AS o
           WHERE o.id_oficina = '.$id_oficina;

  $res = executa($sql, $conexao);
  $a_oficina = buscar($res);

  if ($a_oficina != false) {
    return $a_oficina[0];
  }

  return false;

}