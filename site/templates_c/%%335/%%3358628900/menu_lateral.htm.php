<?php /* Smarty version 2.6.1, created on 2018-10-17 20:15:45
         compiled from menu_lateral.htm */ ?>
<!-- Menu lateral  -->
<aside class="col-lg-4 sidebar sidebar--right">       

  <!-- Lista de patrocinadores -->

  <?php if ($this->_tpl_vars['a_patrocinadores']): ?>
  
  <div class="widget widget-gallery-sm">

    <!--  Cabeçalho da seção de listagem dos patrocinadores-->
    <h4 class="widget-title" align="left">Patrocinadores</h4>

    <ul class="widget-gallery-sm__list">

      <?php if (count($_from = (array)$this->_tpl_vars['a_patrocinadores'])):
    foreach ($_from as $this->_tpl_vars['patrocinador']):
?>
      <li style="width: 100%;" class="widget-gallery-sm__item">

        <?php if ($this->_tpl_vars['patrocinador']['logo'] == ''): ?>        
        
        <h4 style="font-size: 1.5em; text-transform: uppercase;"><?php echo $this->_tpl_vars['patrocinador']['nome']; ?>
</h4>
        
        <?php else: ?>
        <img src="<?php echo $this->_tpl_vars['patrocinador']['logo']; ?>
" alt="">

        <?php endif; ?>

      </li>

      <?php endforeach; unset($_from); endif; ?>

    </ul>
  </div> 

  <?php endif; ?>

  <!-- Tabelas das palestras/oficinas do dia -->
  <div class="widget widget-tabpost">
    <div class="tabs widget-tabpost__tabs">

      <ul class="tabs__list widget-tabpost__tabs-list">

        <li class="tabs__item widget-tabpost__tabs-item tabs__item--active">
          <a href="#tab-latest" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Próximas palestras</a>
        </li>         

        <li class="tabs__item widget-tabpost__tabs-item">
          <a href="#tab-comments" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Próximas oficinas</a>
        </li>  

      </ul> 

      <!-- Conteúdo da tabela -->
      <div class="tabs__content tabs__content-trigger widget-tabpost__tabs-content">

        <!-- Coluna das palestras -->
        <div class="tabs__content-pane tabs__content-pane--active" id="tab-latest">

          <!-- Lista das palestras do dia -->
          <ul class="post-list-small">

            <?php if (isset($this->_sections['proxima_palestra'])) unset($this->_sections['proxima_palestra']);
