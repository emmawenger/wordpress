<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <?php wp_head(); ?>
    <title>Emma Wenger</title>
</head>
<body>

<header>
    <div class="container">
        <?php
            $nav_args = array(
                'theme_location' => 'main-menu',
            );
            wp_nav_menu($nav_args);
        ?>
    </div>
</header>