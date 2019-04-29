<?php /* Smarty version 2.6.1, created on 2018-10-17 20:26:56
         compiled from palestra_checkin.htm */ ?>
<div class="main-container container mt-40" id="main-container">
  <div class="row">
    <div class="col-lg-8 blog__content mb-30">
      <ul class="breadcrumbs">
        <li class="breadcrumbs__item"><a href="index.php" class="breadcrumbs__url"><i class="ui-home"></i></a></li>
        <li class="breadcrumbs__item"><a href="index.php?secao=palestra&modulo=lista" class="breadcrumbs__url">Palestras</a></li>
      </ul>

      <!--  Mensagem aviso check-in -->

      <?php if ($_GET['mov'] == 'E'): ?>
      <?php if ($_GET['sucesso'] == 1): ?>
      <button id="msg-sucesso" style="background-color: #66CD00; width: 100%; margin-bottom: 5px; cursor: default;" class="btn btn-lg btn-color btn-button">Check-in realizado com sucesso</button>
      <?php elseif ($_GET['erro'] == 1): ?>
      <button id="msg-erro" style="background-color: red; width: 100%; margin-bottom: 5px; cursor: default;" class="btn btn-lg btn-color btn-button">Não foi possível realizar o check-in</button>
      <?php endif; ?>
      <?php endif; ?>

      <!--  Mensagem aviso check-out -->

      <?php if ($_GET['mov'] == 'S'): ?>
      <?php if ($_GET['sucesso'] == 1): ?>
      <button id="msg-sucesso" style="background-color: #66CD00; width: 100%; margin-bottom: 5px; cursor: default;" class="btn btn-lg btn-color btn-button">Check-out realizado com sucesso</button>
      <?php elseif ($_GET['erro'] == 1): ?>
      <button id="msg-erro" style="background-color: red; width: 100%; margin-bottom: 5px; cursor: default;" class="btn btn-lg btn-color btn-button">Não foi possível realizar o check-out</button>
      <?php endif; ?>
      <?php endif; ?>

      <!-- Form Checkin -->
      <article class="entry text-center">
        <div class="alert alert-info" role="alert">
          <div class="single-post__entry-header entry__header">
            <h1 class="single-post__entry-title">Check-in | Check-out</h1>
          </div>
          <div id="checkin-area">
            <form id="checkin-form" method="post" action="acao.php" class="form-horizontal">
              <!-- E-mail -->
              <div class="form-group">
                <label class="control-label">Digite seu E-MAIL</label>
                <div class="col-sm-12">
                  <input type="email" name="f_email" class="form-control" value="" placeholder="E-mail" required>
                </div>
              </div>
              <!-- Botões e Hidden fields -->
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="hidden" name="f_token" value="<?php echo $this->_tpl_vars['a_palestra']['token']; ?>
">
                  <input type="hidden" id="lat" name="f_lat" value="">
                  <input type="hidden" id="lng" name="f_lng" value="">
                  <input type="hidden" name="secao" value="palestra">
                  <input type="hidden" name="modulo" value="checkin">
                  <button type="submit" class="btn btn-success btn-block">Fazer Check-in</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <hr>
      </article>
      <!-- Corpo da palestra -->
      <article class="entry">
        <!-- Título -->
        <div class="single-post__entry-header entry__header">
          <h1 class="single-post__entry-title"><?php echo $this->_tpl_vars['a_palestra']['titulo']; ?>
</h1>
        </div>
        <!-- Imagem de divulgação -->
        <div class="entry__img-holder">
          <img src="<?php echo $this->_tpl_vars['a_palestra']['imagem']['bg']; ?>
" alt="" class="entry__img">
        </div>
        <!-- Descrição -->
        <div class="entry__article">
          <p style="text-align: justify;"><?php echo $this->_tpl_vars['a_palestra']['descricao']; ?>
</p>
        </div>
        <!--  Data do evento  -->
        <h6 class="uppercase">Data do evento:
          <?php echo $this->_tpl_vars['a_palestra']['data_inicio_format']; ?>


          <?php if ($this->_tpl_vars['a_palestra']['data_inicio_format'] != $this->_tpl_vars['a_palestra']['data_fim_format']): ?>
          - <?php echo $this->_tpl_vars['a_palestra']['data_fim_format']; ?>

          <?php endif; ?>
        </h6>
        <!-- Local -->
        <h6 class="uppercase" style="color:black;">Local: <?php echo $this->_tpl_vars['a_palestra']['nome_local']; ?>
</h6>
        <!-- Duração do evento -->
        <h6 class="uppercase">Duração: <?php echo $this->_tpl_vars['a_palestra']['hora_inicio_format']; ?>
 - <?php echo $this->_tpl_vars['a_palestra']['hora_fim_format']; ?>
</h6>
        <!-- Palestrantes -->
        <div class="title-wrap mt-40">
          <h5 class="uppercase">Lista de palestrantes...</h5>
        </div>
      </article>
    </div>
    <!--  Menu lateral -->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu_lateral.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>
</div>
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