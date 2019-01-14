<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118576162-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-118576162-2');
  </script>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
  <div class="container container--header">
    <section class="header__logo">
      <h1 class="logo"><a class="link link--logo" href="<?php echo home_url(); ?>">
        <?php bloginfo('name'); ?>
      </a></h1>
      <p class="desc"><?php bloginfo('description') ?></p>
    </section>
    <!-- header-nav -->
    <div class="header__nav-btn">
      <a class="nav-btn__trigger" href="#">
        <span class="trigger__line"></span>
        <span class="trigger__line"></span>
        <span class="trigger__line"></span>
      </a>
    </div>
  </div>
  <?php wp_nav_menu( array(
        'theme_location' => 'header-nav',
        'container' => 'nav',
        'container_class' => 'header__nav',
        'container_id' => 'header__nav',
        'fallback_cb' => ''
  )); ?>
</header>