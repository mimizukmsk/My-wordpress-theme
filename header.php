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
    <div class="site-title">
      <!-- ヘッダータイトルに画像を使用する場合 -->
      <!-- <h1><a href="<?php //echo home_url(); ?>">
       <img src="URL" alt="<?php //bloginfo('name'); ?>">
      </a></h1> -->
      <!-- ヘッダータイトルをテキストにする場合 -->
      <h1><a href="<?php echo home_url(); ?>">
        <?php bloginfo('name'); ?>
      </a></h1>
      <p><?php bloginfo('description') ?></p>
    </div>
    <!-- スマホ用メニューボタン -->
    <button type="button" id="navbutton">
      <i class="fas fa-list-ul"></i>
    </button>
  </div>
  <!-- ヘッダーメニュー -->
  <?php wp_nav_menu( array(
        // functions.phpで指定したメニュー名と対応
        'theme_location' => 'header-nav',
        // containerをどのタグで付加するか
        'container' => 'nav',
        // ｃcontainerのid, class名
        'container_class' => 'header-nav',
        'container_id' => 'header-nav',
        // メニューが表示されない場合の値。初期値はwp_page_menuになっているため空白にする
        'fallback_cb' => ''
  )); ?>
</header>