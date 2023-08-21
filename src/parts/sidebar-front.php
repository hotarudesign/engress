<aside class="sidebar">
    <div class="sidebar__inner inner">
        <div class="blog">
            <h2 class="blog__ttl sidebar__ttl">ブログ</h2>
            <div class="blog__list">
                <?php
                $args = [
                    'post_type' => 'blog',
                    'posts_per_page' => 3,
                ];
                $my_query = new WP_Query($args); ?>
                <?php
                if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <article class="blog__item" data-href="<?php the_permalink(); ?>">
                            <div class="blog__item__body">
                                <p class="blog__item-date"><?php the_time('Y/m/d'); ?></p>
                                <h2 class="blog__item-ttl"><?php the_title(); ?></h2>
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
                endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="news">
            <h2 class="news__ttl sidebar__ttl">お知らせ</h2>
            <div class="news__list">
                <?php
                $args = [
                    'post_type' => 'news',
                    'posts_per_page' => 3,
                ];
                $my_query = new WP_Query($args); ?>
                <?php
                if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <article class="news__item" data-href="<?php the_permalink(); ?>">
                            <p class="news__item-date"><?php the_time('Y/m/d'); ?></p>
                            <h2 class="news__item-ttl"><?php the_title(); ?></h2>
                        </article>
                <?php endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</aside>