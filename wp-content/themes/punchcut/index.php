<?php get_header(); ?>    
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="post-box clear">
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="meta">
          <div class="author"><?php the_time(__ ('M j', 'punchcut')) ?>  <span>/ <?php printf(__ ('%s', 'punchcut'), get_the_author())?></span></div>
        </div><!--end meta-->
        <div class="post-header">
         <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2> 
        </div><!--end post header-->
        <div class="entry clear">
          <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail( array(250,9999), array('class' => ' alignleft border') ); ?>
          <?php the_content(__('подробнее...', 'punchcut')); ?>
          <?php edit_post_link(__('Редактировать','<p>','</p>', 'punchcut')); ?>
          <?php wp_link_pages(); ?>
        </div><!--end entry-->
        <div class="post-footer clear">
          <div class="category"><?php _e('Опубликовано в', 'punchcut') ?> <?php the_category(', '); ?></div>
          <?php if (('open' == $post->comment_status) && (empty($post->post_password))) : ?>
           <div class="comments"><?php comments_popup_link(__('<strong>0</strong>', 'punchcut'), __('<strong>1</strong>', 'punchcut'), __('<strong>%</strong>', 'punchcut'), '', '');?></div>
          <?php endif; ?>
        </div><!--end post footer-->
      </div><!--end post-->
    </div><!--end post-box-->
  <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="pagination clear">
      <div class="alignleft"><?php next_posts_link(__ ('&larr; Предыдущая запись', 'punchcut')) ?></div>
      <div class="alignright" ><?php previous_posts_link(__ ('Следущая запись &rarr;', 'punchcut')) ?></div>
    </div><!--end pagination-->
   
</div><!--end content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?> <?php else : ?>
  <?php endif; ?>