<?php

require_once('inc/inc.ParticipanteCtrl.php');
require_once('inc/inc.PalestraCtrl.php');
require_once('inc/inc.functions.php');

switch ($_POST['tipo']) {

  case 'palestra':{
      
      $a_dados = array();
      
      if(valida_email($_POST['f_email']))
      {
        $a_dados['email'] = $_POST['f_email'];
      }else{
        $erro = 'E-mail inválido';
        die(header('Location: index.php?secao=inscricao&modulo=palestra&id_palestra='.$a_dados['id_palestra'].'&erro='.$erro));
      }

      $a_dados['nome'] = $_POST['f_nome'];
      $a_dados['cpf'] = $_POST['f_cpf'];
      $a_dados['telefone'] = $_POST['f_telefone'];
      $a_dados['id_instituicao'] = !empty($_POST['f_instituicao']) ? (int)$_POST['f_instituicao'] : 'NULL';
      $a_dados['lat'] = $_POST['f_lat'];
      $a_dados['lng'] = $_POST['f_lng'];
      $a_dados['id_palestra'] = (int)$_POST['id_palestra'];
      
      $id_participante = buscarIDParticipantePorEmail($a_dados['email']);

      if(!$id_participante){
        $id_participante = inserirParticipante($a_dados);
      }

      if (inserirParticipantePalestra($a_dados['id_palestra'], $id_participante)) 
      {
        $particiante_id = buscarIDParticipantePorEmail($a_dados['email']);

        $checkin = buscarCheckin($a_dados['id_palestra'], $particiante_id);

        salvarCheckin($checkin['id_participante_palestra'],$a_dados['lat'],$a_dados['lng']); 

        $token = buscarToken($a_dados['id_palestra']);
         
        $sucesso = 2;
         
         die(header('Location: index.php?secao=palestra&modulo=checkin&token='.$token.'&sucesso='.$sucesso));
      } else {
        
        $erro = 'Erro ao realizar a inscrição'; 
  
        die(header('Location: index.php?secao=inscricao&modulo=palestra&id_palestra='.$a_dados['id_palestra'].'&erro='.$erro));   
      }

      break;
    }

  default:
    die('Seção inválida');
}
