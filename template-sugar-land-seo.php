<?php
/*
Template Name: Sugar Land SEO Page 
*/
	get_header();
	remove_filter("the_content", "wpautop");
?>

<section class="call-to-action">
	<div class="bg bg-image">
		<?php
			if( wp_is_mobile() ){
				$img = '/wp-content/uploads/2025/03/katy-seo-mobile-opitimized.webp';
			} else {
				$img = '/wp-content/uploads/2025/03/katy-seo_opitimized.webp';
			}
		?>
		<img loading='eager' fetchpriority='high' decoding='async' src='<?php echo $img; ?>' alt='<?php the_title(); ?>' aria-hidden='true'>
	</div>
<div class="auto-container">
<div class="outer-box wow fadeIn">
<h1 class="title"><?php the_title(); ?></h1>
<p class="text-white">
Whether you need SEO for lawyers, plumbers, window cleaning services, HVAC services, or any other type of business, our experienced web marketers assist businesses in the Sugar Land area. We help improve your Google rank and online presence and achieve long-term results.
</p>
<a class="theme-btn btn-style-one light" href="tel:(281)962-6166"><span class="btn-title">Contact Us</span></a>
</div>
</div>
</section>

<div>
    <?php the_content(); ?>
</div>

<?php
	get_footer();
?>