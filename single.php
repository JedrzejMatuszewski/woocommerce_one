<?php get_header('page'); ?>

<div class="main-container container">
    <div class="row">
        <div class="col-lg-9 mx-auto">
			<a class="arrow" href="https://rinome.net/blog" style="width: 120px; color: #fff; text-align: center; padding-left: 40px;">
				Blog
			</a>
            <img class="img-fluid mb-4" src="<?php the_post_thumbnail_url('post_image') ?>" alt="">
            <a href="<?php the_permalink(); ?>">
                            <h1><?php the_title(); ?></h1>
                        </a>
			<p>
					<span><i class="far fa-user"></i> Rinome</span>

					<span class="ml-2"><i class="far fa-calendar"></i> <?php echo get_the_date(); ?></span>
				</p>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

			<div class="mt-5 mb-5">
				<?php the_tags(); ?>
			</div>
                    

            <?php endwhile;
            else : endif; ?>

        </div>
		<div class="col-lg-3 mx-auto">
            <?php dynamic_sidebar('blog-sidebar'); ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>