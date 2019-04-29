<?php /* Smarty version 2.6.1, created on 2018-09-23 18:15:18
         compiled from cadastro_patrocinador.htm */ ?>
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
        <!-- Nome -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Nome *</label>
          <div class="col-sm-4">
            <input type="text" name="nome" class="form-control" value="<?php echo $this->_tpl_vars['a_patrocinador']['nome']; ?>
">
          </div>
        </div>
        <!-- Tipo -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Tipo *</label>
          <div class="col-sm-2">
            <select name="tipo" class="form-control autosize">
              <option value=""></option>
              <option <?php if ($this->_tpl_vars['a_patrocinador']['tipo'] == 'f'): ?> selected="selected" <?php endif; ?> value="f">Pessoa Física</option>
              <option <?php if ($this->_tpl_vars['a_patrocinador']['tipo'] == 'j'): ?> selected="selected" <?php endif; ?> value="j">Pessoa Jurídica</option>
            </select>
          </div>
        </div>
        <!-- CPF/CNPJ -->
        <div class="form-group">
          <label class="col-sm-3 control-label">CPF/CNPJ</label>
          <div class="col-sm-2">
            <input type="text" name="cnpj" maxlength="14" class="form-control" value="<?php echo $this->_tpl_vars['a_patrocinador']['cnpj']; ?>
">
          </div>
        </div>
        <!-- E-mail -->
        <div class="form-group">
          <label class="col-sm-3 control-label">E-mail *</label>
          <div class="col-sm-4">
            <input type="text" name="email" class="form-control" value="<?php echo $this->_tpl_vars['a_patrocinador']['email']; ?>
">
          </div>
        </div>
        <!-- Logo -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Logo do patrocinador *</label>
          <div class="col-sm-5">
            <label for="logo" id="btn_upload" tabindex="1"></label>
            <input type="file" id="logo" name="logo"">
          </div>
        </div>
        <!-- Status -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Status</label>
          <div class="col-sm-6">
            <label class="radio-inline">
              <input type="radio" name="status" value="a" <?php if ($this->_tpl_vars['a_patrocinador']['status'] != 'i'): ?> checked="checked" <?php endif; ?> >
              Ativo
            </label>
            <label class="radio-inline">
              <input type="radio" name="status" value="i" <?php if ($this->_tpl_vars['a_patrocinador']['status'] == 'i'): ?> checked="checked" <?php endif; ?>>
              Inativo
            </label>
          </div>
        </div>
        <!-- Botões e Hidden fields -->
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-6">
            <input type="hidden" name="acao" value="<?php echo $this->_tpl_vars['acao']; ?>
">
            <input type="hidden" name="id_patrocinador" value="<?php echo $this->_tpl_vars['a_patrocinador']['id_patrocinador']; ?>
">
            <input type="hidden" name="logo_atual" value="<?php echo $this->_tpl_vars['a_patrocinador']['logo']; ?>
">
            <input type="hidden" name="modulo" value="patrocinador">
            <input type="hidden" name="secao" value="cadastro">
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
              <th>Patrocinador</th>
              <th>Tipo</th>
              <th>CPF/CNPJ</th>
              <th>E-mail</th>
              <th>Status</th>
              <th style="width:100px;">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php if (count($_from = (array)$this->_tpl_vars['a_patrocinadores'])):
    foreach ($_from as $this->_tpl_vars['patrocinador']):
?>
            <tr>
              <td><?php echo $this->_tpl_vars['patrocinador']['nome']; ?>
</td>
              <td><?php if ($this->_tpl_vars['patrocinador']['tipo'] == 'f'): ?>P.Física<?php else: ?>P.Jurídica<?php endif; ?></td>
              <td><?php if ($this->_tpl_vars['patrocinador']['cnpj']):  echo $this->_tpl_vars['patrocinador']['cnpj'];  else: ?>Inexistente<?php endif; ?></td>
              <td><?php echo $this->_tpl_vars['patrocinador']['email']; ?>
</td>
              <td><?php if ($this->_tpl_vars['patrocinador']['status'] == 'i'): ?>Inativo<?php else: ?> Ativo<?php endif; ?></td>
              <td>
                <a class="btn btn-success" href="index.php?secao=cadastro&modulo=patrocinador&acao=alterar&id_patrocinador=<?php echo $this->_tpl_vars['patrocinador']['id_patrocinador']; ?>
" title="Editar"><i class="fa fa-pencil"></i></a>
                <a class="btn btn-danger" href="acao.php?secao=cadastro&modulo=patrocinador&acao=deletar&id_patrocinador=<?php echo $this->_tpl_vars['patrocinador']['id_patrocinador']; ?>
" title="Excluir"><i class="fa fa-times"></i></a>
              </td>
              <?php endforeach; unset($_from); endif; ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!--  Javascript do formulário -->
<script src="assets/js/form_cadastro_patrocinador.js"></script>