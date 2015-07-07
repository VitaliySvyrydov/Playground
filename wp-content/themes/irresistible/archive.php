<?php get_header(); ?>

	<div id="content">
		
			<div id="main">
			
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                <?php /* If this is a category archive */ if (is_category()) { ?>
                <h2 class="title"><?php _e('Archive for',woothemes); ?> <?php echo single_cat_title(); ?></h2>
                <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                <h2 class="title"><?php _e('Posts Tagged',woothemes); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>
                <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                <h2 class="title"><?php _e('Archive for',woothemes); ?> <?php the_time('j F Y'); ?></h2>
                <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                <h2 class="title"><?php _e('Archive for',woothemes); ?> <?php the_time('F, Y'); ?></h2>
                <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                <h2 class="title"><?php _e('Archive for',woothemes); ?> <?php the_time('Y'); ?></h2>
                <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                <h2 class="title"><?php _e('Author Archive',woothemes); ?></h2>
                <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                <h2 class="title"><?php _e('Blog Archives',woothemes); ?></h2>
					<?php } ?>
				
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
    
                    <div class="box1 clearfix">
    
                        <div class="post">
                            <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                            <p class="txt0"><?php edit_post_link('Редактировать', '', ''); ?> // <?php the_time('j F Y') ?> // <?php comments_popup_link(__('No Comments &#187;', woothemes), __('1 Comment &#187;',woothemes), __('% Comments &#187;',woothemes)); ?> // <?php the_category(', ') ?></p>
                        
                        <?php the_content() ?>
    
                        </div>
					
                    </div>
					<?php endwhile; ?>
					
					<div class="navigation nav clearfix">
						<div class="fl"><?php next_posts_link(__('&laquo; Older Entries'),woothemes); ?></div>
						<div class="fr"><?php previous_posts_link(__('Newer Entries &raquo;',woothemes)); ?></div>
					</div>
					<?php else :
					
					if ( is_category() ) { // If this is a category archive
					printf(__("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>",woothemes), single_cat_title('',false));
					} else if ( is_date() ) { // If this is a date archive
					echo(__("<h2>Sorry, but there aren't any posts with this date.</h2>",woothemes));
					} else if ( is_author() ) { // If this is a category archive
					$userdata = get_userdatabylogin(get_query_var('author_name'));
					printf(__("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>",woothemes), $userdata->display_name);
					} else {
					echo (__("<h2 class='center'>No posts found.</h2>",woothemes));
					}
					get_search_form();
					
					endif;
					?>

	
		</div><!-- / #main -->
			
        <?php get_sidebar(); ?>

	</div><!-- / #content -->

<?php get_footer(); ?>