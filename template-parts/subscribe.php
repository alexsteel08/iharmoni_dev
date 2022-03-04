<section  class="cta" <?php if( get_field('cta_tabs_bi','option') ): ?> style="background-image: url(<?php the_field('cta_tabs_bi','option'); ?>)"<?php endif; ?>>
    <div class="cta_block content_width">

        <div class="subscribe">
            <div class="subscribe_block">
                <div class="subscribe_content">
                    <?php if( get_field('subscribe_title','option') ): ?>
                        <div class="subscribe_title" data-aos="fade-up" data-aos-delay="50" data-aos-offset="0">
                            <?php the_field('subscribe_title','option'); ?>
                        </div>
                    <?php endif; ?>


                    <?php if( get_field('subscribe_form','option') ): ?>
                        <div class="subscribe_form" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0">
                            <?php the_field('subscribe_form','option'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="cta_content">
            <div class="cta_forms" id="cta" >
                <?php if( get_field('cta_forms_title','option') ): ?>
                    <div class="cta_forms_title-block">
                        <div class="cta_forms_title" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                            <?php the_field('cta_forms_title','option'); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="cta_forms_block">
                    <?php if( have_rows('cta_forms_items','option') ): ?>
                        <div class="cta_forms_items" data-aos="fade-up" data-aos-delay="250" data-aos-offset="0">
                            <?php while( have_rows('cta_forms_items','option') ): the_row(); ?>
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