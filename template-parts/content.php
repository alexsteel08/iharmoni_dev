<?php if( have_rows('content') ): ?>
    <?php while( have_rows('content') ): the_row(); ?>

        <?php if( get_row_layout() == 'baner' ): ?>
            <?php get_template_part( 'template-parts/blocks/baner' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'baner_v2' ): ?>
            <?php get_template_part( 'template-parts/blocks/baner_v2' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'baner_v3' ): ?>
            <?php get_template_part( 'template-parts/blocks/baner_v3' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'simple_tabs' ): ?>
            <?php get_template_part( 'template-parts/blocks/simple_tabs' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'list_diagram' ): ?>
            <?php get_template_part( 'template-parts/blocks/list_diagram' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'info_block' ): ?>
            <?php get_template_part( 'template-parts/blocks/info_list' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'tabs_v2' ): ?>
            <?php get_template_part( 'template-parts/blocks/tabs_v2' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'why_starport' ): ?>
            <?php get_template_part( 'template-parts/blocks/why_starport' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'tabs_acc_cta' ): ?>
            <?php get_template_part( 'template-parts/blocks/cta' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'how_do_we_do_it' ): ?>
            <?php get_template_part( 'template-parts/blocks/how_do_we_do_it' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'team' ): ?>
            <?php get_template_part( 'template-parts/blocks/team' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'tech' ): ?>
            <?php get_template_part( 'template-parts/blocks/tech' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'ad' ): ?>
            <?php get_template_part( 'template-parts/blocks/ad' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'um' ): ?>
            <?php get_template_part( 'template-parts/blocks/um' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'cards_cta' ): ?>
            <?php get_template_part( 'template-parts/blocks/cards_cta' );?>
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>