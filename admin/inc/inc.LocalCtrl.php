<?php

function inserirLocal($a_form) {

  global $conexao;

  $query = 'INSERT INTO local (nome, capacidade, status)
  VALUES ("'.$a_form['nome'].'", "'.$a_form['capacidade'].'","'.$a_form['status'].'")';

  executa($query, $conexao);
}

function alterarLocal($a_form) {

  global $conexao;

  $query = 'UPDATE local SET
                   nome="'.$a_form["nome"].'",
                   capacidade="'.$a_form["capacidade"].'",
                   status="'.$a_form["status"].'"
             WHERE id_local = '.$a_form["id"];

  executa($query, $conexao);
}

function deletarLocal($id_local) {

  global $conexao;

  $sql = 'DELETE FROM local WHERE id_local ='.$id_local;
  $rs = executa($sql, $conexao);
}

function buscarLocais($limite='') {

  global $conexao;

  if(!empty($limite) && $limite > 0){
    $limite = 'LIMIT '.$limite;
  
  }else{
    $limite = '';
  }

  $query = 'SELECT * 
            FROM local
            '.$limite;
            
  $res = executa($query, $conexao);
  $a_local = buscar($res);

  return $a_local;
}

function buscarLocal($id) {

  global $conexao;

  $query = 'SELECT * FROM local WHERE id_local='.$id;
  $res = executa($query, $conexao);
  $a_local = buscar($res);

  if ($a_local != 0) {
    return $a_local[0];
  }
  return false;
}
