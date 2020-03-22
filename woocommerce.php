<?php get_header('page'); ?>

<div class="main-container container">
    <div class="row">

        <?php if (is_product()) : ?>

            <div class="col-lg-12 mx-auto">
                <?php woocommerce_content(); ?>
            </div>

        <?php else : ?>

            <div class="col-lg-3 mx-auto">

                <?php get_sidebar(); ?>

            </div>
            <div class="col-lg-9 mx-auto">
                <?php woocommerce_content(); ?>
            </div>

        <?php endif; ?>

    </div>
</div>


<?php get_footer(); ?>