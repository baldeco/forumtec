<?php

require_once('inc/inc.PalestraCtrl.php');
require_once("inc/inc.ParticipanteCtrl.php");

$a_dados = array();
$a_dados['token'] = $_POST['f_token'];
$a_dados['email'] = $_POST['f_email'];
$a_dados['lat'] = $_POST['f_lat'];
$a_dados['lng'] = $_POST['f_lng'];

if (empty($a_dados['token'])) exit('Token inválido!');

if (!isset($a_dados['email']) || empty($a_dados['email'])) exit('Preencha o campo EMAIL!');

// Recupera do DB Palestra
$a_palestra = buscarPalestraToken($a_dados['token']);
if ($a_palestra == false) exit('Palestra não cadastrada!');
$id_palestra = $a_palestra['id_palestra'];

// Recupera do DB Participante
$id_participante = buscarIDParticipantePorEmail($a_dados['email']);
//Se o participante não tiver nenhum cadastro na tabela participante
if ($id_participante == false) {
  header('Location: index.php?secao=inscricao&modulo=noDia&id_palestra='.$id_palestra);
  exit;
} 

// Calcula tempo minimo de permanencia
$agora = date('Y-m-d H:i:s');
$tempo_min = intervalo_minutos($a_palestra['inicio'], $a_palestra['fim']);
$tempo_min = ceil($tempo_min * 0.75);

// Recupera do DB o check
$checkin = buscarCheckin($id_palestra, $id_participante);

/*
// Se o usuário não está relacionado com nenhuma palestra do dia ou do turno.
$validacao = verificaCadastro($id_participante,$palestras_filtradas); 
if ($validacao == false) {
  header('Location: index.php?secao=inscricao&modulo=noDia&id_palestra='.$id_palestra);
  exit;
}
*/


// Verifica se ja fez Checkin
if (empty($checkin['entrada'])) {
  $hora_limite_entrada = date('Y-m-d H:i:s', strtotime($a_palestra['inicio'].' -15 minutes'));
  if (strtotime($agora) < strtotime($hora_limite_entrada)) {
    exit('Checkin disponivel a partir de '.reverteDataHora($hora_limite_entrada));
  }
  $mov = 'E';
  if (salvarCheckin($checkin['id_participante_palestra'], $a_dados['lat'], $a_dados['lng'])) $status = '&sucesso=1';
  else $status = '&erro=1';
} else {
  $hora_minima = date('Y-m-d H:i:s', strtotime($checkin['datahora'].' +'.$tempo_min.' minutes'));
  $hora_maxima = date('Y-m-d H:i:s', strtotime($a_palestra['fim'].' +15 minutes'));
  if (strtotime($agora) < strtotime($hora_minima)) {
    exit('Tempo de permanência insuficiente para checkout!');
  } else if (strtotime($agora) > strtotime($hora_maxima)) {
    exit('Horario para checkout encerrado!');
  }
  $mov = 'S';
  if (salvarCheckout($checkin['id_participante_palestra'], $a_dados['lat'], $a_dados['lng'])) $status = '&sucesso=1';
  else $status = '&erro=1';
}

header('Location: index.php?secao=palestra&modulo=checkin&token='.$a_dados['token'].'&mov='.$mov.$status);
exit();
