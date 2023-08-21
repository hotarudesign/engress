<?php get_header(); ?>
<main class="main">
    <?php get_template_part('parts/page-head'); ?>
    <?php get_template_part('parts/breadcrumbs'); ?>
    <div class="page-container">
        <div class="blog__inner inner">
            <h2 class="page-sec-ttl">新着一覧</h2>
            <div class="blog__list">
                <?php
                $args = array(
                    'post_type' => 'blog',
                    'posts_per_page' => 10
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
                ?>
                        <article class="blog__item" data-href="<?php the_permalink(); ?>">
                            <div class="blog__item__body">
                                <p class="blog__item-date"><?php the_time('Y/m/d'); ?></p>
                                <h2 class="blog__item-ttl"><?php the_title(); ?></h2>
                                <p class="blog__item-desc"><?php the_excerpt(); ?></p>
                            </div>
                            <figure class="blog__item-thumb">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else : ?>
                                    <img src="<?php echo ImgPath; ?>/webp/noimage.webp" alt="">
                                <?php endif; ?>
                                <figcaption class="blog__item-caption">
                                    <?php
                                    $terms = get_the_terms($post->ID, 'blog_cat');
                                    if ($terms) :
                                        foreach ($terms as $term) {
                                            echo '<span>' . $term->name . '</span>';
                                        }
                                    endif;
                                    ?></figcaption>
                            </figure>
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