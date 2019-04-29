<?php /* Smarty version 2.6.1, created on 2018-09-23 18:15:01
         compiled from cadastro_autor.htm */ ?>
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

      <form  name="formulario" class="form-horizontal" action="acao.php" method="POST">
        <!-- Nome -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Nome *</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="f_nome" value="<?php echo $this->_tpl_vars['a_autor']['nome']; ?>
">
          </div>
        </div>
        <!-- E-mail -->
        <div class="form-group">
          <label class="col-sm-3 control-label">E-mail *</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="f_email" value="<?php echo $this->_tpl_vars['a_autor']['email']; ?>
">
          </div>
        </div>
        <!-- CPF -->
        <div class="form-group">
          <label class="col-sm-3 control-label">CPF</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="f_cpf" maxlength="11" value="<?php echo $this->_tpl_vars['a_autor']['cpf']; ?>
" >
          </div>
        </div>
        <!-- Telefone -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Telefone</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="f_telefone" value="<?php echo $this->_tpl_vars['a_autor']['telefone']; ?>
">
          </div>
        </div>
        <!-- Status -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Status</label>
          <div class="col-sm-4">
            <label class="radio-inline">
              <input type="radio" name="f_status" value="a" <?php if ($this->_tpl_vars['a_autor']['status'] != 'i'): ?> checked="checked" <?php endif; ?>>
              Ativo
            </label>
            <label class="radio-inline">
              <input type="radio" name="f_status" value="i" <?php if ($this->_tpl_vars['a_autor']['status'] == 'i'): ?> checked="checked" <?php endif; ?>>
              Inativo
            </label>
          </div>
        </div>
        <!-- Botões e Hidden fields -->
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-6">
            <input type="hidden" name="secao" value="cadastro"/>
            <input type="hidden" name="modulo" value="autor"/>
            <input type="hidden" name="acao" value="<?php echo $this->_tpl_vars['acao']; ?>
"/>
            <input type="hidden" name="id_autor" value="<?php echo $this->_tpl_vars['a_autor']['id_autor']; ?>
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
              <th>Nome</th>
              <th>CPF</th>
              <th>E-mail</th>
              <th>Telefone</th>
              <th>Status</th>
              <th style="width:100px;">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php if (count($_from = (array)$this->_tpl_vars['a_autores'])):
    foreach ($_from as $this->_tpl_vars['autor']):
?>
            <tr>
              <td><?php echo $this->_tpl_vars['autor']['nome']; ?>
</td>
              <td><?php if ($this->_tpl_vars['autor']['cpf']):  echo $this->_tpl_vars['autor']['cpf'];  else: ?>Inexistente<?php endif; ?></td>
              <td><?php echo $this->_tpl_vars['autor']['email']; ?>
</td>
              <td><?php if ($this->_tpl_vars['autor']['telefone']):  echo $this->_tpl_vars['autor']['telefone'];  else: ?>Inexistente<?php endif; ?></td>
              <td><?php if ($this->_tpl_vars['autor']['status'] == 'i'): ?>Inativo<?php else: ?> Ativo<?php endif; ?></td>
              <td>
                <a class="btn btn-success" href="index.php?secao=cadastro&modulo=autor&id_autor=<?php echo $this->_tpl_vars['autor']['id_autor']; ?>
" title="Editar"><i class="fa fa-pencil"></i></a>
                <a class="btn btn-danger" href="acao.php?secao=cadastro&modulo=autor&acao=deletar&id_autor=<?php echo $this->_tpl_vars['autor']['id_autor']; ?>
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

<!--  Javascript do formulário -->
<script src="assets/js/form_cadastro_autor.js"></script>