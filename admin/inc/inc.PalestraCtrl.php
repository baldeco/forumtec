<?php

include('classes/phpqrcode/qrlib.php');
require_once('inc.fileadmin.php');
require_once("inc/inc.PalestrantesPalestraCtrl.php");
require_once("inc/inc.InscricoesPalestraCtrl.php");
require_once("inc/inc.BannerCtrl.php");

function inserirPalestra($a_dados) {

  global $conexao;

  $a_dados['id_local'] = (!empty($a_dados['id_local'])) ? (int)$a_dados['id_local'] : 'NULL';

  $sql = 'INSERT INTO palestra VALUES (
            NULL,
            '.$a_dados['id_local'].',
            "'.$a_dados['titulo'].'",
            "'.$a_dados['descricao'].'",
						"'.$a_dados['inicio'].'",
						"'.$a_dados['fim'].'",
						NULL,
						NULL,
            NULL,
            NULL,
						"'.$a_dados['status'].'")';

  try {
    if (executa($sql, $conexao)) {

      $id_palestra = lastID($conexao);

      //Salvando os links entre os palestrantes e a palestra
      inserirPalestrantesPalestra($a_dados['palestrantes'], $id_palestra);

      // Gera QRCode
      $host = $_SERVER['SERVER_NAME'];
      $token = md5($id_palestra);
      $url = 'http://'.$host.'/forumtec/site/index.php?secao=palestra&modulo=checkin';
      $file = './img/qrcode/'.$id_palestra.'.png';

      if (executa('UPDATE palestra SET token="'.$token.'" WHERE id_palestra='.$id_palestra, $conexao)) {
        QRcode::png($url.'&token='.$token, $file, QR_ECLEVEL_L, 30);
      }
      // -----------
    }
  } catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
    exit();
  }

  //Verifica se foi selecionada alguma imagem de envio
  if (!empty($a_dados['img_divulgar']['name'])) {

    //Formata o nome da imagem para id.extensão
    $a_dados['img_divulgar']['name'] = formataNomeArquivo($id_palestra, $a_dados['img_divulgar']);

    //Usa a função de salvarImagens para criar os três formatos de imagens padrões do sistema
    salvarImagens($a_dados['img_divulgar'], DIR_PALESTRAS);

    //Inclui a imagem no registro da palestra
    $sql = 'UPDATE palestra
            SET imagem ="'.$a_dados['img_divulgar']['name'].'"
            WHERE id_palestra = '.$id_palestra;

    //Verifica se o update na palestra deu errado
    if (executa($sql, $conexao) == false) {

      //Deleta as três imagens criadas
      deletarImagens($a_dados['img_divulgar']['name'], DIR_PALESTRAS);

      die('Erro ao salvar a imagem no banco de dados');
    }
  }

  //Verifica se foi selecionada algum anexo
  if (!empty($a_dados['anexo']['name'])) {

    //Formata o nome do anexo para id.extensão
    $a_dados['anexo']['name'] = formataNomeArquivo($id_palestra, $a_dados['anexo']);

    //Usa a função de salvarArquivo para salvar o anexo no servidor
    salvarArquivo($a_dados['anexo'], DIR_ANEXO_PALESTRA);

    //Inclui o anexo no registro da palestra
    $sql = 'UPDATE palestra
            SET anexo = "'.$a_dados['anexo']['name'].'",
                legendaAnexo = "'.$a_dados['legenda_anexo'].'"
            WHERE id_palestra = '.$id_palestra;

    //Verifica se o update na palestra deu errado
    if (executa($sql, $conexao) == false) {

      //Deleta o anexo criado
      deletarArquivo($a_dados['anexo']['name'], DIR_ANEXO_PALESTRA);

      die('Erro ao salvar o anexo no banco de dados');
    }
  }

}

