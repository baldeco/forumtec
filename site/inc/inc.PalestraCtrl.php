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

function buscarPalestraEspecifica($id_palestra) {

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

    if($a_palestra != false) {
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

function buscarPalestrasDoDia($limite = '', $data = '') {
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
            WHERE p.status = "a" && p.inicio LIKE "'.$data.'%"
            ORDER BY p.inicio desc
            '.$limite;

  $rs = executa($sql, $conexao);
  
  $a_palestras = buscar($rs);

  if($a_palestras != false)
  {
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

function buscarToken($id_palestra) {

  global $conexao;

  $sql = 'SELECT token
            FROM palestra 
            WHERE id_palestra = '.$id_palestra;

  $rs = executa($sql, $conexao);
  $a_palestra = buscar($rs);

  $token = $a_palestra[0]['token'];

  return $token;
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

function filtraPalestras($palestras_data,$hora)
{
  $turno_selecionado = identificaTurno(date('H', strtotime($hora)));

  $contador = 0;

  for ($i=0; $i < sizeof($palestras_data); $i++) 
  { 
    $turnoPalestra = identificaTurno(date('H', strtotime($palestras_data[$i]['inicio'])));

    $identificaTurno = comparaTurno($turno_selecionado,$turnoPalestra);

    if ($identificaTurno == true) // Se for do mesmo turno, armazena a id da palestra.
    { 
      $palestras_turno[$contador] = $palestras_data[$i]['id_palestra']; 
      $contador++;
    }
  }

  return $palestras_turno;
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


function verificaRegistros($id_participante,$palestras_filtradas)
{
  global $conexao;

  //Verifico se o participante tá cadastrado em alguma das palestras
  for ($i=0; $i <sizeof($palestras_filtradas); $i++) 
  { 

    $sql = 'SELECT *
            FROM participante_palestra
            WHERE id_palestra = '.$palestras_filtradas[$i].'
            AND id_participante = '.$id_participante;

    $rs = executa($sql, $conexao);
    $a_checkin = buscar($rs);

    // Retorna o primeiro registro encontrado,contendo a relação do participante com alguma das palestras.
    if ($a_checkin[0] != false) 
    {
      return $a_checkin[0]; // Não verificando se o campo check-in está preenchido.
    }  
  }
  return false;
}

function identificaTurno($hora) //Identifica o turno apartir do inicio da palestra
{
  if ($hora < 12) 
 {
   return $turno = "manha";
 }
 if (($hora > 12) && ($hora < 19))
 {
   return $turno = "tarde";
 }
  return $turno = "noite";
}

function comparaTurno($turnoAtual,$turnoPalestra)
{
 if ($turnoAtual ==  $turnoPalestra)
 {
  return true;
 }
 return false;
}

function verificaDataPalestra($dia_palestra,$agora)
{ 
  $hoje = date('Y-m-d', strtotime($agora));

  if (strtotime($hoje) == strtotime($dia_palestra))
  {
    return true;
  }
  // O dia da palestra é um dia diferente do dia atual.
  return false;
}

function verificaQuantPalestras($palestras_turno)
{
  $quantidade = sizeof($palestras_turno);

  if ($quantidade > 1) 
  {
    return true;
  }
  return false;
}

function verificaIntervalo($minimo,$maximo,$agora)
{
  $hora_checkin = date('H:i:s', strtotime($agora));
  
  if ((strtotime($hora_checkin) >= strtotime($minimo)) && (strtotime($hora_checkin) <= strtotime($maximo)))
  {
    return true;
  }
  //Se a tentativa é antes do horário minimo permitido ou depois do horário máximo, retorna false.
  return false;
}

function horarioMinimo($palestras_turno)
{
  // Identifico qual é a primeira palestra e seleciona o inicio da palestra.
  $hora_inicio = identificaPrimeira($palestras_turno);

  $minimo = date('H:i:s', strtotime($hora_inicio.' - 15 minutes'));
  return $minimo;
}

function horarioMaximo($palestras_turno)
{
  // Identifico qual é a ultima palestra e seleciona o fim da palestra.
  $hora_ultima = identificaUltima($palestras_turno);
  
  $maximo = date('H:i:s', strtotime($hora_ultima.' +15 minutes'));
  return $maximo;
}

function identificaPrimeira($palestras_turno)
{
  // Identifica a primeira palestra e retorna seu horário de inicio.
  $verificado_quant = verificaQuantPalestras($palestras_turno);

  $comparativo = buscarPalestraEspecifica($palestras_turno[0]);

  if ($verificado_quant == false) 
  {
    return $comparativo['inicio'];
  }

  for ($i=1; $i < sizeof($palestras_turno); $i++) 
  { 
    $possivel_inicio = buscarPalestraEspecifica($palestras_turno[$i]);

    if (strtotime($comparativo['inicio']) > strtotime($possivel_inicio)['inicio'])
    {
      $comparativo = $possivel_inicio;
    }
  }
  return $comparativo['inicio'];
}

function identificaUltima($palestras_turno)
{
  // Identifica a ultima palestra e retorna seu horário de fim.
  $verificado_quant = verificaQuantPalestras($palestras_turno);

  $comparativo = buscarPalestraEspecifica($palestras_turno[0]);

  if ($verificado_quant == false) 
  {
    return $comparativo['fim'];
  }

  for ($i=1; $i < sizeof($palestras_turno); $i++) 
  { 
    $possivel_inicio = buscarPalestraEspecifica($palestras_turno[$i]);

    if (strtotime($comparativo['fim']) < strtotime($possivel_inicio)['fim'])
    {
      $comparativo = $possivel_inicio;
    }
  }
  return $comparativo['fim'];
}

function verificarCheckin($id_participante, $palestras_filtradas) {
  /*Verifica em todos os registros que tiver,os quais estiverem relacionados com o participante 
  se algum destes, está com o campo de check-in preenchido.*/

  global $conexao;


  for ($i=0; $i <sizeof($palestras_filtradas); $i++) 
  { 
    $sql = 'SELECT *
            FROM participante_palestra
            WHERE id_palestra = '.$palestras_filtradas[$i].'
            AND id_participante = '.$id_participante;

    $rs = executa($sql, $conexao);
    $a_checkin = buscar($rs);

    if ($a_checkin != false) {
      if (!empty($a_checkin[0]['entrada'])) { //Verifica se o campo está preenchido
        return $a_checkin[0];
      }
    }
  } 
  return false;
}

