<?php /* Smarty version 2.6.1, created on 2018-10-17 20:15:56
         compiled from dashboard_home.htm */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'capitalize', 'dashboard_home.htm', 187, false),array('modifier', 'truncate', 'dashboard_home.htm', 207, false),)), $this); ?>
<!-- Destaques da página  -->
<section class="featured-posts-grid bg-dark">
  <div class="container clearfix">

    <!-- Posts com slide grande -->
    <div class="featured-posts-grid__item featured-posts-grid__item--lg">
      <div id="owl-hero-grid" class="owl-carousel owl-theme owl-carousel--dots-inside">

        <?php if (isset($this->_sections['banner'])) unset($this->_sections['banner']);
$this->_sections['banner']['loop'] = is_array($_loop=$this->_tpl_vars['a_banners']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['banner']['name'] = 'banner';
$this->_sections['banner']['start'] = (int)0;
$this->_sections['banner']['max'] = (int)3;
$this->_sections['banner']['show'] = true;
if ($this->_sections['banner']['max'] < 0)
    $this->_sections['banner']['max'] = $this->_sections['banner']['loop'];
$this->_sections['banner']['step'] = 1;
if ($this->_sections['banner']['start'] < 0)
    $this->_sections['banner']['start'] = max($this->_sections['banner']['step'] > 0 ? 0 : -1, $this->_sections['banner']['loop'] + $this->_sections['banner']['start']);
else
    $this->_sections['banner']['start'] = min($this->_sections['banner']['start'], $this->_sections['banner']['step'] > 0 ? $this->_sections['banner']['loop'] : $this->_sections['banner']['loop']-1);
if ($this->_sections['banner']['show']) {
    $this->_sections['banner']['total'] = min(ceil(($this->_sections['banner']['step'] > 0 ? $this->_sections['banner']['loop'] - $this->_sections['banner']['start'] : $this->_sections['banner']['start']+1)/abs($this->_sections['banner']['step'])), $this->_sections['banner']['max']);
    if ($this->_sections['banner']['total'] == 0)
        $this->_sections['banner']['show'] = false;
} else
    $this->_sections['banner']['total'] = 0;
if ($this->_sections['banner']['show']):

            for ($this->_sections['banner']['index'] = $this->_sections['banner']['start'], $this->_sections['banner']['iteration'] = 1;
                 $this->_sections['banner']['iteration'] <= $this->_sections['banner']['total'];
                 $this->_sections['banner']['index'] += $this->_sections['banner']['step'], $this->_sections['banner']['iteration']++):
$this->_sections['banner']['rownum'] = $this->_sections['banner']['iteration'];
$this->_sections['banner']['index_prev'] = $this->_sections['banner']['index'] - $this->_sections['banner']['step'];
$this->_sections['banner']['index_next'] = $this->_sections['banner']['index'] + $this->_sections['banner']['step'];
$this->_sections['banner']['first']      = ($this->_sections['banner']['iteration'] == 1);
$this->_sections['banner']['last']       = ($this->_sections['banner']['iteration'] == $this->_sections['banner']['total']);
?>
        <?php if ($this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]): ?>
        <article class="entry featured-posts-grid__entry">

          <!--  Imagem de divulgação -->
          <div class="thumb-bg-holder owl-lazy" data-src="<?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['imagem']['bg']; ?>
">
            <img src="<?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['imagem']['bg']; ?>
" alt="" class="d-none">
            <a href="<?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['link']; ?>
" class="thumb-url"></a>
            <div class="bottom-gradient"></div>
          </div>

          <!--  Dados adicionais -->
          <div class="thumb-text-holder">
            <a href="index.php?secao=<?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['tipo']; ?>
&modulo=lista" class="entry__meta-category entry__meta-category-color entry__meta-category-color--orange"><?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['tipo']; ?>
</a>   
            <h2 class="thumb-entry-title">
              <a href="<?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['link']; ?>
