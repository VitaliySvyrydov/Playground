<?php
/* Template Name: Home Template */
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        // Start the loop.
        while (have_posts()) : the_post();

            $images = get_field('gallery');

            if ($images):
                ?>
                <ul>
                    <?php foreach ($images as $image):
                        $image_src = wp_get_attachment_image_src($image['id'], 'full');
                        ?>
                        <li>
                            <a href="<?php echo $image['url']; ?>">
                                <img src="<?php echo $image_src[0]; ?>" alt="<?php echo $image['alt']; ?>" />
                            </a>
                            <p><?php echo $image['caption']; ?></p>
                        </li>
        <?php endforeach; ?>
                </ul>

                <?php
            endif;
            // End the loop.


            $post_object = get_field('about_page');

            if ($post_object):

                // override $post
                $post = $post_object;
                setup_postdata($post);
                ?>
                <div>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_content();?>
                </div>
        
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
        <?php the_field('contact_form'); ?>
        <?php endwhile;
        ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
