<?php

  function buscarNoticia($id_noticia) {

    global $conexao;

    $query = 'SELECT n.*,
                     date_format(n.data, "%d/%m/%Y") as data_format,
                     a.id_autor, a.nome as nome_autor 
              FROM noticia as n
              INNER JOIN autor as a
              ON  n.id_autor = a.id_autor
              WHERE n.id_noticia ='.$id_noticia;

    $rs = executa($query, $conexao);
    $a_noticia = buscar($rs);

    if ($a_noticia != false) {

      $a_noticia[0]['imagem'] = criarNomeImagens($a_noticia[0]['imagem'], DIR_NOTICIAS);
      return $a_noticia[0];
    
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
                       autor.nome AS nome_autor,
                       autor.id_autor
              FROM noticia
              LEFT JOIN autor ON noticia.id_autor = autor.id_autor
              WHERE noticia.status = "a"
              ORDER BY data desc
              '.$limite;

    $res = executa($query, $conexao);

    if($res != false){

      $a_noticias = buscar($res);

      for ($i=0; $i < sizeof($a_noticias); $i++ ) {
        $a_noticias[$i]['imagem'] = criarNomeImagens($a_noticias[$i]['imagem'], DIR_NOTICIAS);
      }

      return $a_noticias;

    }

    return null;
  
  }

?>