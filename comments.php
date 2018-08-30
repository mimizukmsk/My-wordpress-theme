<div class="comments">
<?php if( have_comments() ): ?>
  <h3>Comment</h3>
  <ul class="comments__list">
    <?php wp_list_comments(); ?>
  </ul>
  <?php if (get_comment_pages_count() > 1): ?>
  <ul class="comments__nav">
    <?php echo paginate_comments_links( array(
      'type' => 'list',
      'mid_size' => '1',
      'prev_text' => 'Prev &laquo;',
      'next_text' => 'Next &raquo;'
      )); ?>
  </ul>
  <?php endif; ?>
<?php endif; ?>
<?php $comments_args = array(
  'fields' => array(
    'author' =>
    '<div class="comment-form__author">'.
      '<p><label for="author">Name'.
        ( $req ? '<span class="comment-form__required">*</span>' : '').
      '</label></p>'.
      '<input id="author" name="author" type="text" value="'.
        esc_attr( $commenter['comment_author']).
        '"></div>',
    'email' =>
    '<div class="comment-form__email">'.
      '<p><label for="email">E-mail'.
        ( $req ? '<span class="comment-form__required">*</span>' : '').
      '</label></p>'.
      '<input id="email" name="email" type="email" value="'.
        esc_attr( $commenter['comment_author_email']).
        '"></div>'
    ),
  'title_reply' => 'Comment Form',
  'title_reply_to' => "Leave a Reply to %s",
  'comment_notes_before' =>
    '<span class="comment-form__required">*</span> がついている項目は必須項目となります。',
  'comment_field' =>
    '<div class="comment-form__comment">'.
      '<p><label for="comment">Comment <span class="comment-form__required">*</span>'.
      '</label></p>'.
      '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>'.
    '</div>',
  'label_submit' => 'Post Comment'
  );
  comment_form($comments_args);
?>
</div>