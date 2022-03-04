<section class="list_diagram" <?php if( get_sub_field('list_diagram_bi') ): ?> style="background-image: url(<?php the_sub_field('list_diagram_bi'); ?>)"<?php endif; ?>>
    <div class="list_diagram_block content_width">
        <div class="list_diagram_content">
            <div class="list_diagram_titles">
                <?php if( get_sub_field('list_diagram_title') ): ?>
                   <div class="list_diagram_title" data-aos="fade-up" data-aos-offset="0">
                      <?php the_sub_field('list_diagram_title'); ?>
                   </div>
                <?php endif; ?>
                <?php if( get_sub_field('list_diagram_subtitle') ): ?>
                   <div class="list_diagram_subtitle" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0">
                      <?php the_sub_field('list_diagram_subtitle'); ?>
                   </div>
                <?php endif; ?>
            </div>

            <div class="list_diagram_wrapper">
                <div class="list_diagram_line">
                    <div class="list_diagram_row">
                        <?php if( have_rows('list_items') ): ?>
                            <div class="list_diagram_list" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                                <?php while( have_rows('list_items') ): the_row();?>
                                    <div class="list_diagram_parrent">
                                        <div class="list_diagram_parrent-title">
                                            <div class="list_diagram_parrent-squre" <?php if( get_sub_field('square_color') ): ?> style="background-color: <?php the_sub_field('square_color'); ?>"<?php endif; ?>></div>
                                            <span><?php the_sub_field('title'); ?></span>
                                        </div>
                                        <?php if( have_rows('list_section') ): ?>
                                            <div class="list_section">
                                                <?php while( have_rows('list_section') ): the_row(); ?>
                                                    <div class="list_section_item">
                                                        <?php the_sub_field('list_section_item'); ?>
                                                    </div>
                                                <?php endwhile; ?>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>


                        <?php if( get_sub_field('list_diagram_image') ): ?>
                            <div class="list_diagram_diagram" data-aos="fade-up" data-aos-delay="300" data-aos-offset="0">
                                <div class="list_diagram_img" data-aos="fade-left" data-aos-delay="450" data-aos-offset="0">
                                    <img src="<?php the_sub_field('list_diagram_image'); ?>" alt="">
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>