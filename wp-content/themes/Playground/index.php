<?php get_header(); ?>
<div id="post-list">
    <ul>	
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                get_template_part( 'includes/content', get_post_format() );
            endwhile;
        else:
            get_template_part( 'includes/content', 'none' );
        endif;?>
    </ul>
</div>
<?php my_pagenavi(); ?>
<?php get_footer(); ?>