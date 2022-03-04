<section class="ad" <?php if( get_sub_field('ad_bi') ): ?> style="background-image: url(<?php the_sub_field('ad_bi'); ?>)"<?php endif; ?>>
    <div class="ad_block ">
        <div class="ad_content content_width">
            <div class="ad_top">
                <?php if( get_sub_field('ad_title') && get_sub_field('ad_text') ): ?>
                    <div class="ad_title_text"  data-aos="fade-right" data-aos-delay="100" data-aos-offset="0">
                        <div class="ad_title">
                            <?php the_sub_field('ad_title'); ?>
                        </div>
                        <div class="ad_text">
                            <?php the_sub_field('ad_text'); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if( get_sub_field('ad_image') ): ?>
                   <div class="ad_image" data-da="ad_title_text,1,992"  data-aos="fade-left" data-aos-delay="200" data-aos-offset="0">
                       <img src="<?php the_sub_field('ad_image'); ?>" alt="img">

                   </div>
                <?php endif; ?>
            </div>


            <?php if( have_rows('ad_cards') ): ?>
                <div class="ad_cards" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0">
                    <?php while( have_rows('ad_cards') ): the_row(); ?>
                        <div class="ad_card">
                            <div class="ad_card_title"><?php the_sub_field('title'); ?></div>
                            <div class="ad_card_text"><?php the_sub_field('text'); ?></div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>