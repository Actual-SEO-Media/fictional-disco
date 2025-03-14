<?php
	global $post;
?>
<!--Body Start-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	 <title><?php echo wp_title(''); ?></title>
    <!-- Stylesheets -->
    <link href="https://e2b49380.asmnewsite.pages.dev/assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;=fallback' type='text/css' media='all' />
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css?v=1" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php if ( is_front_page() || is_home() ) : ?>
    <link rel="preload" href="https://actualseomedia.com/wp-content/uploads/2025/02/hero1-optimized-new.webp" as="image" fetchpriority="high">
    <link rel="preload" href="https://actualseomedia.com/wp-content/themes/asm-theme/images/asm-logo.svg" as="image">
<?php endif; ?>
	<?php if (is_front_page()) : ?>
    <?php 
        $hero_image = wp_is_mobile() 
            ? 'https://actualseomedia.com/wp-content/uploads/2025/02/hero1-mobile-optimized.webp' 
            : 'https://actualseomedia.com/wp-content/uploads/2025/02/hero1-optimized-new.webp'; 
    ?>
    <link rel="preload" href="<?php echo esc_url($hero_image); ?>" as="image" fetchpriority="high">
<?php endif; ?>

    <?php wp_head(); ?>
	<?php
		if( $post->ID == 2713 || $post->ID == 16102 || $post->ID == 16040 || $post->ID == 5513 || $post->ID == 3398 || $post->ID == 21109 || $post->ID == 16165 || $post->ID == 110601){
	?>
			<link href="https://actualseomedia.com/wp-content/themes/asm-theme/js/images/leaflet.css" rel="stylesheet">
			<script src="https://actualseomedia.com/wp-content/themes/asm-theme/js/images/leaflet.js"></script>
			<style>
				.leaflet-container {
					height: 400px;
					width: 100%;
					max-width: 800px;
					margin-top:20px;
				}
			</style>
	<?php
		}
	?>
</head>

<body>
    <?php wp_body_open();?>
	<div class="grecaptcha-badge"></div>

    <div class="page-wrapper">

        <!-- Main Header-->
        <header class="main-header header-style-two ">
            <!-- Header Top -->
            <div class="header-top">
                <div class="inner-container">

                    <div class="top-left">
                        <!-- Info List -->
                        <ul class="list-style-one">
                            <li>
                                <a href="tel:8328340661" aria-label="Main Office (832)834-0661"><i class="fa fa-phone"></i>Main Office (832)834-0661</a>
                            </li>
                            <li>
                                <a href="tel:7137375529" aria-label="Sales (713)737-5529"><i class="fa fa-phone"></i>Sales (713)737-5529</a>
                            </li>
                        </ul>
                    </div>
                    <div class="top-right">
                        <ul class="list-style-one useful-links">
                            <li><a href="<?php echo site_url();?>/blog/" aria-label="Blog">Blog</a></li>
                            <li><a href="<?php echo site_url();?>/careers/" aria-label="Careers">Careers</a></li>
                            <li><a href="<?php echo site_url();?>/contact-us/" aria-label="Contact">Contact</a></li>
                        </ul>
                        <ul class="social-icon-one">
                            <li><a href="https://www.facebook.com/actualseohoustontx/" aria-label="Facebook"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"/></svg></a></li>
                            <li><a href="https://www.pinterest.com/actualseomedia123/" aria-label="Pinterest"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"/></svg></a></li>
                            <li><a href="https://www.instagram.com/actualseomedia/" aria-label="Instagram"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a></li>
                            <li><a href="https://www.youtube.com/@Actualseomedia-SEO-Houston/" aria-label="YouTube"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg></a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <!-- Header Top -->

            <div class="header-lower">
                <!-- Main box -->
                <div class="main-box">
                    <div class="logo-box">
                        <div class="logo">
						<a href="<?php echo site_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/asm-logo.svg" alt="Logo">
						</a>
						
						</div>
                    </div>
                    <!--Nav Box-->
                    <div class="nav-outer">
                        <nav class="nav main-menu">
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'container' => 'ul',
                                    'container_class' => 'nav main-menu',
                                    'menu_class' => 'navigation'
                                ));
                                ?>

                        </nav>
						<div class="bbb-accreditation">
							<a target="_blank" href="https://www.bbb.org/us/tx/houston/profile/internet-marketing-services/actual-seo-media-inc-0915-90045053" rel="nofollow"?>
								<img src="https://actualseomedia.com/wp-content/uploads/2024/10/bbb-acc-2-1-1.png" alt="Better Business bureau">
							</a>
						</div>
						
                        <!-- Main Menu End-->
                    </div>

                </div>
            </div>
            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <div class="upper-box">
                        <div class="close-btn"><i class="icon fa fa-times"></i></div>
                    </div>

                    <ul class="navigation clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                    <ul class="contact-list-one">
                        <li>
                            <!-- Contact Info Box -->
                            <div class="contact-info-box">
                                <i class="icon lnr-icon-phone-handset"></i>
                                <span class="title">Call Now</span>
                                <a href="tel:+18328340661">+1 (832) 834- 0661</a>
                            </div>
                        </li>
                        <li>
                            <!-- Contact Info Box -->
                            <div class="contact-info-box">
                                <span class="icon lnr-icon-envelope1"></span>
                                <span class="title">Send Email</span>
                                <a href="mailto:info@actualseomedia.com"
                                    aria-label="info@actualseomedia.com">info@actualseomedia.com</a>
                            </div>
                        </li>
                        <li>
                            <!-- Contact Info Box -->
                            <div class="contact-info-box">
                                <span class="icon lnr-icon-clock"></span>
                                <span class="title">Opening Hours</span>
                                Mon - Sunday 8:00AMM - 8:00PM
                            </div>
                        </li>
                    </ul>


                    <ul class="social-links">

                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z"></path></svg></a></li>
                        <li><a href="https://www.facebook.com/actualseohoustontx/" aria-label="facebook"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path></svg></a></li>
                        <li><a href="https://www.pinterest.com/actualseomedia123/" aria-label="pinterest"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"></path></svg></a></li>
                        <li><a href="https://www.instagram.com/actualseomedia/" aria-label="instagram"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg></a></li>
                        <li><a href="https://www.youtube.com/@Actualseomedia-SEO-Houston/" aria-label="youtube"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"></path></svg></a></li>

                    </ul>
                </nav>
            </div><!-- End Mobile Menu -->
            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                       <a href="<?php echo site_url(); ?>">
					   <img src="<?php echo get_template_directory_uri(); ?>/images/asm-logo.svg" alt="Logo">
					   </a>
						

                        <!--Right Col-->
                        <div class="nav-outer">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-collapse show collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <!--Keep This Empty / Menu will come through Javascript-->
                                    </ul>
                                </div>
                            </nav><!-- Main Menu End-->
							
							<div class="bbb-accreditation">
								<a target="_blank" href="https://www.bbb.org/us/tx/houston/profile/internet-marketing-services/actual-seo-media-inc-0915-90045053"?>
									<img src="https://actualseomedia.com/wp-content/uploads/2024/10/bbb-acc-2-1-1.png" alt="Better Business Bureau">
								</a>
							</div>

                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                        </div>
                    </div>
                </div>
            </div><!-- End Sticky Menu -->
        </header>