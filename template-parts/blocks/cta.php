<section class="cta" <?php if( get_sub_field('cta_tabs_bi') ): ?> style="background-image: url(<?php the_sub_field('cta_tabs_bi'); ?>)"<?php endif; ?>>
    <div class="cta_block content_width">
        <div class="cta_content">
            <div class="cta_tabs_wrapper" >
                <div class="cta_tabs" >
                    <?php if( get_sub_field('tabs_acc_cta_title') ): ?>
                       <div class="cta_tabs_title" data-aos="fade-up" data-aos-delay="600" data-aos-offset="0">
                          <?php the_sub_field('tabs_acc_cta_title'); ?>
                       </div>
                    <?php endif; ?>
                    <?php if( have_rows('cta_tabs') ): ?>
                        <div class="container-tab" data-aos="fade-up" data-aos-delay="650" data-aos-offset="0">
                            <ul class="cta-tabs_v2">
                                <?php while( have_rows('cta_tabs') ): the_row(); ?>
                                    <li class="tab-head-cont">
                                        <a href="#"><?php the_sub_field('cta_tab_label'); ?></a>
                                        <section>
                                            <?php if( have_rows('cta_tab_accordion') ): ?>
                                                <div class="accordion">
                                                    <?php while( have_rows('cta_tab_accordion') ): the_row(); ?>
                                                        <div class="accordion__item">
                                                            <button class="accordion__btn">

                                                                <span class="accordion__caption"></i><?php the_sub_field('title'); ?></span>
                                                                <span class="accordion__icon"></span>
                                                            </button>

                                                            <div class="accordion__content">
                                                                <?php the_sub_field('text'); ?>
                                                            </div>
                                                        </div>
                                                    <?php endwhile; ?>
                                                </div>
                                            <?php endif; ?>
                                        </section>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if( get_sub_field('cta_red_image') ): ?>
                   <div class="cta_square">
                       <div class="cta_square_wrapper">
                           <span class="line_top"></span>
                           <span class="line_right"></span>
                           <span class="line_bottom"></span>
                           <span class="line_left"></span>
                           <div class="cta_square_image">
                               <img src="<?php the_sub_field('cta_red_image'); ?>" alt="img">
                           </div>
                       </div>
                   </div>
                <?php endif; ?>
            </div>

            <div class="cta_forms" id="cta" >
                <?php if( get_sub_field('cta_forms_title') ): ?>
                   <div class="cta_forms_title-block" data-aos="fade-up" data-aos-delay="700" data-aos-offset="0">
                       <div class="cta_forms_title">
                           <?php the_sub_field('cta_forms_title'); ?>
                       </div>
                   </div>
                <?php endif; ?>
                <div class="cta_forms_block" data-aos="fade-up" data-aos-delay="800" data-aos-offset="0">
                    <?php if( have_rows('cta_forms_items') ): ?>
                        <div class="cta_forms_items">
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