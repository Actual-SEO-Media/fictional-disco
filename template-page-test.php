<?php
/*
Template Name: Page Testing
*/

get_header();
?>

<section class="call-to-action">
	<div class="bg bg-image" style="background-image: url('<?php if (wp_is_mobile()) { echo "https://actualseomedia.com/wp-content/uploads/2025/02/houston-seo-mobile-opt.webp"; } else { echo "https://actualseomedia.com/wp-content/uploads/2025/02/houston-seo-640-opt.webp"; } ?>');"></div>
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
