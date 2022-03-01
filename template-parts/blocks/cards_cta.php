<section class="cards_cta" <?php if( get_sub_field('cards_cta_bi') ): ?> style="background-image: url(<?php the_sub_field('cards_cta_bi'); ?>)"<?php endif; ?>>
    <?php if( get_sub_field('cta_red_image') ): ?>
        <div class="cards_cta_square">
            <div class="cards_cta_square_wrapper">
                <div class="cards_cta_square_image" data-aos="fade-up" data-aos-delay="300" data-aos-offset="0" data-aos-once="true">
                    <img src="<?php the_sub_field('cta_red_image'); ?>" alt="img">
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="cards_cta_block content_width">
        <div class="cards_cta_content">
            <div class="cards_cta_wrapper">
                <div class="cards_cta_top">
                    <?php if( get_sub_field('cards_cta_title') ): ?>
                        <div class="cta_tabs_title" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0" data-aos-once="true">
                            <?php the_sub_field('cards_cta_title'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if( have_rows('cta_list') ): ?>
                        <div class="cta_list" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0" data-aos-once="true" >
                            <?php while( have_rows('cta_list') ): the_row();  ?>
                                <div class="cta_list_item">
                                    <div class="cta_list_title">
                                        <span><?php the_sub_field('nimber'); ?></span><?php the_sub_field('cta_title'); ?>
                                    </div>
                                    <div class="cta_list_text">
                                        <?php the_sub_field('text'); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>

            </div>

            <div class="cta_forms">
                <?php if( get_sub_field('cta_forms_title') ): ?>
                    <div class="cta_forms_title-block" data-aos="fade-up" data-aos-delay="400" data-aos-offset="0" data-aos-once="true">
                        <div class="cta_forms_title">
                            <?php the_sub_field('cta_forms_title'); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="cta_forms_block">
                    <?php if( have_rows('cta_forms_items') ): ?>
                        <div class="cta_forms_items" data-aos="fade-up" data-aos-delay="500" data-aos-offset="0" data-aos-once="true">
                            <?php while( have_rows('cta_forms_items') ): the_row(); ?>
                                <div class="cta_form_item">
                                    <div class="cta_form_wrapper">
                                        <div class="cta_form_title">
                                            <?php the_sub_field('cta_form_title'); ?>
                                        </div>
                                        <div class="cta_form_text">
                                            <div class="cta_form_text_wrapper">
                                                <?php the_sub_field('cta_form_text'); ?>
                                            </div>
                                        </div>
                                        <div class="cta_form_form">
                                            <?php the_sub_field('cta_form_form'); ?>
                                        </div>
                                        <div class="cta_form_footer">
                                            <?php the_sub_field('cta_form_footer'); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>