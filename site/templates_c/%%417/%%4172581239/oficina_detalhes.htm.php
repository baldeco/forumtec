<?php /* Smarty version 2.6.1, created on 2018-10-18 05:03:20
         compiled from oficina_detalhes.htm */ ?>
<div class="main-container container mt-40" id="main-container">
  
  <!-- Conteúdo -->
  <div class="row">

    <div class="col-lg-8 blog__content mb-30">
      
      <!-- Caminho da página -->
      <ul class="breadcrumbs">
        <li class="breadcrumbs__item"><a href="index.php" class="breadcrumbs__url"><i class="ui-home"></i></a></li>
        <li class="breadcrumbs__item"><a href="index.php?secao=oficina&modulo=lista" class="breadcrumbs__url">Oficinas</a></li>
      </ul>

      <!-- Corpo da palestra -->
      <article class="entry">

        <!-- Cabeçalho -->
        <div class="single-post__entry-header entry__header">

          <!--  Mensagem de sucesso -->

          <?php if ($_GET['sucesso']): ?>
          <button id="msg-sucesso" style="background-color: #66CD00; width: 100%; cursor: default;" class="btn btn-lg btn-color btn-button">Inscrição realizada com sucesso</button>
          <?php endif; ?>

          <!-- Título -->
          <h1 class="single-post__entry-title"><?php echo $this->_tpl_vars['a_oficina']['titulo']; ?>
</h1>

        </div>

        <!--  Data do evento  -->
        <h6 class="uppercase" >
          Data do evento:
          <?php echo $this->_tpl_vars['a_oficina']['data_inicio_format']; ?>


          <?php if ($this->_tpl_vars['a_oficina']['data_inicio_format'] != $this->_tpl_vars['a_oficina']['data_fim_format']): ?>
          - <?php echo $this->_tpl_vars['a_oficina']['data_fim_format']; ?>

          <?php endif; ?>

        </h6>

        <!-- Local -->
        <h6 class="uppercase">Local: <?php echo $this->_tpl_vars['a_oficina']['nome_local']; ?>
</h6 style="color:black;">

        <!-- Duração do evento -->
        <h6 class="uppercase" >Duração: <?php echo $this->_tpl_vars['a_oficina']['hora_inicio_format']; ?>
 - <?php echo $this->_tpl_vars['a_oficina']['hora_fim_format']; ?>
</h6>

        <!-- Imagem de divulgação -->
        <div class="entry__img-holder">
          <img src="<?php echo $this->_tpl_vars['a_oficina']['imagem']['bg']; ?>
" alt="" class="entry__img">
        </div>

        <!-- Descrição -->
        <div class="entry__article">
          <p style="text-align: justify;"><?php echo $this->_tpl_vars['a_oficina']['descricao']; ?>
</p>
        </div>

        <?php if ($this->_tpl_vars['a_oficina']['anexo']): ?>
        <div>
          <a href="<?php echo $this->_tpl_vars['a_oficina']['anexo']; ?>
" download="download"><button style="background-color: #CD9B1D;" class="btn btn-lg btn-color btn-button"><?php echo $this->_tpl_vars['a_oficina']['legendaAnexo']; ?>
</button></a>
        </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['a_oficina']['disponivel'] == 's'): ?>
        <div>
          <a href="index.php?secao=inscricao&modulo=oficina&id_oficina=<?php echo $this->_tpl_vars['a_oficina']['id_oficina']; ?>
"><button class="btn btn-lg btn-color btn-button">INSCREVER-SE</button></a>
        </div>
        <?php endif; ?>

        <!-- Palestrantes -->
        <div class="title-wrap mt-40">
          <h5 class="uppercase">Responsáveis</h5>
        </div>

        <div>
          <?php if (count($_from = (array)$this->_tpl_vars['a_oficina']['palestrantes'])):
    foreach ($_from as $this->_tpl_vars['palestrante']):
?>
          <h5 class="uppercase"><?php echo $this->_tpl_vars['palestrante']['nome_palestrante']; ?>
</h5>
          <?php endforeach; unset($_from); endif; ?>
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