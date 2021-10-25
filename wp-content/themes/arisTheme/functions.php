<?php
error_reporting(E_ALL);
ini_set("display_errors",1);


define("DIR_IMG",get_template_directory_uri()."/assets/img/");
define("DIR_CSS",get_template_directory_uri()."/assets/css/");
define("DIR_JS",get_template_directory_uri()."/assets/js/");
define("DIR_FONTS",get_template_directory_uri()."/assets/fonts/");

    add_action('wp_enqueue_scripts',function(){
    //    подключаем стили
        wp_enqueue_style('bootstrap',DIR_CSS . 'bootstrap.min.css');
        wp_enqueue_style('googleFontNunito','https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600');
        wp_enqueue_style('fAwesome',DIR_CSS . 'font-awesome.min.css');
        wp_enqueue_style('main',DIR_CSS . 'style.css');


    //отключаем стандартный jquery
        wp_deregister_script("jquery");
    //  подключаем js
        wp_enqueue_script('jquery',DIR_JS.'jquery.min.js',true);
        wp_enqueue_script('bootstrap',DIR_JS.'bootstrap.min.js',true);
        wp_enqueue_script('main',DIR_JS.'main.js',true);

        

    });

    add_action("after_setup_theme",function(){
        register_nav_menu("top","top-menu");
        register_nav_menu("aside","nav-aside-menu");

		add_theme_support('post-thumbnails');


        
    }); 
 
	add_filter('nav_menu_css_class', function($classes, $item, $args, $depth){
        static $categoryMenuCouter=0;
		if($args->theme_location === 'top'&&in_array('menu-item-object-category',$classes)){
            $classes[]=strip_tags(category_description($item->object_id));
            
            
		}
		
		return $classes;
	}, 10, 4);
    


?> 