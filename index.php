<?php get_header();
remove_filter("the_content", "wpautop");
?>
<main>
    <?php if (is_single()) {
    $post_category = get_the_category_list(", ");
    // echo $post_category ;
    $post_type = get_post_type();
	/* Hide Mobile View Post Type Section - johnvinsonASM - start */
	//echo 'post type:' . $post_type;
	/* Hide Mobile View Post Type Section - johnvinsonASM - end */
    if ($post_type == "event") {
        include "event-single.php";
    } else {
        include "single_post.php";
    }
} elseif (is_page()) {
	/* Hide Mobile View Post Parent Section - johnvinsonASM - start */
	//echo 'post parent: ' . $post->post_parent;
	/* Hide Mobile View Post Parent Section - johnvinsonASM - end */
    if ($post->post_parent == 4002) {
        include "layout/internet-marketing-agency-layout.php";
    } 
     elseif ($post->post_parent == 11691) {
        include "layout/seo-services-layout.php";
    }
     elseif ($post->post_parent == 8600) {
        include "layout/our-locations.php";
    }
    elseif (is_front_page()) {
            the_content(); 
    } 

    elseif (is_page("blog")) {
        include "blog.php";
    } 
    elseif (is_page("auto-dealerships-seos")) {
        include "autodealership.php";
    }
    else {
              if (is_page("auto-dealerships-seo")){

              }

              else{
                ?>
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
                            <li><a href="#"><?php the_title(); ?></a></li>

                        </ul>
                    </div>
                </div>
            </section>
                <?php           
        } 
       if(is_page('jamin-mootz')||is_page('benjamin-thompson')||is_page('about-our-team')||is_page('pay-per-click')||is_page('auto-dealerships-seo')||is_page('our-locations')||is_page('contact-us')){
        the_content(); 
       }
       else{
        ?>
	   <section class="pt-30 pb-30">
          <div class="auto-container">
            <div class="row">
              <div>
             <?php  the_content(); ?>
           </div>
            </div>
          </div>
        </section>

      

        <?php
  
       }

        

}
 }
 elseif(is_404()){
 include '404.php';
 }
elseif ( have_posts() ){ 

    include 'blog.php';

  ?>
   
    
<?php
}

else{
 while ( have_posts() ) : the_post(); ?>
  <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php if ( !is_page() ):?>
      <section class="entry-meta">
      <p>Posted on <?php the_date();?> by <?php the_author();?></p>
      </section>
    <?php endif; ?>
    <section class="entry-content">
      <?php the_content(); ?>
    </section>
    <section class="entry-meta"><?php if ( count( get_the_category() ) ) : ?>
      <span class="category-links">
        Posted under: <?php echo get_the_category_list( ', ' ); ?>
      </span>
    <?php endif; ?></section>
  </article>
<?php endwhile;
}
 ?>
<?php get_footer(); ?>