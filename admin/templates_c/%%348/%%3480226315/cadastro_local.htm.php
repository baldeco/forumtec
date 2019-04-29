<?php /* Smarty version 2.6.1, created on 2018-09-23 18:15:34
         compiled from cadastro_local.htm */ ?>
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
      
      <form name="formulario" class="form-horizontal" action="acao.php" method="POST">
        <!-- Local -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Local *</label>
          <div class="col-sm-4">
            <input type="text" name="nome" class="form-control" value="<?php echo $this->_tpl_vars['a_local']['nome']; ?>
">
          </div>
        </div>
        <!-- Capacidade -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Capacidade</label>
          <div class="col-sm-2">
            <input type="text" name="capacidade" class="form-control" value="<?php echo $this->_tpl_vars['a_local']['capacidade']; ?>
">
          </div>
        </div>
        <!-- Status -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Status</label>
          <div class="col-sm-6">
            <label class="radio-inline">
              <input type="radio" name="f_status" value="a" <?php if ($this->_tpl_vars['a_local']['status'] != 'i'): ?> checked="checked" <?php endif; ?> >
              Ativo
            </label>
            <label class="radio-inline">
              <input type="radio" name="f_status" value="i" <?php if ($this->_tpl_vars['a_local']['status'] == 'i'): ?> checked="checked" <?php endif; ?>>
              Inativo
            </label>
          </div>
        </div>
        <!-- Botões e Hidden fields -->
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-6">
            <input type="hidden" name="acao" value="<?php echo $this->_tpl_vars['acao']; ?>
">
            <input type="hidden" name="id_local" value="<?php echo $this->_tpl_vars['a_local']['id_local']; ?>
">
            <input type="hidden" name="modulo" value="local">
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
              <th>Instituição</th>
              <th>Capacidade</th>
              <th>Status</th>
              <th style="width:100px;">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php if (count($_from = (array)$this->_tpl_vars['a_locais'])):
    foreach ($_from as $this->_tpl_vars['local']):
?>
            <tr>
              <td><?php echo $this->_tpl_vars['local']['nome']; ?>
</td>
              <td><?php if ($this->_tpl_vars['local']['capacidade']):  echo $this->_tpl_vars['local']['capacidade'];  else: ?>Indefinida<?php endif; ?></td>
              <td><?php if ($this->_tpl_vars['local']['status'] == 'i'): ?>Inativo<?php else: ?> Ativo<?php endif; ?></td>
              <td>
                <a class="btn btn-success" href="index.php?secao=cadastro&modulo=local&acao=alterar&id_local=<?php echo $this->_tpl_vars['local']['id_local']; ?>
" title="Editar"><i class="fa fa-pencil"></i></a>
                <a class="btn btn-danger" href="acao.php?secao=cadastro&modulo=local&acao=deletar&id_local=<?php echo $this->_tpl_vars['local']['id_local']; ?>
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
<script src="assets/js/form_cadastro_local.js"></script>