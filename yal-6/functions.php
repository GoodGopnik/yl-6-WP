<?php 

//подключение библиотек
function yal6_assets() {

    wp_enqueue_style( 'fancyboxxx', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css' );

    wp_enqueue_style( 'mediacss', get_template_directory_uri() . '/assets/css/media.css' );

    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/style.css' );

    wp_enqueue_script('newscripttt', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js');

}
//подключение функции
add_action('wp_enqueue_scripts', 'yal6_assets',);

//отключение админ бар
show_admin_bar(false);

//подключение постов для размещение фото
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array('Photo-and-video') );

//подключение изменения фонового риснка
add_theme_support( 'custom-background' );

//подключение логотипа в админ панели
add_theme_support( 'custom-logo', [
	'height'      => 190,
	'width'       => 190,
	'flex-width'  => false,
	'flex-height' => false,
	'header-text' => '',
	'unlink-homepage-logo' => false, // WP 5.5
] );

//подключение редактирования меню
add_theme_support( 'menus' );