<?php if( have_posts() ): while( have_posts() ): the_post();?>

    <p><?php echo get_the_date('l jS F, Y'); ?></p>

    <?php the_content();?>

    <?php 
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    echo 'Posted by '.$fname.' '.$lname;
    ?>

    <?php
    $categories = get_the_category();
    foreach ($categories as $category )
    ?>
        <a href="<?php echo get_category_link($category->term_id) ?>">
            <?php echo $category->name;?>
        </a>

<?php endwhile; else: endif; ?>

