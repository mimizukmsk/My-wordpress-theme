<?php get_header(); ?>
<div class="container container--index">
  <div class="box box--contents">
    <!-- カテゴリ・タグ一覧ページにタイトルを付与 -->
    <?php if(is_category() || is_tag()): ?>
    <h1 class="list-title">
      <i class="fas fa-caret-down icon"></i> Posts of <?php single_cat_title() ?>
    </h1>
    <?php elseif(is_month()): ?>
    <h1 class="list-title">
      <i class="fas fa-caret-down icon"></i> Posts of <?php the_time("Y/m") ?>'s</h1>
    <?php endif ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article <?php post_class( 'post-list'); ?>>
      <a class="post-list__link" href="<?php the_permalink(); ?>">
        <!-- 画像を追加 -->
        <section class="post-list__index">
          <section class="index__img">
            <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail(); ?>
            <?php endif; ?>
          </section>
          <!-- タイトル -->
          <h2 class="index__title"><?php the_title(); ?></h2>
          <!-- 投稿日を表示 -->
          <span class="index__posted-at">
            <i class="fas fa-pencil-alt icon"></i>
            <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
              <?php echo get_the_date(); ?>
            </time>
          </span>
          <!-- カテゴリ -->
          <?php if(has_category()): ?>
          <span class="cat cat--index">
            <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
          </span>
          <?php endif; ?>
          <!-- 抜粋 -->
          <p class="index__excerpt"><?php echo get_the_excerpt(); ?></p>
        </section>
      </a>
    </article>
    <?php endwhile; endif; ?>
    <!-- ページネーション -->
    <div class="pagination">
      <?php echo paginate_links( array(
        'type' => 'list',
        'mid_size' => '1',
        'prev_text' => 'Prev &laquo;',
        'next_text' => 'Next &raquo;'
      )); ?>
    </div>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>