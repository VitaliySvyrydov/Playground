<?php global $punchcut; ?>
  <div id="footer" class="clear">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
      <div class="widget widget_links">
        <h2 class="widgettitle"><?php _e('Админ-панель'); ?></h2>
        <ul>
          <?php wp_register(); ?>
          <li><?php wp_loginout(); ?></li>
          <li><a href="<?php bloginfo('rss2_url'); ?>">Публикации RSS</a></li>
          <li><a href="<?php bloginfo('comments_rss2_url'); ?>">Комментарии RSS</a></li>
                  </ul>
      </div>
      <div class="widget widget_categories">
        <h2 class="widgettitle"><?php _e('Категории'); ?></h2>
        <ul>
          <?php wp_list_cats('sort_column=name&hierarchical=0'); ?>
        </ul>
      </div>
      <div class="widget widget_pages">
        <h2 class="widgettitle"><?php _e('Страницы'); ?></h2>
        <ul>
          <?php wp_list_pages('sort_column=post_title&depth=1&title_li='); ?>
        </ul>
      </div>
      <div class="widget widget_archives">
        <h2 class="widgettitle"><?php _e('Архив'); ?></h2>
        <ul>
          <?php wp_get_archives('limit=5'); ?>
        </ul>
      </div>
      <div class="widget search_widget">
        <?php if (is_file(STYLESHEETPATH . '/searchform.php')) include (STYLESHEETPATH . '/searchform.php'); else include(TEMPLATEPATH . '/searchform.php'); ?>
      </div>
    <?php endif; ?>
  </div><!--end footer--> 
  <div id="copyright">
    <?php /* 
            Hey there code reader! Hope you are enjoying Punchcut so far. I wanted to let you know the footer attribution link plays a vital role in exposing our open source themes to the WordPress community. I would really appreciate it if you could leave this message and the links below intact. Go ahead and add a 'Modified by' or similar next to the link if you have made changes. Questions? Send an email to info {at} thethemefoundry.com.
    */ ?>
        <p class="copyright-notice">Все права защищены &copy; <?php echo date('Y'); ?> <a href="/"><strong><?php bloginfo('name'); ?></strong></a>. <?php bloginfo('description'); ?></p>
        <p class="attrib"><a href="http://newstrizhki.ru/srednie-strizhki/237-strizhki-dlya-tonkih-volos.html">Стрижки для тонких волос</a></p>
  </div><!--end copyright-->
</div><!--end wrapper-->
<?php wp_footer(); ?>
<!--[if IE]><script type="text/javascript"> Cufon.now(); </script><![endif]-->
<?php
  if ($punchcut->statsCode() != '') {
    echo $punchcut->statsCode();
  }
?>
</body>
</html>
  