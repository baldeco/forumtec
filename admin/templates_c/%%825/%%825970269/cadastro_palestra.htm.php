<?php /* Smarty version 2.6.1, created on 2018-09-23 18:05:42
         compiled from cadastro_palestra.htm */ ?>
<div id="main-wrapper">
  <!-- Formulario -->
  <div class="panel panel-white">
    <div class="panel-heading clearfix">
      <h3 class="panel-title">Dados Básicos</h3>
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

        <!-- Titulo -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Titulo da palestra *</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="f_titulo" value="<?php echo $this->_tpl_vars['a_palestra']['titulo']; ?>
">
          </div>
        </div>

        <!--  Palestrantes -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Palestrantes *</label>
          <div class="col-sm-4" style="height: 100px; overflow-y: scroll;">
            <?php if (count($_from = (array)$this->_tpl_vars['a_palestrantes'])):
    foreach ($_from as $this->_tpl_vars['palestrante']):
?>
            <div class="checkbox">
              <label>
                <input name="f_palestrantes[]" type="checkbox" value="<?php echo $this->_tpl_vars['palestrante']['id_palestrante']; ?>
" <?php if ($this->_tpl_vars['palestrante']['ativo']): ?> checked="checked" <?php endif; ?>><?php echo $this->_tpl_vars['palestrante']['nome']; ?>

              </label>
            </div>
            <?php endforeach; unset($_from); endif; ?>
          </div>     
        </div>

        <!-- Data -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Data *</label>
          <div class="col-sm-2">
            <input type="text" class="form-control date-picker" name="f_data" value="<?php echo $this->_tpl_vars['a_palestra']['data_format']; ?>
">
          </div>
        </div>
        
        <!-- Inicio -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Início</label>
          <div class="col-sm-8">
            <select class="form-control autosize inline" name="f_hora_inicio">
              <option value="00">00</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '1'): ?> selected<?php endif; ?> value="01">01</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '2'): ?> selected<?php endif; ?> value="02">02</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '3'): ?> selected<?php endif; ?> value="03">03</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '4'): ?> selected<?php endif; ?> value="04">04</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '5'): ?> selected<?php endif; ?> value="05">05</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '6'): ?> selected<?php endif; ?> value="06">06</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '7'): ?> selected<?php endif; ?> value="07">07</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '8'): ?> selected<?php endif; ?> value="08">08</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '9'): ?> selected<?php endif; ?> value="09">09</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '10'): ?> selected<?php endif; ?> value="10">10</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '11'): ?> selected<?php endif; ?> value="11">11</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '12'): ?> selected<?php endif; ?> value="12">12</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '13'): ?> selected<?php endif; ?> value="13">13</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '14'): ?> selected<?php endif; ?> value="14">14</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '15'): ?> selected<?php endif; ?> value="15">15</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '16'): ?> selected<?php endif; ?> value="16">16</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '17'): ?> selected<?php endif; ?> value="17">17</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '18'): ?> selected<?php endif; ?> value="18">18</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '19'): ?> selected<?php endif; ?> value="19">19</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '20'): ?> selected<?php endif; ?> value="20">20</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '21'): ?> selected<?php endif; ?> value="21">21</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '22'): ?> selected<?php endif; ?> value="22">22</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_inicio'] == '23'): ?> selected<?php endif; ?> value="23">23</option>
            </select> :
            <select class="form-control autosize inline" name="f_minuto_inicio">
              <option value="00">00</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['minuto_inicio'] == '30'): ?> selected<?php endif; ?> value="30">30</option>
            </select>
          </div>
        </div>

        <!-- Termino -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Término</label>
          <div class="col-sm-8">
            <select class="form-control autosize inline" name="f_hora_fim">
              <option value="00">00</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '1'): ?> selected<?php endif; ?> value="01">01</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '2'): ?> selected<?php endif; ?> value="02">02</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '3'): ?> selected<?php endif; ?> value="03">03</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '4'): ?> selected<?php endif; ?> value="04">04</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '5'): ?> selected<?php endif; ?> value="05">05</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '6'): ?> selected<?php endif; ?> value="06">06</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '7'): ?> selected<?php endif; ?> value="07">07</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '8'): ?> selected<?php endif; ?> value="08">08</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '9'): ?> selected<?php endif; ?> value="09">09</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '10'): ?> selected<?php endif; ?> value="10">10</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '11'): ?> selected<?php endif; ?> value="11">11</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '12'): ?> selected<?php endif; ?> value="12">12</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '13'): ?> selected<?php endif; ?> value="13">13</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '14'): ?> selected<?php endif; ?> value="14">14</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '15'): ?> selected<?php endif; ?> value="15">15</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '16'): ?> selected<?php endif; ?> value="16">16</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '17'): ?> selected<?php endif; ?> value="17">17</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '18'): ?> selected<?php endif; ?> value="18">18</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '19'): ?> selected<?php endif; ?> value="19">19</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '20'): ?> selected<?php endif; ?> value="20">20</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '21'): ?> selected<?php endif; ?> value="21">21</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '22'): ?> selected<?php endif; ?> value="22">22</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['hora_fim'] == '23'): ?> selected<?php endif; ?> value="23">23</option>
            </select> :
            <select class="form-control autosize inline" name="f_minuto_fim">
              <option value="00">00</option>
              <option <?php if ($this->_tpl_vars['a_palestra']['minuto_fim'] == '30'): ?> selected<?php endif; ?> value="30">30</option>
            </select>
          </div>
        </div>
        
        <!--  Descrição -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Descrição</label>
          <div class="col-sm-6">
            <textarea style="resize: none;" rows="10" class="form-control" name="f_descricao"><?php echo $this->_tpl_vars['a_palestra']['descricao']; ?>
