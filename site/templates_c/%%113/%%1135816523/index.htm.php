<?php /* Smarty version 2.6.1, created on 2018-10-17 20:15:45
         compiled from index.htm */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', 'index.htm', 6, false),)), $this); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php if ($this->_tpl_vars['secao'] == 'dashboard'): ?>FET <?php else:  echo ((is_array($_tmp=$this->_tpl_vars['secao'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp));  endif; ?> | <?php echo ((is_array($_tmp=$this->_tpl_vars['modulo'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="assets/img/favicon.ico">
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-icons.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/lazysizes.min.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/functions.js" type="text/javascript"></script>
</head>

<body class="bg-light">
  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
    </div>
  </div>
  <!-- Bg Overlay -->
  <div class="content-overlay"></div>
  <!--  Todo conteúdo fica dentro desta tag main -->
  <main class="main oh" id="main">
    <?php if ($this->_tpl_vars['template']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu_topo.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
  </main>
  <script src="assets/js/easing.min.js"></script>
  <script src="assets/js/owl-carousel.min.js"></script>
  <script src="assets/js/twitterFetcher_min.js"></script>
  <script src="assets/js/jquery.newsTicker.min.js"></script>
  <script src="assets/js/modernizr.min.js"></script>
  <script src="assets/js/scripts.js"></script>
</body>
</html>