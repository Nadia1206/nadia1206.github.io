<?php
function wp_suitcase_setup()  {
	load_theme_textdomain('wp_suitcase');
	add_theme_support( 'custom-background' );
	add_theme_support('title-tag');
	add_theme_support('custom-logo', array('height' => 31,
											 'width' => 134, 
											 'flex-height' => true));
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(1350, 370);
	add_image_size( 'wp_suitcase-image', 2000, 1200, true );
	add_theme_support('html5', array('search_form', 
										'comment-form', 
										'comment-list', 
										'gallery', 
										'caption'
	));
	add_theme_support('post-formats', array(
											'aside',
											'image',
											'video',
											'gallery'
		));

register_nav_menus (array 
	('primary' => 'Primary menu',
	  'home_page' => 'Home page',
	  ));
}

add_action ('after_setup_theme', 'wp_suitcase_setup');

	function wp_suitcase_scripts() {
	wp_enqueue_style('style.css', get_stylesheet_uri());
	wp_enqueue_style('bootstrap-theme', get_template_directory_uri().'/css/bootstrap-theme.min.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style ('font-awesome',  get_template_directory_uri().'/css/font-awesome.min.css');
    wp_enqueue_script ('jquery-3.2.1.min',get_theme_file_uri(). '/js/jquery-3.2.1.min.js');
    wp_enqueue_script('jquery.scrolly', get_theme_file_uri().'/js/jquery.scrolly.min.js');
    wp_enqueue_script('jquery.scrollex', get_theme_file_uri(). '/js/jquery.scrollex.min.js');
    wp_enqueue_script('skel', get_theme_file_uri().'/js/skel.min.js');
    wp_enqueue_script('util', get_theme_file_uri().'/js/util.js');
    wp_enqueue_script('main', get_theme_file_uri().'/js/main.js');
     wp_enqueue_script ('jquery');
    

}
add_action ('wp_enqueue_scripts','wp_suitcase_scripts' );
add_filter('excerpt_more', function($more) {
	return '';
});
function wp_suitcase_register ($wp_customize) {
 $wp_customize->add_setting('header_social', array (
 	'default' => __('Поделиться'),
 	'transport' => 'refresh',
 	));
 $wp_customize->add_section('social_section', array(
 	'title' => __('Social settings'),
 	'priority' => 30,
 	));
 $wp_customize->add_control(
 	'header_social', 
 	array(
 		'label' =>__('Social header in footer', 'wp_suitcase'),
 		'section' => 'social_section',
 		'settings' => 'header_social',
 		'type' => 'text',
 		));
 $wp_customize->add_setting('facebook_social', array (
 	'default' => __('Url facebook'),
 	'transport' => 'refresh',
 	));
  $wp_customize->add_setting('twitter_social', array (
 	'default' => __('Url twitter'),
 	'transport' => 'refresh',
 	));
   $wp_customize->add_setting('instagram_social', array (
 	'default' => __('Url instagram'),
 	'transport' => 'refresh',
 	));
   $wp_customize->add_control(
 	'facebook_social', 
 	array(
 		'label' =>__('facebook profile url', 'wp_suitcase'),
 		'section' => 'social_section',
 		'settings' => 'facebook_social',
 		'type' => 'text',
 		));
    $wp_customize->add_control(
 	'twitter_social', 
 	array(
 		'label' =>__('twitter profile url', 'wp_suitcase'),
 		'section' => 'social_section',
 		'settings' => 'twitter_social',
 		'type' => 'text',
 		));
     $wp_customize->add_control(
 	'instagram_social', 
 	array(
 		'label' =>__('instagram profile url', 'wp_suitcase'),
 		'section' => 'social_section',
 		'settings' => 'instagram_social',
 		'type' => 'text',
 		));

}
add_action('customize_register','wp_suitcase_register' );
require get_parent_theme_file_path( '/template-parts/custom-header.php' );

function wp_suitcase_widgets_init() {
	register_sidebar(array(
		'name' =>__('Main Sidebar', 'wp_suitcase'),
		'id' => 'Sidebar-1',
		'description' =>__('Widgets in this area will be shown on all posts and pages.', 'wp_suitcase'),
		'before_widget' => '<div id="%1$s" class="%2$s inner"><form>',
		'after_widget' => '</div></form>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
		));
	
}
add_action('widgets_init', 'wp_suitcase_widgets_init');
?>