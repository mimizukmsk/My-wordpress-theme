<?php

/*
functions:
WordPressの関数の定義付けをするためのテンプレート
機能を追加したりルールを決める際はこの場所へ
*/

// titleタグをhead内に生成
add_theme_support('title-tag');
// HTML5でマークアップする
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
// Feedのリンクを自動生成する
add_theme_support('automatic-feed-links');
// アイキャッチ画像を使用する
add_theme_support('post-thumbnails');

// ナビゲーションメニューを有効化
register_nav_menu('header-nav', 'ヘッダーナビゲーション');
register_nav_menu('footer-nav', 'フッターナビゲーション');

// ヘッダーメニュー呼び出し
function navbutton_scripts() {
  wp_enqueue_script(
    // 名前を付ける
    'navbutton_script',
    // 場所を指定
    get_template_directory_uri() .'/js/navbutton.js',
    // jQueryのみに依存しているので配列の項はひとつ
    array('jquery')
  );
}
add_action('wp_enqueue_scripts', 'navbutton_scripts');

// サイドバーウィジット追加
function widgetarea_init() {
  register_sidebar(array(
    'name' => 'サイドバー',
    'id' => 'side-widget',
    // 各ウィジットごとの名前, 共通のクラス sidebar-wrapper を反映
    'before_widget' => '<div id="%1$s" class="%2$s sidebar-wrapper">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="sidebar-title">',
    'after_title' => '</h4>'
  ));
}
add_action('widgets_init', 'widgetarea_init');

// コメント欄
// include 'function-comment.php';