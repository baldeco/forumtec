<?php

function inserirUsuario($a_dados) {

  global $conexao;

  $sql = 'INSERT INTO usuarios VALUES (
		                NULL,
		                "'.$a_dados['nome'].'",
		                "'.$a_dados['email'].'",
		                "I2VjLpexanc=",
		                "'.$a_dados['status'].'")';

  $rs = executa($sql, $conexao);
}

function alterarUsuario($a_dados) {

  global $conexao;

  $sql = 'UPDATE usuarios SET
                 nome = "'.$a_dados['nome'].'",
					       email = "'.$a_dados['email'].'",
					       status = "'.$a_dados['status'].'"
				   WHERE id_usuario ='.$a_dados['id_usuario'];

  $rs = executa($sql, $conexao);
}

function deletarUsuario($id_usuario) {

  global $conexao;

  $sql = 'DELETE FROM usuarios WHERE id_usuario = '.$id_usuario;

  return executa($sql, $conexao);
}

function buscarUsuarios($limite = '') {

  global $conexao;

  if (!empty($limite) && $limite > 0) $limite = ' LIMIT '.$limite;
  else $limite = '';

  $sql = 'SELECT * FROM usuarios'.$limite;

  $rs = executa($sql, $conexao);
  $a_usuarios = buscar($rs);

  return $a_usuarios;
}

function buscarUsuario($id_usuario) {

  global $conexao;

  $sql = 'SELECT * FROM usuarios WHERE id_usuario = '.$id_usuario;

  $rs = executa($sql, $conexao);
  $a_usuario = buscar($rs);

  return $a_usuario[0];
}
