<?php

require_once('inc/inc.ParticipanteCtrl.php');
require_once('inc/inc.functions.php');

switch ($_POST['tipo']) {

  case 'palestra':{
      
      $a_dados = array();
      
      if(valida_email($_POST['f_email'])){
        $a_dados['email'] = $_POST['f_email'];

      }else{
        
        $erro = 'E-mail inválido';
        die(header('Location: index.php?secao=inscricao&modulo=palestra&id_palestra='.$a_dados['id_palestra'].'&erro='.$erro));
      }

      $a_dados['nome'] = $_POST['f_nome'];
      $a_dados['cpf'] = $_POST['f_cpf'];
      $a_dados['telefone'] = $_POST['f_telefone'];
      $a_dados['id_instituicao'] = !empty($_POST['f_instituicao']) ? (int)$_POST['f_instituicao'] : 'NULL';
      $a_dados['id_palestra'] = (int)$_POST['id_palestra'];

      $id_participante = buscarIDParticipantePorEmail($a_dados['email']);

      if(!$id_participante){
        $id_participante = inserirParticipante($a_dados);
      }

      if (inserirParticipantePalestra($a_dados['id_palestra'], $id_participante)) {

        $sucesso = 'Inscrição realizada com sucesso';
        die(header('Location: index.php?secao=palestra&modulo=detalhes&id_palestra='.$a_dados['id_palestra'].'&sucesso='.$sucesso));
        
      } else {

        $erro = 'Erro ao realizar a inscrição';
        die(header('Location: index.php?secao=inscricao&modulo=palestra&id_palestra='.$a_dados['id_palestra'].'&erro='.$erro));
            
      }

      break;
    }

  case 'oficina':{
    
      $a_dados = array();
      
      if(valida_email($_POST['f_email'])){
        $a_dados['email'] = $_POST['f_email'];

      }else{
        
        $erro = 'E-mail inválido';
        die(header('Location: index.php?secao=inscricao&modulo=oficina&id_oficina='.$a_dados['id_oficina'].'&erro='.$erro));
      }

      $a_dados['nome'] = $_POST['f_nome'];
      $a_dados['cpf'] = $_POST['f_cpf'];
      $a_dados['telefone'] = $_POST['f_telefone'];
      $a_dados['id_instituicao'] = !empty($_POST['f_instituicao']) ? (int)$_POST['f_instituicao'] : 'NULL';
      $a_dados['id_oficina'] = (int)$_POST['id_oficina'];

      $id_participante = buscarIDParticipantePorEmail($a_dados['email']);

      if(!$id_participante){
        $id_participante = inserirParticipante($a_dados);
      }

      if (inserirParticipanteOficina($a_dados['id_oficina'], $id_participante)) {

        $sucesso = 'Inscrição realizada com sucesso';
        die(header('Location: index.php?secao=oficina&modulo=detalhes&id_oficina='.$a_dados['id_oficina'].'&sucesso='.$sucesso));
       
      } else {

        $erro = 'Erro ao realizar a inscrição';
        die(header('Location: index.php?secao=inscricao&modulo=oficina&id_oficina='.$a_dados['id_oficina'].'&erro='.$erro));
       
      }

      break;
    }

  default:
    die('Seção inválida');
}
