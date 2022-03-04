<section class="tabs_v2">
    <div class="tabs_v2_block content_width">
        <div class="tabs_v2_content">
            <div class="tabs_v2_tabs" >
                <?php if( get_sub_field('tabs_v2_title') ): ?>
                   <div class="tabs_v2_title" data-aos="fade-up" data-aos-offset="0">
                      <?php the_sub_field('tabs_v2_title'); ?>
                   </div>
                <?php endif; ?>
                <div class="tabs_wrapper"  data-aos="fade-right" data-aos-delay="200" data-aos-offset="0">
                    <?php if( have_rows('tabs_v2_tabs') ): ?>
                        <div class="container-tab">
                            <ul class="accordion-tabs_v2">
                                <?php while( have_rows('tabs_v2_tabs') ): the_row(); ?>
                                    <li class="tab-head-cont">
                                        <a href="#"><?php the_sub_field('label'); ?></a>
                                        <section>
                                            <?php if( have_rows('list') ): ?>
                                                <div class="tabs_v2_list">
                                                    <?php while( have_rows('list') ): the_row(); ?>
                                                        <div class="tabs_v2_list-item">

                                                            <div class="tabs_v2_list-title">
                                                                <div class="tabs_v2_list-num"><?php the_sub_field('number'); ?></div>
                                                                <span><?php the_sub_field('title'); ?></span>
                                                            </div>
                                                            <div class="tabs_v2_list-text"><?php the_sub_field('text'); ?></div>
                                                        </div>
                                                    <?php endwhile; ?>
                                                </div>
                                            <?php endif; ?>
                                        </section>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="tabs_v2_images" data-da="tabs_v2_tabs,1,567"  data-aos="fade-left" data-aos-delay="200" data-aos-offset="0">
                <div class="tabs_v2_img">
                    <?php if( get_sub_field('image_big') ): ?>
                        <div class="image_big">
                            <img src="<?php the_sub_field('image_big'); ?>" alt="image big">
                        </div>
                    <?php endif; ?>
                    <?php if( get_sub_field('image_small') ): ?>
                        <div class="image_small">
                            <img src="<?php the_sub_field('image_small'); ?>" alt="image small">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>