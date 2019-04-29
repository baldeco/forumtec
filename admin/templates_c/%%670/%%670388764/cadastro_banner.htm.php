<?php /* Smarty version 2.6.1, created on 2018-09-23 18:15:37
         compiled from cadastro_banner.htm */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'cadastro_banner.htm', 38, false),)), $this); ?>
<div id="main-wrapper">
  <div class="row">
    <div class="col-md-12">

      <!-- INICIO DO PRIMEIRO FORM -->
      <div class="panel panel-white">

        <div class="panel-heading clearfix">
          <h4 class="panel-title">Cadastro Banner Principal</h4>
        </div>

        <div class="panel-body">
          <div class="col-md-5">
            <img src="../img/banner/tam_banner.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="panel-heading clearfix">
          <h4 class="panel-title">Banners Cadastrados</h4>
        </div>

        <div class="panel-body">

          <form action="acao.php" method="POST">

            <!-- Lista de notícias/palestras/oficinas cadastradas (slide 1) -->
            <div class="form-group" style="width: 25%; display: inline-block;">

              <label style="display: block; text-align: center;">Slide 1</label>
              <select class="js-states form-control" name="banner_slide_1" tabindex="-1" style="display: none; width: 100%">

                <option value="">Nenhum</option>

                <!-- Área das notícias -->
                <optgroup label="Notícias">

                  <?php if (count($_from = (array)$this->_tpl_vars['a_noticias'])):
    foreach ($_from as $this->_tpl_vars['noticia']):
