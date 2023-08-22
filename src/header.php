<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test_wp</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="header__inner">
            <h1 class="logo">
                <a href="<?php echo esc_url(home_url('')); ?>">
                    <img src='<?php echo ImgPath; ?>/webp/logo.webp' class="logo-image" alt='Engress'>
                </a>
            </h1>
            <nav class="g-nav">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'g-nav',
                        'container' => '',
                        'menu_class' => 'g-nav__list',
                    )
                );
                ?>
            </nav>
            <div class="contact">
                <div class="contact__detail">
                    <p class="contact__detail-openclose">平日08:00〜20:00</p>
                    <p class="contact__detail-tel">
                        0123-456-7890
                        <img src="<?php echo ImgPath; ?>/icon_tel.svg" class="contact__detail-icon" alt="">
                    </p>
                </div>
                <div class="contact__action" id="jsContact">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="contact__action-btn request">資料請求</a>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="contact__action-btn inquiry">お問い合わせ</a>
                </div>
            </div>
            <button class="js-btn" id="jsBtn">
                <span></span><span></span><span></span>
            </button>
            <div class="slide-menu" id="slideMenu">
                <a href="<?php echo esc_url(home_url('')); ?>" class="slide-menu__logo">
                    <img src='<?php echo ImgPath; ?>/webp/logo.webp' class="logo-image" alt='Engress'>
                </a>
                <nav class="g-nav">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'g-nav',
                            'container' => '',
                            'menu_class' => 'g-nav__list',
                        )
                    );
                    ?>
                </nav>
                <div class="contact__action">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="contact__action-btn request">資料請求</a>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="contact__action-btn inquiry">お問い合わせ</a>
                </div>
            </div>
        </div>
    </header>