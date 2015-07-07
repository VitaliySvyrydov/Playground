<?php global $punchcut; ?>
  <div id="sidebar">
    <?php if ($punchcut->sideimgState() == 'hide') : else : ?>
      <?php if (is_file(STYLESHEETPATH . '/sidebar-imagebox.php')) include(STYLESHEETPATH . '/sidebar-imagebox.php'); else include(TEMPLATEPATH . '/sidebar-imagebox.php'); ?>
    <?php endif; ?>
    <ul>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1') ) : ?>
        <li class="widget widget_recent_entries">
          <h2 class="widgettitle"><?php _e('Последние записи'); ?></h2>
          <ul>
            <?php $side_posts = get_posts('numberposts=10'); foreach($side_posts as $post) : ?>
            <li><a href= "<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>   
      <?php endif; ?>
    </ul>
    <?php if (is_active_sidebar('left_sidebar')) echo '<ul class="thin-sidebar spad">';?>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('left_sidebar') ) : endif; ?>  
    <?php if (is_active_sidebar('left_sidebar')) echo '</ul>'; ?>
    <?php if (is_active_sidebar('right_sidebar')) echo '<ul class="thin-sidebar">'; ?>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('right_sidebar') ) : endif; ?>
    <?php if (is_active_sidebar('right_sidebar')) echo '</ul>' ;?>
  </div><!--end sidebar-->