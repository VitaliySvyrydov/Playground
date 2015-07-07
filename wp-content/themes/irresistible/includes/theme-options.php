<?php

function woo_options(){

// VARIABLES
$themename = "Irresistible";
$manualurl = 'http://www.woothemes.com/support/theme-documentation/irresistible/';
$shortname = "woo";

$GLOBALS['template_path'] = get_bloginfo('template_directory');

//Access the WordPress Categories via an Array
$woo_categories = array();  
$woo_categories_obj = get_categories('hide_empty=0');
foreach ($woo_categories_obj as $woo_cat) {
    $woo_categories[$woo_cat->cat_ID] = $woo_cat->cat_name;}
$categories_tmp = array_unshift($woo_categories, "Select a category:");    
       
//Access the WordPress Pages via an Array
$woo_pages = array();
$woo_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($woo_pages_obj as $woo_page) {
    $woo_pages[$woo_page->ID] = $woo_page->post_name; }
$woo_pages_tmp = array_unshift($woo_pages, "Select a page:");       


//Stylesheets Reader
$alt_stylesheet_path = TEMPLATEPATH . '/styles/';
$alt_stylesheets = array();

if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }    
    }
}

//More Options
$all_uploads_path = get_bloginfo('home') . '/wp-content/uploads/';
$all_uploads = get_option('woo_uploads');
$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");

// THIS IS THE DIFFERENT FIELDS
$options = array();   

$options[] = array(	"name" => "Настройки",
					"type" => "heading");
						
$options[] = array( "name" => "Вариант отображения",
					"desc" => "Выберите альтернативный стиль темы оформления.",
					"id" => $shortname."_alt_stylesheet",
					"std" => "default.css",
					"type" => "select",
					"options" => $alt_stylesheets);

$options[] = array( "name" => "Настройки логотипа",
					"desc" => "Загрузите собственный логотип или укажите ссылку на логотип. (http://yoursite.com/logo.png)",
					"id" => $shortname."_logo",
					"std" => "",
					"type" => "upload");    
                                                                                     
$options[] = array( "name" => "Настройка Favicon",
					"desc" => "Загрузите Png/Gif изображение (размером 16px x 16px), которое будет отображаться как favicon.",
					"id" => $shortname."_custom_favicon",
					"std" => "",
					"type" => "upload"); 
                                               
$options[] = array( "name" => "Код статистики",
					"desc" => "Введите ваш код Google Analytics (или другой код статистики). Данный код будет добавлен в конец шаблона ваших страниц.",
					"id" => $shortname."_google_analytics",
					"std" => "",
					"type" => "textarea");        

$options[] = array( "name" => "RSS Ссылка",
					"desc" => "Введите адрес RSS-ленты (Feedburner или другой).",
					"id" => $shortname."_feedburner_url",
					"std" => "",
					"type" => "text");
                    
$options[] = array( "name" => "Пользовательский CSS",
                    "desc" => "Быстро добавляет ваш CSS к общим стилям. Просто добавьте ваш код в данный блок.",
                    "id" => $shortname."_custom_css",
                    "std" => "",
                    "type" => "textarea");		

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

$options[] = array(	"name" => "Баннеры в сайдбаре - Виджет (125x125)",
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

update_option('woo_template',$options);      
update_option('woo_themename',$themename);   
update_option('woo_shortname',$shortname);
update_option('woo_manual',$manualurl);

                                     
// Woo Metabox Options
                    

$woo_metaboxes = array(

        "embed" => array (
            "name"  => "embed",
            "std"  => "",
            "label" => "Embed Code",
            "type" => "textarea",
            "desc" => "Enter the video embed code for your video. Add <strong>video</strong> as a tag in your post to make your video appear in the sidebar video widget."
        )

    );
    
update_option('woo_custom_template',$woo_metaboxes);      

/*
function woo_update_options(){
        $options = get_option('woo_template',$options);  
        foreach ($options as $option){
            update_option($option['id'],$option['std']);
        }   
}

function woo_add_options(){
        $options = get_option('woo_template',$options);  
        foreach ($options as $option){
            update_option($option['id'],$option['std']);
        }   
}


//add_action('switch_theme', 'woo_update_options'); 
if(get_option('template') == 'wooframework'){       
    woo_add_options();
} // end function 
*/


}

add_action('init','woo_options');  

?>