</textarea>
          </div>
        </div>
        
        <!-- Local -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Local *</label>
          <div class="col-sm-3">
            <select class="form-control" name="f_id_local" tabindex="1">
              <option value=""></option>
              <?php if (count($_from = (array)$this->_tpl_vars['a_locais'])):
    foreach ($_from as $this->_tpl_vars['local']):
?>
              <option <?php if ($this->_tpl_vars['local']['id_local'] == $this->_tpl_vars['a_palestra']['id_local']): ?> selected<?php endif; ?> value="<?php echo $this->_tpl_vars['local']['id_local']; ?>
 "><?php echo $this->_tpl_vars['local']['nome']; ?>
</option>
              <?php endforeach; unset($_from); endif; ?>
            </select>
          </div>
        </div>

        <!-- Anexo  -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Anexo</label>
          <div class="col-sm-6">
            <div class="input-group m-b-sm" style="margin: 0;">
              <span class="input-group-btn">
                <label for="f_anexo" class="btn btn-default"><i class="fa fa-plus"></i></label>
                <input type="file" name="f_anexo" id="f_anexo">
              </span>
              <input type="text" class="form-control" name="f_legenda_anexo" placeholder="Legenda" value="<?php echo $this->_tpl_vars['a_palestra']['legendaAnexo']; ?>
">
            </div>
          </div>
        </div>

        <!-- Imagem divulgação -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Imagem divulgação *</label>
          <div class="col-sm-5">
            <label for="f_img_divulgar" id="btn_upload" tabindex="1"></label>
            <input type="file" name="f_img_divulgar" id="f_img_divulgar">
          </div>
        </div>
        
        <!-- Status -->
        <div class="form-group">
          <label class="col-sm-3 control-label">Status</label>
          <div class="col-md-6">
            <label class="radio-inline">
              <input type="radio" name="f_status" value="a" <?php if ($this->_tpl_vars['a_palestra']['status'] != 'i'): ?> checked="checked" <?php endif; ?> >
              Ativo
            </label>
            <label class="radio-inline">
              <input type="radio" name="f_status" value="i" <?php if ($this->_tpl_vars['a_palestra']['status'] == 'i'): ?> checked="checked" <?php endif; ?>>
              Inativo
            </label>
          </div>
        </div>

          <!-- Botões e Hidden fields -->
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
              <input type="hidden" name="secao" value="cadastro">
              <input type="hidden" name="modulo" value="palestra">
              <input type="hidden" name="acao" value="<?php echo $this->_tpl_vars['acao']; ?>
