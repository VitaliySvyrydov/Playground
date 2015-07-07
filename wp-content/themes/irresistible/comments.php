<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.',woothemes); ?></p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->


<?php if ( have_comments() ) : ?>

	<h4 class="txt1"><?php comments_number(__('No Responses',woothemes), __('One Response',woothemes), __('% Responses',woothemes));?></h4>

	<ol class="commentlist">
	<?php wp_list_comments('avatar_size=48'); ?>
	</ol>
	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
		<div class="fix"></div>
	</div>
 
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
<div id="comments_wrap">
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e('Comments are closed.',woothemes); ?></p>
</div> <!-- end #comments_wrap -->

	<?php endif; ?>

<?php endif; ?>

<div id="respond">
<?php if ('open' == $post->comment_status) : ?>

<h4 class="txt1"><?php comment_form_title( __('Leave a Reply',woothemes), __('Leave a Reply to %s',woothemes) ); ?></h4>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php _e('You must be',woothemes); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>"><?php _e('logged in',woothemes); ?></a> <?php _e('to post a comment.',woothemes); ?></p>

<?php else : ?>

<form class="form" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comments">

<?php if ( $user_ID ) : ?>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<p class="logged-in"><?php _e('Logged in as',woothemes); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account"><?php _e('Logout &raquo;',woothemes); ?></a></p>

<p><textarea class="textarea" name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<?php else : ?>

<ol class="fieldset">

	<li class="field">
	
		<label for="author"><?php _e('Name',woothemes); ?> <?php if ($req) echo  __('(required)',woothemes); ?></label>
		<input class="text" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
	
	</li>

	<li class="field">
	
		<label for="email"><?php _e('Email',woothemes); ?> <?php if ($req) echo  __('(required)',woothemes); ?></label>
		<input class="text" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
	
	</li>

	<li class="field">
	
		<label for="url"><?php _e('Website',woothemes); ?></label>
		<input class="text" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
	
	</li>

	<li class="field">
	
		<label for="comment"><?php _e('Comments',woothemes); ?></label>
		<textarea class="textarea" name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>
	
	</li>

</ol>

<?php endif; // If logged in ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

<p class="submit"><input class="btinput" name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit',woothemes); ?>" /></p>

<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>


<?php endif; // if you delete this the sky will fall on your head ?>

</div> <!-- end #respond -->