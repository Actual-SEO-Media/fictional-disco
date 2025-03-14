<?php
/**
* The template for blogs list
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
        </div>
    </div>
</section>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get the current page or set default to 1
$args = array(
    'posts_per_page' => 9, // Number of posts per page
    'category_name' => 'blog',
    'paged' => $paged // Use the current page number
);
$recent_posts = new WP_Query($args); // Initialize WP_Query
?>
<section class="news-section">
    <div class="auto-container">
        <div class="row">
            <?php
            // Get the current page or set it to 1 if not available
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
                'posts_per_page' => 6, // Number of posts per page
                'category_name' => 'blog', // Category slug
                'paged' => $paged, // Pagination parameter
            );

            $recent_posts = new WP_Query($args);

            if ($recent_posts->have_posts()) :
                while ($recent_posts->have_posts()) : $recent_posts->the_post(); 
                    $blog_image = get_the_post_thumbnail_url() ?: get_template_directory_uri() . '/images/resource/news-1.jpg';
                    $post_excerpt = wp_trim_words(get_the_excerpt(), 25);
            ?>
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" id="<?php the_ID(); ?>" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo $blog_image; ?>" class="img-fluid" alt="<?php the_title(); ?>">
                                </a>
                            </figure>
                        </div>
                        <div class="content-box">
                            <span class="date"><?php echo get_the_date('F j, Y'); ?></span>
                            <h4 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <p class="blog-details"><?php echo $post_excerpt; ?></p>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
            else :
            ?>
                <p>No posts found.</p>
            <?php endif; ?>

            <?php wp_reset_postdata(); // Reset post data ?>
        </div>

        <!-- Pagination -->
        <div class="pagination">
           <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <?php
        $pagination_links = paginate_links(array(
            'total' => $recent_posts->max_num_pages,
            'current' => max(1, get_query_var('paged')),
            'format' => '?paged=%#%',
            'prev_text' => '«',
            'next_text' => '»',
            'type' => 'array', // Return array of links for Bootstrap styling
        ));

        if (!empty($pagination_links)) {
            foreach ($pagination_links as $link) {
                $active = strpos($link, 'current') !== false ? ' active' : ''; // Add active class for the current page
                echo '<li class="page-item' . $active . '">' . str_replace('page-numbers', 'page-link', $link) . '</li>';
            }
        }
        ?>
    </ul>
</nav>
        </div>
    </div>
</section>

<section class="about-section-two">
    <div class="anim-icons">
        <span class="icon icon-line4"></span>
        <span class="icon icon-line5"></span>
        <span class="icon icon-arrow1 bounce-x"></span>
        <span class="icon icon-speaker zoom-one"></span>
    </div>
    <div class="auto-container">
        <div class="outer-box">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 order-2 wow fadeInRight animated"
                    data-wow-delay="600ms"
                    style="visibility: visible; animation-delay: 600ms; animation-name: fadeInRight;">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">About Blogging</span>
                            <h2>What you need to know</h2>
                            <div class="text">Blogging has evolved into an important tool for the success of businesses
                                operating online in the current digital environment. It provides a number of benefits
                                that can boost the visibility of your brand, as well as its authority and engagement
                                with customers. Some popular blog sites such as Mashable, Problogger, and ConversionXL
                                are mentioned as examples of sites that have become successful as a direct result of
                                blogging in a relatively short amount of time.</div>
                        </div>



                    </div>
                </div>
                <!-- Image Column -->
                <div class="image-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft animated"
                        style="visibility: visible; animation-name: fadeInLeft;">
                        <div class="image-box">
                            <span class="icon-dots2"></span>
                            <figure class="image-1 overlay-anim wow fadeInUp animated"
                                style="visibility: visible; animation-name: fadeInUp;"><img
                                    src="<?php echo get_template_directory_uri(); ?>/images/resource/about2-1.jpg"
                                    alt="Professional man enthusiastically using a laptop and smartphone to optimize SEO services."></figure>
                            <figure class="image-2 overlay-anim wow fadeInRight animated"
                                style="visibility: visible; animation-name: fadeInRight;"><img
                                    src="<?php echo get_template_directory_uri(); ?>/images/resource/about2-2.jpg"
                                    alt="A diverse team of professionals collaborating on blog content, reviewing documents, and working on a laptop in a bright office."></figure>
                            <div class="exp-box">
                                <div class="inner">
                                    <i class="icon flaticon-promotion"></i>
                                    <span class="count">30+</span>
                                    <h6 class="title">Work Experience</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php  the_content('blog'); ?>

