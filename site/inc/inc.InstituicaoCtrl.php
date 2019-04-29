<?php

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