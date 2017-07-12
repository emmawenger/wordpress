<footer>
    <div class="container">
        
        <?php
        $nav_args = array(
            'theme_location' => 'footer-left',
        );
        wp_nav_menu($nav_args);
        ?>
    
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
