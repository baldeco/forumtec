<?php

function abrevia_nome($nome) {
  $nome = explode(' ', $nome);
  $num = count($nome);
  $fname = $nome[0];
  $mname = null;
  $lname = $nome[$num - 1];
  if ($num > 2) {
    for ($i = 1; $i < $num - 1; $i++) {
      $mname .= ' '.$nome[$i][0].'.';
    }
  }
  $nome = $fname;
  if (!empty($mname) && (count($fname) + count($lname)) < 18) $nome .= $mname;
  $nome .= ' '.$lname;

  return $nome;
}

function filtraString($string) {
  $search = array('@<script[^>]*?>.*?</script>@si',  // Strip out javascript
      '@<[\/\!]*?[^<>]*?>@si',                       // Strip out HTML tags
      '@<style[^>]*?>.*?</style>@siU',               // Strip style tags properly
      '@<![\s\S]*?--[ \t\n\r]*>@');                  // Strip multi-line comments including CDATA
  $string = preg_replace($search, '', $string);
  $string = trim($string);                           // Limpa espaços vazios
  $string = strip_tags($string);                     // Tira tags html e php

  $string = filter_var($string, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

  return $string;
}

function filtraArray($data) {
  if (is_array($data)) {
    $data = array_map('filtraArray', $data);
  } elseif (!is_int($data)) {
    $data = filtraString($data);
  }

  return $data;
}

function reverteData($data) {
  return implode(preg_match("~\/~", $data) == 0 ? "/" : "-", array_reverse(explode(preg_match("~\/~", $data) == 0 ? "-" : "/", $data)));
}

function reverteDataHora($datahora) {
  $datahora = explode(" ", $datahora);
  $data = reverteData($datahora[0]);
  $hora = substr($datahora[1], 0, 5);

  return $data." ".$hora;
}

function calculaDataHoraFinal($data_ini, $hora) {
  /**
   * Recebe uma datahora inicial e uma hora final, e monta a data hora final
   */
  // Verifica se os parametros recebidos são validos
  if (empty($data_ini)) return null;
  if ($hora != '00:00' && empty($hora)) return null;
  // Concatena o horário com a data recebida
  $datahora = substr($data_ini, 0, 10).' '.$hora.':00';
  // Se a datahora obtida for anterior à data inicial acrescenta +1 dia
  if (strtotime($datahora) < strtotime($data_ini))
    $datahora = date('Y-m-d H:i:s', strtotime('+1 day', strtotime($datahora)));

  return $datahora;
}

function valida_email($mail) {
  if (filter_var($mail, FILTER_VALIDATE_EMAIL)) return true;
  return false;
}