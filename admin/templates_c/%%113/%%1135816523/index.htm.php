<?php /* Smarty version 2.6.1, created on 2018-09-21 14:44:40
         compiled from index.htm */ ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title><?php echo $this->_tpl_vars['secao']; ?>
 | <?php echo $this->_tpl_vars['modulo']; ?>
</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <!-- Styles -->
  <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600'>
  <link rel="stylesheet" href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css">
  <link rel="stylesheet" href="assets/plugins/uniform/css/uniform.default.min.css">
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/font-awesome.css">
  <link rel="stylesheet" href="assets/plugins/waves/waves.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables/css/jquery.datatables.min.css">
  <!-- <link href="assets/plugins/summernote-master/summernote.css" rel="stylesheet" type="text/css"/> --> <!-- Script do campo noticia-->
  <link rel="stylesheet" href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css">
  <link rel="stylesheet" href="assets/css/modern.css">
  <link rel="stylesheet" href="assets/css/themes/green.css" class="theme-color">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="assets/css/formulario.css">
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
  <script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="page-header-fixed">
  <div class="overlay"></div>
  <main class="page-content content-wrap">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu_top.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu_lateral.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <!-- Todo conteúdo do site deve ficar dentro desse div page-inner -->
    <div class="page-inner">
      <!-- Descrição da seção e modulo da página carregada -->
      <div class="page-title">
        <h3><?php echo $this->_tpl_vars['secao']; ?>
</h3>
        <div class="page-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="#"><?php echo $this->_tpl_vars['secao']; ?>
</a></li>
            <li class="active"><?php echo $this->_tpl_vars['modulo']; ?>
</li>
          </ol>
        </div>
      </div>
      <!-- Fim -->
      <?php if ($this->_tpl_vars['template']): ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['template'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rodape.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <?php else: ?>
      ERROR! template <?php echo $this->_tpl_vars['template_x']; ?>
 not found
      <?php endif; ?>
    </div>
    <!-- Fim page-inner -->
  </main>
  <div class="cd-overlay"></div>
  <!-- Javascripts -->
  <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="assets/plugins/pace-master/pace.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
  <script src="assets/plugins/waves/waves.min.js"></script>
  <script src="assets/plugins/moment/moment.js"></script>
  <script src="assets/plugins/datatables/js/jquery.datatables.min.js"></script>
  <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script src="assets/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
  <script src="assets/js/modern.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/functions.js"></script>

</body>
</html>