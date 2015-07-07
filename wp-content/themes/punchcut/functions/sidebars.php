<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name'=> __('Sidebar', 'punchcut'),
        'id' => 'sidebar-1',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name'=> __('Footer', 'punchcut'),
        'id' => 'footer-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
?>