<div class="col-xl-4 col-lg-5">
    <div class="sidebar blog-sidebar">
        <div class="content-wrapper">
            <div class="sidebar__single sidebar__search">
                <form action="#" class="sidebar__search-form">
                    <input type="search" placeholder="Search here">
                    <button type="submit"><i class="lnr-icon-search"></i></button>
                </form>
            </div>
            <div class="sidebar__single sidebar__post">
                <h3 class="sidebar__title">Latest Posts</h3>
                <ul class="sidebar__post-list list-unstyled">
                    <?php
                    $args = array('numberposts' => '5');
                    $recent_posts = get_posts($args);

                    foreach ($recent_posts as $recent) {
                    ?>
                    <li>
                        <?php
                            $blog_image = wp_get_attachment_url(get_post_thumbnail_id($recent->ID));
                            ?>

                       <!--<div class="sidebar__post-image" id="<?php echo $recent->ID; ?>">
                            <img src="<?php
                                if (!empty($blog_image)) {
                                    echo $blog_image;
                                } else {
                                    echo get_template_directory_uri() . '/images/resource/news-1.jpg';
                                } ?>" alt="">
                        </div>-->
                        <div class="sidebar__post-image" id="<?php echo esc_attr($recent->ID); ?>">
    <img src="<?php
        if (!empty($blog_image)) {
            echo esc_url($blog_image);
        } else {
            echo esc_url(get_template_directory_uri() . '/images/resource/news-1.jpg');
        } ?>" 
        alt="<?php 
        if (!empty($blog_image)) {
            $thumb_id = get_post_thumbnail_id($recent->ID);
            $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
            echo esc_attr($alt_text ? $alt_text : 'Default Alt Text');
        } else {
            echo esc_attr('Default Alt Text');
        } ?>">
</div>
                        <div class="sidebar__post-content">
                            <h3>
                                <!-- <span class="sidebar__post-content-meta">
                                                <i class="fas fa-user-circle"></i>
                                            <?php //echo $recent['post_author'];?>
                                            </span>  -->
                                <a
                                    href="<?php echo get_permalink($recent->ID); ?>"><?php echo $recent->post_title; ?></a>
                            </h3>
                        </div>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>