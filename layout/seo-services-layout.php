<style>
	.default-hero {
		padding-top: 220px;
		padding-bottom: 100px;
		display: flex;
		align-items: flex-end;
		color: black;
		position: relative;
	}
	
	.default-hero-img{
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
	}
	
	.default-hero-img:before {
		position: absolute;
		left: 0;
		top: 0;
		height: 100%;
		width: 100%;
		background-color: var(--theme-color2);
		opacity: 0.7;
		content: "";
	}
	
	.default-hero-img img{
		width: 100%;
		height: 100%;
		object-fit: cover;
		object-position: center;
	}

	.default-hero .container {
		padding: 0;
	}

	.default-hero .title {
		font-size: 4em;
		font-weight: 700;
		line-height: 1.3em;
	}

	.default-hero .action-buttons {
		display: flex;
		gap: 10px;
		margin-top: 20px;
	}

	@media(max-width: 992px){
		.default-hero .title {
			font-size: 2em;
		}
		.default-hero .action-buttons a {
			font-size: 1em;
			padding: 5px 10px;
		}

		.default-her {
			padding-top: 100px;
			padding-bottom: 50px;
		}

		.default-hero .container{
			padding: 0 10px;
		}

	}
</style>
<section class="default-hero">
	<div class="default-hero-img">
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
				<p class="text-white">Our <?php the_title(); ?> services are no longer an opportunity you can pass up. Talk to the experts today for an online marketing consultation to learn more about what can be done to provide you with a boost to your online presence.</p>
				<div class="action-buttons">
					<a aria-label="Get In Touch" href="tel:8328340661" class="theme-btn btn-style-one hvr-dark"><span class="btn-title">Get In Touch</span></a>
				</div>
			</div>
			<div class="col-lg-6"></div>
		</div>
	</div>
</section>

<!--Start Services Details-->
<main>
		<div class="container">
			<div class="row">		
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