"><?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['titulo']; ?>
</a>
            </h2>

            <ul class="entry__meta">

            <!--  Data do evento -->

            <?php if ($this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['tipo'] == 'palestra' || $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['tipo'] == 'oficina'): ?>

            <li class="entry__meta-date">
              <i class="ui-date"></i>

              <?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['data_inicio_format']; ?>


              <?php if ($this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['data_inicio_format'] != $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['data_fim_format']): ?>
              - <?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['data_fim_format']; ?>

              <?php endif; ?>

            </li>

            <!-- Duração do evento -->
            <li>
              Duração:
              <?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['hora_inicio_format']; ?>
 - <?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['hora_fim_format']; ?>

            </li>

            <?php endif; ?>

                <!--  <li class="entry__meta-comments">
                  <i class="ui-comments"></i>
                  <a href="#">Comentários</a>
                </li> -->
            </ul>

          </div>

        </article>
        <?php endif; ?>
        <?php endfor; endif; ?>

      </div>
    </div>

    <!--  Posts com slide médio -->
    
    <?php if (isset($this->_sections['banner'])) unset($this->_sections['banner']);
$this->_sections['banner']['loop'] = is_array($_loop=$this->_tpl_vars['a_banners']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['banner']['name'] = 'banner';
$this->_sections['banner']['start'] = (int)3;
$this->_sections['banner']['max'] = (int)2;
$this->_sections['banner']['show'] = true;
if ($this->_sections['banner']['max'] < 0)
    $this->_sections['banner']['max'] = $this->_sections['banner']['loop'];
$this->_sections['banner']['step'] = 1;
if ($this->_sections['banner']['start'] < 0)
    $this->_sections['banner']['start'] = max($this->_sections['banner']['step'] > 0 ? 0 : -1, $this->_sections['banner']['loop'] + $this->_sections['banner']['start']);
else
    $this->_sections['banner']['start'] = min($this->_sections['banner']['start'], $this->_sections['banner']['step'] > 0 ? $this->_sections['banner']['loop'] : $this->_sections['banner']['loop']-1);
if ($this->_sections['banner']['show']) {
    $this->_sections['banner']['total'] = min(ceil(($this->_sections['banner']['step'] > 0 ? $this->_sections['banner']['loop'] - $this->_sections['banner']['start'] : $this->_sections['banner']['start']+1)/abs($this->_sections['banner']['step'])), $this->_sections['banner']['max']);
    if ($this->_sections['banner']['total'] == 0)
        $this->_sections['banner']['show'] = false;
} else
    $this->_sections['banner']['total'] = 0;
if ($this->_sections['banner']['show']):

            for ($this->_sections['banner']['index'] = $this->_sections['banner']['start'], $this->_sections['banner']['iteration'] = 1;
                 $this->_sections['banner']['iteration'] <= $this->_sections['banner']['total'];
                 $this->_sections['banner']['index'] += $this->_sections['banner']['step'], $this->_sections['banner']['iteration']++):
$this->_sections['banner']['rownum'] = $this->_sections['banner']['iteration'];
$this->_sections['banner']['index_prev'] = $this->_sections['banner']['index'] - $this->_sections['banner']['step'];
$this->_sections['banner']['index_next'] = $this->_sections['banner']['index'] + $this->_sections['banner']['step'];
$this->_sections['banner']['first']      = ($this->_sections['banner']['iteration'] == 1);
$this->_sections['banner']['last']       = ($this->_sections['banner']['iteration'] == $this->_sections['banner']['total']);
?>
    <?php if ($this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]): ?>
    <div class="featured-posts-grid__item featured-posts-grid__item--sm">

      <article class="entry featured-posts-grid__entry">

        <!-- Imagem de divulgação -->
        <div class="thumb-bg-holder" style="background-image: url(<?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['imagem']['md']; ?>
);">
          <a href="<?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['link']; ?>
" class="thumb-url"></a>
          <div class="bottom-gradient"></div>
        </div>

        <!-- Informações adicionais -->
        <div class="thumb-text-holder">

          <!-- Título -->
          <a href="index.php?secao=<?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['tipo']; ?>
&modulo=lista" class="entry__meta-category entry__meta-category-color entry__meta-category-color--orange"><?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['tipo']; ?>
</a>   
          <h2 class="thumb-entry-title thumb-entry-title--sm">
            <a href="<?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['link']; ?>
