<?php get_header(); ?>

		<div id="content" class="home">
		
			<div id="main">
			
                <h3 id="myWritings" class="replace"><?php _e('My Writings. My Thoughts.',woothemes); ?></h3>
				
				<div class="box1 clearfix">
				
					
                    <?php query_posts('showposts='.get_option('woo_home_posts')); ?>															
					<?php if (have_posts()) : ?>															
					<?php while (have_posts()) : the_post(); ?>

                        <div class="post clearfix">
                            <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3                            ><span class="txt0"><?php edit_post_link('Редактировать', '', ''); ?> // <?php the_time('j F Y') ?> // <?php comments_popup_link(__('No Comments &#187;', woothemes), __('1 Comment &#187;',woothemes), __('% Comments &#187;',woothemes)); ?> // <?php the_category(', ') ?></span>
                        
	                        <?php the_excerpt() ?>
    
                        </div>
					
					<?php endwhile; ?>					
					<?php else : ?>
					
					<h3 class='center'><?php _e('No posts found.',woothemes); ?></h3>
					
					<?php endif; ?>
					
					<p class="fr"><a href="<?php echo get_option('woo_home_archives'); ?>"><?php _e('View Archives',woothemes); ?></a></p>
				
				</div>
				
				<?php include ( TEMPLATEPATH . "/includes/video-home.php" ); ?>
			
			</div><!-- / #main -->
			
			<div id="sidebar">
						
                <!-- 
                <div id="portfolio">
                    
                    <h3 id="myPortfolio" class="replace">My Portfolio. Recent Works.</h3>
                
                    <ul class="img-list clearfix">
                    
                        <li><a href="#"><img src="<?php bloginfo('template_url') ?>/images/img-portfolio-1.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="<?php bloginfo('template_url') ?>/images/img-portfolio-2.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="<?php bloginfo('template_url') ?>/images/img-portfolio-3.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="<?php bloginfo('template_url') ?>/images/img-portfolio-4.jpg" alt="" /></a></li>
                    
                    </ul>
                    <div class="clear"></div>					
                
                </div>
				-->
                
                <div id="flickr">
                    
                    <h3 id="myPhotos" class="replace"><?php _e('My photos. Now you know me.',woothemes); ?></h3>
                
                    <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo get_option('woo_home_flickr_count'); ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo get_option('woo_home_flickr_user'); ?>"></script>        
                    
                    <div class="clear"></div>
					<a href="<?php echo get_option('woo_home_flickr_url'); ?>" class="replace"><p id="browseFlickr"><span class="replace"><?php _e('Browse Flickr',woothemes); ?></span></p></a>
                
                </div>
				
				<h3 id="myLifestream" class="replace"><?php _e('My lifestream. Stay updated with me.',woothemes); ?></h3>
				
				<div class="box1 clearfix">	
					
					<?php if (function_exists(lifestream)) lifestream(get_option('woo_home_lifestream')); ?>
					
				</div>               			

			    <?php if ( get_option('woo_tabs') == 'false' ) include ( TEMPLATEPATH . "/includes/tabs.php" ); ?>

				<div id="myfavblog" class="fr">			
					
					<h3 id="myFavblog" class="replace"><?php _e('My favblog. Feeds from them.',woothemes); ?></h3>
					
					<div class="box1">
                        <ul class="list2">
                        
							<!-- You can put whatever you want in this box... this is just an example -->
							<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
                            
                        </ul>
                    </div>
				
				</div>							
							
			</div><!-- / #sidebar -->

        </div><!-- / #content -->
            
		
<?php get_footer(); ?>