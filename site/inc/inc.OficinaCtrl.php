<?php

  require_once('inc/inc.PalestrantesOficina.php');
  require_once('inc/inc.functions.php');

  function buscarOficina($id_oficina) {

    global $conexao;

    $sql = 'SELECT o.*, 
                   l.nome as nome_local,
                   date_format(o.inicio, "%d/%m/%Y") AS data_inicio_format,
                   date_format(o.fim, "%d/%m/%Y") AS data_fim_format,
                   date_format(o.inicio, "%H:%i") as hora_inicio_format,
                   date_format(o.fim, "%H:%i") as hora_fim_format
            FROM oficina AS o
            INNER JOIN local as l
            ON o.id_local = l.id_local
            WHERE o.id_oficina = '.$id_oficina;

    $res = executa($sql, $conexao);
    $a_oficina = buscar($res);

    if ($a_oficina != false) {

      $a_oficina[0]['disponivel'] = verifica_data($a_oficina[0]['inicio']) ? 's' : 'n';
      $a_oficina[0]['imagem'] = criarNomeImagens($a_oficina[0]['imagem'], DIR_OFICINAS);
      $a_oficina[0]['palestrantes'] = buscarPalestrantesOficina($id_oficina);
      $a_oficina[0]['anexo'] = criarNomeArquivo($a_oficina[0]['anexo'], DIR_ANEXO_OFICINA);

      return $a_oficina[0];
    
    }

    return false;
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
                   date_format(inicio, "%d/%m/%Y") AS data_inicio_format,
                   date_format(fim, "%d/%m/%Y") AS data_fim_format,
                   date_format(inicio, "%H:%i") as hora_inicio_format,
                   date_format(fim, "%H:%i") as hora_fim_format
            FROM oficina AS o
            LEFT JOIN local AS l ON o.id_local = l.id_local
            WHERE o.status = "a"
            ORDER BY o.inicio desc
            '.$limite;

    $res = executa($sql, $conexao);
    $a_oficinas = buscar($res);


    if($a_oficinas != false){
  
      for ($i=0; $i < sizeof($a_oficinas); $i++ ) {
        $a_oficinas[$i]['imagem'] = criarNomeImagens($a_oficinas[$i]['imagem'], DIR_OFICINAS);
        $a_oficinas[$i]['palestrantes'] = buscarPalestrantesOficina($a_oficinas[$i]['id_oficina']);
      }

      return $a_oficinas;

    }

    return null;
    
  }

  function buscarOficinasPorData($limite='', $data='') {

    global $conexao;

    if(!empty($limite) && $limite > 0){
      $limite = 'LIMIT '.$limite;
    
    }else{
      $limite = '';
    }

    $data_verifica = DateTime::createFromFormat('d/m/Y', $data);
  
    if($data_verifica){
      $data = $data_verifica->format('Y-m-d');

    }else{
      $data = date('Y-m-d');
    }

    $sql = 'SELECT o.*,
                   l.nome AS nome_local,
                   date_format(inicio, "%d/%m/%Y") AS data_inicio_format,
                   date_format(fim, "%d/%m/%Y") AS data_fim_format,
                   date_format(inicio, "%H:%i") as hora_inicio_format,
                   date_format(fim, "%H:%i") as hora_fim_format
            FROM oficina AS o
            LEFT JOIN local AS l ON o.id_local = l.id_local
            WHERE o.status = "a" && o.inicio LIKE "'.$data.'%"
            ORDER BY o.inicio desc
            '.$limite;

    $res = executa($sql, $conexao);
    $a_oficinas = buscar($res);

    if($a_oficinas != false){

      for ($i=0; $i < sizeof($a_oficinas); $i++ ) {
        $a_oficinas[$i]['imagem'] = criarNomeImagens($a_oficinas[$i]['imagem'], DIR_OFICINAS);
        $a_oficinas[$i]['palestrantes'] = buscarPalestrantesOficina($a_oficinas[$i]['id_oficina']);
      }

      return $a_oficinas;

    }

    return null;
    
  }

  function buscarProximasOficinas($limite='') {

    global $conexao;

    if(!empty($limite) && $limite > 0){
      $limite = 'LIMIT '.$limite;
    
    }else{
      $limite = '';
    }

    $sql = 'SELECT o.*,
                   l.nome AS nome_local,
                   date_format(inicio, "%d/%m/%Y") AS data_inicio_format,
                   date_format(fim, "%d/%m/%Y") AS data_fim_format,
                   date_format(inicio, "%H:%i") as hora_inicio_format,
                   date_format(fim, "%H:%i") as hora_fim_format
            FROM oficina AS o
            LEFT JOIN local AS l ON o.id_local = l.id_local
            WHERE o.status = "a" && o.inicio >= now()
            ORDER BY o.inicio ASC
            '.$limite;

    $res = executa($sql, $conexao);
    $a_oficinas = buscar($res);

    if($a_oficinas != false){

      for ($i=0; $i < sizeof($a_oficinas); $i++ ) {
        
        $a_oficinas[$i]['imagem'] = criarNomeImagens($a_oficinas[$i]['imagem'], DIR_OFICINAS);
        $a_oficinas[$i]['palestrantes'] = buscarPalestrantesOficina($a_oficinas[$i]['id_oficina']);

      }

      return $a_oficinas;

    }

    return null;
  
  }

?>
