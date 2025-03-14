<?php
// Get the category ID of 'autodealer'
$autodealer_category_id = get_cat_ID('autodealer');

$args = [
    "numberposts" => 3,
    "category_name" => "blog",
    "category__not_in" => [$autodealer_category_id] // Exclude 'autodealer' category
];

$recent_posts = get_posts($args);

foreach ($recent_posts as $post) {

    setup_postdata($post); // Set up post data to access post-related information
    $blog_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    $author_name = get_the_author();
    $post_excerpt = wp_trim_words(get_the_excerpt($post->ID), 25); // Adjust the number of words as needed

    ?> 
    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" id="<?php the_ID(); ?>" data-wow-delay="300ms">
        <div class="inner-box">
            <div class="image-box">
                <figure class="image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo !empty($blog_image) ? $blog_image : get_template_directory_uri() . "/images/resource/news-1.jpg"; ?>" 
                             class="img-fluid" 
                             alt="<?php echo esc_attr($post->post_title); ?>">
                    </a>
                </figure>
            </div>
            <div class="content-box">
                <span class="date"> <?php echo get_the_date('F j, Y', $post->ID); ?> </span>
                <ul class="post-info"></ul>
                <h3 class="blog-title">
                    <a href="<?php the_permalink($post->ID); ?>"> <?php echo $post->post_title; ?> </a>
                </h3>
                <p class="blog-details"> <?php echo $post_excerpt; ?> </p>
            </div>
        </div>
    </div> 
    <?php
}
wp_reset_postdata();
?>
