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

//VERIFICAÇÕES NA TABELA PARTICIPANTE E NA TABELA PARTICIPANTE_PALESTRA

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

$checkin_preenchido = verificarCheckin($id_participante,$palestras_filtradas);

if ($checkin_preenchido != false) { // Se algum estiver com o campo preenchido, é retornado o registro.
  // Recupera do DB o check
  $checkin = buscarCheckin($checkin_preenchido['id_palestra'], $id_participante);
}

if ($checkin_preenchido == false) 
{
  //Verifico se a palestra, na qual está tendo a tentiva de check-in, está relacionada com o participante.
  //Para salvar o check-in no registro que tenha a id dessa palestra.
  $verificado = buscarCheckin($id_palestra, $id_participante);

  if ($verificado != false) // Se estiverem relacionados.
  { 
    $checkin = buscarCheckin($id_palestra, $id_participante);
  }
  // Se não estiverem relacionados, é utilizado o primeiro registro encontrado que a apresenta a id do participante com uma das palestras filtradas para armazenar a entrada.

  if ($verificado == false) 
  {
    // É procurado qual das palestra o participante está relacionado, sendo retornado o primeiro registro.
    $checkin = alternativasCheckin($id_participante, $palestras_filtradas);
  }
}

if (empty($checkin['entrada'])) 
{ 
  $mov = 'E';
  if (salvarCheckin($checkin['id_participante_palestra'], $a_dados['lat'], $a_dados['lng'])) $status = '&sucesso=1';
  else $status = '&erro=1';
}

if (!empty($checkin['entrada'])) 
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
