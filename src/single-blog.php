<?php get_header(); ?>
<main class="main">
    <?php get_template_part('parts/page-head'); ?>
    <?php get_template_part('parts/breadcrumbs'); ?>
    <div class="page-container">
        <div class="blog-post__inner inner">
            <article class="post">
                <?php
                if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="post__head">
                            <h2 class="post__head-ttl"><?php the_title(); ?></h2>
                            <p class="post-categories"><?php
                                                        $terms = get_the_terms($post->ID, 'blog_cat');
                                                        if ($terms) :
                                                            foreach ($terms as $term) {
                                                                echo '<span>' . $term->name . '</span>';
                                                            }
                                                        endif;
                                                        ?>
                            </p>
                        </div>
                        <div class="post__share">
                            <?php echo DISPLAY_ULTIMATE_PLUS(); ?>
                            <p class="post__share-date"><?php the_time('y/m/d'); ?></p>
                        </div>
                        <figure class="post__main-thumb">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                                <img src="<?php echo ImgPath; ?>/webp/noimage.webp" alt="">
                            <?php endif; ?>
                        </figure>
                        <div class="post__body">
                            <?php the_content(); ?>
                        </div>
                <?php endwhile;
                endif; ?>
                <div class="reccomend">
                    <h3 class="reccomend-ttl">おすすめの記事</h3>
                    <?php
                    $arg   = array(
                        'post_type' => "blog",
                        'posts_per_page' => 3,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'tag'            => 'pickup'
                    );
                    $posts = get_posts($arg);
                    if ($posts) : ?>
                        <ul class="reccomend__list">
                            <?php
                            foreach ($posts as $post) :
                                setup_postdata($post); ?>
                                <div class="reccomend__item">
                                    <a href="<?php the_permalink(); ?>" class="reccomend-link">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else : ?>
                                            <img src="<?php echo ImgPath; ?>/webp/noimage.webp" alt="">
                                        <?php endif; ?>
                                        <div class="reccomend__item__body">
                                            <h2 class="reccomend__item__body-ttl"><?php the_title(); ?></h2>
                                            <time class="reccomend__item__body-date" datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php echo get_the_time('Y-m-d'); ?></time>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </ul>
                    <?php
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </article>
            <aside class="sidebar">
                <div class="sidebar__connection">
                    <h3 class="sidebar__ttl">関連記事</h3>
                    <div class="sidebar__connection__list">
                        <?php
                        global $post;
                        $term = array_shift(get_the_terms($post->ID, 'blog_cat'));
                        $args = array(
                            'numberposts' => 3,
                            'post_type' => 'blog',
                            'taxonomy' => 'blog_cat',
                            'term' => $term->slug,
                            'post__not_in' => array($post->ID)
                        );
                        ?>
                        <?php $myPosts = get_posts($args);
                        if ($myPosts) : ?>
                            <?php foreach ($myPosts as $post) : setup_postdata($post); ?>
                                <div class="sidebar__connection__item">
                                    <a href="<?php the_permalink(); ?>" class="sidebar__connection-link">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else : ?>
                                            <img src="<?php echo ImgPath; ?>/webp/noimage.webp" alt="">
                                        <?php endif; ?>
                                        <h2 class="sidebar__connection-ttl"><?php the_title(); ?></h2>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>投稿が見つかりません</p>
                        <?php endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
                <div class="sidebar__category">
                    <h3 class="sidebar__ttl">カテゴリー</h3>
                    <div class="sidebar__category__list">
                        <?php
                        $terms = get_terms('blog_cat');
                        foreach ($terms as $term) {
                            echo '<li class="sidebar__category__item"><a href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a></li>';
                        }
                        ?>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</main>
<?php get_template_part('parts/cta'); ?>
<?php get_footer(); ?>