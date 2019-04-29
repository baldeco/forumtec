<?php

require_once('inc/inc.InscricoesOficinaCtrl.php');
require_once('inc/inc.InscricoesPalestraCtrl.php');

function inserirParticipante($a_form) {

  global $conexao;

  $query = 'INSERT INTO participante VALUES (
                        NULL,
                        '.$a_form['id_instituicao'].',
                        "'.$a_form['nome'].'",
                        "'.$a_form['cpf'].'",
                        "'.$a_form['email'].'",
                        "'.$a_form['telefone'].'",
                        "'.$a_form['status'].'")';

  executa($query, $conexao);
}

function alterarParticipante($a_form) {

  global $conexao;

  $sql = 'UPDATE participante SET id_instituicao = '.$a_form['id_instituicao'].',
                                  nome = "'.$a_form['nome'].'",
                                  cpf = "'.$a_form['cpf'].'",
                                  email = "'.$a_form['email'].'",
                                  telefone = "'.$a_form['telefone'].'",
                                  status = "'.$a_form['status'].'"
                            WHERE id_participante = '.$a_form['id_participante'];

  executa($sql, $conexao);
}

function deletarParticipante($id_participante) {

  global $conexao;

  $sql = 'DELETE FROM participante WHERE id_participante = '.$id_participante;

  //Deletando o participante de possiveis palestras e oficinas
  deletarParticipantePalestra($id_participante);
  deletarParticipanteOficina($id_participante);


  executa($sql, $conexao);
}

function buscarParticipantes($limite = '') {

  global $conexao;

  if (!empty($limite) && $limite > 0) $limite = ' LIMIT '.$limite;
  else $limite = '';

  $query = 'SELECT p.*,
                   i.nome AS instituicao
              FROM participante AS p
         LEFT JOIN instituicao AS i ON p.id_instituicao = i.id_instituicao'.$limite;

  $res = executa($query, $conexao);
  $a_participante = buscar($res);

  return $a_participante;
}

function buscarParticipante($id_participante) {

  global $conexao;

  $query = 'SELECT * FROM participante WHERE id_participante = '.$id_participante;
  $res = executa($query, $conexao);
  $a_participante = buscar($res);

  if ($res != false) {
    return $a_participante[0];
  }

  return false;
}