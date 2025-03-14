<?php
/*
Template Name: Houston SEO
*/

get_header();
?>

<section class="call-to-action">
	<div class="bg bg-image">
		<?php
			if( wp_is_mobile() ){
				$img = '/wp-content/uploads/2025/03/houston-seo-mobile_opitimize.webp';
			} else {
				$img = '/wp-content/uploads/2025/03/houston-seo_opit.webp';
			}
		?>
		<img loading='eager' fetchpriority='high' decoding='async' src='<?php echo $img; ?>' alt='Woodlands SEO Page' aria-hidden='true'>
	</div>
<div class="auto-container">
<div class="outer-box wow fadeIn">
<h1 class="title"><?php the_title(); ?></h1>
<p class="text-white">
Actual SEO Media, Inc. has successfully helped a large and ever-growing number of local business owners
expand their businesses. We can produce the same results for your business through our search engine
optimization services. Keen to start?
</p>
<a class="theme-btn btn-style-one light" href="tel:(832)834-0661"><span class="btn-title">Contact Us</span></a>
</div>
</div>
</section>

<div>
                             <?php the_content(); ?>

</div>

<?php
get_footer();
?>
