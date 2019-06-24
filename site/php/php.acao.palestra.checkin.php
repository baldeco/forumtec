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

$id_palestra = $a_palestra['id_palestra']; // Id da palestra atual.

//******************************************************************************************
$agora = date('Y-m-d H:i:s');

// Seleciona o dia da palestra.
$dia_palestra = date('Y-m-d', strtotime($a_palestra['inicio'])); 

// Filtra as palestras do dia de acordo com o dia da palestra da página de check-in.
$palestras_data = buscarPalestrasDoDia($limite,$dia_palestra);

// Filtra as palestras apartir do turno da palestra. 
$palestras_filtradas = filtraPalestras($palestras_data,$a_palestra['inicio']);

// Seleciona o horário minimo permitido para realizar o check-in.
$horario_minimo = horarioMinimo($palestras_filtradas);
//Seleciona o horário máximo permitido para realizar checkout.
$horario_maximo = horarioMaximo($palestras_filtradas);
//******************************************************************************************

//VERIFICAÇÕES DA DATA, DO TURNO E DO HORÁRIO DAS PALESTRAS:
//------------------------------------------------------------------------------------------
// Verifica se a data da palestra coincide com o dia da tentiva de check-in:
$valida_data = verificaDataPalestra($dia_palestra,$agora);

//Se o dia de tentativa do check-in for diferente do dia da palestra, então o check-in está indisponível.
if ($valida_data == false) 
{
  if (strtotime($agora) > strtotime($dia_palestra)) // Se a palestras já ocorreu.
  {
   exit('Checki-in indisponível, a palestra ocorreu dia '.reverteData($dia_palestra)); 
  }
  if (strtotime($agora) > strtotime($dia_palestra)) // Se a palestra ainda não ocorreu.
  { 
    exit('Checkin disponivel a partir de  '.reverteData($dia_palestra).' '.$horario_minimo); 
  }
}

//Se o dia de tentativa do check-in for igual ao dia da palestra, então continua o script.
//Verifica se o turno da palestra e o turno da tentiva de check-in são iguais
$turno_atual = identificaTurno(date('H', strtotime($agora)));
$turno_palestra = identificaTurno(date('H', strtotime($a_palestra['inicio'])));
$turno_comparado = comparaTurno($turno_atual,$turno_palestra);
if ($turno_comparado == false) {
  exit('Checkin disponivel a partir de  '.reverteData($dia_palestra).' '.$horario_minimo); 
}

// Verifica se a tentativa de check-in está dentro do intervalo, do horário minimo até o horário maximo.
$valida_hora = verificaIntervalo($horario_minimo,$horario_maximo,$agora);
if ($valida_hora == false) {
  exit('Checkin disponivel a partir de  '.reverteData($dia_palestra).' '.$horario_minimo); 
}
//------------------------------------------------------------------------------------------

//VERIFICAÇÕES NA TABELA PARTICIPANTE E NA TABELA PARTICIPANTE_PALESTRA
//**********************************************************************************************
// Recupera do DB Participante
$id_participante = buscarIDParticipantePorEmail($a_dados['email']);

//Se o participante não tiver nenhum cadastro na tabela participante
if ($id_participante == false) {
  header('Location: index.php?secao=inscricao&modulo=noDia&id_palestra='.$id_palestra);
  exit;
} 
// Se o usuário não está relacionado com nenhuma palestra do dia ou do turno.
$validacao = verificaCadastro($id_participante,$palestras_filtradas); 
if ($validacao == false) {
  header('Location: index.php?secao=inscricao&modulo=noDia&id_palestra='.$id_palestra);
  exit;
}
//**********************************************************************************************

// LÓGICA ORIGINAL:
// Recupera do DB o check
$checkin = buscarCheckin($id_palestra, $id_participante);

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

// NOVA LÓGICA (AINDA EM DESENVOLVIMENTO)
/*
// Verificação dos registro da tabela participante_palestra:

//Verifica em todos os registros relacionados com o participante, se o campo check-in está ocupado.
$checkin_preenchido = procurarCheckin($id_participante,$palestras_filtradas);
if ($checkin_preenchido != false) { // Se algum estiver com o campo preenchido, é retornado o registro.
  // Recupera do DB o check
  $checkin = buscarCheckin($checkin_preenchido['id_palestra'], $id_participante); 
  //$checkin = buscarCheckin($checkin_preenchido[0]['id_palestra'], $id_participante); 
}

if ($checkin_preenchido == false)
{
  echo "Entra na condição check-in preenchido igual a false";
  exit;

  //Verifico se a palestra, na qual está tendo a tentiva de check-in, está relacionada com o participante.
  $verificado = buscarCheckin($id_palestra, $id_participante);
  if ($verificado != false) // Se estiverem relacionados.
  { 
    // Recupera do DB o check, para salvar a entrada.
    $checkin = buscarCheckin($id_palestra, $id_participante);
  }
  if ($verificado == false) // Se não estiverem relecionados.
  {
    //echo "Entrou em verificado igual a falso";
    //exit;
    //A EXECUÇÃO DESSA CONDIÇÃO DEVE SER AONDE ESTÁ O ERRO.

    // Busco qual das palestra o participante está relacionado, sendo retornado o primeiro registro.
    $a_checkin = alternativasCheckin($id_participante, $palestras_filtradas);
    $palestra_id = $a_checkin['id_palestra'];
    $checkin = buscarCheckin($palestra_id, $id_participante); // Recupera do DB o check, para salvar.
  }
}


//if (isset($checkin)) {
    //echo "Check-out existe.";
//}
//if (!isset($checkin)) {
  //echo "Check-out não existe.";
//}

Verifica se ja fez Checkin:
Se o campo check-in estiver vazio, então salva o check-in.
if (empty($checkin['entrada'])) {
{
  // Salva o Check-in.
  $mov = 'E';
  if (salvarCheckin($checkin['id_participante_palestra'], $a_dados['lat'], $a_dados['lng'])) $status = '&sucesso=1';
  else $status = '&erro=1';
}

// Se o campo check-in estiver ocupado, salva o check-out.
if (!empty($checkin['entrada'])) {
{
  if (strtotime($agora) > strtotime($horario_maximo)) 
  {
    exit('Horario para checkout encerrado!');
  }
  
  // Salva o Check-out.
  $mov = 'S';
  if (salvarCheckout($checkin['id_participante_palestra'], $a_dados['lat'], $a_dados['lng'])) $status = '&sucesso=1';
  else $status = '&erro=1';
}

header('Location: index.php?secao=palestra&modulo=checkin&token='.$a_dados['token'].'&mov='.$mov.$status);
exit();
*/