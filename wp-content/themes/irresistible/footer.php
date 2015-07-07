
	</div><!-- / #wrap -->

	<div id="footer">
		
		<div id="footerWrap">
		
			<p id="copy"><?php _e('Copyright',woothemes); ?> &copy; <?php echo date('Y'); ?> <a href="#"><?php bloginfo('name'); ?></a>. <?php _e('All rights reserved',woothemes); ?>.</p>
			
			<ul id="footerNav">
			
				<?php wp_list_pages('sort_column=menu_order&title_li=&depth=1'); ?>
				<li><a href="http://bt-metal.ru/video/VCoMEVIqSeM/Nickelback-Burn-It-To-The-Ground-Live-at-Summer-Sonic-2010-JP.html">Nickelback - Burn It To The Ground Live at Summer Sonic 2010 JP</a></li>					
			</ul>
		
		</div><!-- / #footerWrap -->
	
	</div><!-- / #footer -->

<?php wp_footer(); ?>
<?php if ( get_option('woo_google_analytics') <> "" ) { echo stripslashes(get_option('woo_google_analytics')); } ?>

</body>
</html>