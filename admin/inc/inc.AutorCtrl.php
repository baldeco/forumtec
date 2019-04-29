<?php

function inserirAutor($a_dados) {

  global $conexao;

  $sql = 'INSERT INTO autor VALUES (
		                NULL,
		                "'.$a_dados['nome'].'",
		                "'.$a_dados['cpf'].'",
		                "'.$a_dados['email'].'",
		                "'.$a_dados['telefone'].'",
		                "'.$a_dados['status'].'")';

  $rs = executa($sql, $conexao);
}

function alterarAutor($a_dados) {

  global $conexao;

  $sql = 'UPDATE autor
             SET nome = "'.$a_dados['nome'].'",
					       cpf = "'.$a_dados['cpf'].'",
					       email = "'.$a_dados['email'].'",
					       telefone = "'.$a_dados['telefone'].'",
					       status = "'.$a_dados['status'].'"
				   WHERE id_autor ='.$a_dados['id_autor'];

  $rs = executa($sql, $conexao);
}

function deletarAutor($id_autor) {

  global $conexao;

  $sql = 'DELETE FROM autor WHERE id_autor = '.$id_autor;

  return executa($sql, $conexao);
}

function buscarAutores($limite = '') {

  global $conexao;

  if (!empty($limite) && $limite > 0) $limite = ' LIMIT '.$limite;
  else $limite = '';

  $sql = 'SELECT * FROM autor'.$limite;

  $rs = executa($sql, $conexao);
  $a_autores = buscar($rs);

  return $a_autores;
}

function buscarAutor($id_autor) {

  global $conexao;

  $sql = 'SELECT * FROM autor WHERE id_autor = '.$id_autor;

  $rs = executa($sql, $conexao);
  $a_autor = buscar($rs);

  return $a_autor[0];
}
