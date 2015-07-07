<?php
// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Пожалуйста, не загружайте эту страницу сразу. Спасибо!');

  if ( post_password_required() ) { ?>
    <p class="nocomments"><?php _e('Эта запись защищена. Введите пароль, чтобы видеть комментарии.', 'punchcut') ?></p>
  <?php
    return;
  }
?>
<!-- You can start editing here. -->
<div id="comments">
<?php if ( have_comments() ) : ?>
  <div class="comment-number">
    <h4><?php comments_number( __('Нет комментариев', 'punchcut'), __('Один комментарий', 'punchcut'), __('% комментариев', 'punchcut')) ?></h4>
    <?php if ('open' == $post->comment_status) : ?>
      <span><a href="#respond" title="<?php _e('Оставить комментарий', 'punchcut'); ?>"><?php _e('Оставить комментарий', 'punchcut'); ?></a></span>
    <?php endif; ?>
  </div><!--end comment-number-->
  <?php if ( ! empty($comments_by_type['comment']) ) : ?>
    <ol class="commentlist">
      <?php wp_list_comments('type=comment&callback=custom_comment'); ?>
    </ol>
  <?php endif; ?>
  <div class="navigation">
    <div class="alignleft"><?php next_comments_link(__ ('&laquo; Старые комментарии', 'punchcut')) ?></div>
    <div class="alignright"><?php previous_comments_link(__ ('Новые комментарии &raquo;', 'punchcut')) ?></div>
  </div>
  <?php if ( ! empty($comments_by_type['pings']) ) : ?>
    <h3 class="pinghead"><?php _e('Трекбэки и Пингбэки', 'punchcut') ?></h3>
    <ol class="pinglist">
      <?php wp_list_comments('type=pings&callback=list_pings'); ?>
    </ol>
  <?php endif; ?>
  <?php if ('closed' == $post->comment_status ) : ?>
    <p class="note"><?php _e('Комментарии закрыты.', 'punchcut') ?></p>
  <?php endif; ?>
<?php endif; ?>
</div><!--end comments-->

<?php if ('open' == $post->comment_status) : ?>
  
  <div id="respond">
    <div class="cancel-comment-reply">
      <small><?php cancel_comment_reply_link(); ?></small>
    </div>
    <h5 id="postcomment"><?php comment_form_title(__ ( 'Оставить комментарий', 'punchcut' ), __( 'Оставить комментарий', 'Оставить комментарий для %s', 'punchcut' )); ?></h5>
    <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
      <p class="logged-in"><?php _e('Вы должны быть', 'punchcut') ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php _e('войти под своим именем', 'punchcut') ?></a> <?php _e('чтобы оставить комментарий.', 'punchcut') ?></p>
      </div><!--end respond-->
    <?php else : ?>
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
      <?php if ( $user_ID ) : ?>
        <p><?php _e('Вошли как', 'punchcut') ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account"><?php _e('Выйти &raquo;', 'punchcut') ?></a></p>
      <?php else : ?>
        <p><label for="author" class="comment-field"><?php _e('Имя', 'punchcut') ?> <span><?php if ($req) _e('(Обязательно)'); ?></span></label><input class="text-input" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" /></p>
        <p><label for="email" class="comment-field"><?php _e('E-mail', 'punchcut') ?>  <span><?php if ($req) _e('(Обязательно, не будет виден другим)'); ?></span></label><input class="text-input" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" /></p>
        <p><label for="url" class="comment-field"><?php _e('Сайт', 'punchcut') ?></label><input class="text-input" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" /></p>
      <?php endif; ?>
      <p><label for="comment" class="comment-field"><small><?php _e('Комментарий', 'punchcut') ?></small></label><textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea></p>
      <div id="comments-rss">
        <?php post_comments_feed_link($link_text = '') ?>
      </div>
      <div>
        <?php do_action('comment_form', $post->ID); ?>
      </div>
      <p>
        <input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Добавить комментарий', 'punchcut') ?>" />
        <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
      </p>
      <div>
        <?php comment_id_fields(); ?>
      </div>
    </form><!--end commentform-->
  </div><!--end respond-->

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>