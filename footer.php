<footer id="site-footer">
    <div class="footer_block content_width">
        <div class="footer_rows">
            <div class="footer__column">
                <div class="footer_column_content">
                    <div class="footer_column_title">iHarmoni</div>
                    <div class="footer_column_text">
                        iHarmoni is a digital platform that powers mortgage brokers lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
            </div>
            <div class="footer__column">
                <div class="footer_column_content">
                    <ul class="footer_links">
                        <li><a href="/brokers/">Brokers</a></li>
                        <li><a href="/lenders/">Lenders</a></li>
                        <li><a href="/faq/">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer__column">
                <div class="footer_column_content">
                    <ul class="footer_links">
                        <li><a href="/about-us/">About us</a></li>
                        <li><a href="/insights/">Insights</a></li>
                        <li><a href="/contact-us/">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer__column">
                <div class="footer_column_content">
                    <div class="footer_contact_title">Contact</div>
                    <ul class="footer_contacts">
                        <li><a href="tel:+14442222223">+ 1444 222 22 23</a></li>
                        <li><a href="mailto:suport@iharmonicre.com">suport@iharmonicre.com</a></li>
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php wp_footer(); ?>
</div>
</body>
</html>
