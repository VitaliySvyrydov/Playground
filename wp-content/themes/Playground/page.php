<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
                    // Start the loop.
                    while ( have_posts() ) : the_post();
                            get_template_part( 'includes/content', get_post_format() );
                            
                            if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                            endif;
                    // End the loop.
                    endwhile;
		?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php get_footer(); ?>
