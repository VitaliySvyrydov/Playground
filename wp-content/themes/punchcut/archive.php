<?php get_header(); ?>  
    <?php if (have_posts()) : ?>
    <div class="post-box page-box">
      <div class="post-header">
        <?php /* If this is a category archive */ if (is_category()) { ?>
        <h1 class="pagetitle"><?php printf(__ ('Записи из  &#8216;%s&#8217; категории', 'punchcut'), single_cat_title("", false))?></h1>
        <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h1 class="pagetitle"><?php printf(__ ('Записи с тегами &#8216;%s&#8217;', 'punchcut'), single_tag_title("", false))?></h1>
        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h1 class="pagetitle"><?php _e('Архив для', 'punchcut') ?> <?php the_time(__ ('F jS, Y', 'punchcut')) ?></h1>
        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h1 class="pagetitle"><?php _e('Архив для', 'punchcut') ?> <?php the_time(__ ('F, Y', 'punchcut')) ?></h1>
        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h1 class="pagetitle"><?php _e('Архив для', 'punchcut') ?> <?php the_time(__ ('Y', 'punchcut')) ?></h1>
        <?php /* If this is an author archive */ } elseif (is_author()) { if (isset($_GET['author_name'])) $current_author = get_userdatabylogin($author_name); else $current_author = get_userdata(intval($author));?>
        <h1 class="pagetitle"><?php printf(__ ('Записи от %s', 'punchcut'), $current_author->nickname)?></h1>
        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h1 class="pagetitle"><?php _e('Архив блога', 'punchcut') ?></h1>
        <?php } ?>
      </div><!--end post-header-->
      <div class="entries">
        <img class="archive-comment" src="<?php bloginfo('template_url'); ?>/images/comments-bubble.png" width="17" height="14" alt="<?php _e('comment', 'punchcut') ?>"/>           
        <ul>
          <?php while (have_posts()) : the_post(); ?>  
            <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><span class="comments_number"><?php comments_number('0', '1', '%', ''); ?></span><span class="archdate"><?php the_time(__ ('n.j.y', 'punchcut')) ?></span><?php the_title(); ?></a></li>
          <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
        </ul>   
      </div><!--end entries-->
    </div><!--end post-box-->
    <div class="pagination clear">
      <div class="alignleft"><?php next_posts_link(__ ('&larr; Предыдущее', 'punchcut')) ?></div>
      <div class="alignright"><?php previous_posts_link(__ ('Следующее &rarr;', 'punchcut')) ?></div>
    </div><!--end pagination-->
    <?php else : ?>
    <?php endif; ?>
  </div><!--end content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>