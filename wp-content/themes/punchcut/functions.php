<?php


//Set language folder and load textdomain
if (file_exists(STYLESHEETPATH . '/languages')) 
  $language_folder = (STYLESHEETPATH . '/languages'); 
else 
  $language_folder = (TEMPLATEPATH . '/languages');
load_theme_textdomain('punchcut', $language_folder);

//Add support for post thumbnails
if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
    add_theme_support( 'post-thumbnails' );
}

// Required functions
if (is_file(STYLESHEETPATH . '/functions/sidebars.php')) 
  require_once(STYLESHEETPATH . '/functions/sidebars.php'); 
else 
  require_once(TEMPLATEPATH . '/functions/sidebars.php');

if (is_file(STYLESHEETPATH . '/functions/comments.php')) 
  require_once(STYLESHEETPATH . '/functions/comments.php'); 
else 
  require_once(TEMPLATEPATH . '/functions/comments.php');

if (is_file(STYLESHEETPATH . '/functions/punchcut-extend.php')) 
  require_once(STYLESHEETPATH . '/functions/punchcut-extend.php'); 
else 
  require_once(TEMPLATEPATH . '/functions/punchcut-extend.php');
?>