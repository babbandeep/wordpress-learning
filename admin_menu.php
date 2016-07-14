<?php
/*
Admin menu
*/


/** Step 2 (from text above). */
add_action( 'admin_menu', 'slider_menu' );

/** Step 1. */
function slider_menu() {
	add_options_page( 'Slider Options', 'Slider', 'manage_options', 'my-unique-identifier', 'slider_options' );
}

/** Step 3. */
function slider_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';
}

?>