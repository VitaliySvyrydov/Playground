<?php

// Register widgetized areas

function the_widgets_init() {
    if ( !function_exists('register_sidebars') )
        return;

    	register_sidebars(1,array('name' => 'Sidebar','before_widget' => '<div id="%1$s" class="">','after_widget' => '</div></div>','before_title' => '<h3>','after_title' => '</h3><div class="list3 box1">'));
	    register_sidebars(1,array('name' => 'Sidebar Top','before_widget' => '<div id="%1$s" class="">','after_widget' => '</div></div>','before_title' => '<h3>','after_title' => '</h3><div class="list3 box1">'));
    
}

add_action( 'init', 'the_widgets_init' );


    
?>