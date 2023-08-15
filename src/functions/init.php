<?php
function add_link_files()
{

    // CSSの読み込み
    wp_enqueue_style('base', get_stylesheet_directory_uri() . '/assets/css/base/base.css');
    wp_enqueue_style('home', get_stylesheet_directory_uri() . '/assets/css/template/index.css');

    // JavaScriptの読み込み
    wp_enqueue_script('g-sap', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js");
    wp_enqueue_script('scrollTrigger', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js");
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/index.js');
}
add_action('wp_enqueue_scripts', 'add_link_files');
