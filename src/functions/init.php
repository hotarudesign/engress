<?php
// imageパス
define('ImgPath', get_template_directory_uri() . "/assets/images");


// ファイルの読み込み
function add_link_files()
{

    // CSSの読み込み
    wp_enqueue_style('reset', get_stylesheet_directory_uri() . '/assets/css/base/reset.css');
    wp_enqueue_style('base', get_stylesheet_directory_uri() . '/assets/css/base/base.css');
    wp_enqueue_style('home', get_stylesheet_directory_uri() . '/assets/css/template/index.css');

    // JavaScriptの読み込み
    wp_enqueue_script('g-sap', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js");
    wp_enqueue_script('scrollTrigger', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js");
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/index.js');
}
add_action('wp_enqueue_scripts', 'add_link_files');


// ナビメニューの追加
function theme_setup()
{
    //メニュー
    register_nav_menus(
        array(
            'g-nav' => 'ヘッダーメニュー',
            'f-nav' => 'フッターメニュー',
        )
    );
}
add_action('after_setup_theme', 'theme_setup');
