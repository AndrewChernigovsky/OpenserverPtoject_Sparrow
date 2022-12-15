<?php
// Перехват хуков и вызывание функций
add_action('wp_enqueue_scripts', 'styles_add');
add_action('wp_footer', 'scripts_add');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('widgets_init', 'register_my_widgets');

// Подключение фильтров
// add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

// Функции

// Поключение стилей
function styles_add()
{
	wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css');
	wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css');
	wp_enqueue_style('media', get_template_directory_uri() . '/assets/css/media-queries.css');
}

// Подключение скриптов
function scripts_add()
{
	wp_enqueue_script('modern', get_template_directory_uri() . '/assets/js/modernizr.js');
	wp_enqueue_script('jqueryajax', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
	wp_enqueue_script('jquerymin', get_template_directory_uri() . '/assets/js/jquery-1.10.2.min.js');
	wp_enqueue_script('jquerymigrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js');
	wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js');
	wp_enqueue_script('doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js');
	wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js');
}

// Подключение меню
function theme_register_nav_menu()
{
	register_nav_menu('header_menu', 'Меню шапки');
	register_nav_menu('header_inside', 'Меню шапки внутренних страниц');
	register_nav_menu('footer_menu', 'Меню подвала');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails', array('post'));
	add_image_size('post_thumb', 800, 500, true);

	add_filter('excerpt_more', 'new_excerpt_more');
	function new_excerpt_more($more)
	{
		global $post;
		return '<a href="' . get_permalink($post) . '"> Читать дальше...</a>';
	}

}

// регистрация виджетов в сайдбар
function register_my_widgets()
{

	register_sidebar(
		array(
			'name' => 'left-sidebar',
			'id' => 'left_sidebar',
			'description' => 'Описание сайдбара',
			'before_widget' => '<div id="left-side" class="widget %2$s">',
			'after_widget' => "</div>\n",
			'before_title' => '<h5 class="widgettitle">',
			'after_title' => "</h5>\n"
		)
	);
	register_sidebar(
		array(
			'name' => 'top-sidebar',
			'id' => 'top_sidebar',
			'description' => 'Верхний сайдбар',
			'before_widget' => '<div id="top-side" class="widget %2$s">',
			'after_widget' => "</div>\n",
			'before_title' => '<h5 class="widgettitle">',
			'after_title' => "</h5>\n"
		)
	);
}

add_action('admin_menu', 'all_settings_link');
function all_settings_link()
{
	add_options_page(__('All Settings'), __('All Settings'), 'manage_options', 'options.php?foo');
}