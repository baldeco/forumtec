<?php /* Smarty version 2.6.1, created on 2019-06-23 21:51:44
         compiled from inscricao_dia.htm */ ?>
<div class="main-container container" id="main-container">
  <!-- Content -->
  <div class="row">
    <!-- post content -->
    <div class="col-lg-12 blog__content mb-30">
      <div class="row justify-content-md-center">
        <div class="col-lg-8">

          <h3>Inscrição |<?php echo $this->_tpl_vars['a_palestra']['titulo']; ?>
</h3>
          <h5>Local: <?php echo $this->_tpl_vars['a_palestra']['nome_local']; ?>
</h5>
          <h5>Duração: <?php echo $this->_tpl_vars['a_palestra']['hora_inicio_format']; ?>
 - <?php echo $this->_tpl_vars['a_palestra']['hora_fim_format']; ?>
</h5>
          <p>Preencha os dados abaixo para participar da palestra</p>

          <!--  Mensagem para se inscrever -->
          <button style="background-color: #CD0000; width: 100%; cursor: default;" class="btn btn-lg btn-color btn-button">Email Invalido,se inscreva</button>

          <!--  Mensagem de erro na inscrição -->
          <?php if ($_GET['erro']): ?>
          <button style="background-color: #CD0000; width: 100%; cursor: default;" class="btn btn-lg btn-color btn-button"><?php echo $_GET['erro']; ?>
</button>
          <?php endif; ?>

          <!-- Contact Form -->
          <form name="formulario" id="contact-form" class="contact-form mt-30 mb-30" method="POST" action="acao.php">
            <div class="contact-name">
              <label for="nome">Nome <abbr title="required" class="required">*</abbr></label>
              <input name="f_nome" id="nome" type="text">
            </div>
            <div class="contact-name">
              <label for="cpf">Cpf</label>
              <input name="f_cpf" id="cpf" type="text" maxlength="11">
            </div>
            <div class="contact-email">
              <label for="email">E-mail <abbr title="required" class="required">*</abbr></label>
              <input name="f_email" id="email" type="text">
            </div>
            <div class="contact-name">
              <label for="telefone">Telefone para contato <abbr title="required" class="required">*</abbr></label>
              <input name="f_telefone" id="telefone" type="text">
            </div>
            <div class="contact-name">
              <label>Instituição</label>
              <select name="f_instituicao">
                <option selected="selected" value="">Outros(as)</option>
                <?php if (count($_from = (array)$this->_tpl_vars['a_instituicoes'])):
    foreach ($_from as $this->_tpl_vars['instituicao']):
?>
                <option value="<?php echo $this->_tpl_vars['instituicao']['id_instituicao']; ?>
"><?php echo $this->_tpl_vars['instituicao']['nome']; ?>
</option>
                <?php endforeach; unset($_from); endif; ?>
              </select>
            </div>
            <input type="hidden" name="secao" value="inscricao"/>
            <input type="hidden" name="modulo" value="dia"/>
            <input type="hidden" name="tipo" value="palestra"/>
            <input type="hidden" id="lat" name="f_lat" value="">
            <input type="hidden" id="lng" name="f_lng" value="">
            <input type="hidden" name="id_palestra" value="<?php echo $this->_tpl_vars['a_palestra']['id_palestra']; ?>
"/>
            <input onclick="return validar()" type="submit" class="btn btn-lg btn-color btn-button" value="INSCREVER">
            <div id="msg" class="message"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Javascript de verificação dos campos do formulário -->
<script src="assets/js/form_inscricao.js"></script>

<script>
function success (position) {
  $('#lat').val(position.coords.latitude);
  $('#lng').val(position.coords.longitude);
}

function showError (error) {
  var mensagem = 'Geolocalização não é suportada nesse browser.';

  // https://support.google.com/chrome/answer/142065?hl=pt-BR

  $('#checkin-form').remove();
  if (error !== null && typeof error === 'object') {
    switch (error.code) {
      case error.PERMISSION_DENIED:
        mensagem = 'Usuário rejeitou a solicitação de Geolocalização.';
        break;
      case error.POSITION_UNAVAILABLE:
        mensagem = 'Localização indisponível.';
        break;
      case error.TIMEOUT:
        mensagem = 'O tempo da requisição expirou.';
        break;
      case error.UNKNOWN_ERROR:
        mensagem = 'Algum erro desconhecido aconteceu.';
        break;
    }
  }
  mensagem += '<br>Para fazer Check-in é necessário confirmar sua localização!<br>';
  $('#checkin-area').html(mensagem);
}

function getLocation () {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(success, showError);
  } else {
    showError('Geolocalização não é suportada nesse browser.');
  }
}

$(document).ready(function () {
  /* getLocation(); */
});
</script>
