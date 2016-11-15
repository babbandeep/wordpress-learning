<?php

get_header();

if(have_posts()){
	while(have_posts()){
			the_post();
			the_content();
	}
}

if(get_post_meta(get_queried_object_id(), 'testing', true)){
	echo get_post_meta(get_queried_object_id(), 'testing', true);
}

 echo get_post_meta( $post->ID, 'new', true);

get_footer();

?>
