<?php get_header(); ?>
<main class="main">
    <?php get_template_part('parts/page-head'); ?>
    <?php get_template_part('parts/breadcrumbs'); ?>
    <div class="page-container">
        <div class="news-post__inner inner">
            <article class="post">
                <?php
                if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="post__head">
                            <h2 class="post__head-ttl"><?php the_title(); ?></h2>
                            <p class="post__head-date"><?php the_time('y/m/d'); ?></p>
                        </div>
                        <div class="post__body">
                            <?php the_content(); ?>
                        </div>
                <?php endwhile;
                endif; ?>
            </article>
        </div>
    </div>
</main>
<?php get_template_part('parts/cta'); ?>
<?php get_footer(); ?>