<section class="tech" <?php if( get_sub_field('tech_bi') ): ?> style="background-image: url(<?php the_sub_field('tech_bi'); ?>)"<?php endif; ?>>
    <div class="tech_block content_width">
        <div class="tech_content">
            <div class="tech_top">
                <?php if( get_sub_field('tech_title') && get_sub_field('tech_text') ): ?>
                    <div class="tech_top_left" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0" data-aos-once="true">
                        <div class="tech_title">
                            <?php the_sub_field('tech_title'); ?> <img src="/wp-content/uploads/2022/02/stars.svg" alt="img">
                        </div>
                        <div class="tech_text">
                            <?php the_sub_field('tech_text'); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if( get_sub_field('tech_image') ): ?>
                   <div class="tech_image" data-da="tech_top_left,1,992" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0" data-aos-once="true">
                       <img src="<?php the_sub_field('tech_image'); ?>" alt="img">
                   </div>
                <?php endif; ?>

            </div>

            <div class="tech_bottom" data-aos="fade-up" data-aos-delay="300" data-aos-offset="0" data-aos-once="true">
                <?php if( get_sub_field('title_section_2') && get_sub_field('subtitle_section_2') && get_sub_field('text_section_2') ): ?>
                    <div class="tech_bottom_first">
                        <div class="title_section_2">
                            <?php the_sub_field('title_section_2'); ?>
                        </div>
                        <div class="subtitle_section_2">
                            <?php the_sub_field('subtitle_section_2'); ?>
                        </div>
                        <div class="text_section_2">
                            <?php the_sub_field('text_section_2'); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if( get_sub_field('image_section_2') ): ?>
                   <div class="image_section_2" data-da="tech_bottom_first,2,992" data-aos="fade-up" data-aos-delay="400" data-aos-offset="0" data-aos-once="true">
                       <img src="<?php the_sub_field('image_section_2'); ?>" alt="img">
                   </div>
                <?php endif; ?>
            </div>



                <?php if( have_rows('tech_cards') ): ?>
                    <div class="tech_cards" data-aos="fade-up" data-aos-delay="500" data-aos-offset="0" data-aos-once="true">
                        <?php if( get_sub_field('title_cards') ): ?>
                           <div class="title_cards" >
                              <?php the_sub_field('title_cards'); ?>
                           </div>
                        <?php endif; ?>
                        <?php while( have_rows('tech_cards') ): the_row(); ?>
                            <div class="tech_card">
                                <div class="tech_card_title"><?php the_sub_field('number'); ?>  <?php the_sub_field('title'); ?></div>
                                <div class="tech_card_text"><?php the_sub_field('text'); ?></div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
        </div>
    </div>
</section>