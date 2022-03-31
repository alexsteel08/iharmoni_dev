<?php
/*
 *	ENQUEUE SCRIPTS AND STYLES
 *
 *****************************************************/

add_action('wp_enqueue_scripts', 'theme_front_end_styles');
    function theme_front_end_styles()
{
//    wp_enqueue_style('select2.min', WTHEME_CSS_URI . 'select2.min.css', array(), false, 'all');
    wp_enqueue_style('aos', WTHEME_CSS_URI . 'aos.css', array(), false, 'all');
    wp_enqueue_style('header', WTHEME_CSS_URI . 'header.css', array(), false, 'all');
    wp_enqueue_style('footer', WTHEME_CSS_URI . 'footer.css', array(), false, 'all');
    // wp_enqueue_style('slick-style', WTHEME_CSS_URI . 'slick-style.css', array(), false, 'all');
        if(is_page_template('page-faq.php')):
            wp_enqueue_style('faq', WTHEME_CSS_URI . 'faq.css', array(), false, 'all');
        endif;
        if(is_page_template('page-about.php')):
            wp_enqueue_style('cta', WTHEME_CSS_URI . 'blocks/cta.css', array(), false, 'all');
        endif;
    if(is_single()):
        wp_enqueue_style('single', WTHEME_CSS_URI . 'single.css', array(), false, 'all');
    endif;

    wp_enqueue_style('style', get_stylesheet_uri());
//    wp_enqueue_style( 'custom-styles', get_template_directory_uri() . '/css/custom-styles.css' );
}

add_action('wp_enqueue_scripts', 'theme_front_end_script');
    function theme_front_end_script()
{
//    wp_enqueue_script('locomotive-scroll', WTHEME_JS_URI . 'locomotive-scroll.min.js', array('jquery'), '', true);
//    wp_enqueue_script('rellax', WTHEME_JS_URI . 'rellax.min.js', array('jquery'), '', true);

    if(is_page_template('page-faq.php')):
        wp_enqueue_script('faq', WTHEME_JS_URI . 'faq.js', array('jquery'), '', true);
    endif;

    wp_enqueue_script('main', WTHEME_JS_URI . 'main.js', array('jquery'), '', true);

}



function acf_content() {
    while (have_rows('content')) {
        the_row();
        if (get_row_layout() == 'baner' ) {
            wp_enqueue_style('baner', WTHEME_CSS_URI . 'blocks/baner.css', array(), false, 'all');
            wp_enqueue_script('banerjs', WTHEME_JS_URI . 'baner.js', array('jquery'), '', true);
        }
        if (get_row_layout() == 'simple_tabs' ) {
            wp_enqueue_style('simple_tabs', WTHEME_CSS_URI . 'blocks/simple_tabs.css', array(), false, 'all');
            wp_enqueue_script('tabs', WTHEME_JS_URI . 'tabs.js', array('jquery'), '', true);
        }
        if (get_row_layout() == 'simple_tabs' ) {
            wp_enqueue_style('list_diagram', WTHEME_CSS_URI . 'blocks/list_diagram.css', array(), false, 'all');
        }
        if (get_row_layout() == 'info_block' ) {
            wp_enqueue_style('info_block', WTHEME_CSS_URI . 'blocks/info_block.css', array(), false, 'all');
        }
        if (get_row_layout() == 'tabs_v2' ) {
            wp_enqueue_style('tabs_v2', WTHEME_CSS_URI . 'blocks/tabs_v2.css', array(), false, 'all');
            wp_enqueue_script('tabs_v2', WTHEME_JS_URI . 'tabs_v2.js', array('jquery'), '', true);
        }
        if (get_row_layout() == 'why_starport' ) {
            wp_enqueue_style('why_starport', WTHEME_CSS_URI . 'blocks/why_starport.css', array(), false, 'all');
        }
        if (get_row_layout() == 'tabs_acc_cta' ) {
            wp_enqueue_style('cta', WTHEME_CSS_URI . 'blocks/cta.css', array(), false, 'all');
            wp_enqueue_script('cta', WTHEME_JS_URI . 'cta.js', array('jquery'), '', true);
        }
        if (get_row_layout() == 'baner_v2' ) {
            wp_enqueue_style('baner_v2', WTHEME_CSS_URI . 'blocks/baner_v2.css', array(), false, 'all');
        }
        if (get_row_layout() == 'how_do_we_do_it' ) {
            wp_enqueue_style('hdwdi', WTHEME_CSS_URI . 'blocks/hdwdi.css', array(), false, 'all');
        }
        if (get_row_layout() == 'team' ) {
            wp_enqueue_style('team', WTHEME_CSS_URI . 'blocks/team.css', array(), false, 'all');
        }
        if (get_row_layout() == 'tech' ) {
            wp_enqueue_style('tech', WTHEME_CSS_URI . 'blocks/tech.css', array(), false, 'all');
        }
        if (get_row_layout() == 'ad' ) {
            wp_enqueue_style('ad', WTHEME_CSS_URI . 'blocks/ad.css', array(), false, 'all');
        }
        if (get_row_layout() == 'um' ) {
            wp_enqueue_style('um', WTHEME_CSS_URI . 'blocks/um.css', array(), false, 'all');
        }
        if (get_row_layout() == 'cards_cta' ) {
            wp_enqueue_style('cards_cta', WTHEME_CSS_URI . 'blocks/cards_cta.css', array(), false, 'all');
        }
        if (get_row_layout() == 'baner_v3' ) {
            wp_enqueue_style('baner_v3', WTHEME_CSS_URI . 'blocks/baner_v3.css', array(), false, 'all');
        }


    }
}
add_action('wp_footer', 'acf_content');