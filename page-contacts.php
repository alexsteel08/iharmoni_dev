<?php

/*
Template Name: Contact page
*/


get_header(); ?>

<section class="contacts">
    <div class="contacts_block content_width">
        <div class="contacts_page_title">
            <h1><?php the_title();?></h1>
        </div>
        <div class="contacts_content">
            <div class="contacts_info">
                <?php if( have_rows('contacts_email') ): ?>
                    <?php if( get_field('contacts_email_title') ): ?>
                        <div class="contacts_box_title">
                            <?php the_field('contacts_email_title'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="contacts_email">
                        <?php while( have_rows('contacts_email') ): the_row();  ?>
                            <div class="contact_email">
                                <div class="contacts_email_box">
                                    <div class="contacts_heading"><?php the_sub_field('heading'); ?></div>
                                    <div class="contacts_email_address">
                                        <a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>


                <?php if( have_rows('contacts_phone') ): ?>
                    <?php if( get_field('contacts_phone_title') ): ?>
                        <div class="contacts_box_title">
                            <?php the_field('contacts_phone_title'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="contacts_email">
                        <?php while( have_rows('contacts_phone') ): the_row();  ?>
                            <div class="contact_phone">
                                <div class="contact_phone_box">
                                    <div class="contacts_heading"><?php the_sub_field('heading'); ?></div>
                                    <div class="contact_phone_number">
                                        <?php if( get_sub_field('phone') ): $phone1=get_sub_field('phone'); ?>
                                            <a href="tel:<?php  if($phone1) {echo preg_replace('/[^0-9]/', '', $phone1);}?>"><?php echo $phone1;?></a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="contact_work_time"><?php the_sub_field('work_time'); ?></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>


                <?php if( have_rows('contacts_address') ): ?>
                    <?php if( get_field('contacts_address_title') ): ?>
                        <div class="contacts_box_title">
                            <?php the_field('contacts_address_title'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="contacts_email">
                        <?php while( have_rows('contacts_address') ): the_row();  ?>
                            <div class="contact_address">
                                <div class="contacts_address_box">
                                    <div class="contacts_heading"><?php the_sub_field('heading'); ?></div>
                                    <div class="contacts_address_address">
                                        <?php the_sub_field('address'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>



            <?php if( get_field('contacts_page_form') && get_field('contact_form_title') ): ?>
               <div class="contacts_page_form">
                   <div class="contacts_form_title"><?php the_field('contact_form_title'); ?></div>
                  <?php the_field('contacts_page_form'); ?>
               </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>