?>
                  <option <?php if ($this->_tpl_vars['a_banners']['0']['valor'] == ((is_array($_tmp=$this->_tpl_vars['noticia']['id_noticia'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/n") : smarty_modifier_cat($_tmp, "/n"))): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['noticia']['id_noticia']; ?>
/n"><?php echo $this->_tpl_vars['noticia']['titulo']; ?>
</option>
                  <?php endforeach; unset($_from); endif; ?>

                </optgroup>

                <!-- Área das palestras -->
                <optgroup label="Palestras">

                  <?php if (count($_from = (array)$this->_tpl_vars['a_palestras'])):
    foreach ($_from as $this->_tpl_vars['palestra']):
?>
                  <option <?php if ($this->_tpl_vars['a_banners']['0']['valor'] == ((is_array($_tmp=$this->_tpl_vars['palestra']['id_palestra'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/p") : smarty_modifier_cat($_tmp, "/p"))): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['palestra']['id_palestra']; ?>
/p"><?php echo $this->_tpl_vars['palestra']['titulo']; ?>
</option>
                  <?php endforeach; unset($_from); endif; ?>

                </optgroup>

                <!-- Área das oficinas -->
                <optgroup label="Oficinas">

                  <?php if (count($_from = (array)$this->_tpl_vars['a_oficinas'])):
    foreach ($_from as $this->_tpl_vars['oficina']):
?>
                  <option <?php if ($this->_tpl_vars['a_banners']['0']['valor'] == ((is_array($_tmp=$this->_tpl_vars['oficina']['id_oficina'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/o") : smarty_modifier_cat($_tmp, "/o"))): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['oficina']['id_oficina']; ?>
/o"><?php echo $this->_tpl_vars['oficina']['titulo']; ?>
</option>
                  <?php endforeach; unset($_from); endif; ?>

                </optgroup>

              </select>
            </div>

            <!-- Lista de notícias/palestras/oficinas cadastradas (slide 2) -->
            <div class="form-group" style="width: 25%; display: inline-block;">

              <label style="display: block; text-align: center;">Slide 2</label>
              <select class="js-states form-control" name="banner_slide_2" tabindex="-1" style="display: none; width: 100%">

                <option value="">Nenhum</option>

                <!-- Área das notícias -->
                <optgroup label="Notícias">

                  <?php if (count($_from = (array)$this->_tpl_vars['a_noticias'])):
    foreach ($_from as $this->_tpl_vars['noticia']):
?>
                  <option <?php if ($this->_tpl_vars['a_banners']['1']['valor'] == ((is_array($_tmp=$this->_tpl_vars['noticia']['id_noticia'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/n") : smarty_modifier_cat($_tmp, "/n"))): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['noticia']['id_noticia']; ?>
/n"><?php echo $this->_tpl_vars['noticia']['titulo']; ?>
</option>
                  <?php endforeach; unset($_from); endif; ?>

                </optgroup>

                <!-- Área das palestras -->
                <optgroup label="Palestras">

                  <?php if (count($_from = (array)$this->_tpl_vars['a_palestras'])):
    foreach ($_from as $this->_tpl_vars['palestra']):
?>
                  <option <?php if ($this->_tpl_vars['a_banners']['1']['valor'] == ((is_array($_tmp=$this->_tpl_vars['palestra']['id_palestra'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/p") : smarty_modifier_cat($_tmp, "/p"))): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['palestra']['id_palestra']; ?>
/p"><?php echo $this->_tpl_vars['palestra']['titulo']; ?>
</option>
                  <?php endforeach; unset($_from); endif; ?>

                </optgroup>

                <!-- Área das oficinas -->
                <optgroup label="Oficinas">

                  <?php if (count($_from = (array)$this->_tpl_vars['a_oficinas'])):
    foreach ($_from as $this->_tpl_vars['oficina']):
?>
                  <option <?php if ($this->_tpl_vars['a_banners']['1']['valor'] == ((is_array($_tmp=$this->_tpl_vars['oficina']['id_oficina'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/o") : smarty_modifier_cat($_tmp, "/o"))): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['oficina']['id_oficina']; ?>
/o"><?php echo $this->_tpl_vars['oficina']['titulo']; ?>
</option>
                  <?php endforeach; unset($_from); endif; ?>

                </optgroup>

              </select>
            </div>

            <!-- Lista de notícias/palestras/oficinas cadastradas (slide 3) -->
            <div class="form-group" style="width: 25%; display: inline-block;">

              <label style="display: block; text-align: center;">Slide 3</label>
              <select class="js-states form-control" name="banner_slide_3" tabindex="-1" style="display: none; width: 100%">

                <option value="">Nenhum</option>

                <!-- Área das notícias -->
                <optgroup label="Notícias">

                  <?php if (count($_from = (array)$this->_tpl_vars['a_noticias'])):
    foreach ($_from as $this->_tpl_vars['noticia']):
?>
                  <option <?php if ($this->_tpl_vars['a_banners']['2']['valor'] == ((is_array($_tmp=$this->_tpl_vars['noticia']['id_noticia'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/n") : smarty_modifier_cat($_tmp, "/n"))): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['noticia']['id_noticia']; ?>
/n"><?php echo $this->_tpl_vars['noticia']['titulo']; ?>
</option>
                  <?php endforeach; unset($_from); endif; ?>

                </optgroup>

                <!-- Área das palestras -->
                <optgroup label="Palestras">

                  <?php if (count($_from = (array)$this->_tpl_vars['a_palestras'])):
    foreach ($_from as $this->_tpl_vars['palestra']):
?>
                  <option <?php if ($this->_tpl_vars['a_banners']['2']['valor'] == ((is_array($_tmp=$this->_tpl_vars['palestra']['id_palestra'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/p") : smarty_modifier_cat($_tmp, "/p"))): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['palestra']['id_palestra']; ?>
/p"><?php echo $this->_tpl_vars['palestra']['titulo']; ?>
</option>
                  <?php endforeach; unset($_from); endif; ?>

                </optgroup>

                <!-- Área das oficinas -->
                <optgroup label="Oficinas">

                  <?php if (count($_from = (array)$this->_tpl_vars['a_oficinas'])):
    foreach ($_from as $this->_tpl_vars['oficina']):
?>
                  <option <?php if ($this->_tpl_vars['a_banners']['2']['valor'] == ((is_array($_tmp=$this->_tpl_vars['oficina']['id_oficina'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/o") : smarty_modifier_cat($_tmp, "/o"))): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['oficina']['id_oficina']; ?>
/o"><?php echo $this->_tpl_vars['oficina']['titulo']; ?>
</option>
                  <?php endforeach; unset($_from); endif; ?>

                </optgroup>

              </select>
            </div>

            <input type="hidden" name="secao" value="cadastro" />
            <input type="hidden" name="modulo" value="banner" />
            <input type="hidden" name="tipo" value="principal" />
            <input type="submit" class="btn btn-success" value="alterar" />

          </form>

        </div>
      </div>
      <!-- FIM DO PRIMEIRO FORM -->


      <!-- INICIO DO SEGUNDO FORM -->
      <div class="panel panel-white">

        <div class="panel-heading clearfix">
          <h4 class="panel-title">Cadastro Primeiro Banner Lateral</h4>
        </div>

        <div class="panel-body">
          <div class="col-md-5">
            <img src="../img/banner/tam_banner_1.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="panel-heading clearfix">
          <h4 class="panel-title">Banner Cadastrado</h4>
        </div>

        <div class="panel-body">

          <form action="acao.php" method="POST">

            <!-- Lista de notícias/palestras/oficinas cadastradas -->
            <select class="js-states form-control" name="dados_selecionados" tabindex="-1" style="display: none; width: 25%">

              <option value="">Nenhum</option>

              <!-- Área das notícias -->
              <optgroup label="Notícias">

                <?php if (count($_from = (array)$this->_tpl_vars['a_noticias'])):
    foreach ($_from as $this->_tpl_vars['noticia']):
?>
                <option <?php if ($this->_tpl_vars['a_banners']['3']['valor'] == ((is_array($_tmp=$this->_tpl_vars['noticia']['id_noticia'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/n") : smarty_modifier_cat($_tmp, "/n"))): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['noticia']['id_noticia']; ?>
/n"><?php echo $this->_tpl_vars['noticia']['titulo']; ?>
</option>
                <?php endforeach; unset($_from); endif; ?>

              </optgroup>

              <!-- Área das palestras -->
              <optgroup label="Palestras">

                <?php if (count($_from = (array)$this->_tpl_vars['a_palestras'])):
    foreach ($_from as $this->_tpl_vars['palestra']):
?>
                <option <?php if ($this->_tpl_vars['a_banners']['3']['valor'] == ((is_array($_tmp=$this->_tpl_vars['palestra']['id_palestra'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/p") : smarty_modifier_cat($_tmp, "/p"))): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['palestra']['id_palestra']; ?>
/p"><?php echo $this->_tpl_vars['palestra']['titulo']; ?>
</option>
                <?php endforeach; unset($_from); endif; ?>

              </optgroup>

              <!-- Área das oficinas -->
              <optgroup label="Oficinas">

                <?php if (count($_from = (array)$this->_tpl_vars['a_oficinas'])):
    foreach ($_from as $this->_tpl_vars['oficina']):
?>
                <option <?php if ($this->_tpl_vars['a_banners']['3']['valor'] == ((is_array($_tmp=$this->_tpl_vars['oficina']['id_oficina'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/o") : smarty_modifier_cat($_tmp, "/o"))): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['oficina']['id_oficina']; ?>
/o"><?php echo $this->_tpl_vars['oficina']['titulo']; ?>
</option>
                <?php endforeach; unset($_from); endif; ?>

              </optgroup>

            </select>

            <input type="hidden" name="secao" value="cadastro" />
            <input type="hidden" name="modulo" value="banner" />
            <input type="hidden" name="tipo" value="secundario_1" />
            <input type="submit" class="btn btn-success" value="alterar" />

          </form>

        </div>
      </div>
      <!-- FIM DO SEGUNDO FORM -->

      <!-- INICIO DO TERCEIRO FORM -->
      <div class="panel panel-white">

        <div class="panel-heading clearfix">
          <h4 class="panel-title">Cadastro Segundo Banner Lateral</h4>
        </div>

        <div class="panel-body">
          <div class="col-md-5">
            <img src="../img/banner/tam_banner_2.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="panel-heading clearfix">
          <h4 class="panel-title">Banner Cadastrado</h4>
        </div>

        <div class="panel-body">

          <form action="acao.php" method="POST">

            <!-- Lista de notícias/palestras/oficinas cadastradas -->
            <select class="js-states form-control" name="dados_selecionados" tabindex="-1" style="display: none; width: 25%">

              <option value="">Nenhum</option>

              <!-- Área das notícias -->
              <optgroup label="Notícias">

                <?php if (count($_from = (array)$this->_tpl_vars['a_noticias'])):
    foreach ($_from as $this->_tpl_vars['noticia']):
?>
                <option <?php if ($this->_tpl_vars['a_banners']['4']['valor'] == ((is_array($_tmp=$this->_tpl_vars['noticia']['id_noticia'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/n") : smarty_modifier_cat($_tmp, "/n"))): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['noticia']['id_noticia']; ?>
/n"><?php echo $this->_tpl_vars['noticia']['titulo']; ?>
</option>
                <?php endforeach; unset($_from); endif; ?>

              </optgroup>

              <!-- Área das palestras -->
              <optgroup label="Palestras">

                <?php if (count($_from = (array)$this->_tpl_vars['a_palestras'])):
    foreach ($_from as $this->_tpl_vars['palestra']):
?>
                <option <?php if ($this->_tpl_vars['a_banners']['4']['valor'] == ((is_array($_tmp=$this->_tpl_vars['palestra']['id_palestra'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/p") : smarty_modifier_cat($_tmp, "/p"))): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['palestra']['id_palestra']; ?>
/p"><?php echo $this->_tpl_vars['palestra']['titulo']; ?>
</option>
                <?php endforeach; unset($_from); endif; ?>

              </optgroup>

              <!-- Área das oficinas -->
              <optgroup label="Oficinas">

                <?php if (count($_from = (array)$this->_tpl_vars['a_oficinas'])):
    foreach ($_from as $this->_tpl_vars['oficina']):
?>
                <option <?php if ($this->_tpl_vars['a_banners']['4']['valor'] == ((is_array($_tmp=$this->_tpl_vars['oficina']['id_oficina'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/o") : smarty_modifier_cat($_tmp, "/o"))): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['oficina']['id_oficina']; ?>
/o"><?php echo $this->_tpl_vars['oficina']['titulo']; ?>
</option>
                <?php endforeach; unset($_from); endif; ?>

              </optgroup>

            </select>

            <input type="hidden" name="secao" value="cadastro" />
            <input type="hidden" name="modulo" value="banner" />
            <input type="hidden" name="tipo" value="secundario_2" />
            <input type="submit" class="btn btn-success" value="alterar" />

          </form>
        </div>
      </div>
      <!-- FIM DO TERCEIRO FORM -->
    </div>
  </div>
</div>

<!-- Scripts do select com barra de pesquisa -->
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/js/pages/form-select2.js"></script>