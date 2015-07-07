<?php global $punchcut; ?> 
<?php
if ($punchcut->alertboxState() == 'on') { ?>
  <div class="alert-box clear">
    <div class="meta"><?php echo $punchcut->alertboxTitle(); ?></div>
    <div class="entry">
      <?php echo $punchcut->alertboxContent(); ?>
    </div> 
  </div><!--end alert-box-->
<?php 
} ?>