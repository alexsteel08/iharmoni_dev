<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
<body <?php body_class(); ?> data-scroll-container>

<?php wp_body_open();?>
<div class="wr">
    <header id="site-header" class="header">
        <div class="header__container content_width">
            <div class="site_logo" >
                <a itemprop="url" href="<?php echo get_home_url(); ?>" class="header-logo">
                        <span>iHarmoni</span>
                    </a>
            </div>
            <div id="menu" class="header__menu menu">
                <div class="menu__icon">
                    <span></span>
                </div>

                <?php
                wp_nav_menu( [
                    'theme_location'  => 'primary-menu',
                    'menu'            => '',
                    'container'       => 'nav',
                    'container_class' => 'menu__body',
                    'container_id'    => '',
                    'menu_class'      => 'menu__list',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'add_li_class'    => 'menu__link',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] );

                ?>
                <?php if( get_field('cta_button_text','option') && get_field('cta_button_link','option') ): ?>
                    <div class="cta_button_header" data-da="mega-menu,130,992">
                        <a href="<?php the_field('cta_button_link','option'); ?>">
                            <?php the_field('cta_button_text','option'); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </header>