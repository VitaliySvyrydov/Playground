<?php

// THIS IS THE DIFFERENT FIELDS
$options[] = array(	"name" => "Настройки",
					"type" => "heading");
						
$options[] = array(	"name" => "Вариант отображения",
					"desc" => "Выберите стиль темы оформления.",
					"id" => $shortname."_alt_stylesheet",
					"std" => "",
					"type" => "select",
					"options" => $alt_stylesheets);

$options[] = array(	"name" => "Настройки логотипа",
					"desc" => "Paste the full URL of your custom logo image, should you wish to replace our default logo e.g. 'http://www.yoursite.com/logo.png'.",
					"id" => $shortname."_logo",
					"std" => "",
					"type" => "text");					 							    

$options[] = array(	"name" => "Google Analytics",
					"desc" => "Вставьте ваш код Google Analytics (или код другой статистики).",
					"id" => $shortname."_google_analytics",
					"std" => "",
					"type" => "textarea");		

$options[] = array(	"name" => "Feedburner RSS Ссылка",
					"desc" => "Введите ваш Feedburner URL.",
					"id" => $shortname."_feedburner_url",
					"std" => "",
					"type" => "text");			

$options[] = array(	"name" => "Настройка главной страницы",
					"type" => "heading");	

$options[] = array(	"name" => "Включить настраиваемую главную страницу",
					"desc" => "Выберите, чтобы настроить главную страницу (шаблон custom-home.php). Вы должны настроить отображение элементов ниже.",
					"id" => $shortname."_home",
					"std" => "false",
					"type" => "checkbox");	

$options[] = array(	"name" => "Number of posts",
					"desc" => "Введите количество записей для отображения в блоке Мои записи.",
					"id" => $shortname."_home_posts",
					"std" => "",
					"type" => "text");			

$options[] = array(	"name" => "Записи Трансляции",
					"desc" => "Введите количество записей для отображения в блоке Моя трансляция. Для работы необходимо установить плагин <a href=\"http://wordpress.org/extend/plugins/lifestream/\">Lifestream</a>",
					"id" => $shortname."_home_lifestream",
					"std" => "",
					"type" => "text");			

$options[] = array(	"name" => "Flickr ID",
					"desc" => "Введите ваш Flickr ID. Используйте <a href=\"http://www.idgettr.com\">IDGettr</a> чтобы узнать его.",
					"id" => $shortname."_home_flickr_user",
					"std" => "",
					"type" => "text");			

$options[] = array(	"name" => "Flickr - количество",
					"desc" => "Введите количество фотографий, которые будут отображаться с Flickr. Максимум 10.",
					"id" => $shortname."_home_flickr_count",
					"std" => "",
					"type" => "text");			

$options[] = array(	"name" => "Flickr URl",
					"desc" => "Введите ссылку на ваш аккаунт Flickr.",
					"id" => $shortname."_home_flickr_url",
					"std" => "",
					"type" => "text");			

$options[] = array(	"name" => "Ссылка на архивы",
					"desc" => "Введите ссылку на страницу архивов, например http://mysite.com/archives/. Чтобы сделать архивы создайте новую страницу с шаблоном 'Archive Page'.",
					"id" => $shortname."_home_archives",
					"std" => "",
					"type" => "text");			

$options[] = array(	"name" => "Внешний вид блога",
					"type" => "heading");	

$options[] = array(	"name" => "Сайдбар слева",
					"desc" => "Выберите, чтобы отображать сайдбра слева, а не справа.",
					"id" => $shortname."_mainright",
					"std" => "false",
					"type" => "checkbox");	

$options[] = array(	"name" => "Категории в навигации?",
					"desc" => "Выберите, чтобы отображать категории вместо страниц в навигационном меню.",
					"id" => $shortname."_nav",
					"std" => "false",
					"type" => "checkbox");	

$options[] = array(	"name" => "Отключить вкладки?",
					"desc" => "Выберите, чтобы отключить вкладки в сайдбаре.",
					"id" => $shortname."_tabs",
					"std" => "false",
					"type" => "checkbox");	

$options[] = array(	"name" => "Отключить видео?",
					"desc" => "Выберите, чтобы отключить виджет видео из сайдбара.",
					"id" => $shortname."_video",
					"std" => "false",
					"type" => "checkbox");	

$options[] = array(	"name" => "Об авторе",
					"type" => "heading");	

$options[] = array(	"name" => "Об авторе",
					"desc" => "Несколько слов об авторе, которые будут отображаться вверху блога.",
					"id" => $shortname."_about",
					"std" => "",
					"type" => "textarea");	

$options[] = array(	"name" => "Ссылка на страницу Об авторе",
					"desc" => "Ссылка на полную страницу Об авторе. Например: http://www.yoursite.com/about",
					"id" => $shortname."_aboutlink",
					"std" => "#",
					"type" => "text");	

$options[] = array(	"name" => "Баннерs Sidebar - Widget (125x125)",
					"type" => "heading");

$options[] = array(	"name" => "Чередовать баннеры?",
					"desc" => "Выберите для случайного чередования баннеров.",
					"id" => $shortname."_ads_rotate",
					"std" => "true",
					"type" => "checkbox");	

$options[] = array(	"name" => "Баннер #1 - Изображение",
					"desc" => "Введите ссылку на баннер.",
					"id" => $shortname."_ad_image_1",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-1.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Баннер #1 - Ссылка",
					"desc" => "Введите ссылку, на которую будет ссылаться баннер.",
					"id" => $shortname."_ad_url_1",
					"std" => "http://www.woothemes.com",
					"type" => "text");						

$options[] = array(	"name" => "Баннер #2 - Изображение",
					"desc" => "Введите ссылку на баннер.",
					"id" => $shortname."_ad_image_2",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-2.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Баннер #2 - Ссылка",
					"desc" => "Введите ссылку, на которую будет ссылаться баннер.",
					"id" => $shortname."_ad_url_2",
					"std" => "http://www.woothemes.com",
					"type" => "text");

$options[] = array(	"name" => "Баннер #3 - Изображение",
					"desc" => "Введите ссылку на баннер.",
					"id" => $shortname."_ad_image_3",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-3.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Баннер #3 - Ссылка",
					"desc" => "Введите ссылку, на которую будет ссылаться баннер.",
					"id" => $shortname."_ad_url_3",
					"std" => "http://www.woothemes.com",
					"type" => "text");

$options[] = array(	"name" => "Баннер #4 - Изображение",
					"desc" => "Введите ссылку на баннер.",
					"id" => $shortname."_ad_image_4",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-4.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Баннер #4 - Ссылка",
					"desc" => "Введите ссылку, на которую будет ссылаться баннер.",
					"id" => $shortname."_ad_url_4",
					"std" => "http://www.woothemes.com",
					"type" => "text");

?>