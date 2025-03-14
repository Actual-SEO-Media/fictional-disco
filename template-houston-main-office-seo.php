<?php
/*
Template Name: Houston Main Office SEO 
*/
	get_header();
	remove_filter("the_content", "wpautop");
?>

<section class="call-to-action">
	<div class="bg bg-image" style="background-image: url('<?php if (wp_is_mobile()) { echo "https://actualseomedia.com/wp-content/uploads/2025/02/Houston-Main-Office-mobile.webp"; } else { echo "https://actualseomedia.com/wp-content/uploads/2025/02/Houston-Main-Office-SEO.webp"; } ?>');"></div>
<div class="auto-container">
<div class="outer-box wow fadeIn">
<h1 class="title"><?php the_title(); ?></h1>
<p class="text-white">
No matter the business type, our skilled web marketers at our main office in Houston are here to help. We specialize in boosting your Google ranking and online presence, ensuring long-term success for your business.
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