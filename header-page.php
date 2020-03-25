<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?> | <?php bloginfo('name'); ?> <?php bloginfo('description'); ?></title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/img/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/img/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/img/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/img/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/img/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/img/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/img/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/img/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/img/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php bloginfo('template_directory'); ?>/img/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/img/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/img/fav/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/img/fav/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/img/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

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



            <?php if (is_user_logged_in()) : ?>


                <div class="nav__top__user">
                    <div class="nav__top__user_bottom">
                        <p class="nav__top__user_msg msg1">Ptaki lecą kluczem</p>
                        <nav class="woocommerce-MyAccount-navigation">
                            <ul>
                                <?php foreach (wc_get_account_menu_items() as $endpoint => $label) : ?>
                                    <li class="<?php echo wc_get_account_menu_item_classes($endpoint); ?>">
                                        <a href="<?php echo esc_url(wc_get_account_endpoint_url($endpoint)); ?>"><?php echo esc_html($label); ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    </div>
                    <p class="nav__top__user_msg msg2">Witaj,
                        <?php
                        $current_user = wp_get_current_user();
                        echo $current_user->display_name;
                        ?>
                    </p>
                </div>


            <?php else : ?>


                <div class="nav__top__user">
                    <div class="nav__top__user_bottom">
                        <p class="nav__top__user_msg msg1">Nie jesteś zalogowany</p>
                        <a class="btn btn-nav-login" href="<?php bloginfo('url'); ?>/logowanie">Zaloguj się</a>
                        <a class="btn btn-nav-register" href="<?php bloginfo('url'); ?>/rejestracja">Zarejestruj się</a>
                    </div>
                    <p class="nav__top__user_msg msg2">Witaj, Guest!</p>
                </div>


            <?php endif; ?>



        </div>
    </nav>