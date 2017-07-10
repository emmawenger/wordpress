<footer>
    <div class="container">
        <h4>Footer</h4>
        <?php
        $nav_args = array(
            'theme_location' => 'footer-left',
        );
        wp_nav_menu($nav_args);
        ?>
        <?php
        $nav_args = array(
            'theme_location' => 'footer-right',
        );
        wp_nav_menu($nav_args);
        ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
