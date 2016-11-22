<?php

require_once('inc/new_menu.php');
require get_template_directory() . '/inc/customizer.php';
include('inc/admin_menu.php');
include('inc/custom_slider.php');
require_once('inc/custom_post.php');

if ( ! function_exists( 'learning_setup' ) ) :
/**
* Sets up theme defaults and registers support for various WordPress features
*
*  It is important to set up these functions before the init hook so that none of these
*  features are lost.
*
*  @since MyFirstTheme 1.0
*/
function learning_setup() {
	add_theme_support( 'automatic-feed-links' );
}
endif;

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

 ?>

 <?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function test_widgets_init() {

	for( $i=1; $i <= 4; $i++ ){
		register_sidebar( array(
			'name' 					=> 'footer '.$i,
			'id'   					=> 'footer_area_'.$i,
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		));
		}

	}
add_action( 'widgets_init', 'test_widgets_init' );

function learning_enqueue_scripts(){
	wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), array(), date( 'ymd-Gis', filemtime( get_stylesheet_directory() . '/style.css' ) ) );
	}

 ?>