$this->_sections['proxima_palestra']['loop'] = is_array($_loop=$this->_tpl_vars['a_proximas_palestras']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['proxima_palestra']['start'] = (int)0;
$this->_sections['proxima_palestra']['name'] = 'proxima_palestra';
$this->_sections['proxima_palestra']['show'] = true;
$this->_sections['proxima_palestra']['max'] = $this->_sections['proxima_palestra']['loop'];
$this->_sections['proxima_palestra']['step'] = 1;
if ($this->_sections['proxima_palestra']['start'] < 0)
    $this->_sections['proxima_palestra']['start'] = max($this->_sections['proxima_palestra']['step'] > 0 ? 0 : -1, $this->_sections['proxima_palestra']['loop'] + $this->_sections['proxima_palestra']['start']);
else
    $this->_sections['proxima_palestra']['start'] = min($this->_sections['proxima_palestra']['start'], $this->_sections['proxima_palestra']['step'] > 0 ? $this->_sections['proxima_palestra']['loop'] : $this->_sections['proxima_palestra']['loop']-1);
if ($this->_sections['proxima_palestra']['show']) {
    $this->_sections['proxima_palestra']['total'] = min(ceil(($this->_sections['proxima_palestra']['step'] > 0 ? $this->_sections['proxima_palestra']['loop'] - $this->_sections['proxima_palestra']['start'] : $this->_sections['proxima_palestra']['start']+1)/abs($this->_sections['proxima_palestra']['step'])), $this->_sections['proxima_palestra']['max']);
    if ($this->_sections['proxima_palestra']['total'] == 0)
        $this->_sections['proxima_palestra']['show'] = false;
} else
    $this->_sections['proxima_palestra']['total'] = 0;
if ($this->_sections['proxima_palestra']['show']):

            for ($this->_sections['proxima_palestra']['index'] = $this->_sections['proxima_palestra']['start'], $this->_sections['proxima_palestra']['iteration'] = 1;
                 $this->_sections['proxima_palestra']['iteration'] <= $this->_sections['proxima_palestra']['total'];
                 $this->_sections['proxima_palestra']['index'] += $this->_sections['proxima_palestra']['step'], $this->_sections['proxima_palestra']['iteration']++):
$this->_sections['proxima_palestra']['rownum'] = $this->_sections['proxima_palestra']['iteration'];
$this->_sections['proxima_palestra']['index_prev'] = $this->_sections['proxima_palestra']['index'] - $this->_sections['proxima_palestra']['step'];
$this->_sections['proxima_palestra']['index_next'] = $this->_sections['proxima_palestra']['index'] + $this->_sections['proxima_palestra']['step'];
$this->_sections['proxima_palestra']['first']      = ($this->_sections['proxima_palestra']['iteration'] == 1);
$this->_sections['proxima_palestra']['last']       = ($this->_sections['proxima_palestra']['iteration'] == $this->_sections['proxima_palestra']['total']);
?>
            <li class="post-list-small__item">
              <article class="post-list-small__entry clearfix">

                <!-- Imagem de divulgação -->
                <div class="post-list-small__img-holder">
                  <div class="thumb-container thumb-75">
                    <a href="index.php?secao=palestra&modulo=detalhes&id_palestra=<?php echo $this->_tpl_vars['a_proximas_palestras'][$this->_sections['proxima_palestra']['index']]['id_palestra']; ?>
">
                      <img data-src="<?php echo $this->_tpl_vars['a_proximas_palestras'][$this->_sections['proxima_palestra']['index']]['imagem']['sm']; ?>
" src="../img/geral/sem-imagem_sm.jpg" alt="" class=" lazyload">
                    </a>
                  </div>
                </div>

                <!-- Informações adicionais -->
                <div class="post-list-small__body">

                  <!-- Título -->
                  <h3 class="post-list-small__entry-title">
                    <a href="index.php?secao=palestra&modulo=detalhes&id_palestra=<?php echo $this->_tpl_vars['a_proximas_palestras'][$this->_sections['proxima_palestra']['index']]['id_palestra']; ?>
"><?php echo $this->_tpl_vars['a_proximas_palestras'][$this->_sections['proxima_palestra']['index']]['titulo']; ?>
</a>
                  </h3>
                  
                  <!--  Data do evento -->
                  <ul class="entry__meta">
                    <li class="entry__meta-date">
                      <i class="ui-date"></i>

                      <?php echo $this->_tpl_vars['a_proximas_palestras'][$this->_sections['proxima_palestra']['index']]['data_inicio_format']; ?>


                      <?php if ($this->_tpl_vars['a_proximas_palestras'][$this->_sections['proxima_palestra']['index']]['data_inicio_format'] != $this->_tpl_vars['a_proximas_palestras'][$this->_sections['proxima_palestra']['index']]['data_fim_format']): ?>
                      - <?php echo $this->_tpl_vars['a_proximas_palestras'][$this->_sections['proxima_palestra']['index']]['data_fim_format']; ?>

                      <?php endif; ?>

                    </li>
                  </ul>

                  <!--  Duração do evento -->
                  <ul class="entry__meta">

                    <li>
                      Duração:
                      <?php echo $this->_tpl_vars['a_proximas_palestras'][$this->_sections['proxima_palestra']['index']]['hora_inicio_format']; ?>
 - <?php echo $this->_tpl_vars['a_proximas_palestras'][$this->_sections['proxima_palestra']['index']]['hora_fim_format']; ?>

                    </li>

                  </ul>

                </div>   

              </article>
            </li>

            <?php endfor; else: ?>
            <li class="post-list-small__item">
              <h3 class="post-list-small__entry-title">Nenhuma palestra está disponível</h3>
            </li>

            <?php endif; ?>

          </ul>
        </div>

        <!-- Coluna das oficinas -->
        <div class="tabs__content-pane" id="tab-comments">

          <!-- Lista das oficinas do dia -->
          <ul class="post-list-small">

            <?php if (isset($this->_sections['proxima_oficina'])) unset($this->_sections['proxima_oficina']);
$this->_sections['proxima_oficina']['loop'] = is_array($_loop=$this->_tpl_vars['a_proximas_oficinas']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['proxima_oficina']['start'] = (int)0;
$this->_sections['proxima_oficina']['name'] = 'proxima_oficina';
$this->_sections['proxima_oficina']['show'] = true;
$this->_sections['proxima_oficina']['max'] = $this->_sections['proxima_oficina']['loop'];
$this->_sections['proxima_oficina']['step'] = 1;
if ($this->_sections['proxima_oficina']['start'] < 0)
    $this->_sections['proxima_oficina']['start'] = max($this->_sections['proxima_oficina']['step'] > 0 ? 0 : -1, $this->_sections['proxima_oficina']['loop'] + $this->_sections['proxima_oficina']['start']);
else
    $this->_sections['proxima_oficina']['start'] = min($this->_sections['proxima_oficina']['start'], $this->_sections['proxima_oficina']['step'] > 0 ? $this->_sections['proxima_oficina']['loop'] : $this->_sections['proxima_oficina']['loop']-1);
if ($this->_sections['proxima_oficina']['show']) {
    $this->_sections['proxima_oficina']['total'] = min(ceil(($this->_sections['proxima_oficina']['step'] > 0 ? $this->_sections['proxima_oficina']['loop'] - $this->_sections['proxima_oficina']['start'] : $this->_sections['proxima_oficina']['start']+1)/abs($this->_sections['proxima_oficina']['step'])), $this->_sections['proxima_oficina']['max']);
    if ($this->_sections['proxima_oficina']['total'] == 0)
        $this->_sections['proxima_oficina']['show'] = false;
} else
    $this->_sections['proxima_oficina']['total'] = 0;
if ($this->_sections['proxima_oficina']['show']):

            for ($this->_sections['proxima_oficina']['index'] = $this->_sections['proxima_oficina']['start'], $this->_sections['proxima_oficina']['iteration'] = 1;
                 $this->_sections['proxima_oficina']['iteration'] <= $this->_sections['proxima_oficina']['total'];
                 $this->_sections['proxima_oficina']['index'] += $this->_sections['proxima_oficina']['step'], $this->_sections['proxima_oficina']['iteration']++):
$this->_sections['proxima_oficina']['rownum'] = $this->_sections['proxima_oficina']['iteration'];
$this->_sections['proxima_oficina']['index_prev'] = $this->_sections['proxima_oficina']['index'] - $this->_sections['proxima_oficina']['step'];
$this->_sections['proxima_oficina']['index_next'] = $this->_sections['proxima_oficina']['index'] + $this->_sections['proxima_oficina']['step'];
$this->_sections['proxima_oficina']['first']      = ($this->_sections['proxima_oficina']['iteration'] == 1);
$this->_sections['proxima_oficina']['last']       = ($this->_sections['proxima_oficina']['iteration'] == $this->_sections['proxima_oficina']['total']);
?>
            <li class="post-list-small__item">
              <article class="post-list-small__entry clearfix">

                <!-- Imagem de divulgação -->
                <div class="post-list-small__img-holder">
                  <div class="thumb-container thumb-75">
                    <a href="index.php?secao=oficina&modulo=detalhes&id_oficina=<?php echo $this->_tpl_vars['a_proximas_oficinas'][$this->_sections['proxima_oficina']['index']]['id_oficina']; ?>
">
                      <img data-src="<?php echo $this->_tpl_vars['a_proximas_oficinas'][$this->_sections['proxima_oficina']['index']]['imagem']['sm']; ?>
" src="../img/geral/sem-imagem_sm.jpg" alt="" class=" lazyload">
                    </a>
                  </div>
                </div>

                <!-- Informações adicionais -->
                <div class="post-list-small__body">

                  <!-- Título -->
                  <h3 class="post-list-small__entry-title">
                    <a href="index.php?secao=oficina&modulo=detalhes&id_oficina=<?php echo $this->_tpl_vars['a_proximas_oficinas'][$this->_sections['proxima_oficina']['index']]['id_oficina']; ?>
"><?php echo $this->_tpl_vars['a_proximas_oficinas'][$this->_sections['proxima_oficina']['index']]['titulo']; ?>
</a>
                  </h3>
                  
                  <!--  Data do evento -->
                  <ul class="entry__meta">
                    <li class="entry__meta-date">
                      <i class="ui-date"></i>

                      <?php echo $this->_tpl_vars['a_proximas_oficinas'][$this->_sections['proxima_oficina']['index']]['data_inicio_format']; ?>


                      <?php if ($this->_tpl_vars['a_proximas_oficinas'][$this->_sections['proxima_oficina']['index']]['data_inicio_format'] != $this->_tpl_vars['a_proximas_oficinas'][$this->_sections['proxima_oficina']['index']]['data_fim_format']): ?>
                      - <?php echo $this->_tpl_vars['a_proximas_oficinas'][$this->_sections['proxima_oficina']['index']]['data_fim_format']; ?>

                      <?php endif; ?>

                    </li>
                  </ul>

                  <!--  Duração do evento -->
                  <ul class="entry__meta">

                    <li>
                      Duração:
                      <?php echo $this->_tpl_vars['a_proximas_oficinas'][$this->_sections['proxima_oficina']['index']]['hora_inicio_format']; ?>
 - <?php echo $this->_tpl_vars['a_proximas_oficinas'][$this->_sections['proxima_oficina']['index']]['hora_fim_format']; ?>

                    </li>

                  </ul>

                </div>   

              </article>
            </li>

            <?php endfor; else: ?>
            <li class="post-list-small__item">
              <h3 class="post-list-small__entry-title">Nenhuma oficina está disponível</h3>
            </li>
            
            <?php endif; ?>

          </ul>
        </div>

      </div> 
    </div>             
  </div> 

</aside>