<?php

/*
Template Name: FAQ
*/


get_header(); ?>

<section class="faq">
    <div class="faq_sitebar">
        <?php if( have_rows('sitebar_navigation') ): ?>
            <div class="sitebar_navigation">
                <div class="sitebar_navigation_block">
                    <?php while( have_rows('sitebar_navigation') ): the_row(); ?>
                        <div class="">
                            <div class="sitebar_navigation_title" data-aos="fade-left" data-aos-delay="100" data-aos-offset="0">
                                <?php the_sub_field('sitebar_navigation_title'); ?>
                            </div>
                            <?php if( have_rows('sitebar_navigation_list') ): ?>
                                <div class="sitebar_navigation_list" data-aos="fade-left" data-aos-delay="150" data-aos-offset="0">
                                    <?php while( have_rows('sitebar_navigation_list') ): the_row(); ?>
                                        <div class="sitebar_navigation_item">
                                            <a href="#index<?php the_sub_field('id'); ?>"><?php the_sub_field('title'); ?></a>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="faq_block content_width">
        <div class="faq_content">

            <div class="faq_accordions">
                <?php if( get_field('faq_title') ): ?>
                   <div class="faq_title" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                      <?php the_field('faq_title'); ?>
                   </div>
                <?php endif; ?>
                <?php if( have_rows('accordions') ): ?>
                    <div class="container-tab">
                        <div class="cta-tabs_v2" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                            <?php while( have_rows('accordions') ): the_row(); ?>
                                <div class="tab-head-cont" id="index<?php the_sub_field('accordions_title_id'); ?>">
                                    <div class="faq_accordions_title">
                                        <?php the_sub_field('accordions_title'); ?>
                                    </div>

                                    <section>
                                        <?php if( have_rows('accordion') ): ?>
                                            <div class="accordion">
                                                <?php while( have_rows('accordion') ): the_row(); ?>
                                                    <div class="accordion__item" data-aos="fade-up" data-aos-delay="250" data-aos-offset="0">
                                                        <button class="accordion__btn">

                                                            <span class="accordion__caption"></i><?php the_sub_field('label'); ?></span>
                                                            <span class="accordion__icon"></span>
                                                        </button>

                                                        <div class="accordion__content">
                                                            <?php the_sub_field('text'); ?>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                            </div>
                                        <?php endif; ?>
                                    </section>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>



        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/subscribe' );?>


<?php get_footer(); ?>