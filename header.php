<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom WordPress Theme</title>
    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="container">
        <?php
        if (has_nav_menu('top-menu')) { // Check if the theme location exists
            wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'top-bar',
                )
            );
        } else {
            // echo '<p>No header menu assigned.</p>'; // Fallback message if theme location is not defined
        }
        ?>
    </div>
</header>
    
