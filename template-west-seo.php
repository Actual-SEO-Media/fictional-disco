<?php
/*
Template Name: West SEO 
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
At Actual SEO Media Inc., we use our state-of-the-art training and technology to not only put you at the top of search engine lists but also keep you there. By using our expertise, our experience, and our special knowledge of Internet marketing tools, you enjoy a higher return on your internet marketing investment.
</p>
<a class="theme-btn btn-style-one light" href="tel:(713)737-5529"><span class="btn-title">Contact Us</span></a>
</div>
</div>
</section>

<div>
    <?php the_content(); ?>
</div>

<?php
	get_footer();
?>