<?php
  /* REQUIRE THE CORE CLASS */
  require_once ('punchcut-admin.php');
  /*
    Class Definition
  */
  if (!class_exists('Punchcut')) {
    class Punchcut extends JestroCore {
      
      /* PHP4 Constructor */
      function Punchcut () {
        
        /* SET UP THEME SPECIFIC VARIABLES */
        $this->themename = "Punchcut";
        $this->themeurl = "http://thethemefoundry.com/punchcut/";
        $this->shortname = "P";
        $directory = get_bloginfo('stylesheet_directory');
        /*
          OPTION TYPES:
          - checkbox: name, id, desc, std, type
          - radio: name, id, desc, std, type, options
          - text: name, id, desc, std, type
          - colorpicker: name, id, desc, std, type
          - select: name, id, desc, std, type, options
          - textarea: name, id, desc, std, type, options
        */
        $this->options = array(

          array(  "name" => __('Custom Logo Image <span>insert your custom logo image in the header</span>', 'punchcut'),
                  "type" => "subhead"),
   
          array(  "name" => __('Enable custom logo image', 'punchcut'),
                  "id" => $this->shortname."_logo",
                  "pro" => 'true',
                  "desc" => __('Check to use a custom logo in the header.', 'punchcut'),
                  "std" => "false",
                  "type" => "checkbox"),
   
          array(  "name" => __('Logo image file name', 'punchcut'),
                  "id" => $this->shortname."_logo_img",
                  "pro" => 'true',
                  "desc" => __('Upload your logo image here: ', 'punchcut') .'<code>' . $directory . '/images/</code>',
                  "std" => "",
                  "type" => "text"),
       
          array(  "name" => __('Logo image <code>&lt;alt&gt;</code> tag', 'punchcut'),
                  "id" => $this->shortname."_logo_img_alt",
                  "pro" => 'true',
                  "desc" => __('Specify the <code>&lt;alt&gt;</code> tag for your logo image.', 'punchcut'),
                  "std" => "",
                  "type" => "text"),

          array(  "name" => __('Display tagline', 'punchcut'),
                  "id" => $this->shortname."_tagline",
                  "pro" => 'true',
                  "desc" => __('Check to show your tagline below your logo.', 'punchcut'),
                  "std" => "",
                  "type" => "checkbox"),
                  
          array(  "name" => __('Follow Icons <span>control the follow icons in the top right of your header</span>', 'punchcut'),
                  "type" => "subhead"),

          array(  "name" => __('Enable Twitter', 'punchcut'),
                  "id" => $this->shortname."_twitter_toggle",
                  "pro" => 'true',
                  "desc" => __('Hip to Twitter? Check this box.', 'punchcut'),
                  "std" => "",
                  "type" => "checkbox"),

          array(  "name" => __('Enable Facebook', 'punchcut'),
                  "id" => $this->shortname."_facebook_toggle",
                  "desc" => __('Check this box to show a link to your Facebook page.', 'punchcut'),
                  "std" => "",
                  "type" => "checkbox"),
     
         array(  "name" => __('Enable Flickr', 'punchcut'),
                 "id" => $this->shortname."_flickr_toggle",
                 "desc" => __('Check this box to show a link to Flickr.', 'punchcut'),
                 "std" => "",
                 "type" => "checkbox"),
                           
         array(   "name" => __('Enable email', 'punchcut'),
                  "id" => $this->shortname."_email_toggle",
                  "desc" => __('Check this box to show a link to email updates.', 'punchcut'),
                  "std" => "",
                  "type" => "checkbox"),

          array(  "name" => __('Disable all', 'punchcut'),
                  "id" => $this->shortname."_follow_disable",
                  "desc" => __('Check this box to hide all follow icons (including RSS). This option overrides any other settings.', 'punchcut'),
                  "std" => "",
                  "type" => "checkbox"),

          array(  "name" => __('Twitter link', 'punchcut'),
                  "id" => $this->shortname."_twitter",
                  "pro" => 'true',
                  "desc" => __('Enter your twitter link here.', 'punchcut'),
                  "type" => "text"),

          array(  "name" => __('Facebook link', 'punchcut'),
                  "id" => $this->shortname."_facebook",
                  "desc" => __('Enter your Facebook link.', 'punchcut'),
                  "type" => "text"),
  
          array(  "name" => __('Flickr link', 'punchcut'),
                  "id" => $this->shortname."_flickr",
                  "desc" => __('Enter your Flickr link.', 'punchcut'),
                  "type" => "text"),

          array(  "name" => __('Email link', 'punchcut'),
                  "id" => $this->shortname."_email",
                  "desc" => __('Enter your email updates link.', 'punchcut'),
                  "type" => "text"),              
  
          array(  "name" => __('Navigation <span>control your top navigation menu</span>', 'punchcut'),
                  "type" => "subhead"),
          
          array(  "name" => __('Hide all pages', 'punchcut'),
                  "id" => $this->shortname."_hide_pages",
                  "desc" => __('Check this box to hide all pages', 'punchcut'),
                  "std" => "",
                  "type" => "checkbox"),

          array(  "name" => __('Exclude specific pages', 'punchcut'),
                  "id" => $this->shortname."_pages_to_exclude",
                  "pro" => 'true',
                  "desc" => __('The page ID of pages you do not want displayed in your navigation menu. Use a comma-delimited list, eg. 1,2,3', 'punchcut'),
                  "std" => "",
                  "type" => "text"),
                  
          array(  "name" => __('Hide all categories', 'punchcut'),
                  "id" => $this->shortname."_hide_cats",
                  "desc" => __('Check this box to hide all categories.', 'punchcut'),
                  "std" => "",
                  "type" => "checkbox"),
        
          array(  "name" => __('Exclude specific categories', 'punchcut'),
                  "id" => $this->shortname."_categories_to_exclude",
                  "pro" => 'true',
                  "desc" => __('The category ID of pages you do not want displayed in your navigation menu.. Use a comma-delimited list, eg. 1,2,3', 'punchcut'),
                  "std" => "",
                  "type" => "text"),

          array(  "name" => __('Hide home navigation menu item', 'punchcut'),
                  "id" => $this->shortname."_hide_home",
                  "pro" => 'true',
                  "desc" => __('Check this box if you are using a static page as your homepage instead of your blog (the default). The extra <em>Home</em> menu item will be removed.', 'punchcut'),
                  "std" => "",
                  "type" => "checkbox"),

          array(  "name" => __('Color Scheme <span>customize your color scheme</span>', 'punchcut'),
                  "type" => "subhead"),

          array(  "name" => __('Customize colors', 'punchcut'),
                  "id" => $this->shortname."_background_css",
                  "desc" => __('If enabled your theme will use the layouts and colors you choose below.', 'punchcut'), 
                  "std" => "disabled",
                  "type" => "select",
                  "options" => array( "disabled" => __('Disabled', 'punchcut'), 
                                      "enabled"  =>  __('Enabled', 'punchcut'))),

          array(  "name" => __('Background color', 'punchcut'),
                  "id" => $this->shortname."_background_color",
                  "pro" => 'true',
                  "desc" => __('The background will not match your color selection exactly, your color choice is blended with a transparent background image to give it texture. Use hex values and be sure to include the leading #.', 'punchcut'),
                  "std" => "#1d4377",
                  "type" => "colorpicker"),

          array(  "name" => __('Link color', 'punchcut'),
                  "id" => $this->shortname."_link_color",
                  "desc" => __('Use hex values and be sure to include the leading #.', 'punchcut'),
                  "std" => "#1d4377",
                  "type" => "colorpicker"),

          array(  "name" => __('Link hover color', 'punchcut'),
                  "id" => $this->shortname."_hover_color",
                  "desc" => __('Use hex values and be sure to include the leading #.', 'punchcut'),
                  "std" => "#0f1a29",
                  "type" => "colorpicker"),
      
          array(  "name" => __('Alert Box <span>toggle your custom alert box</span>', 'punchcut'),
                  "type" => "subhead"),

          array(  "name" => __('Alert Box on/off switch', 'punchcut'),
                  "id" => $this->shortname."_alertbox_state",
                  "pro" => 'true',
                  "desc" => __('Toggle the alert box on or off.', 'punchcut'),
                  "std" => "off",
                  "type" => "select",
                  "options" => array( "off" => __('Off', 'punchcut'), 
                                      "on" => __('On', 'punchcut'))),

          array(  "name" => __('Alert Header', 'punchcut'),
                  "id" => $this->shortname."_alertbox_title",
                  "pro" => 'true',
                  "desc" => __('The heading for your alert.', 'punchcut'),
                  "std" => "",
                  "type" => "text"),

          array(  "name" => __('Alert Message', 'punchcut'),
                  "id" => $this->shortname."_alertbox_content",
                  "pro" => 'true',
                  "desc" => __('You may use HTML in the message.', 'punchcut'),
                  "std" => "",
                  "type" => "textarea",
                  "options" => array( "rows" => "8",
                                      "cols" => "70")),

          array(  "name" => __('Sidebar Image <span>control your sidebar image state</span>', 'punchcut'),
                  "type" => "subhead"),

          array(  "name" => __('Image state', 'punchcut'),
                  "desc" => __('Add your images to the sidebar rotation by uploading them here: ', 'punchcut') .'<code>' . $directory . '/images/sidebar/</code>' . '<a href="http://thethemefoundry.com/downloads/punchcut/#options-sidebar-image">' . __('PRO Tutorial: Use page and post specific images', 'punchcut') . ' &rarr;</a>',
                  "id" => $this->shortname."_sideimg_state",
                  "std" => "rotate",
                  "type" => "select",
                  "options" => array( "rotate" => __('Rotating images', 'punchcut'), 
                                      "static" => __('Static image', 'punchcut'), 
                                      "custom" => __('Custom code', 'punchcut'), 
                                      "specific" => __('Page or post specific', 'punchcut'),
                                      "hide" => __('Do not show an image', 'punchcut'))),

          array(  "name" => __('Image <code>&lt;alt&gt;</code> tag', 'punchcut'),
                  "id" => $this->shortname."_sideimg_alt",
                  "desc" => __('The <code>&lt;alt&gt;</code> tag for your sidebar image(s). Will default to your blog title if left blank.', 'punchcut'),
                  "std" => "",
                  "type" => "text"),

          array(  "name" => __('Static image', 'punchcut'),
                  "id" => $this->shortname."_sideimg_url",
                  "desc" => __('Set the <em>Image State</em> to "Static Image" and upload your image here: ', 'punchcut') .'<code>' . $directory . '/images/sidebar/</code>',
                  "std" => "",
                  "type" => "text"),

          array(  "name" => __('Image link', 'punchcut'),
                  "id" => $this->shortname."_sideimg_link",
                  "desc" => __('Define a hyperlink for your sidebar image. If left empty the anchor tags will not be included.', 'punchcut'),
                  "std" => "",
                  "type" => "text"),
                
          array(  "name" => __('Custom code', 'punchcut'),
                  "id" => $this->shortname."_sideimg_custom",
                  "desc" => __('Replace your sidebar image with custom code. The <em>Image State</em> must be set to "Custom code" for this to work.', 'punchcut'),
                  "std" => "",
                  "type" => "textarea",
                  "options" => array( "rows" => "5",
                                      "cols" => "40")),
                  
          array(  "name" => __('Footer <span>customize your footer</span>', 'titan'),
                  "type" => "subhead"),

          array(  "name" => __('Copyright notice', 'punchcut'),
                  "id" => $this->shortname."_copyright_name",
                  "desc" => __('Your name or the name of your business.', 'punchcut'),
                  "std" => __('Your Name Here', 'punchcut'),
                  "type" => "text"),      

          array(  "name" => __('Stats code', 'punchcut'),
                  "id" => $this->shortname."_stats_code",
                  "desc" => __('If you use Google Analytics or need any other tracking script in your footer just copy and paste it here. The script will be inserted before the closing <code>&#60;/body&#62;</code> tag.', 'punchcut'),
                  "std" => "",
                  "type" => "textarea",
                  "options" => array( "rows" => "5",
                                      "cols" => "40") ),
        );
        parent::JestroCore();
      }
      
      /*
        ALL OF THE FUNCTIONS BELOW
        ARE BASED ON THE OPTIONS ABOVE
        EVERY OPTION SHOULD HAVE A FUNCTION
        
        THESE FUNCTIONS CURRENTLY JUST
        RETURN THE OPTION, BUT COULD BE
        REWRITTEN TO RETURN DIFFERENT DATA
      */
      
      /* LOGO FUNCTIONS */
      function logoState () {
        return get_option($this->shortname.'_logo');
      }
      
      function logoName () {
        return get_option($this->shortname.'_logo_img');
      }
      
      function logoAlt () {
        return get_option($this->shortname.'_logo_img_alt');
      }
      
      function logoTagline () {
        return get_option($this->shortname.'_tagline');
      }
      
     /* FOLLOW FUNCTIONS */
      function twitter() {
        return htmlspecialchars(wp_filter_post_kses(get_option($this->shortname.'_twitter', UTF-8)));
      }
      function twitterToggle() {
        return get_option($this->shortname.'_twitter_toggle');
      }
      function email() {
        return htmlspecialchars(wp_filter_post_kses(get_option($this->shortname.'_email', UTF-8)));
      }
      function emailToggle() {
        return get_option($this->shortname.'_email_toggle');
      }
      function facebook() {
        return htmlspecialchars(wp_filter_post_kses(get_option($this->shortname.'_facebook', UTF-8)));
      }
      function facebookToggle() {
        return get_option($this->shortname.'_facebook_toggle');
      }
      function flickr() {
        return htmlspecialchars(wp_filter_post_kses(get_option($this->shortname.'_flickr', UTF-8)));
      }
      function flickrToggle() {
        return get_option($this->shortname.'_flickr_toggle');
      }
      function followDisable() {
        return get_option($this->shortname.'_follow_disable');
      }
      
      
      /* NAVIGATION FUNCTIONS */
      function excludedPages () {
        return get_option($this->shortname.'_pages_to_exclude');
      }
      
      function excludedCategories () {
        return get_option($this->shortname.'_categories_to_exclude');
      }
      
      function hidePages () {
        return get_option($this->shortname.'_hide_pages');
      }
      
      function hideCategories () {
        return get_option($this->shortname.'_hide_cats');
      }
      
      function hideHome () {
        return get_option($this->shortname.'_hide_home');
      }
      
      /* FOOTER FUNCTIONS */
      function copyrightName() {
        return wp_filter_post_kses(get_option($this->shortname.'_copyright_name'));
      }
      function statsCode() {
        return stripslashes(get_option($this->shortname.'_stats_code'));
      }
      
      /* ALERTBOX FUNCTIONS */
      function alertboxState() {
        return get_option($this->shortname.'_alertbox_state');
      }
      function alertboxTitle() {
        return stripslashes(wp_filter_post_kses(get_option($this->shortname.'_alertbox_title')));
      }
      function alertboxContent() {
        return stripslashes(wp_filter_post_kses(wpautop(get_option($this->shortname.'_alertbox_content'))));
      }
      
      /* SIDE IMAGE FUNCTIONS */
      function sideimgState() {
        return get_option($this->shortname.'_sideimg_state');
      }
      function sideimgAlt() {
        return stripslashes(wp_filter_post_kses(get_option($this->shortname.'_sideimg_alt')));
      }
      function sideimgUrl() {
        return wp_filter_post_kses(get_option($this->shortname.'_sideimg_url'));
      }
      function sideimgLink() {
        return wp_filter_post_kses(get_option($this->shortname.'_sideimg_link'));
      }
      function sideimgCustom() {
        return  stripslashes(get_option($this->shortname.'_sideimg_custom'));
      }
      
      /* CSS FUNCTIONS */
      function backgroundCss() {
        return get_option($this->shortname.'_background_css');
      }
      function backgroundColor() {
        return '#1d4377';
      }
      function linkColor() {
        return get_option($this->shortname.'_link_color');
      }
      function hoverColor() {
        return get_option($this->shortname.'_hover_color');
      }
    }
  }
  /* SETTING EVERYTHING IN MOTION */
  if (class_exists('Punchcut')) {
    $punchcut = new Punchcut();
  }

?>