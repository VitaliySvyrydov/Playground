<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.',woothemes); ?></p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = ' alt';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	<h4 class="txt1"><?php comments_number(__('No Responses',woothemes), __('One Response',woothemes), __('% Responses',woothemes));?> to &#8220;<?php the_title(); ?>&#8221;</h4>

	<ol class="commentlist">

	<?php foreach ($comments as $comment) : ?>
		
		<li id="comment-<?php comment_ID(); ?>" class="comment-blog<?php echo $oddcomment; ?>">
		
			<?php echo get_avatar( $comment, $size = '48' ); ?>
			<p><?php comment_author_link() ?><?php _e('Says:',woothemes); ?></p>
			<p class="txt0"><?php comment_date('j F Y') ?> <?php _e('at',woothemes); ?> <?php comment_time('H:i'); ?></p>
			<?php comment_text(); ?>
			
		</li>

	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? ' alt' : '';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e('Comments are closed.',woothemes); ?></p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<h4 class="txt1"><?php _e('Leave a comment',woothemes); ?></h4>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php _e('You must be',woothemes); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>"><?php _e('logged in',woothemes); ?></a> <?php _e('to post a comment.',woothemes); ?></p>
<?php else : ?>

<form class="form" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comments">

<?php if ( $user_ID ) : ?>

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

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

<p class="submit"><input class="btinput" name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit',woothemes); ?>" /></p>

<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>