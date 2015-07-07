<?php get_header(); ?>
  <?php if (have_posts()) : ?>
  <div class="post-box page-box">
    <div class="post-header">
       <h1 class="pagetitle"><?php printf(__ ("Результаты поиска для '%s'", "punchcut"), attribute_escape(get_search_query())); ?></h1>
    </div><!--end post-header-->
    <div class="entries">
      <img class="archive-comment" src="<?php bloginfo('template_url'); ?>/images/comments-bubble.png" width="17" height="14" alt="<?php _e('Комментарий', 'punchcut') ?>"/>      
      <ul>
         <?php while (have_posts()) : the_post(); ?>  
        <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><span class="comments_number"><?php comments_number('0', '1', '%', ''); ?></span><span class="archdate"><?php the_time(__ ('n.j.y', 'punchcut')) ?></span><?php the_title(); ?></a></li>
        <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
      </ul> 
    </div><!--end entries-->
  </div><!--end post-box-->
  <div class="pagination">
    <div class="alignleft"><?php next_posts_link(__ ('&larr; Предыдущая запись', 'punchcut')) ?></div>
    <div class="alignright"><?php previous_posts_link(__ ('Следующая запись &rarr;', 'punchcut')) ?></div>
  </div><!--end pagination-->
  <?php else : ?>
    <div class="post-box page-box">
      <div class="post-header">
         <h1 class="pagetitle"><?php printf(__ ("Нет результатов для '%s'", "punchcut"), attribute_escape(get_search_query())); ?></h1>
      </div><!--end post-header-->
      <div class="entries">
        <?php if (is_file(STYLESHEETPATH . '/searchform.php')) include(STYLESHEETPATH . '/searchform.php'); else include(TEMPLATEPATH . '/searchform.php'); ?>
      </div><!--end entries-->
    </div><!--end post-box-->
  <?php endif; ?>
</div><!--end content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
