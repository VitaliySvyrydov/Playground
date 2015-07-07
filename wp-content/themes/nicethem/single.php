<?php get_header();?>
        <div class="content pull-left">
        	
        	<ul class="breadcrumb">
		        <li><a href="#">Главная</a> <span class="divider">/</span></li>
		        <li><a href="#">Спецэффекты</a> <span class="divider">/</span></li>
		        <li class="active">Заголовок статьи</li>
	        </ul>
        	<?php if (have_posts()) : ?>
                 <?php while (have_posts()) : the_post(); ?>
        	<div class="post">
                    <h1><?php the_title(); ?></h1>
        		<div class="text">
        			<?php the_content()?>
        			<span class="label label-warning">Метки статьи</span>
        			<div class="meta"><i class="icon-tags"></i>
                                
                                <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                        foreach($posttags as $tag) {
                        $tag_links[] = '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
                        }
                         echo join( ', ', $tag_links );
                    }
                    ?>
                                </div>
        			
        		</div>
        		
        		<hr />
        		
        		<h1>Комментарии <span><i class="icon-comment"></i> <a href="#">11</a></span></h1>
        		
        		<?php comments_template();?>
        		
        		<form method="post" action="" class="form">
			        <legend>Оставить комментарий</legend>
			        
			        <label>Ваше имя*</label>
			        <div class="input-prepend">
			        	<span class="add-on"><i class="icon-user"></i></span><input type="text" placeholder="Вася">
			        </div>
			        
			        <label>Ваш e-mail*</label>
			        <div class="input-prepend">
			        	<span class="add-on"><i class="icon-envelope"></i></span><input type="text" placeholder="vasya@mail.ru">
			        </div>
			        
			        <label>Ваш сайт</label>
			        <div class="input-prepend">
			        	 <span class="add-on"><i class="icon-home"></i></span><input type="text" placeholder="http://vasya.ru">
			        </div>
			        
					<label>Текст сообщения</label>
			        <textarea name="text"></textarea>
			        <br />
			        <input type="submit" class="btn btn-success" value="Отправить">
		        </form>
        		
        	</div>
        <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
        <?php else : ?>
        <?php endif; ?>
        	<hr />
        	
        </div>
        
<?php get_sidebar(); ?>
<?php get_footer(); ?> 