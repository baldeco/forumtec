<?php

  require_once("inc.dbadmin.php");
  require_once("inc.fileadmin.php");
  require_once("inc.BannerCtrl.php");

  function inserirNoticia($a_noticia) {

    global $conexao;

    $query = 'INSERT INTO noticia VALUES(
                     NULL,
                     '.$a_noticia['id_autor'].',
                     "'.$a_noticia['titulo'].'",
                     NOW(),
                     "'.$a_noticia['texto'].'",
                     "'.$a_noticia['img_divulgar']['name'].'",
                     "'.$a_noticia['status'].'")';

    if(executa($query, $conexao) ==  false){
      die('Erro ao cadastrar a noticia no banco de dados: '.mysql_error());
    }

    //Verifica se foi selecionada alguma imagem de envio
    if(!empty($a_noticia['img_divulgar']['name'])){

      //Pega o id da última inserção feita no banco de dados
      $id = lastID($conexao);

      //Formata o nome da imagem para id.extensão
      $a_noticia['img_divulgar']['name'] = formataNomeArquivo($id, $a_noticia['img_divulgar']);    

      //Usa a função de salvarImagens para criar os três formatos de imagens padrões do sistema
      salvarImagens($a_noticia['img_divulgar'], DIR_NOTICIAS);

      //Inclui a imagem no registro da notícia 
      $query = 'UPDATE noticia
                SET imagem ="'.$a_noticia['img_divulgar']['name'].'"
                WHERE id_noticia = '.$id;

      //Verifica se o update na notícia deu errado
      if(executa($query, $conexao) == false){

        //Deleta as três imagens criadas 
        deletarImagens($a_noticia['img_divulgar']['name'], DIR_NOTICIAS);

        die('Erro ao salvar a imagem no banco de dados');
      }

    }

  }

  function alterarNoticia($a_noticia) {

    global $conexao;

    //Verifica a necessidade de alterar a imagem
    if (!empty($a_noticia['img_divulgar']['name'])) {

      //Deletando a imagem atual
      deletarImagens($a_noticia['foto_atual'], DIR_NOTICIAS);

      //Formata o nome da imagem para id.extensão
      $a_noticia['img_divulgar']['name'] = formataNomeArquivo($a_noticia['id_noticia'], $a_noticia['img_divulgar']);   

      //Usa a função de salvarImagens para criar os três formatos de imagens padrões do sistema
      salvarImagens($a_noticia['img_divulgar'], DIR_NOTICIAS);
    
    } else {
      $a_noticia['img_divulgar']['name'] = $a_noticia['foto_atual'];
    }

    if ($a_noticia['id_autor'] == 0) $a_noticia['id_autor'] = 'NULL';

    $query = 'UPDATE noticia SET
                     id_autor = '.$a_noticia['id_autor'].',
  				           titulo = "'.$a_noticia['titulo'].'",
                     data = NOW(),
                     texto = "'.$a_noticia['texto'].'",
                     imagem = "'.$a_noticia['img_divulgar']['name'].'",
                     status = "'.$a_noticia['status'].'"
               WHERE id_noticia ='.$a_noticia['id_noticia'];

    executa($query, $conexao);
  }

  function excluirNoticia($id_noticia) {

    global $conexao;

    //Buscando a imagem da noticia para deletar do servidor
    $query = "SELECT imagem 
              FROM noticia 
              WHERE id_noticia = $id_noticia";

    $res = executa($query, $conexao);
    $noticia = buscar($res)[0];

    $query = "DELETE FROM noticia 
              WHERE id_noticia = $id_noticia";

    //Deletando possíveis banners linkados à notícia
    resetarBanner($id_noticia, 'n');

    if(executa($query, $conexao) ==  false){
      die('Erro ao deletar a noticia no banco de dados: '.mysql_error());
    }

    //Deletando a imagem do servidor
    deletarImagens($noticia['imagem'], DIR_NOTICIAS);

  }

  function buscarNoticia($id_noticia) {

    global $conexao;

    $query = 'SELECT * FROM noticia WHERE id_noticia ='.$id_noticia;
    $rs = executa($query, $conexao);
    $busca = buscar($rs);

    if ($busca != false) {
      return $busca[0];
    }

    return false;
  }

  function buscarNoticias($limite='') {

    global $conexao;

    if(!empty($limite) && $limite > 0){
      $limite = 'LIMIT '.$limite;
    
    }else{
      $limite = '';
    }

    $query = 'SELECT noticia.*,
                       date_format(noticia.data, "%d/%m/%Y") AS data_format,
                       autor.nome AS nome_autor
              FROM noticia
              LEFT JOIN autor ON noticia.id_autor = autor.id_autor
              '.$limite;

    $res = executa($query, $conexao);

    $a_noticias = buscar($res);

    return $a_noticias;
    
  }

?>
