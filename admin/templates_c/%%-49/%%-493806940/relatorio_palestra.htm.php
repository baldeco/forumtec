<?php /* Smarty version 2.6.1, created on 2019-10-06 12:09:01
         compiled from relatorio_palestra.htm */ ?>
<div id="main-wrapper">
  <!-- Formulario/Pesquisa-->
  <div class="panel panel-white">
    <div class="panel-heading clearfix">
      <h3 class="panel-title">Pesquisa</h3>
    </div>
    <div class="panel-body">

      <form name="formulario" class="form-horizontal" action="acao.php" method="POST" enctype="multipart/form-data">

        <!-- Data -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Data *</label>
          <div class="col-sm-2">
            <input type="text" class="form-control date-picker" name="f_data" value="<?php echo $this->_tpl_vars['a_palestra']['data_format']; ?>
">
          </div>
        </div>

          <!-- Botões e Hidden fields -->
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
              <input type="hidden" name="secao" value="relatorio">
              <input type="hidden" name="modulo" value="palestra">
              <input type="hidden" name="acao" value="<?php echo $this->_tpl_vars['acao']; ?>
">
              <button type="submit" class="btn btn-success">Filtrar</button>
              <button type="reset" class="btn btn-primary">Limpar Campos</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  <!-- Tabela -->
  <div class="panel panel-white">
    <div class="panel-heading clearfix">
      <h4 class="panel-title">Participantes</h4>
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
              <th>Presença</th>
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
              <?php endforeach; unset($_from); endif; ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>




