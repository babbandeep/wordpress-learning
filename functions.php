<?php

require_once('inc/new_menu.php');
require get_template_directory() . '/inc/customizer.php';
include('inc/admin_menu.php');
include('inc/custom_slider.php');


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
	
	register_sidebar( array(
	    'name'          => 'Header phone',
		'id'            => 'header_phone',
        'before_widget'	=> '',
		'after_widget'  => '',
		'before_title'  => '',
		'before_title'  => ''
		)
	);

	register_sidebar( array(
		'name'          => 'Home slider',
		'id'            => 'slider',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="slider">',
		'after_title'   => '</h2>',
	) );
	
		register_sidebar( array(
		'name'          => 'Home right sidebar2',
		'id'            => 'home_right_2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'test_widgets_init' );



 ?>