<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rinome Test</title>

    <?php wp_head(); ?>
</head>

<body id="page-top" <?php body_class(); ?>>
    <nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="<?php bloginfo('url'); ?>/#"> <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="page-logo"> Rinome</a><button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link active js-scroll-trigger" href="#about">O Nas</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="#offer">Oferta</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="<?php bloginfo('url'); ?>/sklep">Sklep</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact">Kontakt</a></li>
                </ul>
            </div>

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