<?php

switch ($_SERVER['SERVER_NAME']) {
  case 'localhost':
    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "");
    define("DB", "forumtec");
    break;

  default:
    define("HOST", "localhost");
    define("USER", "id5976422_forumtec");
    define("PASS", "fabrica18");
    define("DB", "id5976422_forumtec");
}

$dsn = 'mysql:host='.HOST.';dbname='.DB;
$opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'");

$conn = new PDO($dsn, USER, PASS, $opcoes);

function query($conn, $string, $array) {
  try {
    $sql = $conn->prepare($string, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sql->execute($array);
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    echo 'Erro: '.$e->getMessage();
  }
  return $result;
}

function executa($conn, $string, $array) {
  try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare($string);
    $result = $sql->execute($array);
    if ($result) return true;
  } catch (PDOException $e) {
    echo 'Erro: '.$e->getMessage();
  }
  return false;
}

function begin($conn) {
  $conn->beginTransaction();
}

function commit($conn) {
  $conn->commit();
}

function rollback($conn) {
  $conn->rollBack();
}

function close($conn) {
  $conn = null;
}

function lastID($conn) {
  return $conn->lastInsertId();
}
