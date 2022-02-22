<section class="team" <?php if (get_sub_field('_bi')): ?> style="background-color: <?php the_sub_field('_bi'); ?>"<?php endif; ?>>
    <div class="team_block content_width">
        <div class="team_content">
            <div class="team_top">
                <?php if (get_sub_field('team_title') && get_sub_field('team_title')): ?>
                    <div class="team_top_left" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0">
                        <div class="team_title">
                            <?php the_sub_field('team_title'); ?> <img src="/wp-content/uploads/2022/02/stars.svg" alt="img">
                        </div>
                        <div class="team_text">
                            <?php the_sub_field('team_text'); ?>
                        </div>
                    </div>

                <?php endif; ?>
                <?php if (get_sub_field('team_image')): ?>
                    <div class="team_image" data-da="team_top_left,1,992" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                        <img src="<?php the_sub_field('team_image'); ?>" alt="img">
                    </div>
                <?php endif; ?>
            </div>
            <?php if( have_rows('team_crads') ): ?>
                <div class="team_bottom" data-aos="fade-up" data-aos-delay="300" data-aos-offset="0">
                    <?php while( have_rows('team_crads') ): the_row();  ?>
                        <div class="team_bottom_item">
                            <div class="team_bottom_title"><?php the_sub_field('title'); ?></div>
                            <div class="team_bottom_text"><?php the_sub_field('text'); ?></div>

                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>