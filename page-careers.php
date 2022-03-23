<?php

/*
Template Name: Careers
*/


get_header(); ?>

    <section class="careers">
        <div class="careers_block content_width">
            <div class="careers_content">
                <?php if( get_field('title') ): ?>
                   <div class="careers_title">
                      <?php the_field('title'); ?>
                   </div>
                <?php endif; ?>

                <div class="list_block_wrapper">
                    <?php if( have_rows('list_block') ): ?>
                        <div class="list_block">
                            <?php while( have_rows('list_block') ): the_row(); $selected = get_sub_field('modal'); ?>
                                <div class="list_block_item">
                                    <div class="list_block_content">
                                        <div class="list_block_title">
                                            <?php the_sub_field('title'); ?>
                                        </div>
                                        <div class="list_block_text">
                                            <?php the_sub_field('text'); ?>
                                        </div>
                                        <div class="list_block_btn">
                                            <a <?php if( in_array('modal', $selected) ) { echo 'class="trigger"'; } ?> href="<?php the_sub_field('button_link'); ?> "><?php the_sub_field('button_text'); ?> </a>
                                        </div>
                                    </div>

                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <?php if( get_field('image') ): ?>
                       <div class="careers_image">
                           <img src="<?php the_field('image'); ?>" alt="img">
                       </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>