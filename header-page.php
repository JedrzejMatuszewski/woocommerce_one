<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rinome Test</title>

    <?php wp_head(); ?>
</head>

<body id="page-top" <?php body_class(); ?>>
    <nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top page-nav" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="<?php bloginfo('url'); ?>/#">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="page-logo"> Rinome</a>
            <button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu">
                <i class="fa fa-bars"></i>
            </button>

            <?php
            wp_nav_menu(array(
                'theme_location'  => 'topnav',
                'menu'            => 'topnav',
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarResponsive',
                'menu_class'      => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'items_wrap'      => '<ul class="nav navbar-nav ml-auto %2$s">%3$s</ul>',
                'depth'           => 0
            ));
            ?>

        </div>
    </nav>