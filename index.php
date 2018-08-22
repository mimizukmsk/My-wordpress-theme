<?php get_header(); ?>
<div class="container container--index">
  <div class="box box--contents">
  <!-- カテゴリ・タグ一覧ページにタイトルを付与 -->
  <?php if(is_category() || is_tag()): ?>
    <h1><i class="fas fa-caret-down"></i> Posts of <?php single_cat_title() ?></h1>
  <?php elseif(is_year()): ?>
    <h1><i class="fas fa-caret-down"></i> Posts of <?php the_time("Y") ?>'s</h1>
  <?php elseif(is_month()): ?>
    <h1><i class="fas fa-caret-down"></i> Posts of <?php the_time("Y/m") ?>'s</h1>
  <?php endif ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article <?php post_class('kiji-list'); ?>>
        <a href="<?php the_permalink(); ?>">
          <!-- 画像を追加 -->
          <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('medium'); ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.gif" alt="no-img">
            <?php endif; ?>
          <div class="text">
            <!-- タイトル -->
            <h2><?php the_title(); ?></h2>
            <!-- 投稿日を表示 -->
            <span class="kiji-date">
              <i class="fas fa-pencil-alt"></i>
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date(); ?>
              </time>
            </span>
            <!-- カテゴリ -->
            <?php if (!is_category()): ?>
              <?php if (has_category()): ?>
              <span class="cat-data">
                <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
              </span>
              <?php endif; ?>
            <?php endif; ?>
            <!-- 抜粋 -->
            <?php the_excerpt(); ?>
          </div>
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