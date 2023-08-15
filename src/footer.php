<footer class="footer">
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
</footer>
<?php wp_footer(); ?>
</body>

</html>