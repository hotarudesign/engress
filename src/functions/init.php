<?php
// imageパス
define('ImgPath', get_template_directory_uri() . "/assets/images");

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

// blog一覧ページの文字数制限
function wpdocs_custom_excerpt_length($length)
{
    return 50;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

// blog一覧ページ超過文字の表示
function wpdocs_excerpt_more($more)
{
    return '<a href="' . get_the_permalink() . '" rel="nofollow"></a>';
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');


// blog一覧ページのタイトルの文字数制限
function titlelimitchar($title)
{
    if (mb_strlen($title) > 40 && !(is_single()) && !(is_page())) {
        $title = mb_substr($title, 0, 40) . "…";
    }
    return $title;
}
add_filter('the_title', 'titlelimitchar');

/* 管理画面での表示項目追加 */
function add_custom_column($defaults)
{
    $defaults['blog_cat'] = 'カテゴリ';
    return $defaults;
}
add_filter('manage_blog_posts_columns', 'add_custom_column');
