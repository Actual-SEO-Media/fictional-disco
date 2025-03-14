<?php
/*
Template Name: SEO Services
*/

get_header();
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
                            <li><a href="#"><?php the_title(); ?></a></li>

                        </ul>
                    </div>
                </div>
            </section>

<div>
    <?php the_content(); ?>

</div>
<?php
get_footer();
?>