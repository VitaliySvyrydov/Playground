<?php
  require_once( dirname(__FILE__) . '../../../../../../wp-config.php');
  require_once( dirname(__FILE__) . '../../../functions.php');
  header("Content-type: text/css"); 
?>
<?php global $punchcut; ?> 
<?php if ($punchcut->backgroundCss() == 'enabled') {?>
/*Body and Structure
------------------------------------------------------------ */
body { background: <?php echo $punchcut->backgroundColor(); ?> url(../../images/body-background-colors.png) repeat 0 0; }
#header { 
  background: #f7f7f7; 
  border-left: 1px solid #d3d3d3;
  border-right: 1px solid #d3d3d3;
}
div#follow { margin: 5px 29px 0 0; }
h1#title, div#title { margin: 0 0 0 29px; }
#description { margin: 0 29px; }
#navigation { 
  padding-bottom: 15px;
  background: url(../../images/nav-background-colors.png) no-repeat bottom left;
}
.post-box, #sidebar-image, #sidebar .widget, .comment-box { border: none; }
.pagination div a:link, .pagination div a:visited, div.comment-number span a:link, div.comment-number span a:visited { 
  background: rgb(255, 255, 255);
  background: rgba(255, 255, 255, 0.15);
  color: #555;
}
.pagination div a:hover, div.comment-number span a:hover { 
  background: rgb(245, 245, 245);
  background: rgba(255, 255, 255, 0.25); 
}
div.comments a, div.comments div { background: url(../../images/comments-wrap-colors.png) no-repeat 0 0; }
#footer { 
  background: rgb(255, 255, 255);
  background: rgba(255, 255, 255, 0.15); 
}
#footer div.widget h2 { color: #333; }
#footer div.widget ul li a:link, #footer div.widget ul li a:visited, #copyright, #copyright a:link, #copyright a:visited { color: #555; }
/*Links 
------------------------------------------------------------ */
a:link, a:visited { color: <?php echo $punchcut->linkColor(); ?>; }
a:hover { color: <?php echo $punchcut->hoverColor(); ?>; }

/*Reset Specific Link Colors
------------------------------------------------------------ */
.post-header h1 a:hover, .post-header h2 a:hover { color: <?php echo $punchcut->linkColor(); ?>; }
<?php 
} ?>