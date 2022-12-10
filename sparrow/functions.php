<?php

add_action('wp_enqueue_scripts', 'styles_add');
add_action('wp_footer', 'scripts_add');
add_action('after_setup_theme', 'nav_menu');

// Подключение фильтров

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

// Функции

// Поключение стилей
function styles_add()
{
	wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css');
	wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css');
	wp_enqueue_style('media', get_template_directory_uri() . '/assets/css/media-queries.css');
	wp_enqueue_script('modern', get_template_directory_uri() . '/assets/js/modernizr.js');
}

// Подключение скриптов
function scripts_add()
{
	wp_enqueue_script('jqueryajax', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
	wp_enqueue_script('jquerymin', get_template_directory_uri() . '/assets/js/jquery-1.10.2.min.js');
	wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js');
	wp_enqueue_script('doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js');
	wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js');
}

// Подключение меню
function nav_menu()
{
	$location = 'header_menu';
	$description = 'Меню шапки';
	register_nav_menu($location, $description);
}

// Замена класса элемента меню
function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'current ';
  }
  return $classes;
}