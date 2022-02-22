<section class="hdwdi" <?php if( get_sub_field('hdwdi_bi') ): ?> style="background-image: url(<?php the_sub_field('hdwdi_bi'); ?>)"<?php endif; ?>>
    <div class="hdwdi_block content_width">
        <div class="hdwdi_content">
            <div class="hdwdi_left" data-aos="fade-right" data-aos-delay="200" data-aos-offset="0">
                <?php if( get_sub_field('hdwdi_title') ): ?>
                   <div class="hdwdi_title">
                      <?php the_sub_field('hdwdi_title'); ?>
                   </div>
                <?php endif; ?>
                <?php if( get_sub_field('hdwdi_text') ): ?>
                   <div class="hdwdi_text">
                      <?php the_sub_field('hdwdi_text'); ?>
                   </div>
                <?php endif; ?>
            </div>

            <?php if( get_sub_field('hdwdi_image') ): ?>
                <div class="hdwdi_right" data-da="hdwdi_left,1,992">
                    <div class="hdwdi_image" data-aos="fade-left" data-aos-delay="200" data-aos-offset="0">
                        <img src="<?php the_sub_field('hdwdi_image'); ?>" alt="img">
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>