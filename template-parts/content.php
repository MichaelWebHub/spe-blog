<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php
    the_title( '<h1 class="entry-title current-article-heading">', '</h1>' );

    gubkinspe_post_thumbnail(); ?>

    <div class="posted-on-block">
        <?php if ('post' === get_post_type()) : gubkinspe_posted_on(); endif; ?>
    </div>

    <div class="current-article-content">
        <?php
        the_content( sprintf(
            wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gubkinspe' ),
                array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
            ),
            get_the_title()
        ) );

        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gubkinspe' ),
            'after'  => '</div>',
        ) );
        ?>
    </div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
