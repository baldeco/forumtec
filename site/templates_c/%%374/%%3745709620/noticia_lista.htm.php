<?php /* Smarty version 2.6.1, created on 2018-10-17 20:36:27
         compiled from noticia_lista.htm */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'noticia_lista.htm', 64, false),)), $this); ?>
<div class="main-container container mt-40" id="main-container">
  
  <!-- Conteúdo -->
  <div class="row">
    
    <div class="col-lg-8 blog__content mb-30">

      <!-- Cabeçalho da seção -->
      <section class="section">
        <div class="title-wrap">
          <h3 class="section-title">últimas Notícias</h3>
          <a href="#" class="all-posts-url">Ver tudo</a>
        </div>

        <!--  Lista de notícias -->

        <?php if (isset($this->_sections['noticia'])) unset($this->_sections['noticia']);
$this->_sections['noticia']['loop'] = is_array($_loop=$this->_tpl_vars['a_noticias']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['noticia']['name'] = 'noticia';
$this->_sections['noticia']['start'] = (int)0;
$this->_sections['noticia']['show'] = true;
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

        <article class="entry post-list">

          <!--  Imagem de divulgação  -->
          <div class="entry__img-holder post-list__img-holder">
            <a href="index.php?secao=noticia&modulo=detalhes&id_noticia=<?php echo $this->_tpl_vars['a_noticias'][$this->_sections['noticia']['index']]['id_noticia']; ?>
">
              <div class="thumb-container thumb-75">
                <img data-src="<?php echo $this->_tpl_vars['a_noticias'][$this->_sections['noticia']['index']]['imagem']['sm']; ?>
" src="../img/geral/sem-imagem_sm.jpg" class="entry__img lazyload" alt="">
              </div>
            </a>
          </div>

          <!--  Descrição da notícia  -->
          <div class="entry__body post-list__body">
            <div class="entry__header">

              <!--  Título  -->
              <h2 class="entry__title">
                <a href="index.php?secao=noticia&modulo=detalhes&id_noticia=<?php echo $this->_tpl_vars['a_noticias'][$this->_sections['noticia']['index']]['id_noticia']; ?>
"><?php echo $this->_tpl_vars['a_noticias'][$this->_sections['noticia']['index']]['titulo']; ?>
</a>
              </h2>

              <!--  Informações adicionais  -->
              <ul class="entry__meta">
                
                <!-- Autor -->
                <li class="entry__meta-author">
                  <i class="ui-author"></i>
                  <a href="#"><?php echo $this->_tpl_vars['a_noticias'][$this->_sections['noticia']['index']]['nome_autor']; ?>
</a>
                </li>

                <!--  Data da publicação  -->
                <li class="entry__meta-date">
                  <i class="ui-date"></i>
                  <?php echo $this->_tpl_vars['a_noticias'][$this->_sections['noticia']['index']]['data_format']; ?>

                </li>
                
                <!--  <li class="entry__meta-comments">
                  <i class="ui-comments"></i>
                  <a href="#">115</a>
                </li> -->
              
              </ul>
            </div>

            <!--  Texto informativo  -->
            <div class="entry__excerpt">
              <p style="text-align: justify;"><?php echo ((is_array($_tmp=$this->_tpl_vars['a_noticias'][$this->_sections['noticia']['index']]['texto'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 200, "...") : smarty_modifier_truncate($_tmp, 200, "...")); ?>
</p>
            </div>

          </div>
        </article>

        <?php endfor; else: ?>
        <h5 style="text-transform: uppercase;">não há notícias disponíveis</h5>

        <?php endif; ?>

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