"><?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['titulo']; ?>
</a>
          </h2>

          <ul class="entry__meta">

            <!--  Data do evento -->

            <?php if ($this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['tipo'] == 'palestra' || $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['tipo'] == 'oficina'): ?>

            <li class="entry__meta-date">
              <i class="ui-date"></i>

              <?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['data_inicio_format']; ?>


              <?php if ($this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['data_inicio_format'] != $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['data_fim_format']): ?>
              - <?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['data_fim_format']; ?>

              <?php endif; ?>

            </li>

            <!-- Duração do evento -->
            <li>
              Duração:
              <?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['hora_inicio_format']; ?>
 - <?php echo $this->_tpl_vars['a_banners'][$this->_sections['banner']['index']]['hora_fim_format']; ?>

            </li>

            <?php endif; ?>

                <!--  <li class="entry__meta-comments">
                  <i class="ui-comments"></i>
                  <a href="#">Comentários</a>
                </li> -->

          </ul>
          
        </div>

      </article>
    </div>
    <?php endif; ?>
    <?php endfor; endif; ?>

  </div>
</section>

    <!--  Conteúdo principal do site  -->
    <div class="main-container container mt-40" id="main-container">
      <div class="row">
        <!-- Content -->
        <div class="col-lg-8 blog__content mb-30">

          <!-- Seção referente às recentes notícias -->
          <section class="section tab-post mb-10">

            <!--  Título da seção  -->
            <div class="title-wrap">
              <h3 class="section-title">Notícias</h3>
            </div>

            <!-- Conteúdo da seção -->
            <div class="tabs__content tabs__content-trigger tab-post__tabs-content">
              <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">

                <!--  Linha da seção  -->
                <div class="row">

                  <!-- Coluna da seção  -->

                  <?php if (isset($this->_sections['noticia'])) unset($this->_sections['noticia']);
