<?php get_header(); ?>

	<div id="content">

		<div id="main">
			
			<h2 class="title"><?php _e('Search Results',woothemes); ?></h2>
		<?php if (have_posts()) : ?>	
			
			<?php while (have_posts()) : the_post(); ?>
			<div class="box1 clearfix">
				<div class="post">

					<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to',woothemes); ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					
					<p><?php the_excerpt(); ?></p>

				</div>
			</div>
			<?php endwhile; ?>
				
					<div class="navigation nav clearfix">
						<div class="fl"><?php next_posts_link(__('&laquo; Older Entries',woothemes)); ?></div>
						<div class="fr"><?php previous_posts_link(__('Newer Entries &raquo;',woothemes)); ?></div>
					</div>
			
	
		<?php else : ?>
	
			<h2 class="center"><?php _e('No results under',woothemes); ?> "<?php echo $_GET['s']; ?>"</h2>
	
		<?php endif; ?>
	
		</div><!-- / #main -->

<?php get_sidebar(); ?>

	</div><!-- / #content -->

<?php get_footer(); ?>