function alterarPalestra($a_dados) {

  global $conexao;

  $a_dados['local'] = (!empty($a_dados['local'])) ? (int)$a_dados['local'] : 'NULL';

  //Verifica a necessidade de alterar a imagem
  if (!empty($a_dados['img_divulgar']['name'])) {

    //Deletando a imagem atual
    deletarImagens($a_dados['foto_atual'], DIR_PALESTRAS);

    //Formata o nome da imagem para id.extensão
    $a_dados['img_divulgar']['name'] = formataNomeArquivo($a_dados['id_palestra'], $a_dados['img_divulgar']);

    //Usa a função de salvarImagens para criar os três formatos de imagens padrões do sistema
    salvarImagens($a_dados['img_divulgar'], DIR_PALESTRAS);

  } else {
    $a_dados['img_divulgar']['name'] = $a_dados['foto_atual'];
  }

  //Verifica a necessidade de alterar o anexo
  if (!empty($a_dados['anexo']['name'])) {

    //Deletando o anexo atual
    deletarArquivo($a_dados['anexo_atual'], DIR_ANEXO_PALESTRA);

    //Formata o nome do anexo para id.extensão
    $a_dados['anexo']['name'] = formataNomeArquivo($a_dados['id_palestra'], $a_dados['anexo']);

    //Usa a função de salvarArquivo para salvar o novo anexo
    salvarArquivo($a_dados['anexo'], DIR_ANEXO_PALESTRA);

  } else {
    $a_dados['anexo']['name'] = $a_dados['anexo_atual'];
  }

  $sql = 'UPDATE palestra
             SET id_local = '.$a_dados['id_local'].',
                 titulo = "'.$a_dados['titulo'].'",
                 descricao = "'.$a_dados['descricao'].'",
                 inicio = "'.$a_dados['inicio'].'",
                 fim = "'.$a_dados['fim'].'",
                 anexo = "'.$a_dados['anexo']['name'].'",
                 legendaAnexo = "'.$a_dados['legenda_anexo'].'",
                 imagem = "'.$a_dados['img_divulgar']['name'].'",
                 status = "'.$a_dados['status'].'"
           WHERE id_palestra='.$a_dados['id_palestra'];

  //Alterando os links entre a palestra e os palestrantes
  deletarPalestrantesPalestra($a_dados['id_palestra']);
  inserirPalestrantesPalestra($a_dados['palestrantes'], $a_dados['id_palestra']);

  $rs = executa($sql, $conexao);

}

function deletarPalestra($id_palestra) {

  global $conexao;

  //Buscando a imagem e o anexo da palestra para deletar do servidor
  $sql = "SELECT imagem, anexo 
          FROM palestra 
          WHERE id_palestra = $id_palestra";

  $rs = executa($sql, $conexao);
  $palestra = buscar($rs)[0];

  if (file_exists('./img/qrcode/'.$id_palestra.'.png')) {
    if (!unlink('./img/qrcode/'.$id_palestra.'.png')) die('Falha ao excluir QRCode.');
  }
  
  $sql = 'DELETE FROM palestra 
          WHERE id_palestra = '.$id_palestra;

  //Deletando os links entre a palestra e os palestrantes
  deletarPalestrantesPalestra($id_palestra);

  //Deletando as inscrições da palestra
  deletarInscricoesPalestra($id_palestra);

  //Deletando possíveis banners linkados à palestra
  resetarBanner($id_palestra, 'p');

  if (executa($sql, $conexao) == false) {
    die('Erro ao deletar a palestra no banco de dados: '.mysql_error());
  }

  //Deletando a imagem do servidor
  deletarImagens($palestra['imagem'], DIR_PALESTRAS);

  //Deletando o anexo do servidor
  deletarArquivo($palestra['anexo'], DIR_ANEXO_PALESTRA);

}

function buscarPalestras($limite = '') {

  global $conexao;

  if (!empty($limite) && $limite > 0) {
    $limite = ' LIMIT '.$limite;
  }

  $sql = 'SELECT p.*,
                 l.nome AS nome_local, 
                 date_format(p.inicio, "%d/%m/%Y") AS data_format,
                 date_format(p.inicio, "%H:%i") AS hora_inicio_format,
                 date_format(p.fim, "%H:%i") AS hora_final_format
            FROM palestra AS p
       LEFT JOIN local AS l ON p.id_local = l.id_local'.$limite;

  $rs = executa($sql, $conexao);
  $a_palestras = buscar($rs);

  for($i=0; $i < sizeof($a_palestras); $i++){
    $a_palestras[$i]['palestrantes'] = buscarPalestrantesPalestra($a_palestras[$i]['id_palestra']);
  }

  return $a_palestras;
}

function buscarPalestra($id_palestra) {

  global $conexao;

  $sql = 'SELECT p.*, l.nome AS nome_local,
                 date_format(inicio, "%d/%m/%Y") AS data_format,
                 date_format(inicio, "%H") AS hora_inicio,
                 date_format(inicio, "%i") AS minuto_inicio,
                 date_format(fim, "%H") AS hora_fim,
                 date_format(fim, "%i") AS minuto_fim
            FROM palestra as p
       LEFT JOIN local AS l ON p.id_local = l.id_local
           WHERE p.id_palestra = '.$id_palestra;

  $rs = executa($sql, $conexao);
  $a_palestra = buscar($rs);

  if ($a_palestra != false) {
    return $a_palestra[0];
  }

  return false;
}
