	<div class="container-fluid pt-0">
			<div class="row">
				<div class="col-10 offset-1">
					<div class="carousel-outer">
						<div class="projects-carousel-home4 owl-carousel owl-theme default-navs">
						<?php
        $args = [
            "numberposts" => 4,
            "category_name" => "autodealer",
            "category__not_in" => [get_cat_ID("blog")],
        ];
        $recent_posts = get_posts($args);

// var_dump($recent_posts);
	
		foreach ($recent_posts as $post) {

            setup_postdata($post); // Set up post data to access post-related information
            $blog_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            $author_name = get_the_author();

            // Get the author's name
            ?>
	<div class="project-block-home4">
		<div class="image-box">
			<figure class="image">
				<img src="<?php if (
				    !empty($blog_image)
				) {
				    echo $blog_image;
				} else {
				    echo get_template_directory_uri() . "/images/resource/news-1.jpg";
				} ?>" alt="">
			</figure>
			<div class="caption-box">
				<h4 class="title"><a href="<?php the_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></h4>
			</div>
		</div>
	</div>
	<?php
	 // After looping through a separate query, this function restores the $post global to the current post in the main query.
	 wp_reset_postdata();
}
	?>
	</div>
	</div>
				</div>
			</div>
		</div>