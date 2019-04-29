<?php /* Smarty version 2.6.1, created on 2018-09-23 18:15:09
         compiled from cadastro_participante.htm */ ?>
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
        <!-- Nome -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Nome *</label>
          <div class="col-sm-4">
            <input type="text" name="nome" class="form-control" value="<?php echo $this->_tpl_vars['a_participante']['nome']; ?>
">
          </div>
        </div>
        <!-- CPF -->
        <div class="form-group">
          <label class="col-sm-3 control-label">CPF</label>
          <div class="col-sm-2">
            <input type="text" name="cpf" maxlength="11" class="form-control" value="<?php echo $this->_tpl_vars['a_participante']['cpf']; ?>
">
          </div>
        </div>
        <!-- E-mail -->
        <div class="form-group">
          <label class="col-sm-3 control-label">E-mail *</label>
          <div class="col-sm-4">
            <input type="text" name="email" class="form-control" value="<?php echo $this->_tpl_vars['a_participante']['email']; ?>
">
          </div>
        </div>
        <!-- Telefone -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Telefone</label>
          <div class="col-sm-2">
            <input type="text" name="telefone" class="form-control" value="<?php echo $this->_tpl_vars['a_participante']['telefone']; ?>
">
          </div>
        </div>
        <!-- Instituição -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Instituição</label>
          <div class="col-sm-2">
            <select class="form-control" name="id_instituicao">
              <option value="">Outros(as)</option>
              <?php if (count($_from = (array)$this->_tpl_vars['a_instituicoes'])):
    foreach ($_from as $this->_tpl_vars['instituicao']):
?>
              <option<?php if ($this->_tpl_vars['instituicao']['id_instituicao'] == $this->_tpl_vars['a_participante']['id_instituicao']): ?> selected<?php endif; ?> value="<?php echo $this->_tpl_vars['instituicao']['id_instituicao']; ?>
 "><?php echo $this->_tpl_vars['instituicao']['nome']; ?>
</option>
              <?php endforeach; unset($_from); endif; ?>
            </select>
          </div>
        </div>
        <!-- Status -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Status</label>
          <div class="col-sm-6">
            <label class="radio-inline">
              <input type="radio" name="status" value="a"<?php if ($this->_tpl_vars['a_participante']['status'] != 'i'): ?> checked="checked" <?php endif; ?>>
              Ativo
            </label>
            <label class="radio-inline">
              <input type="radio" name="status" value="i"<?php if ($this->_tpl_vars['a_participante']['status'] == 'i'): ?> checked="checked" <?php endif; ?>>
              Inativo
            </label>
          </div>
        </div>
        <!-- Botões e Hidden fields -->
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-6">
            <input type="hidden" name="acao" value="<?php echo $this->_tpl_vars['acao']; ?>
">
            <input type="hidden" name="id_participante" value="<?php echo $this->_tpl_vars['a_participante']['id_participante']; ?>
">
            <input type="hidden" name="modulo" value="participante">
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
              <th>Nome</th>
              <th>CPF</th>
              <th>E-mail</th>
              <th>Telefone</th>
              <th>Instituição</th>
              <th>Status</th>
              <th style="width:100px;">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php if (count($_from = (array)$this->_tpl_vars['a_participantes'])):
    foreach ($_from as $this->_tpl_vars['participante']):
?>
            <tr>
              <td><?php echo $this->_tpl_vars['participante']['nome']; ?>
</td>
              <td><?php if ($this->_tpl_vars['participante']['cpf']):  echo $this->_tpl_vars['participante']['cpf'];  else: ?>Inexistente<?php endif; ?></td>
              <td><?php echo $this->_tpl_vars['participante']['email']; ?>
</td>
              <td><?php if ($this->_tpl_vars['participante']['telefone']):  echo $this->_tpl_vars['participante']['telefone'];  else: ?>Inexistente<?php endif; ?></td>
              <td><?php if ($this->_tpl_vars['participante']['instituicao']):  echo $this->_tpl_vars['participante']['instituicao'];  else: ?>Outros(as)<?php endif; ?></td>
              <td><?php if ($this->_tpl_vars['participante']['status'] == 'i'): ?>Inativo<?php else: ?>Ativo<?php endif; ?></td>
              <td>
                <a class="btn btn-success" href="index.php?secao=cadastro&modulo=participante&acao=alterar&id_participante=<?php echo $this->_tpl_vars['participante']['id_participante']; ?>
" title="Editar"><i class="fa fa-pencil"></i></a>
                <a class="btn btn-danger" href="acao.php?secao=cadastro&modulo=participante&acao=deletar&id_participante=<?php echo $this->_tpl_vars['participante']['id_participante']; ?>
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
<script src="assets/js/form_cadastro_participante.js"></script>