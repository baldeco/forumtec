<?php

function inserirPalestrante($a_form) {

  global $conexao;

  $query = 'INSERT INTO palestrante VALUES (
                        NULL,
                        "'.$a_form['nome'].'",
                        "'.$a_form['cpf'].'",
                        "'.$a_form['email'].'",
                        "'.$a_form['endereco'].'",
                        "'.$a_form['bairro'].'",
                        "'.$a_form['cidade'].'",
                        "'.$a_form['uf'].'",
                        "'.$a_form['cep'].'",
                        "'.$a_form['telefone'].'",
                        "'.$a_form['descricao'].'",
                        "'.$a_form['status'].'")';

  executa($query, $conexao);
}

function alterarPalestrante($a_form) {

  global $conexao;

  $sql = 'UPDATE palestrante SET nome = "'.$a_form['nome'].'",
                                 cpf = "'.$a_form['cpf'].'",
                                 email = "'.$a_form['email'].'",
                                 endereco = "'.$a_form['endereco'].'",
                                 bairro = "'.$a_form['bairro'].'",
                                 cidade = "'.$a_form['cidade'].'",
                                 uf = "'.$a_form['uf'].'",
                                 cep = "'.$a_form['cep'].'",
                                 telefone = "'.$a_form['telefone'].'",
                                 descricao = "'.$a_form['descricao'].'",
                                 status = "'.$a_form['status'].'"
                           WHERE id_palestrante = '.$a_form['id_palestrante'];

  executa($sql, $conexao);
}

function deletarPalestrante($id_palestrante) {

  global $conexao;

  $sql = 'DELETE FROM palestrante WHERE id_palestrante = '.$id_palestrante;

  executa($sql, $conexao);
}

function buscarPalestrantes($limite = '') {

  global $conexao;

  if (!empty($limite) && $limite > 0) {
    $limite = ' LIMIT '.$limite;
  }

  $query = 'SELECT * FROM palestrante'.$limite;

  $res = executa($query, $conexao);
  $a_palestrantes = buscar($res);

  return $a_palestrantes;
}

function buscarPalestrante($id_palestrante) {

  global $conexao;

  $query = 'SELECT * FROM palestrante WHERE id_palestrante = '.$id_palestrante;
  $res = executa($query, $conexao);
  $a_palestrante = buscar($res);

  if ($res != false) {
    return $a_palestrante[0];
  }

  return false;
}