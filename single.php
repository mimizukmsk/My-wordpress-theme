<?php get_header(); ?>
<!-- 投稿ページ（記事ページ用）-->
<div class="container">
  <div class="contents">
    <?php if (have_posts()): the_post(); ?>
    <article <?php post_class('kiji'); ?>>
      <!-- 投稿日・著者を表示 -->
      <div class="kiji-info">
        <!-- 投稿日を取得 -->
        <span class="kiji-date">
          <i class="fas fa-pencil-alt"></i>
          <time datetime="<?php echo get_the_date('Y/m/d'); ?>">
            <?php echo get_the_date(); ?>
          </time>
        </span>
        <!-- カテゴリ取得 -->
        <?php if(has_category()): ?>
        <span class="cat-data">
          <?php echo get_the_category_list(); ?>
        </span>
        <?php endif; ?>
      </div>
      <!-- タイトル -->
      <h1><?php the_title(); ?></h1>
      <!-- アイキャッチ取得 -->
      <?php if(has_post_thumbnail()): ?>
      <div class="kiji-img">
        <?php the_post_thumbnail(array(620, 620)); ?>
      </div>
      <?php endif; ?>
      <!-- 本文を取得 -->
      <?php the_content(); ?>
      <!-- タグ -->
      <div class="kiji-tag">
        <?php the_tags('<ul><li>Tags : </li><li>','</li><li>','</li></ul>'); ?>
      </div>
    </article>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>