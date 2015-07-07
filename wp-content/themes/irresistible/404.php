<?php get_header(); ?>

    <div id="content">

        <div id="main">

            <div class="box1 clearfix">
            
                <h2 class="hd-page"><?php _e('Sorry! Nothing here!',woothemes); ?></h2>
                
                <p><?php _e('Unfortunately we were not able to find that page you were looking for...',woothemes); ?></p>
                <p><?php _e('We suggest that you try going back one page or visit',woothemes); ?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php _e('our homepage',woothemes); ?></a> <?php _e('instead',woothemes); ?>.</p>
                
            </div>

        </div><!-- / #main -->
        
        <?php get_sidebar(); ?>

    </div><!-- / #content -->
        
<?php get_footer(); ?>