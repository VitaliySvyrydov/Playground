<li>
    <a href ="<?php the_permalink();?>">
        <?php
        if (has_post_thumbnail(get_the_ID())) {
            $post_img_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')
            ?>
            <img src="<?php echo $post_img_src[0]; ?>" alt="<?php the_title(); ?>">
        <?php } ?>
        <h3><?php the_title(); ?></h3>
      <p><?php echo wp_trim_words(get_the_excerpt(), 10);?></p>
    </a>
</li>