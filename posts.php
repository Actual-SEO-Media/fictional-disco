<?php
/**
* The template for posts
*
* 
*/
?>


<section class="page-title">
	<div class="page-title-img">
		<?php
			if( wp_is_mobile() ){
				$img = '/wp-content/uploads/2025/03/page-title-mobile-opitimize.webp';
			} else {
				$img = '/wp-content/uploads/2025/03/page-title_opitimize.webp';
			}
		?>
		<img loading='eager' fetchpriority='high' decoding='async' src='<?php echo $img; ?>' alt='Page Title' aria-hidden='true'>
	</div>
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title"><?php the_title(); ?></h1>
            <ul class="page-breadcrumb">
                <li><?php the_title(); ?></li>
            </ul>
        </div>
    </div>
</section>

<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                
        <div class="row">
          	<?php
				$post_list = get_posts( array(
					'orderby'    => 'menu_order',
					'sort_order' => 'asc',
					'suppress_filters' => false
				) );

				$posts = array();

				?>

				<?php
				foreach ( $post_list as $post ) {
				   $posts[] += $post->ID;

				?>
          <?php $blog_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
            <div class="news-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp" id="<?php the_ID(); ?>"
                data-wow-delay="300ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="<?php echo get_permalink($post->ID); ?>"><img src="<?php if (!empty($blog_image)) {
                                            echo $blog_image;
                                        } else {
                                            echo get_template_directory_uri() . '/images/resource/news-1.jpg';
                                        } ?>" class="img-fluid" alt="<?php the_title(); ?>"></a></figure>
                    </div>
                    <div class="content-box">
                        <span class="date"><?php echo $post->post_date;?></span>
                        <ul class="post-info">
                            <li><i class="fa fa-user-circle"></i> by <?php echo $author_name; ?></li>
                            
                        </ul>
                        <h4 class="title"><a href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title;?></a></h4>
                        <a href="<?php echo get_permalink($post->ID); ?>" class="read-more">Read More <i
                                class="fa fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <?php } 
            wp_reset_postdata(); // Reset post data to avoid conflicts
            ?>
        </div>
            </div>
            <?php get_sidebar(); ?>

        </div>
    </div>
</section>

      