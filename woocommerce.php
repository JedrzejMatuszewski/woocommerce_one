<?php get_header('page'); ?>

<div class="main-container container">
    <div class="row">

        <div class="col-lg-3 mx-auto">

            <?php get_sidebar(); ?>

        </div>
        <div class="col-lg-9 mx-auto">
            <?php woocommerce_content(); ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>