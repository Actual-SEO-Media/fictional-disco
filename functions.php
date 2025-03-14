<?php


function meks_which_template_is_loaded() {
	if ( is_super_admin() ) {
		global $template;
		print_r( $template );
	}
}
 
add_action( 'wp_footer', 'meks_which_template_is_loaded' );
function wpb_custom_new_menu() {
  register_nav_menu('custom-menu',__( 'Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

function register_my_menu() {
  register_nav_menu('primary', __('Primary Menu', 'asmtheme'));
  register_nav_menu('internet-marketing-agency', __('Internet Marketing Menu', 'asmtheme'));
  register_nav_menu('footer1', __('Footer Left Menu', 'asmtheme'));
  register_nav_menu('footer2', __('Footer center Menu', 'asmtheme'));
  register_nav_menu('footer3', __('Footer Right Menu', 'asmtheme'));
}
add_action('after_setup_theme', 'register_my_menu');
// this code belo is to hide menu class and id excluding custom classes

add_filter('nav_menu_css_class', 'discard_menu_classes', 10, 2);

function discard_menu_classes($classes, $item) {
    $classes = array_filter( 
        $classes, 
        function( $class){ 
                 return in_array( $class, 
                      array( "current-menu-item", "current-menu-parent" ) ); }
             );
        
    return array_merge(
        $classes,
        (array)get_post_meta( $item->ID, '_menu_item_classes', true )
        );
    }
function twenty_twenty_one_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Event', 'twentytwentyone' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear at the side.', 'twentytwentyone' ),
			'before_widget' =>  '<div class="widget events">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title"> <h3 class="title">',
			'after_title'   => '</h3></div>',
		)
	);

}

/*Base URL shorcode*/
add_shortcode( 'base_url', 'baseurl_shortcode' );
function baseurl_shortcode( $atts ) {

    return site_url();

}

add_shortcode( 'template_url', 'templateurl_shortcode' );
function templateurl_shortcode( $atts ) {

    return get_template_directory_uri();

}
add_shortcode( 'site_url', 'siteurl_shortcode' );
function siteurl_shortcode( $atts ) {

    return site_url();

}

add_shortcode('location_sidebar', 'location_sideshortcode');
function location_sideshortcode(){
	ob_start();
	include 'blocks/location_sidebar.php';
 	$content = ob_get_clean();
  return $content;
}

add_shortcode('seo_services_sidebar', 'seo_services_sideshortcode');
function seo_services_sideshortcode(){
ob_start();
	include 'blocks/seo_services_sidebar.php';
 	$content = ob_get_clean();
  return $content;
}

// For locations layout
add_shortcode('location_list_left', 'location_list_leftshortcode');
	function location_list_leftshortcode(){
	ob_start();
	include 'blocks/location_list_left.php';
	$content = ob_get_clean();
	return $content;
}

add_shortcode('location_list_right', 'location_list_rightshortcode');
	function location_list_rightshortcode(){
	ob_start();
	include 'blocks/location_list_right.php';
	$content = ob_get_clean();
	return $content;
}

add_shortcode('auto_dealership_blog', 'autodealer_blog_shortcode');
	function autodealer_blog_shortcode(){
	ob_start();
		include 'blocks/auto_dealer_blog.php';

	$content = ob_get_clean();
	return $content;
}

add_shortcode('list_blog_posts', 'list_blog_posts_shortcode');
	function list_blog_posts_shortcode(){
	ob_start();
		include 'blocks/list_blog_posts.php';

	$content = ob_get_clean();
	return $content;
}


add_action( 'widgets_init', 'twenty_twenty_one_widgets_init' );

add_theme_support('post-thumbnails', array(
'post',
'page',
'custom-post-type-name',
));
add_filter( 'do_redirect_guess_404_permalink', '__return_false' );
add_filter( 'strict_redirect_guess_404_permalink', '__return_true' );
remove_filter('template_redirect','redirect_canonical');

function remove_block_library_css() {
    wp_dequeue_style('wp-block-library'); 
    wp_dequeue_style('wp-block-library-theme'); 
}
add_action('wp_enqueue_scripts', 'remove_block_library_css', 100);

// allow the editor to reflect frontend design
// Gutenberg custom stylesheet
add_theme_support('editor-styles');
add_editor_style( 'css/style.css' ); // make sure path reflects where the file is located
add_editor_style( 'style.css' ); // make sure path reflects where the file is located

function preload_mobile_hero_image() {
    if ( is_front_page() && wp_is_mobile() ) {
        echo '<link rel="preload" href="https://actualseomedia.com/wp-content/uploads/2025/02/hero1-mobile-optimized.webp" as="image" fetchpriority="high" media="(max-width: 600px)">' . "\n";
    }
}
add_action('wp_head', 'preload_mobile_hero_image');

/**
 * Adds classes to all the tags in the content.
 *
 * @param  string $content The post content.
 * @return string          The post content with the classes added to the <p> tags.
 */

function custom_classes( $content ) {
    $classes = array(
		'p'  => 'blog-details__text-2',
    );

	// only use wpautop() on actual posts
	$post_type = get_post_type(get_the_ID());
	if($post_type === 'post'){
		$content = wpautop($content);
	}
	
    foreach ($classes as $tag => $class) {
        $content = str_replace(
            "<$tag>",
            "<$tag class=\"$class\">",
            $content
        );
    }

	return $content;
}

add_filter( 'the_content', 'custom_classes' );


add_shortcode( 'home_hero_bkg_shortcode', 'home_hero_bkg_shortcode_func' );
function home_hero_bkg_shortcode_func() {
	$img = '';
	
	if( wp_is_mobile() ){
		$img = "<img loading='eager' fetchpriority='high' decoding='async' src='/wp-content/uploads/2025/02/hero1-mobile-optimized.webp' alt='7 LOCATIONS IN GREATER HOUSTON' aria-hidden='true'>";
	} else {
		$img = "<img loading='eager' fetchpriority='high' decoding='async' src='/wp-content/uploads/2025/02/hero1-optimized-new.webp' alt='7 LOCATIONS IN GREATER HOUSTON' aria-hidden='true'>";
	}

	return "<div class='home-hero-bkg'>" . $img . "</div>";
}