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