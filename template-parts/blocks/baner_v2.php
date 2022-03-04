<section class="baner_v2" <?php if( get_sub_field('baner_bi') ): ?> style="background-image: url(<?php the_sub_field('baner_bi'); ?>)"<?php endif; ?>>
    <div class="baner_v2_block content_width">
        <div class="baner_v2_top"></div>
        <div class="baner_v2_right"></div>
        <div class="baner_v2_left"></div>
        <div class="baner_v2_bottom"></div>
        <div class="baner_v2_content">
            <div class="baner_v2_fields" data-aos="fade-left" data-aos-delay="200" data-aos-offset="0">
                <?php if( get_sub_field('baner_title') ): ?>
                    <div class="baner_v2_title">
                        <?php the_sub_field('baner_title'); ?>
                    </div>
                <?php endif; ?>
                <?php if( get_sub_field('baner_text') ): ?>
                    <div class="baner_v2_text">
                        <?php the_sub_field('baner_text'); ?>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
    <?php if( get_sub_field('right_image') ): ?>
        <div class="baner_v2_image" data-da="baner_v2_fields,0,567" >
            <img src="<?php the_sub_field('right_image'); ?>" alt="img">
        </div>
    <?php endif; ?>
</section>