<?php

require_once('inc.fileadmin.php');

function inserirPatrocinador($a_form) {

  global $conexao;

  $query = 'INSERT INTO patrocinador VALUES (
                        NULL,
                        "'.$a_form['nome'].'",
                        "'.$a_form['email'].'",
                        "'.$a_form['cnpj'].'",
                        "'.$a_form['tipo'].'",
                        "'.$a_form['logo']['name'].'",
                        "'.$a_form['status'].'")';

  if(executa($query, $conexao) ==  false){
    die('Erro ao cadastrar o patrocinador no banco de dados: '.mysql_error());
  }

  //Verifica se foi selecionada algum logo
  if(!empty($a_form['logo']['name'])){

    //Pega o id da última inserção feita no banco de dados
    $id = lastID($conexao);

    //Formata o nome do logo para id_logo.extensão
    $nome_arquivo = $id.'_logo';
    $a_form['logo']['name'] = formataNomeArquivo($nome_arquivo, $a_form['logo']);

    //Usa a função de salvarImagem para salvar o logo no servidor
    salvarImagem($a_form['logo'], 200, 60, DIR_PATROCINADORES);

    //Inclui o logo no registro do patrocinador 
    $query = 'UPDATE patrocinador
              SET logo ="'.$a_form['logo']['name'].'"
              WHERE id_patrocinador = '.$id;

    //Verifica se o update no patrocinador deu errado
    if(executa($query, $conexao) == false){

      //Deleta o logo
      deletarArquivo($a_form['logo']['name'], DIR_PATROCINADORES);

      die('Erro ao salvar a imagem no banco de dados');
    }
  }

}

function alterarPatrocinador($a_form) {

  global $conexao;

  //Verifica a necessidade de alterar o logo
  if (!empty($a_form['logo']['name'])) {

    //Deletando o logo atual
    deletarArquivo($a_form['logo_atual'], DIR_PATROCINADORES);

    //Formata o nome do logo para id_logo.extensão
    $nome_arquivo = $a_form['id_patrocinador'].'_logo';
    $a_form['logo']['name'] = formataNomeArquivo($nome_arquivo, $a_form['logo']);  

    //Usa a função de salvarImagem para salvar o logo no servidor
    salvarImagem($a_form['logo'], 200, 60, DIR_PATROCINADORES);
    
  } else {
    $a_form['logo']['name'] = $a_form['logo_atual'];
  }

  $query = 'UPDATE patrocinador SET nome = "'.$a_form['nome'].'",
                                  email = "'.$a_form['email'].'",
                                  cnpj = "'.$a_form['cnpj'].'",
                                  tipo = "'.$a_form['tipo'].'",
                                  logo = "'.$a_form['logo']['name'].'",
                                  status = "'.$a_form['status'].'"
                            WHERE id_patrocinador = '.$a_form['id_patrocinador'];

  executa($query, $conexao);
}

function deletarPatrocinador($id_patrocinador) {

  global $conexao;

  //Buscando o logo do patrocinador para deletar do servidor
  $query = "SELECT logo 
            FROM patrocinador 
            WHERE id_patrocinador = $id_patrocinador";

  $res = executa($query, $conexao);
  $patrocinador = buscar($res)[0];

  $query = 'DELETE FROM patrocinador WHERE id_patrocinador = '.$id_patrocinador;

  if(executa($query, $conexao) ==  false){
    die('Erro ao deletar o patrocinador no banco de dados: '.mysql_error());
  }

  //Deletando o logo do servidor
  deletarArquivo($patrocinador['logo'], DIR_PATROCINADORES);

}

function buscarPatrocinadores($limite='') {

  global $conexao;

  if(!empty($limite) && $limite > 0){
    $limite = 'LIMIT '.$limite;
  
  }else{
    $limite = '';
  }

  $query = 'SELECT * 
            FROM patrocinador
            '.$limite;
            
  $res = executa($query, $conexao);

  return buscar($res);
  
}

function buscarPatrocinador($id_patrocinador) {

  global $conexao;

  $query = 'SELECT * FROM patrocinador WHERE id_patrocinador = '.$id_patrocinador;
  $res = executa($query, $conexao);
  $a_patrocinador = buscar($res);

  if ($res != false) {
    return $a_patrocinador[0];
  }

  return false;
}