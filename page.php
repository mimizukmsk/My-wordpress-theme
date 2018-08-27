<?php
/*
Template Name: 固定ページテンプレート
*/
?>
<?php get_header(); ?>
<div class="container">
  <div class="box box--contents">
    <?php if (have_posts()): the_post(); ?>
    <article <?php post_class('post'); ?>
      <!-- タイトル -->
      <h1><?php the_title(); ?></h1>
      <!-- 本文を取得 -->
      <?php the_content(); ?>
    </article>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>