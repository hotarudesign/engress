<?php get_header(); ?>
<main class="main">
    <?php get_template_part('parts/page-head'); ?>
    <?php get_template_part('parts/breadcrumbs'); ?>
    <div class="page-container">
        <div class="news__inner inner">
            <h2 class="page-sec-ttl">お知らせ一覧</h2>
            <div class="news__list">
                <?php
                $args = array(
                    'post_type' => 'news',
                    'posts_per_page' => 10
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
                ?>
                        <article class="news__item">
                            <a href="<?php the_permalink(); ?>" class="news__item-link">
                                <h2 class="news__item-ttl"><?php the_title(); ?></h2>
                                <time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php echo get_the_time('Y-m-d'); ?></time>
                            </a>
                        </article>
                <?php endwhile;
                endif; ?>
            </div>
            <?php the_posts_pagination(
                array(
                    'mid_size'      => 3, // 現在ページの左右に表示するページ番号の数
                    'prev_next'     => false,
                    'type'          => 'list', // 戻り値の指定 (plain/list)
                )
            ); ?>
        </div>
    </div>
</main>
<?php get_template_part('parts/cta'); ?>
<?php get_footer(); ?>