<?php get_header(); ?>

    <div id="content">
    
        <div id="main">
        
            <div class="box1 clearfix">
                    <div class="post clearfix">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h2 class="hd-page"><?php the_title(); ?></h2>
            
                    <?php the_content(__('<p>Read the rest of this page &raquo;</p>',woothemes)); ?>
                    <?php wp_link_pages(array('before' => __('<p><strong>Pages:</strong> ',woothemes), 'after' => '</p>', 'next_or_number' => 'number')); ?>
                    <?php endwhile; endif; ?>
                    
                    <?php edit_post_link(__('Edit this entry.',woothemes), '<p>', '</p>'); ?>

                </div>
            </div>

        </div><!-- / #main -->
			
<?php get_sidebar(); ?>

	</div><!-- / #content -->
<?php get_footer(); ?>