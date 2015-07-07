<?php global $punchcut;  
  $custom_field_url = wp_filter_post_kses(get_post_meta($post->ID, 'sideimg-url', $single = true)); 
  $custom_field_alt = stripslashes(wp_filter_post_kses(get_post_meta($post->ID, 'sideimg-alt', $single = true))); 
  $custom_field_link = wp_filter_post_kses(get_post_meta($post->ID, 'sideimg-link', $single = true)); 
  $custom_field_height = wp_filter_post_kses(get_post_meta($post->ID, 'sideimg-height', $single = true));  
  $custom_field_status = get_post_meta($post->ID, 'sideimg-status', $single = true); 
?> 
<?php //------Page and Post Specific---------------------------------------------------------------------------------//
if (($custom_field_status !== 'hidden' && $custom_field_url !== '') || ($punchcut->sideimgState() == 'specific')) : ?>
  <?php if ($custom_field_status !== 'hidden' && $custom_field_url !== '') { ?> 
    <div id="sidebar-image">
        <?php if ($custom_field_link !== '') {?>
        <a href="<?php echo $custom_field_link; ?>">
        <?php } ?>
          <?php if (is_single() || is_page() && $custom_field_url !== '') { ?>
          <img src="<?php echo $custom_field_url; ?>" alt="<?php if ($custom_field_alt !== '') echo $custom_field_alt; else echo the_title(); ?>"/>
          <?php } ?>
        <?php if ($custom_field_link !== '') {?>
        </a>
        <?php } ?>
    </div><!--end sidebar-image-->      
  <?php } ?>
<?php //------Static Image---------------------------------------------------------------------------------//
elseif ($punchcut->sideimgState() == 'static' && $punchcut->sideimgUrl() !== '') : ?>
  <div id="sidebar-image">
    <?php if ($punchcut->sideimgLink() !== '') {?>
      <a href="<?php echo $punchcut->sideimgLink(); ?>">
    <?php } ?>
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/sidebar/<?php echo $punchcut->sideimgUrl(); ?>" alt="<?php if ($punchcut->sideimgAlt() !== '') echo $punchcut->sideimgAlt(); else echo bloginfo('name'); ?>"/>
    <?php if ($punchcut->sideimgLink() !== '') {?>
      </a>
    <?php } ?>
  </div><!--end sidebar-image-->

<?php //------Custom Code---------------------------------------------------------------------------------//
elseif ($punchcut->sideimgState() == 'custom') : ?>
    <div id="sidebar-image">
      <?php echo $punchcut->sideimgCustom(); ?>
    </div><!--end sidebar-image-->

<?php //------Rotating Images---------------------------------------------------------------------------------//
else : ?>
    <div id="sidebar-image">
      <?php if ($punchcut->sideimgLink() !== '') {?>
        <a href="<?php echo $punchcut->sideimgLink(); ?>">
      <?php } ?>
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/sidebar/rotate.php" alt="<?php if ($punchcut->sideimgAlt() !== '') echo $punchcut->sideimgAlt(); else echo bloginfo('name'); ?>"/>
      <?php if ($punchcut->sideimgLink() !== '') {?>
        </a>
      <?php } ?>
    </div><!--end sidebar-image-->
<?php endif; ?>