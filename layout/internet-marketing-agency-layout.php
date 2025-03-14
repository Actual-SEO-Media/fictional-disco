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
          <li><?php the_title(); ?></li>
        </ul>
      </div>
    </div>
  </section>

<!--Start Services Details-->
	<section class="services-details locations with_sidebar">
		<div class="container">
			<div class="row">
				<!--Start Services Details Sidebar-->
				<div class="col-xl-4 col-lg-4 d-none d-lg-block">
					<?php echo location_sideshortcode(); ?>
				</div>

				<!--Start Services Details Content-->
				<div class="col-xl-8 col-lg-8 ">
					<div class="side_r_content">
							<?php the_content(); ?>
					</div>
				</div>
				<!--End Services Details Content-->
			</div>
		</div>
	</section>
	<!--End Services Details-->
