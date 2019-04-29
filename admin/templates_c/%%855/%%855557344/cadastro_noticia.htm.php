<?php /* Smarty version 2.6.1, created on 2018-09-23 18:06:28
         compiled from cadastro_noticia.htm */ ?>
<div id="main-wrapper">
  <!-- Formulario -->
  <div class="panel panel-white">
    <div class="panel-heading clearfix">
      <h4 class="panel-title">Dados Básicos</h4>
    </div>
    <div class="panel-body">

      <!-- Alertas de sucesso e erro -->
      
      <?php if ($_GET['sucesso']): ?>
      <div class="alert alert-success" role="alert">
      <?php echo $_GET['sucesso']; ?>

      </div>
      <?php elseif ($_GET['erro']): ?>
      <div class="alert alert-danger" role="alert">
      <?php echo $_GET['erro']; ?>

      </div>
      <?php endif; ?>
      
      <form name="formulario" class="form-horizontal" action="acao.php" method="POST" enctype="multipart/form-data">
        <!-- Título -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Título *</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="titulo" value="<?php echo $this->_tpl_vars['a_noticia']['titulo']; ?>
">
          </div>
        </div>
        <!-- Autor -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Autor *</label>
          <div class="col-sm-2">
            <select name="id_autor" class="form-control m-b-sm" style="margin: 0">
              <option value=""></option>
              <?php if (count($_from = (array)$this->_tpl_vars['a_autores'])):
    foreach ($_from as $this->_tpl_vars['autor']):
?>
              <option <?php if ($this->_tpl_vars['autor']['id_autor'] == $this->_tpl_vars['a_noticia']['id_autor']): ?> selected<?php endif; ?> value="<?php echo $this->_tpl_vars['autor']['id_autor']; ?>
 "><?php echo $this->_tpl_vars['autor']['nome']; ?>
</option>
              <?php endforeach; unset($_from); endif; ?>
            </select>
          </div>
        </div>
        <!-- Notícia -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Notícia *</label>
          <div class="col-sm-6">
            <textarea style="resize: none;" rows="10" class="form-control" name="texto"><?php echo $this->_tpl_vars['a_noticia']['texto']; ?>
</textarea>
          </div>
        </div>
        <!-- Imagem -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Imagem divulgação *</label>
          <div class="col-sm-5">
            <label for="img_divulgar" id="btn_upload" tabindex="1"></label>
            <input type="file" name="img_divulgar" id="img_divulgar">
          </div>
        </div>
        <!-- Status -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Status</label>
          <div class="col-md-6">
            <label class="radio-inline">
              <input type="radio" name="status" value="a" <?php if ($this->_tpl_vars['a_noticia']['status'] != 'i'): ?> checked="checked" <?php endif; ?>>
              Ativo
            </label>
            <label class="radio-inline">
              <input type="radio" name="status" value="i" <?php if ($this->_tpl_vars['a_noticia']['status'] == 'i'): ?> checked="checked" <?php endif; ?>>
              Inativo
            </label>
          </div>
        </div>
        <!-- Botões e Hidden fields -->
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-6">
            <input type="hidden" name="secao" value="cadastro">
            <input type="hidden" name="modulo" value="noticia">
            <input type="hidden" name="acao" value="<?php echo $this->_tpl_vars['acao']; ?>
"/>
            <input type="hidden" name="id_noticia" value="<?php echo $this->_tpl_vars['a_noticia']['id_noticia']; ?>
">
            <input type="hidden" name="f_foto_atual" value="<?php echo $this->_tpl_vars['a_noticia']['imagem']; ?>
">
            <button type="submit" class="btn btn-success" onclick="return validar()"><?php echo $this->_tpl_vars['acao']; ?>
</button>
            <button type="reset" class="btn btn-primary">Limpar Campos</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- Tabela -->
  <div class="panel panel-white">
    <div class="panel-heading clearfix">
      <h4 class="panel-title">Dados cadastrados</h4>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-condensed">
          <thead>
            <tr>
              <th>Titulo</th>
              <th>Autor</th>
              <th>Data</th>
              <th>Status</th>
              <th style="width:100px;"></th>
            </tr>
          </thead>
          <tbody>
            <?php if (count($_from = (array)$this->_tpl_vars['a_noticias'])):
    foreach ($_from as $this->_tpl_vars['noticia']):
?>
            <tr>
              <td><?php echo $this->_tpl_vars['noticia']['titulo']; ?>
</td>
              <td><?php echo $this->_tpl_vars['noticia']['nome_autor']; ?>
</td>
              <td><?php echo $this->_tpl_vars['noticia']['data_format']; ?>
</td>
              <td><?php if ($this->_tpl_vars['noticia']['status'] == 'i'): ?>Inativo<?php else: ?>Ativo<?php endif; ?></td>
              <td>
                <a class="btn btn-success" href="index.php?secao=cadastro&modulo=noticia&id_noticia=<?php echo $this->_tpl_vars['noticia']['id_noticia']; ?>
" title="Editar"><i class="fa fa-pencil"></i></a>
                <a class="btn btn-danger" href="acao.php?secao=cadastro&modulo=noticia&acao=deletar&id_noticia=<?php echo $this->_tpl_vars['noticia']['id_noticia']; ?>
" title="Excluir"><i class="fa fa-times"></i></a>
              </td>
            </tr>
            <?php endforeach; unset($_from); endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Javascript do campo de notícia -->
<!-- <script src="assets/plugins/summernote-master/summernote.min.js"></script>
<script src="assets/js/pages/form-elements.js"></script> -->
<script src="assets/js/form_cadastro_noticia.js"></script>