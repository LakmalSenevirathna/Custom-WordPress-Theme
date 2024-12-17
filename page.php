<?php get_header(); ?>

<section class="section__wrap">
    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                <h1><?php the_title(); ?></h1>
                <?php get_template_part('includes/section', 'content');?>
            </div>
            <div class="col-lg-4">
                <?php if( is_active_sidebar('page-sidebar')):?>
                <?php dynamic_sidebar('page-sidebar');?>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>