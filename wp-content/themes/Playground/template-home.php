<?php
/* Template Name: Home Template */
get_header();
?>
        <?php
        // Start the loop.
        while (have_posts()) : the_post();

            $images = get_field('gallery');

            if ($images):
                ?>
                <div id="main">
                    <ul class="gallery">
                    <?php 
                    $iterator = 0;
                    
                    foreach ($images as $image):
                       
                        $image_src = wp_get_attachment_image_src($image['id'], 'full');
                            if($iterator > 0){
                                echo '<li class="inviz">';
                            }else{
                                echo '<li>';
                            }
                        ?>
                        
                        
                            <a href="<?php echo $image['url']; ?>">
                                <img src="<?php echo $image_src[0]; ?>" alt="<?php echo $image['alt']; ?>" />
                            </a>
                            <p><?php echo $image['caption']; ?></p>
                        </li>
        <?php  $iterator++;
        endforeach; ?>
                    </ul>
                </div>

                <?php
            endif;
            // End the loop.


            $post_object = get_field('about_page');

            if ($post_object):
                
                // override $post
                $post = $post_object;
                setup_postdata($post);
                ?>
                <div class="container">
                    <div class="center">
                        <?php if(has_post_thumbnail(get_the_ID())){
                            $about_img_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')
                            ?>
                            <img src="<?php echo $about_img_src[0]; ?>" alt="foto" class="foto">
                        <?php }?>
                        
                        <div class="about_him">                        
                            <h1><?php the_title(); ?></h1>
                            <?php if (get_field('second_title', get_the_ID())){
                                echo '<h2>'.get_field('second_title', get_the_ID()).'</h2>';
                            } ?>
                            <?php the_content();?>
                            <div class="socials">
                            <ul>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="socials" >
                                </li> 
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="socials" >
                                </li> 
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/google.jpg" alt="socials" >
                                </li> 
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.jpg" alt="socials" >
                                </li> 
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/in.jpg" alt="socials">
                                </li> 
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/dribble.jpg" alt="socials">
                                </li> 
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
               
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
            <div class="wrap">
                <div class="form-holder">
                    <h1>Get In Touch</h1>
                    <h2>In order to get in touch use the contact form below:</h2>
                    <form action="http://localhost/2videos/wp-content/themes/Playground/form_handler.php" class="conteiner_form" method="post">
                        <input type="text" name="name" maxlength="35" placeholder="Name(Required)" value=""> 
                        <input type="text" name="email" maxlength="35" placeholder="Email(Required)" value="">
                        <input type="text" name="subject" maxlength="35" placeholder="Subject" value="">
                        <textarea rows="10" cols="10" name="text" placeholder="Write you message here..."></textarea> 
                        <input type="submit" value="SEND">
                    </form>
                    <div class="contact">
                        <p>
                            Quisque Hendrerit: purus dapi- bus, ornare nibh vitae, viverra nibh.
                            Fusce vitae aliquam tellus. Proin sit amet volutpat libero. 
                            Nulla sed nunc et tortor luctus faucibus morbi vitae.
                        </p>
                        <ul>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/location.png" alt="location">
                                Elm St. 14/05 Lost City
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" alt="socials">
                                + 3528 331 86 35
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/mail.png" alt="socials">
                                info@hexalcorp.com
                            </li>
                        </ul>
                    </div>
                </div> 
            </div>
      
        <?php endwhile; ?>
<?php get_footer(); ?>

            
            
            