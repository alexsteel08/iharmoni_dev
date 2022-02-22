<section class="simple_tabs" <?php if( get_sub_field('simple_tabs_bi') ): ?> style="background-image: url(<?php the_sub_field('simple_tabs_bi'); ?>)"<?php endif; ?>>
    <div class="simple_square rellax" data-rellax-percentage="0.5"></div>
    <div class="simple_tabs_block content_width">
        <div class="simple_tabs_content">
            <?php if( get_sub_field('simple_tabs_image') ): ?>
                <div class="simple_tabs_img" data-aos="fade-right" data-aos-delay="100" data-aos-offset="0">
                    <img src="<?php the_sub_field('simple_tabs_image'); ?>" alt="img">
                </div>
            <?php endif; ?>
            <div class="simple_tab" data-aos="fade-left" data-aos-delay="200" data-aos-offset="0">

                <div class="simple_tab_wrapper">
                    <div class="simple_tab_stars"></div>
                    <?php if( get_sub_field('simple_tabs_title') ): ?>
                       <div class="simple_tab_title">
                          <?php the_sub_field('simple_tabs_title'); ?>
                       </div>
                    <?php endif; ?>
                    <?php if( get_sub_field('simple_tabs_subtitle') ): ?>
                        <div class="simple_tab_subtitle">
                            <?php the_sub_field('simple_tabs_subtitle'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="tabs_wrapper">
                        <?php if( have_rows('tabs_items') ): ?>
                            <div class="container-tab">
                                <ul class="accordion-tabs">
                                <?php while( have_rows('tabs_items') ): the_row(); ?>
                                    <li class="tab-head-cont">
                                        <a href="#"><?php the_sub_field('tabs_item_title'); ?></a>
                                        <section>
                                            <?php the_sub_field('tabs_item_text'); ?>
                                        </section>
                                    </li>
                                <?php endwhile; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
