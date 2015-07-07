<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="wrapper">

            <header id="masthead" class="site-header" role="banner">
                <div class="site-branding">
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                </div>
            </header>
            <?php
            $args = array(
                'theme_location' => 'primary',
                'menu' => '',
                'container' => 'nav',
                'container_class' => '',
                'container_id' => '',
                'menu_class' => 'main-menu',
                'menu_id' => 'main-menu',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 0,
                'walker' => new CustomWalkerNavMenu
            );
            if (has_nav_menu('primary')) {
                wp_nav_menu($args);
            }
            ?>

            <div id="content" class="site-content">
