<?php 

//this is to connect with the css
function valdo_media_files(){
   wp_enqueue_style('valdo_media_files', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'valdo_media_files');


//this is to upload dynamic logo
add_theme_support('custom-logo');
add_theme_support('menus');
add_theme_support( 'widgets' );

function my_menus(){
	register_nav_menus(array(
		'headernav' => __('Header Nav Menu'),
		'footernav' => __('Footer Nav Menu')
	));
}

add_action('init', 'my_menus');

function nd_dosth_register_sidebars() {
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Logo', 'nd_dosth' ),
        'id'            => 'footer-logo',
        'description'   => esc_html__( 'This is a widget for adding a footer logo.', 'nd_dosth' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    }
add_action( 'widgets_init', 'nd_dosth_register_sidebars' );

function remove_block_w(){
    remove_theme_support('widgets-block-editor');
}
 
add_action('after_setup_theme', 'remove_block_w');

//this is for custom post type
function final_project_posts_types(){

register_post_type('service',array(
    'supports' => array('title','editor'),
    'rewrite' => array('slug' , 'services'),
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-admin-home',
    'labels' => array(
      'name' => 'Services',
      'add_new_item' => 'Add Services',
      'edit_item' => 'Edit Service',
      'all_items' => 'All Services',
      'singular_name' => 'Service'
    )
  ));



}

add_action('init', 'final_project_posts_types');










?>