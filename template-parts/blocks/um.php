<section class="um" <?php if( get_sub_field('um_bi') ): ?> style="background-image: url(<?php the_sub_field('um_bi'); ?>)"<?php endif; ?>>
    <div class="um_block content_width">
        <div class="um_content">
            <div class="um_top">
                <?php if( get_sub_field('um_title') && get_sub_field('um_text') ): ?>
                    <div class="um_title_text" data-aos="fade-right" data-aos-delay="100" data-aos-offset="0">
                        <div class="um_title">
                            <?php the_sub_field('um_title'); ?>
                        </div>
                        <div class="um_text">
                            <?php the_sub_field('um_text'); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if( get_sub_field('um_image') ): ?>
                    <div class="um_image" data-da="um_title_text,1,992"  data-aos="fade-left" data-aos-delay="200" data-aos-offset="0">
                        <img src="<?php the_sub_field('um_image'); ?>" alt="img">
                    </div>
                <?php endif; ?>
            </div>


            <?php if( have_rows('um_cards') ): ?>
                <div class="um_cards"  data-aos="fade-up" data-aos-delay="300" data-aos-offset="0">
                    <?php while( have_rows('um_cards') ): the_row(); ?>
                        <div class="um_card">
                            <div class="um_card_title"><?php the_sub_field('title'); ?></div>
                            <div class="um_card_text"><?php the_sub_field('text'); ?></div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>