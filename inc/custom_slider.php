<?php

function custom_slider() {
    $args = array(
      'public' => true,
      'label'  => 'Slider Images'
    );
    register_post_type( 'slider', $args );
}
add_action( 'init', 'custom_slider' );

?>