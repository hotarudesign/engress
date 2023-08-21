<?php
// ファイルの読み込み
function add_link_files()
{

    // CSSの読み込み
    wp_enqueue_style('reset', get_stylesheet_directory_uri() . '/assets/css/base/reset.css');
    wp_enqueue_style('base', get_stylesheet_directory_uri() . '/assets/css/base/base.css');
    if (is_front_page()) :
        wp_enqueue_style('home', get_stylesheet_directory_uri() . '/assets/css/template/index.css');
    elseif (is_page('price')) :
        wp_enqueue_style('price', get_stylesheet_directory_uri() . '/assets/css/template/price.css');
    elseif (is_post_type_archive('blog')) :
        wp_enqueue_style('blog', get_stylesheet_directory_uri() . '/assets/css/template/blog-archive.css');
    elseif (is_tax()) :
        wp_enqueue_style('blog-category', get_stylesheet_directory_uri() . '/assets/css/template/blog-archive.css');
    elseif (is_post_type_archive('news')) :
        wp_enqueue_style('news', get_stylesheet_directory_uri() . '/assets/css/template/news-archive.css');
    elseif (is_singular('blog')) :
        wp_enqueue_style('blog-post', get_stylesheet_directory_uri() . '/assets/css/template/blog-post.css');
    elseif (is_singular('news')) :
        wp_enqueue_style('news-post', get_stylesheet_directory_uri() . '/assets/css/template/news-post.css');
    elseif (is_page('contact')) :
        wp_enqueue_style('news-post', get_stylesheet_directory_uri() . '/assets/css/template/contact.css');
    endif;

    // JavaScriptの読み込み
    wp_enqueue_script('g-sap', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js");
    wp_enqueue_script('scrollTrigger', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js");
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/index.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'add_link_files');
