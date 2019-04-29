<?php /* Smarty version 2.6.1, created on 2018-10-17 20:55:13
         compiled from noticia_detalhes.htm */ ?>
<div class="main-container container mt-40" id="main-container">
  
  <!-- Conteúdo -->
  <div class="row">

    <div class="col-lg-8 blog__content mb-30">
      
      <!-- Caminho da página -->
      <ul class="breadcrumbs">
        <li class="breadcrumbs__item"><a href="index.php" class="breadcrumbs__url"><i class="ui-home"></i></a></li>
        <li class="breadcrumbs__item"><a href="index.php?secao=noticia&modulo=lista" class="breadcrumbs__url">Notícias</a></li>
      </ul>

      <!-- Corpo da notícia -->
      <article class="entry">

        <!-- Cabeçalho -->
        <div class="single-post__entry-header entry__header">

          <!-- Título -->
          <h1 class="single-post__entry-title"><?php echo $this->_tpl_vars['a_noticia']['titulo']; ?>
</h1>

          <!-- Informações adicionais -->
          <ul class="entry__meta">

            <!-- Autor -->
            <li class="entry__meta-author">
              <i class="ui-author"></i>
              <a href="#"><?php echo $this->_tpl_vars['a_noticia']['nome_autor']; ?>
</a>
            </li>

            <!-- Data de publicação -->
            <li class="entry__meta-date">
              <i class="ui-date"></i>
              <?php echo $this->_tpl_vars['a_noticia']['data_format']; ?>

            </li>

            <!--  <li class="entry__meta-comments">
              <i class="ui-comments"></i>
              <a href="#">115</a>
            </li> -->

          </ul>
        </div>

        <!-- Imagem de divulgação -->
        <div class="entry__img-holder">
          <img src="<?php echo $this->_tpl_vars['a_noticia']['imagem']['bg']; ?>
" alt="" class="entry__img">
        </div>

        <!-- Texto da notícia -->
        <div class="entry__article">
          <p style="text-align: justify;"><?php echo $this->_tpl_vars['a_noticia']['texto']; ?>
</p>
        </div>

        <!-- Autor -->
        <div class="title-wrap mt-40">
          <h5 class="uppercase"><?php echo $this->_tpl_vars['a_noticia']['nome_autor']; ?>
</h5>
        </div>

        <!-- Posts em comum -->
        <!-- <div class="related-posts">
          <div class="title-wrap mt-40">
            <h5 class="uppercase">Related Posts</h5>
          </div>
          <div class="row row-20">
            <div class="col-md-4">
              <article class="entry">
                <div class="entry__img-holder">
                  <a href="single-post.html">
                    <div class="thumb-container thumb-75">
                      <img data-src="assets/img/blog/carousel_img_1.jpg" src="assets/img/empty.png" class="entry__img lazyload" alt="">
                    </div>
                  </a>
                </div>

                <div class="entry__body">
                  <div class="entry__header">
                    <h2 class="entry__title entry__title--sm">
                      <a href="single-post.html">Satelite cost tens of millions or even hundreds of millions of dollars to build</a>
                    </h2>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="entry">
                <div class="entry__img-holder">
                  <a href="single-post.html">
                    <div class="thumb-container thumb-75">
                      <img data-src="assets/img/blog/carousel_img_2.jpg" src="assets/img/empty.png" class="entry__img lazyload" alt="">
                    </div>
                  </a>
                </div>

                <div class="entry__body">
                  <div class="entry__header">
                    <h2 class="entry__title entry__title--sm">
                      <a href="single-post.html">Satelite cost tens of millions or even hundreds of millions of dollars to build</a>
                    </h2>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="entry">
                <div class="entry__img-holder">
                  <a href="single-post.html">
                    <div class="thumb-container thumb-75">
                      <img data-src="assets/img/blog/carousel_img_3.jpg" src="assets/img/empty.png" class="entry__img lazyload" alt="">
                    </div>
                  </a>
                </div>

                <div class="entry__body">
                  <div class="entry__header">
                    <h2 class="entry__title entry__title--sm">
                      <a href="single-post.html">Satelite cost tens of millions or even hundreds of millions of dollars to build</a>
                    </h2>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div> --> 

      </article> 

    </div> 

    <!--  Carregando o menu de navegação lateral  -->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu_lateral.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  </div>
</div>