<style>
	.location-hero {
		padding-top: 220px;
		padding-bottom: 100px;
		display: flex;
		align-items: flex-end;
		color: black;
		position: relative;
	}
	
	.location-hero-img{
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
	}
	
	.location-hero-img:before {
		position: absolute;
		left: 0;
		top: 0;
		height: 100%;
		width: 100%;
		background-color: var(--theme-color2);
		opacity: 0.7;
		content: "";
	}
	
	.location-hero-img img{
		width: 100%;
		height: 100%;
		object-fit: cover;
		object-position: center;
	}

	.location-hero .container {
		padding: 0;
	}

	.location-hero .title {
		font-size: 4em;
		font-weight: 700;
		line-height: 1.3em;
	}

	.location-hero .action-buttons {
		display: flex;
		gap: 10px;
		margin-top: 20px;
	}

	@media(max-width: 992px){
		.location-hero .title {
			font-size: 2em;
		}
		.location-hero .action-buttons a {
			font-size: 1em;
			padding: 5px 10px;
		}

		.location-hero {
			padding-top: 100px;
			padding-bottom: 50px;
		}

		.location-hero .container{
			padding: 0 10px;
		}

	}
</style>

<section class="location-hero">
	<div class="location-hero-img">
		<?php
			if( wp_is_mobile() ){
				$img = '/wp-content/uploads/2025/03/page-title-mobile-opitimize.webp';
			} else {
				$img = '/wp-content/uploads/2025/03/page-title_opitimize.webp';
			}
		?>
		<img loading='eager' fetchpriority='high' decoding='async' src='<?php echo $img; ?>' alt='<?php the_title(); ?>' aria-hidden='true'>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 left">
				<h1 class="title text-white">
					<?php the_title(); ?>
				</h1>
				<p class="text-white">Our <?php the_title(); ?> SEO services will ensure that your website follows all the guidelines set and maintained by google and other search engines</p>
				<div class="action-buttons">
					<a class="theme-btn btn-style-one light" href="/about-our-team/">About us</a>
					<a class="theme-btn btn-style-one light" href="/our-locations/">View All Locations</a>
				</div>
			</div>
			<div class="col-lg-6"></div>
		</div>
	</div>
</section>

<!--Start Services Details-->
<main>
	<div class="container">
		<div class="side_r_content">
			<?php the_content(); ?>
		</div>
	</div>
</main>
	<!-- Call To Action -->
<div class="call-to-action" style="margin-bottom: 0px !important;">
		<div class="bg bg-image" style="background-image: url('<?php echo esc_url( get_stylesheet_directory_uri() . '/images/background/1.jpg' ); ?>');"></div>

		<div class="auto-container">
			<div class="outer-box wow fadeIn">
				<h2 class="title">The best digital marketing services at your <br>fingertips</h2>
				<a aria-label="Get In Touch" href="tel:8328340661" class="theme-btn btn-style-one hvr-dark"><span class="btn-title">Get In Touch</span></a>
			</div>
		</div>
</div>
	<!--End Call To Action -->