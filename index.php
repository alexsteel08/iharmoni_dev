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
                        Insights
                    </div>



<!--                    <div class="blog_category_list" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">-->
<!--                        <ul>-->
<!--                            <li><a href="/blog/">All topics</a></li>-->
<!--                            --><?php
//                            $categories = get_categories(array(
//                                'orderby' => 'name',
//                                'order' => 'ASC',
//                                'hide_empty'   => 0,
//                            ));
//                            foreach( $categories as $category ){
//                                echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li> ';
//                            }
//                            ?>
<!--                        </ul>-->
<!---->
<!--                    </div>-->
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
                                        <div class="top_post_date"><?php echo get_the_date('F j, Y');?></div>
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


                    <div class="blog_post_items">
                        <?php echo do_shortcode('[facetwp facet="categories"]');?>

                        <?php echo do_shortcode('[facetwp template="blog_posts"]');?>

                        <?php echo do_shortcode('[facetwp facet="load_more"]');?>


                    </div>


                </div>
            </div>
        </div>
    </div>

<?php get_template_part( 'template-parts/subscribe' );?>




<?php get_footer(); ?>