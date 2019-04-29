<?php

require_once('inc/inc.config.php');

if($user->is_logged()){
  header('Location: index.php');
  exit;
} elseif(isset($_POST['email']) && isset($_POST['senha'])){
  $email = filtraString($_POST['email']);
  $senha = filtraString($_POST['senha']);
  if($user->login($email, $senha)){
    header('Location: index.php');
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title>Login Admin</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/font-awesome.css">
  <link rel="stylesheet" href="assets/css/signin.css">
  <link rel="stylesheet" href="assets/css/themes/green.css" class="theme-color">
  <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body class="page-header-fixed">
  <div class="container">
    <form method="post" class="form-signin">
      <h1 class="text-center"><b>FORUMTEC</b></h1>
      <h2 class="form-signin-heading text-center">Login</h2>
      <label class="sr-only">Email</label>
      <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
      <label class="sr-only">Senha</label>
      <input type="password" name="senha" class="form-control" placeholder="Senha" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    </form>
  </div>
</body>
</html>
