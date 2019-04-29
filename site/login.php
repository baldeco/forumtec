<?php

require_once('inc/inc.config.php');

// if($user->is_logged()){
//   header('Location: index.php');
//   exit;
// } elseif(isset($_POST['email']) && isset($_POST['senha'])){
//   $email = filtraString($_POST['email']);
//   $senha = filtraString($_POST['senha']);
//   if($user->login($email, $senha)){
//     header('Location: index.php');
//     exit;
//   }
// }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Forumtec</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/signin.css">
    <script src="assets/js/lazysizes.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </head>

  <body class="container">


    <div  class="col-sm col-centered">
      <div class="card">
        <article class="card-body">
          <h4 class="card-title text-center mb-4 mt-1">Fórum de tecnologia ULBRA Guaíba</h4>
          <hr>
          <p class="text-success text-center">Bem-vindo</p>
          <form>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="login" class="form-control" placeholder="Login" type="email">
              </div> <!-- input-group.// -->
            </div> <!-- form-group// -->
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name="senha" class="form-control" placeholder="******" type="password">
              </div> <!-- input-group.// -->
            </div> <!-- form-group// -->
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block"> Login  </button>
            </div> <!-- form-group// -->
            <p class="text-center"><a href="#" class="btn">Recuperar Senha</a></p>
          </form>
        </article>
      </div> <!-- card.// -->
    </div>


    <!-- <div class="container">
    <form method="post" class="form-signin">
    <h1 class="text-center"><b>FORUMTEC</b></h1>
    <h2 class="form-signin-heading text-center">Login</h2>
    <label class="sr-only">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
    <label class="sr-only">Senha</label>
    <input type="password" name="senha" class="form-control" placeholder="Senha" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  </form>
</div> -->

<script src="assets/js/easing.min.js"></script>
<script src="assets/js/owl-carousel.min.js"></script>
<script src="assets/js/twitterFetcher_min.js"></script>
<script src="assets/js/jquery.newsTicker.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/scripts.js"></script>

</body>
</html>
