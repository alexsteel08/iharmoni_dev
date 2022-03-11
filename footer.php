<footer id="site-footer">
    <div class="footer_block content_width">
        <div class="footer_rows">
            <div class="footer__column">
                <div class="footer_column_content">
                    <?php if( get_field('fc1_logo','option') ): ?>
                       <div class="footer_column_title">
                           <img src="<?php the_field('fc1_logo','option'); ?>" alt="footer logo">
                       </div>
                    <?php endif; ?>
                    <?php if( get_field('fc1_text','option') ): ?>
                        <div class="footer_column_text">
                            <?php the_field('fc1_text','option'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if( have_rows('fc2_list','option') ): ?>
                <div class="footer__column">
                    <div class="footer_column_content">
                        <ul class="footer_links">
                            <?php while( have_rows('fc2_list','option') ): the_row(); ?>
                                <li>
                                    <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
            <?php if( have_rows('fc3_list','option') ): ?>
                <div class="footer__column">
                    <div class="footer_column_content">
                        <ul class="footer_links">
                            <?php while( have_rows('fc3_list','option') ): the_row(); ?>
                                <li>
                                    <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
            <div class="footer__column">
                <div class="footer_column_content">
                    <?php if( get_field('fc4_title','option') ): ?>
                        <div class="footer_contact_title">
                            <?php the_field('fc4_title','option'); ?>
                        </div>
                    <?php endif; ?>
                    <ul class="footer_contacts">
                        <?php if( get_field('phone','option') ): $phone1=get_field('phone','option'); ?>
                            <li><a href="tel:<?php  if($phone1) {echo preg_replace('/[^0-9]/', '', $phone1);}?>"><?php echo $phone1;?></a></li>
                        <?php endif; ?>
                        <?php if( get_field('email','option') ): ?>
                            <li><a href="mailto:<?php the_field('email','option'); ?>"><?php the_field('email','option'); ?></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="footer_red_line content_width">
        <span></span>
    </div>

    <div class="footer_bottom content_width">
        <div class="footer_social">
            <?php if( have_rows('social_links','option') ): ?>
                <div class="footer_socials">
                    <?php while( have_rows('social_links','option') ): the_row();  $image = get_sub_field('logo','option'); ?>
                        <div class="footer_social_item">
                            <a href="<?php the_sub_field('link'); ?>">
                                <img src="<?php echo $image; ?>" alt="imglogo">
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="footer_copy_links">
            <?php if( get_field('copyright','option') ): ?>
                <div class="copyright">
                    <span><?php the_field('copyright','option'); ?></span>
                </div>
            <?php endif; ?>
            <?php if( have_rows('footer_links','option') ): ?>
                <div class="footer_term_links">
                    <?php while( have_rows('footer_links','option') ): the_row();?>
                        <div class="footer_link_item">
                            <a href="<?php the_sub_field('link'); ?>">
                                <?php the_sub_field('text'); ?>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>



</footer>
<div class="modal-wrapper">
    <div class="modal">
        <div class="head">
            <a class="btn-close trigger"></a>
        </div>
        <div class="content_modal contacts_page_form">
            <div class="contacts_form_title"><?php the_field('title_modal','option'); ?></div>


            <?php echo do_shortcode( ' '. the_field('shortcode_form_modal','option') .' ' ); ?>

        </div>
    </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php wp_footer(); ?>
</div>
</body>
</html>
