<?php

/*customizer */

function webbuilder_customize_register( $wp_customize ){
	
	    	
	$wp_customize->add_section( 'header' , array(
		'title'    => __('Header', 'Webbuilder'),
		'description' => '',
		'priority' => 5,
	));
	
	 $wp_customize->add_setting( 'wb_logo' );
	 
         
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wb_logo', array(
        'label'    => __( 'Upload Logo', 'Webbuilder' ),
        'section'  => 'header',
        'settings' => 'wb_logo',
		'priority' => 5,
    ) ) );
   
/*	$wp_customize->add_section('header_settings_section', array(
		'title'    => 'Header Text Section',
		'priority' => 6
	));
*/
	$wp_customize->add_setting('email', array(
		'default'        => 'example@email.com',
	));

	
	$wp_customize->add_control('email', array(
		'label'   => 'Email',
		'section' => 'header',
		'type'    => 'text',
	));
	
		
	$wp_customize->add_setting('phone_no', array(
		'default'        => '987654321',
	));
	
		$wp_customize->add_control('phone_no', array(
		'label'   => 'Phone No',
		'section' => 'header',
		'type'    => 'text',
	));
	
	$wp_customize->add_section('social_links', array(
	     'title'       =>  'Social links',
		 'description' =>  'Use <b>http://</b> with links',
		 'priority'    => 6
		 ));
		 
	$wp_customize->add_setting('fb_links', array(
		'default' =>  'http://www.Facebook.com' 
		));
	
	$wp_customize->add_control('fb_links', array(
		'label'   =>  'Facebook',
		'section' =>  'social_links',
		'type'    =>  'text'
	));
	
	$wp_customize->add_setting('tw_links', array(
		'default' =>  'http://www.Twitter.com' 
	));
	
	$wp_customize->add_control('tw_links', array(
		'label'   =>  'Twitter',
		'section' =>  'social_links',
		'type'    =>  'text'
	));
	
	$wp_customize->add_setting('gp_links', array(
		'default' =>  'http://www.plus.google.com' 
		));
	
	$wp_customize->add_control('gp_links', array(
		'label'   =>  'Google Plus',
		'section' =>  'social_links',
		'type'    =>  'text'
	));
}

add_action( 'customize_register','webbuilder_customize_register' ); 
 
 ?>