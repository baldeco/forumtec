<?php

function inserirInstituicao($a_dados) {

  global $conexao;

  $sql = 'INSERT INTO instituicao VALUES (
                      NULL,
                      "'.$a_dados['nome'].'", 
                      "'.$a_dados['cidade'].'",
                      "'.$a_dados['status'].'")';

  executa($sql, $conexao);
}

function alterarInstituicao($a_dados) {

  global $conexao;

  $sql = 'UPDATE instituicao SET nome = "'.$a_dados["nome"].'",
                                 cidade = "'.$a_dados["cidade"].'",
                                 status = "'.$a_dados["status"].'"
                           WHERE id_instituicao = '.$a_dados["id"];

  executa($sql, $conexao);
}

function deletarInstituicao($id_instituicao) {

  global $conexao;

  $sql = 'DELETE FROM instituicao WHERE id_instituicao = '.$id_instituicao;

  $rs = executa($sql, $conexao);
}

function buscarInstituicoes($limite='') {

  global $conexao;

  if(!empty($limite) && $limite > 0){
    $limite = 'LIMIT '.$limite;
  
  }else{
    $limite = '';
  }

  $sql = 'SELECT * 
          FROM instituicao
          '.$limite;
          
  $res = executa($sql, $conexao);
  $a_instituicoes = buscar($res);

  return $a_instituicoes;
}

function buscarInstituicao($id_instituicao) {

  global $conexao;

  $sql = 'SELECT * FROM instituicao WHERE id_instituicao = '.$id_instituicao;
  $res = executa($sql, $conexao);
  $a_instituicao = buscar($res);

  if ($a_instituicao != false) {
    return $a_instituicao[0];
  }

  return false;
}
