<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_enqueue_scripts', 'template_page_enqueue_styles');
function template_page_enqueue_styles()
{
    wp_enqueue_style('single', get_template_directory_uri() . '/assets/css/blocks/cta.css', array(), '1.0');
}


get_header(); ?>





    <div id="primary">
        <div id="content" role="main">
            <div class="blog_page">
                <div class="content_width">
                    <div class="blog_title" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0">
                        Blog
                    </div>
                    <div class="blog_category_list" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                        <ul>
                            <li><a href="/blog/">All topics</a></li>
                            <?php
                            $categories = get_categories(array(
                                'orderby' => 'name',
                                'order' => 'ASC',
                                'hide_empty'   => 0,
                            ));
                            foreach( $categories as $category ){
                                echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li> ';
                            }
                            ?>
                        </ul>

                    </div>
                    <?php
                    $featured_posts = get_field('top_post','option');
                    if( $featured_posts ): ?>
                        <div class="top_posts">
                            <?php foreach( $featured_posts as $post ):

                                // Setup this post for WP functions (variable must be named $post).
                                setup_postdata($post); ?>
                                <div class="top_post">
                                    <div class="top_post_img" data-aos="fade-right" data-aos-delay="200" data-aos-offset="0">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
                                        </a>
                                    </div>
                                    <div class="top_post_meta" data-aos="fade-left" data-aos-delay="200" data-aos-offset="0">
                                        <div class="top_post_date">UPDATES <span></span> <?php echo get_the_date('F j, Y');?></div>
                                        <div class="top_post_title"><a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a></div>
                                        <div class="top_post_excerpt"><?php the_excerpt();?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php
                        // Reset the global post object so that the rest of the page works correctly.
                        wp_reset_postdata(); ?>
                    <?php endif; ?>


                    <div class="blog-post-list" data-aos="fade-up" data-aos-delay="300" data-aos-offset="0">
                        <?php
                        $new_loop = new WP_Query(array(
                            'post_type' => 'post',

                        ));
                        ?>
                        <?php if ($new_loop->have_posts()) : ?>
                            <?php while ($new_loop->have_posts()) : $new_loop->the_post(); ?>

                                <?php get_template_part('template-parts/postitem');?>


                            <?php endwhile; ?>
                            <div class="loadmore-block">
                                <?php
                                global $wp_query;
                                if ($wp_query->max_num_pages > 1) : ?>
                                    <script>
                                        var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                                        var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                                        var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                                        var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
                                    </script>

                                    <div id="true_loadmore">OLDER POSTS</div>
                                <?php endif; ?>
                            </div>


                        <?php else: ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                        <!-- Button -->
                    </div>


                </div>
            </div>
        </div>
    </div>

<?php get_template_part( 'template-parts/subscribe' );?>




<?php get_footer(); ?>