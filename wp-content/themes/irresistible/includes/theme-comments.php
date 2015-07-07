<?php
// Custom comment loop
function custom_comment($comment, $args, $depth) {	
       $GLOBALS['comment'] = $comment; ?>

<li class="comment wrap" id="comment-<?php comment_ID() ?>">

    <div class="col-left">
        <div class="inside">
			<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
            <p><?php comment_author_link() ?><br /></p> 
            <p><small><?php comment_date('j F Y'); ?></small></p>
        </div>
    </div>
    <div class="col-right">
		<?php comment_text() ?>
        <?php if ($comment->comment_approved == '0') : ?>
        <p><em><?php _e('Your comment is awaiting moderation.',woothemes); ?></em></p>
        <?php endif; ?>
    </div>
            
	<?php echo comment_reply_link(array('before' => '<span class="reply">', 'after' => '</span>', 'reply_text' => __('Reply to this comment',woothemes), 'depth' => $depth, 'max_depth' => $args['max_depth'] ));  ?>

	<div class="fix"></div>
 
<?php } ?>