<?php 
/*
Template Name: Archives
*/
get_header('page'); ?>

<div class="main-container container">
    <div class="row">

        <div class="col-lg-9 mx-auto">
            <div class="blog-post">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?php if (has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>">
                            <img class="img-fluid mb-4" src="<?php the_post_thumbnail_url('post_image') ?>" alt="post-img">
						</a>
                        <?php endif; ?>

                        <a href="<?php the_permalink(); ?>">
                            <h1><?php the_title(); ?></h1>
                        </a>
				
				<p>
					<span><i class="far fa-user"></i> Rinome</span>

					<span class="ml-2"><i class="far fa-calendar"></i> <?php echo get_the_date(); ?></span>
				</p>
                        <?php the_excerpt(); ?>
				<a class="btn rinome-button" href="<?php the_permalink(); ?>">Czytaj więcej</a>
				<hr>

				
                <?php endwhile;
                else : endif; ?>
            </div>
            <?php
            $big = 999999999; // need an unlikely integer

            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $the_query->max_num_pages
            ));
            ?>


        </div>
		<div class="col-lg-3 mx-auto">
            <?php dynamic_sidebar('blog-sidebar'); ?>
        </div>




    </div>
</div>


<?php get_footer(); ?>