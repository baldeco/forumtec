<?php

require_once('inc/inc.PalestrantesPalestra.php');
require_once('inc/inc.functions.php');

function buscarPalestra($id_palestra) {

  global $conexao;

  $sql = 'SELECT p.*,
                 l.nome AS nome_local,
                 date_format(inicio, "%d/%m/%Y") AS data_inicio_format,
                 date_format(fim, "%d/%m/%Y") AS data_fim_format,
                 date_format(inicio, "%H:%i") AS hora_inicio_format,
                 date_format(fim, "%H:%i") AS hora_fim_format
            FROM palestra AS p
            LEFT JOIN local AS l ON p.id_local = l.id_local
            WHERE p.id_palestra = '.$id_palestra;

  $rs = executa($sql, $conexao);
  $a_palestra = buscar($rs);

  if ($a_palestra != false) {

    $a_palestra[0]['disponivel'] = verifica_data($a_palestra[0]['inicio']) ? 's' : 'n';
    $a_palestra[0]['imagem'] = criarNomeImagens($a_palestra[0]['imagem'], DIR_PALESTRAS);
    $a_palestra[0]['palestrantes'] = buscarPalestrantesPalestra($id_palestra);
    $a_palestra[0]['anexo'] = criarNomeArquivo($a_palestra[0]['anexo'], DIR_ANEXO_PALESTRA);

    return $a_palestra[0];

  }

  return false;
}

function buscarPalestras($limite = '') {

  global $conexao;

  if (!empty($limite) && $limite > 0) {
    $limite = 'LIMIT '.$limite;

  } else {
    $limite = '';
  }

  $sql = 'SELECT p.*,
                 l.nome AS nome_local, 
                 date_format(p.inicio, "%d/%m/%Y") AS data_inicio_format,
                 date_format(p.fim, "%d/%m/%Y") AS data_fim_format,
                 date_format(p.inicio, "%H:%i") AS hora_inicio_format,
                 date_format(p.fim, "%H:%i") AS hora_fim_format
            FROM palestra AS p
            LEFT JOIN local AS l ON p.id_local = l.id_local
            WHERE p.status = "a"
            ORDER BY p.inicio desc
            '.$limite;

  $rs = executa($sql, $conexao);
  $a_palestras = buscar($rs);


  if($a_palestras != false){

    for ($i = 0; $i < sizeof($a_palestras); $i++) {
      $a_palestras[$i]['imagem'] = criarNomeImagens($a_palestras[$i]['imagem'], DIR_PALESTRAS);
      $a_palestras[$i]['palestrantes'] = buscarPalestrantesPalestra($a_palestras[$i]['id_palestra']);
    }

    return $a_palestras;

  }

  return null;

}

function buscarPalestraToken($token) {

  global $conexao;

  $sql = 'SELECT p.*,
                 l.nome AS nome_local,
                 date_format(inicio, "%d/%m/%Y") AS data_inicio_format,
                 date_format(fim, "%d/%m/%Y") AS data_fim_format,
                 date_format(inicio, "%H:%i") AS hora_inicio_format,
                 date_format(fim, "%H:%i") AS hora_fim_format
            FROM palestra AS p
            LEFT JOIN local AS l ON p.id_local = l.id_local
            WHERE p.token = "'.$token.'"';

  $rs = executa($sql, $conexao);
  $a_palestra = buscar($rs);

  if ($a_palestra != false) {
    return $a_palestra[0];
  }

  return false;
}

