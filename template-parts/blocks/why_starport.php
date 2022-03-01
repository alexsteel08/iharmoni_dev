<section class="why_starport" <?php if( get_sub_field('why_starport_bi') ): ?> style="background-image: url(<?php the_sub_field('why_starport_bi'); ?>)"<?php endif; ?>>
    <?php if( get_sub_field('why_starport_bi') ): ?>
       <div class="why_starport_top_img">
           <img src="<?php the_sub_field('why_starport_bi'); ?>" alt="bg">
       </div>
    <?php endif; ?>
    <div class="why_starport_block content_width">
        <div class="why_starport_content">
            <?php if( get_sub_field('why_starport_title') ): ?>
               <div class="why_starport_title" data-aos="fade-up" data-aos-once="true">
                  <?php the_sub_field('why_starport_title'); ?>
               </div>
            <?php endif; ?>
            <?php if( have_rows('cards') ): ?>
                <div class="cards" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0" data-aos-once="true">
                    <?php while( have_rows('cards') ): the_row(); ?>
                        <div class="card">
                            <div class="card_title"><?php the_sub_field('title'); ?></div>
                            <div class="card_text"><?php the_sub_field('text'); ?></div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>