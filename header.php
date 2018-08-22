<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
  <div class="container">
    <div class="header__logo">
      <h1 class="logo"><a class="link link--logo" href="<?php echo home_url(); ?>">
        <?php bloginfo('name'); ?>
      </a></h1>
      <p class="desc"><?php bloginfo('description') ?></p>
    </div>
    <!-- header-nav -->
    <button class="btn btn--nav-btn" type="button">
      <i class="fas fa-list-ul"></i>
    </button>
  </div>
  <?php wp_nav_menu( array(
        'theme_location' => 'header-nav',
        'container' => 'nav',
        'container_class' => 'header__nav',
        'container_id' => 'header__nav',
        'fallback_cb' => ''
  )); ?>
</header>