<?php

function buscarPatrocinadores($limite='') {

  global $conexao;

  if(!empty($limite) && $limite > 0){
    $limite = 'LIMIT '.$limite;
  
  }else{
    $limite = '';
  }

  $query = 'SELECT * 
            FROM patrocinador
            WHERE status = "a"
            '.$limite;

  $res = executa($query, $conexao);

  if($res != false){

    $a_patrocinadores = buscar($res);

    for ($i=0; $i < sizeof($a_patrocinadores); $i++ ) {
      $a_patrocinadores[$i]['logo'] = criarNomeArquivo($a_patrocinadores[$i]['logo'], DIR_PATROCINADORES);
    }

    return $a_patrocinadores;
  
  }
  
  return null;

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