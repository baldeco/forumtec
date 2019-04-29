<?php

function add_date($givendate, $day = 0, $mth = 0, $yr = 0) {
  $cd = strtotime($givendate);
  $newdate = date('Y-m-d h:i:s', mktime(date('h', $cd),
      date('i', $cd), date('s', $cd), date('m', $cd) + $mth,
      date('d', $cd) + $day, date('Y', $cd) + $yr));

  return $newdate;
}

function calcula_horas($data1, $data2) {

  $parte1 = explode(' ', $data1);
  $parte2 = explode(' ', $data2);

  $d1 = explode('-', $parte1[0]);
  $h1 = explode(':', $parte1[1]);

  $d2 = explode('-', $parte2[0]);
  $h2 = explode(':', $parte2[1]);

  $retorno = (int)mktime($h2[0], $h2[1], 0, $d2[1], $d2[2], $d2[0]) - (int)mktime($h1[0], $h1[1], 0, $d1[1], $d1[2], $d1[0]);

  return $retorno;
}

function dia_semana($data) {
  $ano = substr("$data", 0, 4);
  $mes = substr("$data", 5, -3);
  $dia = substr("$data", 8, 9);
  $diasemana = date("w", mktime(0, 0, 0, $mes, $dia, $ano));
  switch ($diasemana) {
    case"0":
      $diasemana = "Domingo";
      break;
    case"1":
      $diasemana = "Segunda-Feira";
      break;
    case"2":
      $diasemana = "Tera-Feira";
      break;
    case"3":
      $diasemana = "Quarta-Feira";
      break;
    case"4":
      $diasemana = "Quinta-Feira";
      break;
    case"5":
      $diasemana = "Sexta-Feira";
      break;
    case"6":
      $diasemana = "Sábado";
      break;
  }

  return $diasemana;
}

function intervalo_minutos($inicio, $fim) {
  $datatime1 = new DateTime($inicio);
  $datatime2 = new DateTime($fim);

  $diff = $datatime1->diff($datatime2);

  $minutos = $diff->i + (($diff->h + ($diff->days * 24)) * 60);

  return $minutos;
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

function limpa_string($string) {
  $search = array('@<script[^>]*?>.*?</script>@si',  // Strip out javascript
      '@<[\/\!]*?[^<>]*?>@si',                       // Strip out HTML tags
      '@<style[^>]*?>.*?</style>@siU',               // Strip style tags properly
      '@<![\s\S]*?--[ \t\n\r]*>@');                  // Strip multi-line comments including CDATA
  $string = preg_replace($search, '', $string);
  $string = trim($string);                           // limpa espaços vazios
  $string = strip_tags($string);                     // tira tags html e php

  $string = filter_var($string, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

  return $string;
}

function limpar_array($value) {
  if (is_array($value)) {
    $value = array_map("remover_deep", $value);
  } elseif (is_int($value)) {
    $value = (int)limpa_string($value);
  } else {
    $value = limpa_string($value);
  }

  return $value;
}

function valida_email($mail) {
  if (filter_var($mail, FILTER_VALIDATE_EMAIL)) return true;
  return false;
}

function verifica_data($data){

    $dataAtual = date('Y-m-d H:i:s');
    $data = date('Y-m-d H:i:s', strtotime($data.' +20 minutes'));
    
    if(strtotime($data) >= strtotime($dataAtual)){
      return true;
    }

    return false;

}



