<?php
/**
* The template for displaying all single posts and attachments
*
* 
*/
?>
<!-- Start main-content -->
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
                <li><a href="<?php echo site_url();?>">Home</a></li>
                <li><?php the_title(); ?></li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->
<!--Blog Details Start-->
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7 blog-details <?php post_class(); ?>" id="post-<?php the_ID(); ?> ">
                <div class="blog-details__left">
                    <div class="blog-details__img">
                        <?php $blog_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));?>
                        <img src="<?php if(!empty($blog_image)){echo $blog_image;} else{ echo get_template_directory_uri().'/images/resource/news-details.jpg';}?>" alt="<?php if(!empty($blog_image)){echo get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true);}else{echo "A team of diverse professionals collaborating in a modern office, exemplifying the expertise and innovation of Texas SEO strategies.";} ?>">
                        <div class="blog-details__date">
                            <span class="day">28</span>
                            <span class="month"><?php the_date();?></span>
                        </div>
                    </div>
                    <div class="blog-details__content blog-details__text-2 pt-3">
						<?php the_content(); ?>
                    </div>
                    <div class="blog-details__bottom">
                        <p class="blog-details__tags"> <span>Tags</span>
                            <?php $tag_list = get_the_tag_list( '', '', '', get_the_ID() );

                                if ( $tag_list && ! is_wp_error( $tag_list ) ) {
                                    echo '#'.$tag_list;
                                }?>
                        </p>
                        <div class="blog-details__social-list">
                            <a href="https://www.facebook.com/actualseohoustontx/"><i class="fab fa-facebook"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.1 288l14.2-92.7h-88.9v-60.1c0-25.4 12.4-50.1 52.2-50.1h40.4V6.3S260.4 0 225.4 0c-73.2 0-121.1 44.4-121.1 124.7v70.6H22.9V288h81.4v224h100.2V288z"/></svg></i></a>
                            <a href="https://www.pinterest.com/actualseomedia123/"><i class="fab fa-pinterest-p"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"/></svg></i></a>
                            <a href="https://www.instagram.com/actualseomedia/"><i class="fab fa-instagram"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></i></a>
                        </div>
                    </div>
                    <div class="nav-links">
                        <div class="prev">
                            <?php echo previous_post_link('&laquo; %link', 'Prev Post', 'yes'); ?>
                        </div>
                        <div class="next">
                            <?php next_post_link('%link &raquo;', 'Next Post', 'yes'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_sidebar(); ?>

        </div>
    </div>
</section>


