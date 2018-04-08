<?php get_header(); ?>
<div class="current-article-page">
    <div class="current-article-inner">

        <p class="back-to-news">
            <a class="back-to-news-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"> Back to all News </a>
        </p>

        <?php
        while (have_posts()) : the_post();

            get_template_part('template-parts/content', get_post_type());

            //the_post_navigation();

        endwhile; // End of the loop.
        ?>

        <div class="another-posts clearfix">
            <div class="another-post another-post-prev">
                <?php next_post_link('%link'); ?>
            </div>
            <div class="another-post another-post-next">
                <?php previous_post_link('%link'); ?>
            </div>
        </div>

    </div>
</div>

<?php

get_footer();
?>

