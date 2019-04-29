<?php /* Smarty version 2.6.1, created on 2018-09-25 00:21:20
         compiled from relatorio_palestra.htm */ ?>
<div id="main-wrapper">
  <!-- Tabela -->
  <div class="panel panel-white">
    <div class="panel-heading clearfix">
      <h3 class="panel-title"><?php echo $this->_tpl_vars['a_palestra']['titulo']; ?>
</h3>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-condensed">
          <thead>
            <tr>
              <th>Participante</th>
              <th>E-mail</th>
              <th>Telefone</th>
              <th>Horário entrada</th>
              <th>Horário saída</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php if (count($_from = (array)$this->_tpl_vars['a_participantes_palestra'])):
    foreach ($_from as $this->_tpl_vars['participante']):
?>
            <tr>
              <td><?php echo $this->_tpl_vars['participante']['nome']; ?>
</td>
              <td><?php echo $this->_tpl_vars['participante']['email']; ?>
</td>
              <td><?php echo $this->_tpl_vars['participante']['telefone']; ?>
</td>
              <td><?php echo $this->_tpl_vars['participante']['entrada_participante_format']; ?>
</td>
              <td><?php echo $this->_tpl_vars['participante']['saida_participante_format']; ?>
</td>
              <td>Vazio</td>
            </tr>
            <?php endforeach; unset($_from); endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>