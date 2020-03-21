<?php

/*
Template Name: Shop Page for Shop
*/

get_header('page'); ?>

<div class="main-container container">
    <div class="row">


        <div class="col-lg-3 mx-auto">

            <?php get_sidebar(); ?>

        </div>
        <div class="col-lg-9 mx-auto">
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