<?php get_header(); ?>

<section class="section__wrap">
    <div class="container">

        <h1>Search results for '<?php echo get_search_query(); ?>'</h1>

        <h1 class="mb-3"><?php echo single_cat_title(); ?></h1>

        <?php get_template_part('includes/section', 'searchresults'); ?>

        <?php previous_posts_Link(); ?>
        <?php next_posts_Link(); ?>
    </div>
</section>




<?php get_footer(); ?>