<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- header.php: サイト共通部分のヘッダーを作成 -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <!-- システム・プラグインとの連携用 -->
  <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="header-inner">
  </div>
</header>