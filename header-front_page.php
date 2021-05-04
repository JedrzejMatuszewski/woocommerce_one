<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
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
    <nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="<?php bloginfo('url'); ?>/#"> <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="page-logo"> Rinome</a><button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="#offer">Oferta</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="<?php bloginfo('url'); ?>/sklep">Sklep</a></li>
					<li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="<?php bloginfo('url'); ?>/blog">Blog</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact">Kontakt</a></li>
                </ul>
            </div>
		
			<?php if (is_user_logged_in()) : ?>


                <div class="nav__top__user">
                    <div class="nav__top__user_bottom">
                        <a class="btn btn-nav-login btn-nav-login-yellow" href="<?php bloginfo('url'); ?>/moje-konto">Moje konto</a>
                        <a class="btn btn-nav-login" href="<?php echo wp_logout_url(get_permalink()); ?>">Wyloguj się</a>
                    </div>
                    <p class="nav__top__user_msg msg2">Witaj,
                        <?php
                        $current_user = wp_get_current_user();
                        echo $current_user->display_name;
                        ?>!
                    </p>
                </div>



            <?php else : ?>


                <div class="nav__top__user">
                    <div class="nav__top__user_bottom" style="width:200px; left:-110px;">
                        <p class="nav__top__user_msg msg1">Nie jesteś zalogowany</p>
                        <a class="btn btn-nav-login" href="<?php bloginfo('url'); ?>/moje-konto">Login / Rejestracja</a>
                    </div>
                    <p class="nav__top__user_msg msg2">Zaloguj się</p>
                </div>


            <?php endif; ?>
			
        </div>
    </nav>
    <header class="masthead" style="background:url('<?php bloginfo('template_directory'); ?>/img/hero20.jpg') center">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="brand-heading">Rinome</h1>
                        <p class="intro-text">Jednorazowe artykuły ochrony indywidualnej</p>
                        <button type="button" class="btn btn-outline-info bt-home"><a class="bt-home-a" href="<?php bloginfo('url'); ?>/sklep">Przejdź do sklepu</a></button>
                    </div>
                </div>
            </div>
        </div>
    </header>