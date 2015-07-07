<?php get_header(); ?>
  <h1 class="pagetitle"><?php _e('404: Страница не найдена', 'punchcut') ?></h1>
  <div class="entry page">
    <p><?php _e('Нам очень жаль, но ссылка, которую вы ввели больше несуществует. Возможно она была перемещена или удалена. Может быть она устарела.  Мы предлагаем поиск по сайту:', 'punchcut') ?></p>
        <?php if (is_file(STYLESHEETPATH . '/searchform.php')) include (STYLESHEETPATH . '/searchform.php'); else include(TEMPLATEPATH . '/searchform.php'); ?>
    </div><!--end entry-->
</div><!--end content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

