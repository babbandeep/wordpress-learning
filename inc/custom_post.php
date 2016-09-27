<?php

function custom_testimonial(){
    
    register_post_type( 'testimonials',
                       array(
                       'label' => array(
                       'name' => __('Testimonials'),
                       'singular_name' => __('Testimonial')
                       ),
                       'public' => true,
                       'has_archive' => true,
                       'rewrite' => array( 'slug' => 'testimonials'),       
                           )
    
    );
}
    
    add_action( 'init' ,'custom_testimonial');


?>