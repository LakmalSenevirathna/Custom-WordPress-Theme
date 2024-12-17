<?php get_header(); ?>

<section class="section__wrap">
    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('blog-large', ['class' => 'image-fluid mb-3 img-thumbnail', 'alt' => get_the_title()]); ?>
                <?php endif; ?>

                <h2><?php the_title(); ?></h2>

                <?php get_template_part('includes/section', 'blogcontent'); ?>
            </div>

            <div class="col-lg-4">
                <?php if( is_active_sidebar('blog-sidebar')):?>
                <?php dynamic_sidebar('blog-sidebar');?>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
