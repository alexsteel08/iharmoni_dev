<section class="baner_v3" <?php if( get_sub_field('baner_bi') ): ?> style="background-image: url(<?php the_sub_field('baner_bi'); ?>)"<?php endif; ?>>
    <div class="baner_v3_block content_width">
        <div class="baner_v3_top"></div>
        <div class="baner_v3_right"></div>
        <div class="baner_v3_left"></div>
        <div class="baner_v3_bottom"></div>
        <div class="baner_v3_content">
            <div class="baner_v3_fields">
                <?php if( get_sub_field('baner_title') ): ?>
                    <div class="baner_v3_title" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0">
                        <?php the_sub_field('baner_title'); ?>
                    </div>
                <?php endif; ?>
                <?php if( get_sub_field('baner_text') ): ?>
                    <div class="baner_v3_text" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                        <?php the_sub_field('baner_text'); ?>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
    <?php if( get_sub_field('right_image') ): ?>
        <div class="baner_v3_image" data-da="baner_v3_fields,0,992" >
            <img src="<?php the_sub_field('right_image'); ?>" alt="img">
        </div>
    <?php endif; ?>
</section>