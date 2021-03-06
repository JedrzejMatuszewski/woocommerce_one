<?php get_header('page'); ?>

<div class="main-container container">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <?php if (has_post_thumbnail()) : ?>
                <img class="img-fluid mb-4" src="<?php the_post_thumbnail_url('post_image') ?>" alt="post-img">
            <?php endif; ?>
            <h1>
                <?php the_title(); ?>
            </h1>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

            <?php endwhile;
            else : endif; ?>

        </div>
    </div>
</div>


<?php get_footer(); ?>