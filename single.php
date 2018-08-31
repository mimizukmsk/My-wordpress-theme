<?php get_header(); ?>
<!-- 投稿ページ（記事ページ用）-->
<div class="container">
  <div class="box box--contents">
    <?php if (have_posts()): the_post(); ?>
    <article <?php post_class('post'); ?>>
      <!-- 投稿日・著者を表示 -->
      <section class="post__info">
        <!-- 投稿日を取得 -->
        <span class="post__posted-at">
          <i class="fas fa-pencil-alt icon"></i>
          <time datetime="<?php echo get_the_date('Y/m/d'); ?>">
            <?php echo get_the_date(); ?>
          </time>
        </span>
        <!-- カテゴリ取得 -->
        <?php if(has_category()): ?>
          <?php $postcat = get_the_category(); ?>
          <?php for ($i = 0; $i < count($postcat); $i++ ): ?>
        <a class="cat post__cat--post" href="<?php echo get_category_link($postcat[$i]->term_id); ?>">
          <?php echo $postcat[$i]->name; ?>
        </a>
          <?php endfor ?>
        <?php endif; ?>
        <!-- タイトル -->
        <h1 class="title title--post"><?php the_title(); ?></h1>
        <!-- アイキャッチ取得 -->
        <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail(array(620, 620)); ?>
        <?php endif; ?>
      </section>
      <!-- 本文を取得 -->
      <section class="main-contents">
        <?php the_content(); ?>
      </section>
      <!-- タグ -->
      <div class="post__tag">
        <?php the_tags('<ul><li>Tags : </li><li>','</li><li>','</li></ul>'); ?>
      </div>
      <?php comments_template(); ?>
    </article>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>