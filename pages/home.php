<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gubkinspe
 */

get_header(); ?>

<div class="articles-holder float">
    <div class="articles-holder-inside">

        <?php
        if (have_posts()) :

            if (is_home() && !is_front_page()) : ?>

            <?php
            endif;

            /* Start the Loop */
            while (have_posts()) : the_post();

                get_template_part('template-parts/custom-post', get_post_format());

            endwhile;

            the_posts_navigation();

        else :

            get_template_part('template-parts/custom-post', 'none');

        endif; ?>
    </div>
</div>

<?php
get_footer();

?>
