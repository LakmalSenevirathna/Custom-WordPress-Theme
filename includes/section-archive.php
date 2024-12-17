<?php if( have_posts() ): while( have_posts() ): the_post();?>

<div class="card mb-3">
    <div class="card-body d-flex justify-content-center align-items-center">

        <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail('blog-small', ['class' => 'image-fluid img-thumbnail me-3', 'alt' => get_the_title()]); ?>
        <?php endif; ?>

        <div class="blog-content">
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt();?>

            <a href="<?php the_permalink(); ?>" class="btn btn-success"> Read more </a>
        </div>
    </div>
</div>

<?php endwhile; else: endif; ?>

