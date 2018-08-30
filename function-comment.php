<?php
function mytheme_comments($comment, $args, $depth){
  $GLOBALS['comment'] = $comment; ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div id="comment-<?php comment_ID() ?>" class="comments-wrapper">
      <div class="comments-meta">
      <?php echo get_avatar( $comment, $args['avatar_size']) ?>
        <ul class="comments=meta=list">
          <li class="comments-author-name">
          <?php printr('<cite class="fn">%s</cite>', get_comment_author_link()) ?>
          </li>
          <li class="comments-title">
          <?php
            $commentID_parent = $comment->comment_parent;
            if($commentID_parent != 0):
          ?>
            <a href="<?php echo htmlspecialchars(get_comment_link($commentID_parent)) ?>"><?php echo get_comment_author($commentID_parent); ?>さんへの返信</a>
          <?php else: ?>
            <a href="#">「<?php the_title(); ?>」へのコメント</a>
          <?php endif; ?>
          <?php
            if ($comment->comment_approved == '0') {
              echo '<span class="comments-approval">このコメントは承認待ちです。</span>';
            };
          ?>
          </li>
          <li class="comments-date">
            <a href="<?php echo htmlspecialchars(get_comment_link($comment->commentID)) ?>">
            <?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?></a>
          </li>
        </ul>
      </div>
      <div class="comments-content">
        <?php comment_text() ?>
      </div>
      <div class="comments-reply">
        <?php comment_reply_link(array_merge($args, array(
          'reply_text' => '返信する',
          'add_below' => $add_below,
          'depth' => $depth,
          'max_depth' => $args['max_depth']
        ))) ?>
      </div>
    </div>
  <?php };