<?php get_header(); ?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();
				get_template_part( 'includes/content', get_post_format() );
			// End the loop.
			endwhile;
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'flexaspect' ),
				'next_text'          => __( 'Next page', 'flexaspect' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'flexaspect' ) . ' </span>',
			) );
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'includes/content', 'none' );
		endif;
		?>
		</main><!-- .site-main -->
	</section><!-- .content-area -->
<?php get_footer(); ?>
