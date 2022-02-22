<section class="info_block">
    <div class="info_block_square rellax" data-rellax-percentage="1.7"></div>
    <div class="info_block_block">
        <div class="info_block_content">
            <?php if( get_sub_field('info_block_image') ): ?>
               <div class="info_block_img" data-aos="fade-right" data-aos-delay="100" data-aos-offset="0">
                   <img src="<?php the_sub_field('info_block_image'); ?>" alt="">
               </div>
            <?php endif; ?>

            <div class="info_block_list" data-aos="fade-left" data-aos-delay="200" data-aos-offset="0">
                <?php if( get_sub_field('info_block_title') ): ?>
                   <div class="info_block_title">
                      <?php the_sub_field('info_block_title'); ?>
                   </div>
                <?php endif; ?>
                <?php if( get_sub_field('info_block_subtitle') ): ?>
                   <div class="info_block_subtitle">
                      <?php the_sub_field('info_block_subtitle'); ?>
                   </div>
                <?php endif; ?>
                <?php if( have_rows('info_block_items') ): ?>
                    <div class="info_block_items">
                        <?php while( have_rows('info_block_items') ): the_row(); ?>
                            <div>
                                <div class="info_block_item-title"> <?php the_sub_field('title'); ?></div>
                                <div class="info_block_item-text"> <?php the_sub_field('text'); ?></div>

                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>