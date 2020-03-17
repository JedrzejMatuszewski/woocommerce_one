<?php get_header('page'); ?>

<div class="main-container container">
    <div class="row">
        <div class="col-lg-3 mx-auto">
            <?php dynamic_sidebar('blog-sidebar'); ?>
        </div>
        <div class="col-lg-9 mx-auto">
            <img class="img-fluid mb-4" src="<?php the_post_thumbnail_url('post_image') ?>" alt="">
            <h1>
                <?php the_title(); ?>
            </h1>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                    <?php the_tags(); ?>

            <?php endwhile;
            else : endif; ?>

        </div>
    </div>
</div>


<?php get_footer(); ?>