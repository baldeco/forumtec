<?php

function inserirParticipante($a_form){

  global $conexao;

  $query = 'INSERT INTO participante 
            VALUES (
            NULL,
            '.$a_form['id_instituicao'].',
            "'.$a_form['nome'].'",
            "'.$a_form['cpf'].'",
            "'.$a_form['email'].'",
            "'.$a_form['telefone'].'",
            "a")';

  executa($query, $conexao);

  return lastID($conexao);

}

function inserirParticipantePalestra($id_palestra, $id_participante) {

  global $conexao;

  $query = 'INSERT INTO participante_palestra (id_palestra, id_participante)
			  		VALUES('.$id_palestra.',
	  						   '.$id_participante.')';


  if(!verificaInscricaoExistentePalestra($id_palestra, $id_participante)){
    return executa($query, $conexao);
  }

  return true;

}

function inserirParticipanteOficina($id_oficina, $id_participante) {

  global $conexao;

  $query = 'INSERT INTO participante_oficina (id_oficina, id_participante)
			  		VALUES('.$id_oficina.',
	       				   '.$id_participante.')';

  if(!verificaInscricaoExistenteOficina($id_oficina, $id_participante)){
    return executa($query, $conexao);
  }

  return true;

}

function buscarIDParticipantePorEmail($email){

  global $conexao;

  $query = 'SELECT id_participante 
            FROM participante 
            WHERE email = "'.$email.'"';

  $rs = executa($query, $conexao);

  if(numLinhasSelecionadas($rs) == 1){

    $busca = buscar($rs)[0];
    return $busca['id_participante'];
  }

  return false;

}

function verificaInscricaoExistentePalestra($id_palestra, $id_participante){

  global $conexao;

  $query = 'SELECT id_participante_palestra
            FROM participante_palestra
            WHERE id_palestra = '.$id_palestra.' && id_participante = '.$id_participante;

  $rs = executa($query, $conexao);

  if(numLinhasSelecionadas($rs) == 1){
    return true;
  }

  return false;

}

function verificaInscricaoExistenteOficina($id_oficina, $id_participante){

  global $conexao;

  $query = 'SELECT id_participante_oficina
            FROM participante_oficina
            WHERE id_oficina = '.$id_oficina.' && id_participante = '.$id_participante;


  $rs = executa($query, $conexao);

  if(numLinhasSelecionadas($rs) == 1){
    return true;
  }

  return false;

}