function buscarPalestrasPorData($limite = '', $data='') {

  global $conexao;

  if (!empty($limite) && $limite > 0) {
    $limite = 'LIMIT '.$limite;

  } else {
    $limite = '';
  }

  $data_verifica = DateTime::createFromFormat('d/m/Y', $data);

  if($data_verifica){
    $data = $data_verifica->format('Y-m-d');

  }else{
    $data = date('Y-m-d');
  }

  $sql = 'SELECT p.*,
                 l.nome AS nome_local, 
                 date_format(p.inicio, "%d/%m/%Y") AS data_inicio_format,
                 date_format(p.fim, "%d/%m/%Y") AS data_fim_format,
                 date_format(p.inicio, "%H:%i") AS hora_inicio_format,
                 date_format(p.fim, "%H:%i") AS hora_fim_format
            FROM palestra AS p
            LEFT JOIN local AS l ON p.id_local = l.id_local
            WHERE p.status = "a" && p.inicio LIKE "'.$data.'%"
            ORDER BY p.inicio desc
            '.$limite;

  $rs = executa($sql, $conexao);
  $a_palestras = buscar($rs);


  if($a_palestras != false){

    for ($i = 0; $i < sizeof($a_palestras); $i++) {
      $a_palestras[$i]['imagem'] = criarNomeImagens($a_palestras[$i]['imagem'], DIR_PALESTRAS);
      $a_palestras[$i]['palestrantes'] = buscarPalestrantesPalestra($a_palestras[$i]['id_palestra']);
    }

    return $a_palestras;

  }

  return null;

}

function buscarProximasPalestras($limite = '') {

  global $conexao;

  if (!empty($limite) && $limite > 0) {
    $limite = 'LIMIT '.$limite;

  } else {
    $limite = '';
  }

  $sql = 'SELECT p.*,
                 l.nome AS nome_local, 
                 date_format(p.inicio, "%d/%m/%Y") AS data_inicio_format,
                 date_format(p.fim, "%d/%m/%Y") AS data_fim_format,
                 date_format(p.inicio, "%H:%i") AS hora_inicio_format,
                 date_format(p.fim, "%H:%i") AS hora_fim_format
            FROM palestra AS p
            LEFT JOIN local AS l ON p.id_local = l.id_local
            WHERE p.status = "a" && p.inicio >= now() 
            ORDER BY p.inicio ASC
            '.$limite;

  $rs = executa($sql, $conexao);
  $a_palestras = buscar($rs);

  if($a_palestras != false){

    for ($i = 0; $i < sizeof($a_palestras); $i++) {
      $a_palestras[$i]['imagem'] = criarNomeImagens($a_palestras[$i]['imagem'], DIR_PALESTRAS);
      $a_palestras[$i]['palestrantes'] = buscarPalestrantesPalestra($a_palestras[$i]['id_palestra']);
    }

    return $a_palestras;

  }

  return null;

}

function buscarCheckin($id_palestra, $id_participante) {

  global $conexao;

  $sql = 'SELECT *
            FROM participante_palestra
           WHERE id_palestra = '.$id_palestra.'
             AND id_participante = '.$id_participante;

  $rs = executa($sql, $conexao);
  $a_checkin = buscar($rs);

  if ($a_checkin != false) {
    return $a_checkin[0];
  }

  return false;
}

function salvarCheckin($id, $lat, $lng) {

  global $conexao;

  if (empty($lat)) $lat = 'NULL';
  if (empty($lng)) $lng = 'NULL';

  $ip = $_SERVER['HTTP_CF_CONNECTING_IP'] || $_SERVER['REMOTE_ADDR'];
  $userAgent = $_SERVER['HTTP_USER_AGENT'];

  $now = date('Y-m-d H:i:s');
  $query = 'UPDATE participante_palestra
               SET entrada = "'.$now.'",
                   entrada_lat = '.$lat.',
                   entrada_lng = '.$lng.',
                   user_ip = "'.$ip.'",
                   user_agent = "'.$userAgent.'"
             WHERE id_participante_palestra = '.$id;

  if (executa($query, $conexao)) return true;

  return false;
}

function salvarCheckout($id, $lat, $lng) {

  global $conexao;

  if (empty($lat)) $lat = 'NULL';
  if (empty($lng)) $lng = 'NULL';

  $ip = $_SERVER['HTTP_CF_CONNECTING_IP'] || $_SERVER['REMOTE_ADDR'];
  $userAgent = $_SERVER['HTTP_USER_AGENT'];

  $now = date('Y-m-d H:i:s');
  $query = 'UPDATE participante_palestra
               SET saida = "'.$now.'",
                   saida_lat = '.$lat.',
                   saida_lng = '.$lng.',
                   user_ip = "'.$ip.'",
                   user_agent = "'.$userAgent.'"
             WHERE id_participante_palestra = '.$id;

  if (executa($query, $conexao)) return true;

  return false;
}