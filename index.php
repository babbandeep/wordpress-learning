<?php

get_header();

if(have_posts()){
	while(have_posts()){
			the_post();
			the_content();
	}
}
?>

<div class="container_fuild post_box">
	<div class="row">
		<h2>Latest Post</h2>
			<?php $args = array(
									"numberposts" => 3,
									"post_type"   => "post",
									"cat"         => 1
								);

								query_posts( $args );
		 		?>
		 <div id="myCarousel" class="carousel slide" data-ride="carousel">
			 <!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel1" data-slide-to="1"></li>
					<li data-target="#myCarousel1" data-slide-to="2"></li>
				</ol>
				<!-- Carousel items -->
				<div class="carousel-inner">
						<?php
									$count = 0;
									while( have_posts()) : the_post();
									if($count = 0){
						?>
					<div class="item active">
						<?php } else { ?>
					<div class="item">
						<?php }
						$post_content = get_post($post->ID); ?>
						<div class="col-sm-5 blog_imagebx">
							<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" class="img-responsive">
						</div>
						<div class="col-sm-7">
							<h3><?php echo $post->post_title; ?></h3>
							<p>posted on<b><?php mysql2date('F j, Y', $post->post_date) ?></b><?php the_time($d); ?></p>
							<p><?php echo substr( $post_content->post_content, 0, 600); ?></p>
								<a href="<?php echo get_permalink($post->ID); ?>">Read More</a>
						</div>
				</div>
				<?php $count++; endwhile; ?>
		 </div>
	</div>
</div>
</div>
</div>

<?php
if(get_post_meta(get_queried_object_id(), 'testing', true)){
	echo get_post_meta(get_queried_object_id(), 'testing', true);
}

 echo get_post_meta( $post->ID, 'new', true);

get_footer();

?>
