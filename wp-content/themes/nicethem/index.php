<?php get_header();?>
<div class="content pull-left">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        	<div class="post clearfix">
        		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span><i class="icon-comment"></i> <?php comments_popup_link('0','1','%'); ?> </span></h1>
        		<div class="image">
	        		<img src="http://localhost/2videos/wp-content/themes/nicethem/images/thumb.png" class="img-polaroid" alt="" />
				</div>
        		<div class="text">
        			<?php the_excerpt()?>
        			<a href="<?php the_permalink(); ?>" class="btn btn-success">Читать полностью</a>
        		</div>
        	</div>
        	
        	<hr />
                <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
                    <div class="pagination clear">
                    <div class="alignleft"><?php next_posts_link(__ ('&larr; Предыдущая запись', 'punchcut')) ?></div>
                    <div class="alignright" ><?php previous_posts_link(__ ('Следущая запись &rarr;', 'punchcut')) ?></div>
                    </div><!--end pagination-->
                    <?php else : ?>
                    <?php endif; ?>  
        	
        	
        	<div class="pagination">
		        <ul>
			        <li><a href="#">Назад</a></li>
			        <li><a href="#">1</a></li>
			        <li><a href="#">2</a></li>
			        <li><a href="#">3</a></li>
			        <li><a href="#">4</a></li>
			        <li><a href="#">Вперед</a></li>
		        </ul>
	        </div>
        	
</div>

<?php get_sidebar();?>
<?php get_footer();?>
