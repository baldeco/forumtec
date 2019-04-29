<?php /* Smarty version 2.6.1, created on 2018-10-17 20:57:01
         compiled from oficina_lista.htm */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'oficina_lista.htm', 83, false),)), $this); ?>
<div class="main-container container mt-40" id="main-container">
  
  <!-- Conteúdo -->
  <div class="row">
    
    <div class="col-lg-8 blog__content mb-30">

      <!-- Cabeçalho da seção -->
      <section class="section">
        <div class="title-wrap">
          <h3 class="section-title">Oficinas</h3>
          <a href="#" class="all-posts-url">Ver tudo</a>
        </div>

        <!--  Lista de oficinas -->

        <?php if (isset($this->_sections['oficina'])) unset($this->_sections['oficina']);
$this->_sections['oficina']['loop'] = is_array($_loop=$this->_tpl_vars['a_oficinas']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['oficina']['name'] = 'oficina';
$this->_sections['oficina']['start'] = (int)0;
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

        <article class="entry post-list">

          <!--  Imagem de divulgação  -->
          <div class="entry__img-holder post-list__img-holder">
            <a href="index.php?secao=oficina&modulo=detalhes&id_oficina=<?php echo $this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['id_oficina']; ?>
">
              <div class="thumb-container thumb-75">
                <img data-src="<?php echo $this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['imagem']['sm']; ?>
" src="../img/geral/sem-imagem_sm.jpg" class="entry__img lazyload" alt="">
              </div>
            </a>
          </div>

          <!--  Descrição da oficina  -->
          <div class="entry__body post-list__body">
            <div class="entry__header">

              <!--  Título  -->
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

              <!--  Informações adicionais  -->
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
                
                <!--  <li class="entry__meta-comments">
                  <i class="ui-comments"></i>
                  <a href="#">115</a>
                </li> -->
                
              </ul>
            </div>

            <!--  Texto informativo  -->
            <div class="entry__excerpt">
              <p style="text-align: justify;"><?php echo ((is_array($_tmp=$this->_tpl_vars['a_oficinas'][$this->_sections['oficina']['index']]['descricao'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 200, "...") : smarty_modifier_truncate($_tmp, 200, "...")); ?>
</p>
            </div>

          </div>
        </article>

        <?php endfor; else: ?>
        <h5 style="text-transform: uppercase;">não há oficinas disponíveis</h5>

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