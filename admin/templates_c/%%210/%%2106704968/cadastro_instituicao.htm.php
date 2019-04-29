<?php /* Smarty version 2.6.1, created on 2018-09-23 18:15:24
         compiled from cadastro_instituicao.htm */ ?>
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
      
      <form name="formulario" class="form-horizontal" action="acao.php" method='POST'>
        <!-- Instituição -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Instituição *</label>
          <div class="col-sm-4">
            <input type="text" name="f_nome" class="form-control" value="<?php echo $this->_tpl_vars['a_instituicao']['nome']; ?>
">
          </div>
        </div>
        <!-- Cidade -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Cidade</label>
          <div class="col-sm-4">
            <input type="text" name="f_cidade" class="form-control" value="<?php echo $this->_tpl_vars['a_instituicao']['cidade']; ?>
">
          </div>
        </div>
        <!-- Status -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Status</label>
          <div class="col-sm-6">
            <label class="radio-inline">
              <input type="radio" name="f_status" value="a" <?php if ($this->_tpl_vars['a_instituicao']['status'] != 'i'): ?> checked="checked"<?php endif; ?> >
              Ativo
            </label>
            <label class="radio-inline">
              <input type="radio" name="f_status" value="i" <?php if ($this->_tpl_vars['a_instituicao']['status'] == 'i'): ?> checked="checked"<?php endif; ?> >
              Inativo
            </label>
          </div>
        </div>
        <!-- Botões e Hidden fields -->
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-6">
            <input type="hidden" name="acao" value="<?php echo $this->_tpl_vars['acao']; ?>
"/>
            <input type="hidden" name="id_instituicao" value="<?php echo $this->_tpl_vars['a_instituicao']['id_instituicao']; ?>
">
            <input type="hidden" name="modulo" value="instituicao">
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
              <th>Cidade</th>
              <th>Status</th>
              <th style="width:100px;">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php if (count($_from = (array)$this->_tpl_vars['a_instituicoes'])):
    foreach ($_from as $this->_tpl_vars['instituicao']):
?>
            <tr>
              <td><?php echo $this->_tpl_vars['instituicao']['nome']; ?>
</td>
              <td><?php if ($this->_tpl_vars['instituicao']['cidade']):  echo $this->_tpl_vars['instituicao']['cidade'];  else: ?>Inexistente<?php endif; ?></td>
              <td><?php if ($this->_tpl_vars['instituicao']['status'] == 'i'): ?>Inativo<?php else: ?> Ativo<?php endif; ?></td>
              <td>
                <a class="btn btn-success" href="index.php?secao=cadastro&modulo=instituicao&acao=alterar&id_instituicao=<?php echo $this->_tpl_vars['instituicao']['id_instituicao']; ?>
" title="Editar"><i class="fa fa-pencil"></i></a>
                <a class="btn btn-danger" href="acao.php?secao=cadastro&modulo=instituicao&acao=deletar&id_instituicao=<?php echo $this->_tpl_vars['instituicao']['id_instituicao']; ?>
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
<script src="assets/js/form_cadastro_instituicao.js"></script>