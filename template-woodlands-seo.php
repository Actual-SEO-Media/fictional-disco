<?php
/*
Template Name: Woodlands SEO Page 
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
		<img loading='eager' fetchpriority='high' decoding='async' src='<?php echo $img; ?>' alt='Woodlands SEO Page' aria-hidden='true'>
	</div>
<div class="auto-container">
<div class="outer-box wow fadeIn">
<h1 class="title"><?php the_title(); ?></h1>
<p class="text-white">
Actual SEO Media, Inc. is a digital marketing agency dedicated to helping companies in the Greater Houston area and is one of the best The Woodlands SEO companies. Our developed strategies have allowed us to help businesses all over the U.S. with our Internet marketing services. What started with Houston SEO services quickly grew, and we now have offices located in Katy and Sugar Land as well.
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