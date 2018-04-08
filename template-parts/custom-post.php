<div <?php post_class('article float'); ?> id="post-<?php the_ID(); ?>"">
    <a href="<?php the_permalink(); ?>">
    <div class="article-content">
        <header class="article-title entry-header">
            <?php
            //the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
            the_title('<h2 class="entry-title"> ',  ' </h2>');
            ?>
            <div class="underline"></div>
        </header>
        <p class="article-date">
            <date>
                <?php if ('post' === get_post_type()) : gubkinspe_posted_on(); endif; ?>
            </date>
        </p>
    </div>
    </a>
</div>


