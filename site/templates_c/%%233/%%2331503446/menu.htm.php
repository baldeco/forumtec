<?php /* Smarty version 2.6.1, created on 2018-07-26 00:48:15
         compiled from menu.htm */ ?>
<!-- Menu lateral -->
<header class="sidenav" id="sidenav">

  <!-- Botão de fechamento do menu lateral (x) -->
  <div class="sidenav__close">
    <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
      <i class="ui-close sidenav__close-icon"></i>
    </button>
  </div>

  <!-- Links do menu lateral referentes à navegação na página -->
  <nav class="sidenav__menu-container">
    <ul class="sidenav__menu" role="menubar">
      <li><a href="index.php" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--orange">Home</a></li>
      <li><a href="index.php?secao=noticia&modulo=lista" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--blue">Notícias</a></li>
      <li><a href="index.php?secao=palestra&modulo=lista" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--red">Palestras</a></li>
      <li><a href="index.php?secao=oficina&modulo=lista" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--salad">Oficinas</a></li>
    </ul>
  </nav>

  <!-- Links do menu lateral referentes às midias sociais -->
  <div class="socials sidenav__socials">
    <a class="social social-facebook" href="#" target="_blank" aria-label="facebook"><i class="ui-facebook"></i></a>
    <a class="social social-instagram" href="https://www.instagram.com/fetguaiba/?hl=pt-br" target="_blank" aria-label="instagram"><i class="ui-instagram"></i></a>
  </div>

</header>

<!-- Menu Horizontal -->
<header class="nav">
  <div class="nav__holder nav--sticky">
    <div class="container relative">
      <div class="flex-parent">

        <!-- Botão de abertura do menu lateral -->
        <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
          <span class="nav-icon-toggle__box">
            <span class="nav-icon-toggle__inner"></span>
          </span>
        </button>

        <!-- Mobile logo -->
        <a href="index.php" class="logo logo--mobile d-lg-none">
          <img class="logo__img" src="assets/img/logo_mobile.png" srcset="assets/img/logo_mobile.png 1x, assets/img/logo_mobile@2x.png 2x" alt="logo">
        </a>

        <!-- Links do menu horizontal referentes a navegação da página -->
        <nav class="flex-child nav__wrap d-none d-lg-block">
          <ul class="nav__menu">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="index.php?secao=noticia&modulo=lista">Noticias</a></li>
            <li><a href="index.php?secao=palestra&modulo=lista">Palestras</a></li>
            <li><a href="index.php?secao=oficina&modulo=lista">Oficinas</a></li>
          </ul>
        </nav>

        <!-- Links do menu horizontal referentes às midias sociais -->
        <div class="nav__right nav--align-right d-lg-flex">
          <div class="nav__right-item socials nav__socials d-none d-lg-flex">
            <a class="social social-facebook social--nobase" href="#" target="_blank" aria-label="facebook"><i class="ui-facebook"></i></a>
            <a class="social social-instagram social--nobase" href="https://www.instagram.com/fetguaiba/?hl=pt-br" target="_blank" aria-label="instagram"><i class="ui-instagram"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>
</header>