<footer>
    <?php
    if (has_nav_menu('footer-menu')) { // Check if the theme location exists
        wp_nav_menu(
            array(
                'theme_location' => 'footer-menu',
            )
        );
    } else {
        // echo '<p>No footer menu assigned.</p>'; // Fallback message if theme location is not defined
    }
    ?>
</footer>


<?php wp_footer(); ?>
</body>

</html>