<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <?php wp_head(); ?>
    <title>About</title>
</head>
<body>

<header>
    <div class="container">
        <div class="logo">
        <img src="http://localhost:8888/Wordpress/wp-content/uploads/2017/11/logo.png" alt="logo" id="logo">
    </div>
        <?php
            $nav_args = array(
                'theme_location' => 'main-menu',
            );
            wp_nav_menu($nav_args);
        ?>
    </div>
</header>