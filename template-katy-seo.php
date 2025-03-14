<?php
/*
Template Name: Katy SEO 
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
		<img loading='eager' fetchpriority='high' decoding='async' src='<?php echo $img; ?>' alt='Katy SEO Page' aria-hidden='true'>
	</div>
<div class="auto-container">
<div class="outer-box wow fadeIn">
<h1 class="title"><?php the_title(); ?></h1>
<p class="text-white">
At Actual SEO Media, Inc., we are the Katy SEO experts who understand how search engine optimization (SEO) works. SEO is constantly changing, and we have an expert team that can keep up with this ever-changing marketing discipline.	Are you ready to start this digital journey?
</p>
<a class="theme-btn btn-style-one light" href="tel:(281)962-7777"><span class="btn-title">Contact Us</span></a>
</div>
</div>
</section>

<div>
    <?php the_content(); ?>
</div>

<?php
	get_footer();
?>