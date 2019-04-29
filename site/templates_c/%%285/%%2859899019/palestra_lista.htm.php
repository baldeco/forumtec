<?php /* Smarty version 2.6.1, created on 2018-10-17 20:16:01
         compiled from palestra_lista.htm */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'palestra_lista.htm', 76, false),)), $this); ?>
<div class="main-container container mt-40" id="main-container">
  
  <!-- Conteúdo -->
  <div class="row">
    
    <div class="col-lg-8 blog__content mb-30">
      
      <!-- Cabeçalho da seção -->
      <section class="section">
       
        <div class="title-wrap">
          <h3 class="section-title">Palestras</h3>
          <a href="#" class="all-posts-url">Ver tudo</a>
        </div>
        
        <!--  Lista de palestras -->

        <?php if (isset($this->_sections['palestra'])) unset($this->_sections['palestra']);
$this->_sections['palestra']['loop'] = is_array($_loop=$this->_tpl_vars['a_palestras']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['palestra']['name'] = 'palestra';
$this->_sections['palestra']['start'] = (int)0;
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
        <article class="entry post-list">
          <!--  Imagem de divulgação  -->
          <div class="entry__img-holder post-list__img-holder">
            <a href="index.php?secao=palestra&modulo=detalhes&id_palestra=<?php echo $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['id_palestra']; ?>
">
              <div class="thumb-container thumb-75">
                <img data-src="<?php echo $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['imagem']['sm']; ?>
" src="../img/geral/sem-imagem_sm.jpg" class="entry__img lazyload" alt="">
              </div>
            </a>
          </div>
         
          <!--  Descrição da palestra  -->
          <div class="entry__body post-list__body">
            <div class="entry__header">
              
              <!--  Título  -->
              <h2 class="entry__title">
                <a href="index.php?secao=palestra&modulo=detalhes&id_palestra=<?php echo $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['id_palestra']; ?>
"><?php echo $this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['titulo']; ?>
</a>

              </h2>

              <!-- Participantes da palestra  -->
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
              
              <!--  Informações adicionais  -->
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
                <!--  <li class="entry__meta-comments">
                  <i class="ui-comments"></i>
                  <a href="#">115</a>
                </li> -->
              </ul>
            </div>

            <!--  Texto informativo  -->
            <div class="entry__excerpt">
              <p style="text-align: justify;"><?php echo ((is_array($_tmp=$this->_tpl_vars['a_palestras'][$this->_sections['palestra']['index']]['descricao'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 200, "...") : smarty_modifier_truncate($_tmp, 200, "...")); ?>
</p>
            </div>
          </div>

        </article>
        <?php endfor; else: ?>
        <h5 style="text-transform: uppercase;">não há palestras disponíveis</h5>
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