">
              <input type="hidden" name="id_palestra" value="<?php echo $this->_tpl_vars['a_palestra']['id_palestra']; ?>
">
              <input type="hidden" name="f_anexo_atual" value="<?php echo $this->_tpl_vars['a_palestra']['anexo']; ?>
">
              <input type="hidden" name="f_foto_atual" value="<?php echo $this->_tpl_vars['a_palestra']['imagem']; ?>
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
        <h3 class="panel-title">Dados cadastrados</h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-condensed">
            <thead>
              <tr>
                <th>Título</th>
                <th width="200px;">Palestrantes</th>
                <th>Data</th>
                <th>Início</th>
                <th>Término</th>
                <th>Local</th>
                <th>QRCode</th>
                <th>Status</th>
                <th style="width:100px;">Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php if (count($_from = (array)$this->_tpl_vars['a_palestras'])):
    foreach ($_from as $this->_tpl_vars['palestra']):
?>
              <tr>
                <td><?php echo $this->_tpl_vars['palestra']['titulo']; ?>
</td>
                <td>
                  <ul type="circle" style="padding: 0;">
                    <?php if (count($_from = (array)$this->_tpl_vars['palestra']['palestrantes'])):
    foreach ($_from as $this->_tpl_vars['palestrante']):
?>
                    <li><?php echo $this->_tpl_vars['palestrante']['nome_palestrante']; ?>
</li>
                    <?php endforeach; unset($_from); else: ?>
                    <li>Não vinculados</li>
                    <?php endif; ?>
                  </ul>
                </td>
                <td><?php echo $this->_tpl_vars['palestra']['data_format']; ?>
</td>
                <td><?php echo $this->_tpl_vars['palestra']['hora_inicio_format']; ?>
</td>
                <td><?php echo $this->_tpl_vars['palestra']['hora_final_format']; ?>
</td>
                <td><?php echo $this->_tpl_vars['palestra']['nome_local']; ?>
</td>
                <td><?php if ($this->_tpl_vars['palestra']['token']): ?><a href="./img/qrcode/<?php echo $this->_tpl_vars['palestra']['id_palestra']; ?>
.png" target="_blank">QRCODE</a><?php endif; ?></td>
                <td><?php if ($this->_tpl_vars['palestra']['status'] == 'i'): ?>Inativo<?php else: ?>Ativo<?php endif; ?></td>
                <td>
                  <a style="margin-bottom: 4px;" class="btn btn-success" href="index.php?secao=cadastro&modulo=palestra&id_palestra=<?php echo $this->_tpl_vars['palestra']['id_palestra']; ?>
" title="Editar"><i class="fa fa-pencil"></i></a>
                  <a style="margin-bottom: 4px;" class="btn btn-danger" href="acao.php?secao=cadastro&modulo=palestra&acao=deletar&id_palestra=<?php echo $this->_tpl_vars['palestra']['id_palestra']; ?>
" title="Excluir"><i class="fa fa-times"></i></a>
                  <a style="margin-bottom: 4px;" class="btn btn-warning" href="index.php?secao=relatorio&modulo=palestra&id_palestra=<?php echo $this->_tpl_vars['palestra']['id_palestra']; ?>
" title="Lista de participantes"><i class="fa fa-user"></i></a>
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
  <script src="assets/js/form_cadastro_palestra.js"></script>