$this->_sections['noticia']['loop'] = is_array($_loop=$this->_tpl_vars['a_noticias']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['noticia']['name'] = 'noticia';
$this->_sections['noticia']['start'] = (int)0;
$this->_sections['noticia']['max'] = (int)2;
$this->_sections['noticia']['show'] = true;
if ($this->_sections['noticia']['max'] < 0)
    $this->_sections['noticia']['max'] = $this->_sections['noticia']['loop'];
$this->_sections['noticia']['step'] = 1;
if ($this->_sections['noticia']['start'] < 0)
    $this->_sections['noticia']['start'] = max($this->_sections['noticia']['step'] > 0 ? 0 : -1, $this->_sections['noticia']['loop'] + $this->_sections['noticia']['start']);
else
    $this->_sections['noticia']['start'] = min($this->_sections['noticia']['start'], $this->_sections['noticia']['step'] > 0 ? $this->_sections['noticia']['loop'] : $this->_sections['noticia']['loop']-1);
if ($this->_sections['noticia']['show']) {
    $this->_sections['noticia']['total'] = min(ceil(($this->_sections['noticia']['step'] > 0 ? $this->_sections['noticia']['loop'] - $this->_sections['noticia']['start'] : $this->_sections['noticia']['start']+1)/abs($this->_sections['noticia']['step'])), $this->_sections['noticia']['max']);
    if ($this->_sections['noticia']['total'] == 0)
        $this->_sections['noticia']['show'] = false;
} else
    $this->_sections['noticia']['total'] = 0;
if ($this->_sections['noticia']['show']):

            for ($this->_sections['noticia']['index'] = $this->_sections['noticia']['start'], $this->_sections['noticia']['iteration'] = 1;
                 $this->_sections['noticia']['iteration'] <= $this->_sections['noticia']['total'];
                 $this->_sections['noticia']['index'] += $this->_sections['noticia']['step'], $this->_sections['noticia']['iteration']++):
$this->_sections['noticia']['rownum'] = $this->_sections['noticia']['iteration'];
$this->_sections['noticia']['index_prev'] = $this->_sections['noticia']['index'] - $this->_sections['noticia']['step'];
$this->_sections['noticia']['index_next'] = $this->_sections['noticia']['index'] + $this->_sections['noticia']['step'];
$this->_sections['noticia']['first']      = ($this->_sections['noticia']['iteration'] == 1);
$this->_sections['noticia']['last']       = ($this->_sections['noticia']['iteration'] == $this->_sections['noticia']['total']);
?>

                  <div class="col-md-6">

                    <!--  Conteúdo da coluna  -->
                    <article class="entry">

                      <!--  Imagem de divulgação da notícia  -->
                      <div class="entry__img-holder">
                        <a href="index.php?secao=noticia&modulo=detalhes&id_noticia=<?php echo $this->_tpl_vars['a_noticias'][$this->_sections['noticia']['index']]['id_noticia']; ?>
">
                          <div class="thumb-container thumb-75">
                            <img data-src="<?php echo $this->_tpl_vars['a_noticias'][$this->_sections['noticia']['index']]['imagem']['md']; ?>
" src="../img/geral/sem-imagem_md.jpg" class="entry__img lazyload" alt=""/>
                          </div>
                        </a>
                      </div>

                      <!--  Descrição da notícia  -->
                      <div class="entry__body">

                        <!--  Cabeçalho da descrição da notícia  -->
                        <div class="entry__header">

                          <!--  Título da notícia  -->
                          <h2 class="entry__title">
                            <a href="index.php?secao=noticia&modulo=detalhes&id_noticia=<?php echo $this->_tpl_vars['a_noticias'][$this->_sections['noticia']['index']]['id_noticia']; ?>
"><?php echo $this->_tpl_vars['a_noticias'][$this->_sections['noticia']['index']]['titulo']; ?>
</a>
                          </h2>

                          <ul class="entry__meta">

                            <!--  Autor  -->
                            <li class="entry__meta-author">
                              <i class="ui-author"></i>
                              <a href="#"><?php echo ((is_array($_tmp=$this->_tpl_vars['a_noticias'][$this->_sections['noticia']['index']]['nome_autor'])) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</a>
                            </li>

                            <!-- Data postagem -->
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              <?php echo $this->_tpl_vars['a_noticias'][$this->_sections['noticia']['index']]['data_format']; ?>

                            </li>

                            <!--  Número de comentários  -->
                        <!--   <li class="entry__meta-comments">
                          <i class="ui-comments"></i>
                          <a href="#">Comentários</a>
                        </li> -->

                      </ul>
                    </div>

                    <!-- Texto informativo da notícia -->
                    <div class="entry__excerpt">
                      <p style="text-align: justify;"><?php echo ((is_array($_tmp=$this->_tpl_vars['a_noticias'][$this->_sections['noticia']['index']]['texto'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 200, "...") : smarty_modifier_truncate($_tmp, 200, "...")); ?>
</p>
                    </div>

                  </div>
                </article>
              </div>

              <?php endfor; else: ?>
              <div class="col-md-6">
                <h2 class="entry__title capitalize">não há notícias disponíveis</h2>
              </div>


              <?php endif; ?>

            </div>
          </div>

        </div>
      </section>

      <!-- Seção referente às palestras e oficinas recentes -->
      <section class="section mb-0">

        <!--  Linha da seção  -->
        <div class="row">

          <!-- Primeira coluna da seção (palestras) -->
          <div class="col-md-6 mb-40">

            <!--  Título da coluna  -->
            <div class="title-wrap bottom-line bottom-line--orange">
              <h3 class="section-title section-title--sm">Palestras</h3>
            </div>

            <!-- Conteúdo da coluna -->

            <?php if (isset($this->_sections['palestra'])) unset($this->_sections['palestra']);
$this->_sections['palestra']['loop'] = is_array($_loop=$this->_tpl_vars['a_palestras']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['palestra']['start'] = (int)0;
$this->_sections['palestra']['name'] = 'palestra';
$this->_sections['palestra']['max'] = (int)1;
$this->_sections['palestra']['show'] = true;
if ($this->_sections['palestra']['max'] < 0)
    $this->_sections['palestra']['max'] = $this->_sections['palestra']['loop'];
$this->_sections['palestra']['step'] = 1;
if ($this->_sections['palestra']['start'] < 0)
    $this->_sections['palestra']['start'] = max($this->_sections['palestra']['step'] > 0 ? 0 : -1, $this->_sections['palestra']['loop'] + $this->_sections['palestra']['start']);
else
    $this->_sections['palestra']['start'] = min($this->_sections['palestra']['start'], $this->_sections['palestra']['step'] > 0 ? $this->_sections['palestra']['loop'] : $this->_sections['palestra']['loop']-1);
if ($this->_sections['palestra']['show']) {
    $this->_sections['palestra']['total'] = min(ceil(($this->_sections['palestra']['step'] > 0 ? $this->_sections['palestra']['loop'] - $this->_sections['palestra']['start'] : $this->_sections['palestra']['start']+1)/abs($this->_sections['palestra']['step'])), $this->_sections['palestra']['max']);
    if ($this->_sections['palestra']['total'] == 0)
        $this->_sections['palestra']['show'] = false;
} else
    $this->_sections['palestra']['total'] = 0;
if ($this->_sections['palestra']['show']):

            for ($this->_sections['palestra']['index'] = $this->_sections['palestra']['start'], $this->_sections['palestra']['iteration'] = 1;
                 $this->_sections['palestra']['iteration'] <= $this->_sections['palestra']['total'];
                 $this->_sections['palestra']['index'] += $this->_sections['palestra']['step'], $this->_sections['palestra']['iteration']++):
$this->_sections['palestra']['rownum'] = $this->_sections['palestra']['iteration'];
$this->_sections['palestra']['index_prev'] = $this->_sections['palestra']['index'] - $this->_sections['palestra']['step'];
$this->_sections['palestra']['index_next'] = $this->_sections['palestra']['index'] + $this->_sections['palestra']['step'];
$this->_sections['palestra']['first']      = ($this->_sections['palestra']['iteration'] == 1);
$this->_sections['palestra']['last']       = ($this->_sections['palestra']['iteration'] == $this->_sections['palestra']['total']);
?>

            <article class="entry">

              <!--  Imagem de divulgação da palestra  -->
              <div class="entry__img-holder">
                <a href="index.php?secao=palestra&modulo=detalhes&id_palestra=<?php echo $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['id_palestra']; ?>
">
                  <div class="thumb-container thumb-75">
                    <img data-src="<?php echo $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['imagem']['md']; ?>
" src="../img/geral/sem-imagem_md.jpg" class="entry__img lazyload" alt=""/>
                  </div>
                </a>
              </div>

              <!--  Descrição da palestra  -->
              <div class="entry__body">

                <!--  Informações básicas da palestra  -->
                <div class="entry__header">

                  <!--  Título da palestra  -->
                  <h2 class="entry__title">
                    <a href="index.php?secao=palestra&modulo=detalhes&id_palestra=<?php echo $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['id_palestra']; ?>
"><?php echo $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['titulo']; ?>
</a>
                  </h2>

                  <!-- Palestrantes da palestra  -->
                  <ul class="entry__meta">

                    <?php if (count($_from = (array)$this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['palestrantes'])):
    foreach ($_from as $this->_tpl_vars['palestrante']):
?>
                    <li class="entry__meta-author" style="display: list-item;"> 
                      <i class="ui-author"></i>
                      <a href="#"><?php echo $this->_tpl_vars['palestrante']['nome_palestrante']; ?>
</a>
                    </li>
                    <?php endforeach; unset($_from); endif; ?>
                    
                  </ul>
                  
                  <ul class="entry__meta">

                    <!--  Data do evento -->
                    <li class="entry__meta-date">
                      <i class="ui-date"></i>

                      <?php echo $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['data_inicio_format']; ?>


                      <?php if ($this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['data_inicio_format'] != $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['data_fim_format']): ?>
                      - <?php echo $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['data_fim_format']; ?>

                      <?php endif; ?>

                    </li>

                    <!-- Duração do evento -->
                    <li>
                      Duração:
                      <?php echo $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['hora_inicio_format']; ?>
 - <?php echo $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['hora_fim_format']; ?>

                    </li>

                    <!-- Número de comentários  -->
                    <!--  <li class="entry__meta-comments">
                      <i class="ui-comments"></i>
                      <a href="#">Comentários</a>
                    </li> -->

                  </ul>
                </div>

                <!--  Breve descrição sobre a palestra-->
                <div class="entry__excerpt">
                  <p style="text-align: justify;"><?php echo ((is_array($_tmp=$this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['descricao'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 200, "...") : smarty_modifier_truncate($_tmp, 200, "...")); ?>
</p>
                </div>

              </div>

            </article>

            <?php endfor; else: ?>
            <h2 class="entry__title capitalize">não há palestras disponíveis</h2>

            <?php endif; ?>
            
            <!--  Lista com links referentes à palestras antigas  -->
            <ul class="post-list-small post-list-small--border-top">

              <?php if (isset($this->_sections['palestra'])) unset($this->_sections['palestra']);
$this->_sections['palestra']['loop'] = is_array($_loop=$this->_tpl_vars['a_palestras']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['palestra']['start'] = (int)1;
$this->_sections['palestra']['name'] = 'palestra';
$this->_sections['palestra']['show'] = true;
$this->_sections['palestra']['max'] = $this->_sections['palestra']['loop'];
$this->_sections['palestra']['step'] = 1;
if ($this->_sections['palestra']['start'] < 0)
    $this->_sections['palestra']['start'] = max($this->_sections['palestra']['step'] > 0 ? 0 : -1, $this->_sections['palestra']['loop'] + $this->_sections['palestra']['start']);
else
    $this->_sections['palestra']['start'] = min($this->_sections['palestra']['start'], $this->_sections['palestra']['step'] > 0 ? $this->_sections['palestra']['loop'] : $this->_sections['palestra']['loop']-1);
if ($this->_sections['palestra']['show']) {
    $this->_sections['palestra']['total'] = min(ceil(($this->_sections['palestra']['step'] > 0 ? $this->_sections['palestra']['loop'] - $this->_sections['palestra']['start'] : $this->_sections['palestra']['start']+1)/abs($this->_sections['palestra']['step'])), $this->_sections['palestra']['max']);
    if ($this->_sections['palestra']['total'] == 0)
        $this->_sections['palestra']['show'] = false;
} else
    $this->_sections['palestra']['total'] = 0;
if ($this->_sections['palestra']['show']):

            for ($this->_sections['palestra']['index'] = $this->_sections['palestra']['start'], $this->_sections['palestra']['iteration'] = 1;
                 $this->_sections['palestra']['iteration'] <= $this->_sections['palestra']['total'];
                 $this->_sections['palestra']['index'] += $this->_sections['palestra']['step'], $this->_sections['palestra']['iteration']++):
$this->_sections['palestra']['rownum'] = $this->_sections['palestra']['iteration'];
$this->_sections['palestra']['index_prev'] = $this->_sections['palestra']['index'] - $this->_sections['palestra']['step'];
$this->_sections['palestra']['index_next'] = $this->_sections['palestra']['index'] + $this->_sections['palestra']['step'];
$this->_sections['palestra']['first']      = ($this->_sections['palestra']['iteration'] == 1);
$this->_sections['palestra']['last']       = ($this->_sections['palestra']['iteration'] == $this->_sections['palestra']['total']);
?>
              
              <li class="post-list-small__item">
                <article class="post-list-small__entry">
                  <div class="post-list-small__body">

                    <!--  Título da palestra  -->
                    <h3 class="post-list-small__entry-title">
                      <a href="index.php?secao=palestra&modulo=detalhes&id_palestra=<?php echo $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['id_palestra']; ?>
"><?php echo $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['titulo']; ?>
</a>
                    </h3>

                    <!--  Data do evento -->
                    <ul class="entry__meta">
                      <li class="entry__meta-date">
                        <i class="ui-date"></i>
                        
                        <?php echo $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['data_inicio_format']; ?>


                        <?php if ($this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['data_inicio_format'] != $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['data_fim_format']): ?>
                        - <?php echo $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['data_fim_format']; ?>

                        <?php endif; ?>

                      </li>
                    </ul>

                    <!--  Duração do evento -->
                    <ul class="entry__meta">

                      <li>
                        Duração:
                        <?php echo $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['hora_inicio_format']; ?>
 - <?php echo $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['hora_fim_format']; ?>

                      </li>

                    </ul>

                  </div>
                </article>
              </li>

              <?php endfor; endif; ?>

            </ul>
          </div>

          <!-- Segunda coluna da seção (oficinas) -->
          <div class="col-md-6 mb-40">

            <!--  Título da coluna  -->
            <div class="title-wrap bottom-line bottom-line--violet">
              <h3 class="section-title section-title--sm">Oficinas</h3>
            </div>

            <!-- Conteúdo da coluna -->

            <?php if (isset($this->_sections['oficina'])) unset($this->_sections['oficina']);
$this->_sections['oficina']['loop'] = is_array($_loop=$this->_tpl_vars['a_oficinas']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['oficina']['start'] = (int)0;
$this->_sections['oficina']['name'] = 'oficina';
$this->_sections['oficina']['max'] = (int)1;
$this->_sections['oficina']['show'] = true;
if ($this->_sections['oficina']['max'] < 0)
    $this->_sections['oficina']['max'] = $this->_sections['oficina']['loop'];
$this->_sections['oficina']['step'] = 1;
if ($this->_sections['oficina']['start'] < 0)
    $this->_sections['oficina']['start'] = max($this->_sections['oficina']['step'] > 0 ? 0 : -1, $this->_sections['oficina']['loop'] + $this->_sections['oficina']['start']);
else
    $this->_sections['oficina']['start'] = min($this->_sections['oficina']['start'], $this->_sections['oficina']['step'] > 0 ? $this->_sections['oficina']['loop'] : $this->_sections['oficina']['loop']-1);
if ($this->_sections['oficina']['show']) {
    $this->_sections['oficina']['total'] = min(ceil(($this->_sections['oficina']['step'] > 0 ? $this->_sections['oficina']['loop'] - $this->_sections['oficina']['start'] : $this->_sections['oficina']['start']+1)/abs($this->_sections['oficina']['step'])), $this->_sections['oficina']['max']);
    if ($this->_sections['oficina']['total'] == 0)
        $this->_sections['oficina']['show'] = false;
} else
    $this->_sections['oficina']['total'] = 0;
if ($this->_sections['oficina']['show']):

            for ($this->_sections['oficina']['index'] = $this->_sections['oficina']['start'], $this->_sections['oficina']['iteration'] = 1;
                 $this->_sections['oficina']['iteration'] <= $this->_sections['oficina']['total'];
                 $this->_sections['oficina']['index'] += $this->_sections['oficina']['step'], $this->_sections['oficina']['iteration']++):
$this->_sections['oficina']['rownum'] = $this->_sections['oficina']['iteration'];
$this->_sections['oficina']['index_prev'] = $this->_sections['oficina']['index'] - $this->_sections['oficina']['step'];
$this->_sections['oficina']['index_next'] = $this->_sections['oficina']['index'] + $this->_sections['oficina']['step'];
$this->_sections['oficina']['first']      = ($this->_sections['oficina']['iteration'] == 1);
$this->_sections['oficina']['last']       = ($this->_sections['oficina']['iteration'] == $this->_sections['oficina']['total']);
?>

            <article class="entry">

              <!--  Imagem de divulgação da oficina  -->
              <div class="entry__img-holder">
                <a href="index.php?secao=oficina&modulo=detalhes&id_oficina=<?php echo $this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['id_oficina']; ?>
">
                  <div class="thumb-container thumb-75">
                    <img data-src="<?php echo $this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['imagem']['md']; ?>
" src="../img/geral/sem-imagem_md.jpg" class="entry__img lazyload" alt=""/>
                  </div>
                </a>
              </div>

              <!--  Descrição da oficina  -->
              <div class="entry__body">

                <!--  Informações básicas da oficina  -->
                <div class="entry__header">

                  <!--  Título da oficina  -->
                  <h2 class="entry__title">
                    <a href="index.php?secao=oficina&modulo=detalhes&id_oficina=<?php echo $this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['id_oficina']; ?>
"><?php echo $this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['titulo']; ?>
</a>
                  </h2>
                  
                  <!-- Participantes da oficina  -->
                  <ul class="entry__meta">

                    <?php if (count($_from = (array)$this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['palestrantes'])):
    foreach ($_from as $this->_tpl_vars['palestrante']):
?>
                    <li class="entry__meta-author" style="display: list-item;"> 
                      <i class="ui-author"></i>
                      <a href="#"><?php echo $this->_tpl_vars['palestrante']['nome_palestrante']; ?>
</a>
                    </li>
                    <?php endforeach; unset($_from); endif; ?>
                    
                  </ul>

                  <ul class="entry__meta">

                    <!--  Data do evento -->
                    <li class="entry__meta-date">
                      <i class="ui-date"></i>

                      <?php echo $this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['data_inicio_format']; ?>


                      <?php if ($this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['data_inicio_format'] != $this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['data_fim_format']): ?>
                      - <?php echo $this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['data_fim_format']; ?>

                      <?php endif; ?>

                    </li>

                    <!-- Duração do evento -->
                    <li>
                      Duração:
                      <?php echo $this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['hora_inicio_format']; ?>
 - <?php echo $this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['hora_fim_format']; ?>

                    </li>

                    <!-- Número de comentários  -->
                    <!--  <li class="entry__meta-comments">
                      <i class="ui-comments"></i>
                      <a href="#">Comentários</a>
                    </li> -->

                  </ul>
                </div>

                <!--  Breve descrição sobre a oficina-->
                <div class="entry__excerpt">
                  <p style="text-align: justify;"><?php echo ((is_array($_tmp=$this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['descricao'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 200, "...") : smarty_modifier_truncate($_tmp, 200, "...")); ?>
</p>
                </div>

              </div>

            </article>

            <?php endfor; else: ?>
            <h2 class="entry__title capitalize">não há oficinas disponíveis</h2>

            <?php endif; ?>
            
            <!--  Lista com links referentes à oficinas antigas  -->
            <ul class="post-list-small post-list-small--border-top">

              <?php if (isset($this->_sections['oficina'])) unset($this->_sections['oficina']);
$this->_sections['oficina']['loop'] = is_array($_loop=$this->_tpl_vars['a_oficinas']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['oficina']['start'] = (int)1;
$this->_sections['oficina']['name'] = 'oficina';
$this->_sections['oficina']['show'] = true;
$this->_sections['oficina']['max'] = $this->_sections['oficina']['loop'];
$this->_sections['oficina']['step'] = 1;
if ($this->_sections['oficina']['start'] < 0)
    $this->_sections['oficina']['start'] = max($this->_sections['oficina']['step'] > 0 ? 0 : -1, $this->_sections['oficina']['loop'] + $this->_sections['oficina']['start']);
else
    $this->_sections['oficina']['start'] = min($this->_sections['oficina']['start'], $this->_sections['oficina']['step'] > 0 ? $this->_sections['oficina']['loop'] : $this->_sections['oficina']['loop']-1);
if ($this->_sections['oficina']['show']) {
    $this->_sections['oficina']['total'] = min(ceil(($this->_sections['oficina']['step'] > 0 ? $this->_sections['oficina']['loop'] - $this->_sections['oficina']['start'] : $this->_sections['oficina']['start']+1)/abs($this->_sections['oficina']['step'])), $this->_sections['oficina']['max']);
    if ($this->_sections['oficina']['total'] == 0)
        $this->_sections['oficina']['show'] = false;
} else
    $this->_sections['oficina']['total'] = 0;
if ($this->_sections['oficina']['show']):

            for ($this->_sections['oficina']['index'] = $this->_sections['oficina']['start'], $this->_sections['oficina']['iteration'] = 1;
                 $this->_sections['oficina']['iteration'] <= $this->_sections['oficina']['total'];
                 $this->_sections['oficina']['index'] += $this->_sections['oficina']['step'], $this->_sections['oficina']['iteration']++):
$this->_sections['oficina']['rownum'] = $this->_sections['oficina']['iteration'];
$this->_sections['oficina']['index_prev'] = $this->_sections['oficina']['index'] - $this->_sections['oficina']['step'];
$this->_sections['oficina']['index_next'] = $this->_sections['oficina']['index'] + $this->_sections['oficina']['step'];
$this->_sections['oficina']['first']      = ($this->_sections['oficina']['iteration'] == 1);
$this->_sections['oficina']['last']       = ($this->_sections['oficina']['iteration'] == $this->_sections['oficina']['total']);
?>
              
              <li class="post-list-small__item">
                <article class="post-list-small__entry">
                  <div class="post-list-small__body">

                    <!--  Título da oficina  -->
                    <h3 class="post-list-small__entry-title">
                      <a href="index.php?secao=oficina&modulo=detalhes&id_oficina=<?php echo $this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['id_oficina']; ?>
"><?php echo $this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['titulo']; ?>
</a>
                    </h3>

                    <!--  Data do evento -->
                    <ul class="entry__meta">
                      <li class="entry__meta-date">
                        <i class="ui-date"></i>
                        
                        <?php echo $this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['data_inicio_format']; ?>


                        <?php if ($this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['data_inicio_format'] != $this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['data_fim_format']): ?>
                        - <?php echo $this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['data_fim_format']; ?>

                        <?php endif; ?>

                      </li>
                    </ul>

                    <!--  Duração do evento -->
                    <ul class="entry__meta">

                      <li>
                        Duração:
                        <?php echo $this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['hora_inicio_format']; ?>
 - <?php echo $this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['hora_fim_format']; ?>

                      </li>

                    </ul>

                  </div>
                </article>
              </li>

              <?php endfor; endif; ?>

            </ul>
          </div>

        </div>
      </section>
    </div>

    <!--  Carregando o menu de navegação lateral  -->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu_lateral.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  </div>
</div>