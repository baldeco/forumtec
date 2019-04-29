<?php /* Smarty version 2.6.1, created on 2018-09-23 18:15:15
         compiled from cadastro_palestrante.htm */ ?>
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
            <input type="text" name="nome" class="form-control" value="<?php echo $this->_tpl_vars['a_palestrante']['nome']; ?>
">
          </div>
        </div>
        <!-- CPF -->
        <div class="form-group">
          <label class="col-sm-3 control-label">CPF</label>
          <div class="col-sm-2">
            <input type="text" name="cpf" maxlength="11" class="form-control" value="<?php echo $this->_tpl_vars['a_palestrante']['cpf']; ?>
">
          </div>
        </div>
        <!-- E-mail -->
        <div class="form-group">
          <label class="col-sm-3 control-label">E-mail *</label>
          <div class="col-sm-4">
            <input type="text" name="email" class="form-control" value="<?php echo $this->_tpl_vars['a_palestrante']['email']; ?>
">
          </div>
        </div>
        <!-- Endereço -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Endereço</label>
          <div class="col-sm-4">
            <input type="text" name="endereco" class="form-control" value="<?php echo $this->_tpl_vars['a_palestrante']['endereco']; ?>
">
          </div>
        </div>
        <!-- Bairro -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Bairro</label>
          <div class="col-sm-4">
            <input type="text" name="bairro" class="form-control" value="<?php echo $this->_tpl_vars['a_palestrante']['bairro']; ?>
">
          </div>
        </div>
        <!-- Cidade -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Cidade</label>
          <div class="col-sm-4">
            <input type="text" name="cidade" class="form-control" value="<?php echo $this->_tpl_vars['a_palestrante']['cidade']; ?>
">
          </div>
        </div>
        <!-- UF -->
        <div class="form-group">
          <label class="col-sm-3 control-label">UF</label>
          <div class="col-sm-8">
            <select class="form-control autosize inline" name="uf">
              <option value=""></option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'ro'): ?> selected<?php endif; ?> value="ro">RO</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'ac'): ?> selected<?php endif; ?> value="ac">AC</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'am'): ?> selected<?php endif; ?> value="am">AM</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'rr'): ?> selected<?php endif; ?> value="rr">RR</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'pa'): ?> selected<?php endif; ?> value="pa">PA</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'ap'): ?> selected<?php endif; ?> value="ap">AP</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'to'): ?> selected<?php endif; ?> value="to">TO</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'ma'): ?> selected<?php endif; ?> value="ma">MA</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'pi'): ?> selected<?php endif; ?> value="pi">PI</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'ce'): ?> selected<?php endif; ?> value="ce">CE</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'rn'): ?> selected<?php endif; ?> value="rn">RN</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'pb'): ?> selected<?php endif; ?> value="pb">PB</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'pe'): ?> selected<?php endif; ?> value="pe">PE</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'al'): ?> selected<?php endif; ?> value="al">AL</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'se'): ?> selected<?php endif; ?> value="se">SE</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'ba'): ?> selected<?php endif; ?> value="ba">BA</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'mg'): ?> selected<?php endif; ?> value="mg">MG</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'es'): ?> selected<?php endif; ?> value="es">ES</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'rj'): ?> selected<?php endif; ?> value="rj">RJ</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'sp'): ?> selected<?php endif; ?> value="sp">SP</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'pr'): ?> selected<?php endif; ?> value="pr">PR</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'sc'): ?> selected<?php endif; ?> value="sc">SC</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'rs'): ?> selected<?php endif; ?> value="rs">RS</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'ms'): ?> selected<?php endif; ?> value="ms">MS</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'mt'): ?> selected<?php endif; ?> value="mt">MT</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'go'): ?> selected<?php endif; ?> value="go">GO</option>
              <option <?php if ($this->_tpl_vars['a_palestrante']['uf'] == 'df'): ?> selected<?php endif; ?> value="df">DF</option>
            </select>
          </div>
        </div>
        <!-- CEP -->
        <div class="form-group">
          <label class="col-sm-3 control-label">CEP</label>
          <div class="col-sm-2">
            <input type="text" name="cep" maxlength="8" class="form-control" value="<?php echo $this->_tpl_vars['a_palestrante']['cep']; ?>
">
          </div>
        </div>
        <!-- Telefone -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Telefone</label>
          <div class="col-sm-2">
            <input type="text" name="telefone" class="form-control" value="<?php echo $this->_tpl_vars['a_palestrante']['telefone']; ?>
">
          </div>
        </div>
        <!--  Descrição -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Descrição</label>
          <div class="col-sm-6">
            <textarea style="resize: none;" rows="10" class="form-control" name="descricao"><?php echo $this->_tpl_vars['a_palestrante']['descricao']; ?>
</textarea>
          </div>
        </div>
        <!-- Status -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Status</label>
          <div class="col-sm-6">
            <label class="radio-inline">
              <input type="radio" name="status" value="a" <?php if ($this->_tpl_vars['a_palestrante']['status'] != 'i'): ?> checked="checked" <?php endif; ?> >
              Ativo
            </label>
            <label class="radio-inline">
              <input type="radio" name="status" value="i" <?php if ($this->_tpl_vars['a_palestrante']['status'] == 'i'): ?> checked="checked" <?php endif; ?>>
              Inativo
            </label>
          </div>
        </div>
        <!-- Botões e Hidden fields -->
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-6">
            <input type="hidden" name="acao" value="<?php echo $this->_tpl_vars['acao']; ?>
">
            <input type="hidden" name="id_palestrante" value="<?php echo $this->_tpl_vars['a_palestrante']['id_palestrante']; ?>
">
            <input type="hidden" name="modulo" value="palestrante">
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
              <th>Cidade</th>
              <th>UF</th>
              <th>Status</th>
              <th style="width:100px;">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php if (count($_from = (array)$this->_tpl_vars['a_palestrantes'])):
    foreach ($_from as $this->_tpl_vars['palestrante']):
?>
            <tr>
              <td><?php echo $this->_tpl_vars['palestrante']['nome']; ?>
</td>
              <td><?php if ($this->_tpl_vars['palestrante']['cpf']):  echo $this->_tpl_vars['palestrante']['cpf'];  else: ?>Inexistente<?php endif; ?></td>
              <td><?php echo $this->_tpl_vars['palestrante']['email']; ?>
</td>
              <td><?php if ($this->_tpl_vars['palestrante']['cidade']):  echo $this->_tpl_vars['palestrante']['cidade'];  else: ?>Inexistente<?php endif; ?></td>
              <td><?php if ($this->_tpl_vars['palestrante']['uf']):  echo $this->_tpl_vars['palestrante']['uf'];  else: ?>Inexistente<?php endif; ?></td>
              <td><?php if ($this->_tpl_vars['palestrante']['status'] == 'i'): ?>Inativo<?php else: ?> Ativo<?php endif; ?></td>
              <td>
                <a class="btn btn-success" href="index.php?secao=cadastro&modulo=palestrante&acao=alterar&id_palestrante=<?php echo $this->_tpl_vars['palestrante']['id_palestrante']; ?>
" title="Editar"><i class="fa fa-pencil"></i></a>
                <a class="btn btn-danger" href="acao.php?secao=cadastro&modulo=palestrante&acao=deletar&id_palestrante=<?php echo $this->_tpl_vars['palestrante']['id_palestrante']; ?>
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
<script src="assets/js/form_cadastro_palestrante.js"></script>