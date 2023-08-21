<footer class="footer">
    <div class="footer__inner inner">
        <nav class="f-nav">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'f-nav',
                    'container' => '',
                    'menu_class' => 'f-nav__list',
                )
            );
            ?>
        </nav>
        <div class="footer__company">
            <a href="<?php echo esc_url(home_url('')); ?>" class="footer__company-logo"><img src="<?php echo ImgPath; ?>/webp/logo.webp" alt="Engress"></a>
            <p class="footer__company-tel">0123-456-7890<img src="<?php echo ImgPath; ?>/icon_tel-white.svg" alt=""></p>
            <p class="footer__company-openclose">平日08:00~20:00</p>
        </div>
    </div>
    <div class="footer__copy">
        <div class="footer__copy__inner inner">
            <p class="footer__copy-txt">&copy; 2020 Engress.</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>