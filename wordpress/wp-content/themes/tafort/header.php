<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title();?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

    <script src="/js/slick-init.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

    <?php wp_head();?>

</head>
<body>


<?php

if (isset($_GET['s']) && !empty($_GET['s'])) {
    $args['s'] = sanitize_text_field($_GET['s']);

    $pesquisa = $args['s'];
}else{

    $pesquisa = '';
}

?>

<header>

    <div class="bloco-superior">

        <ul class="redes-sociais">

            <li class="icone"> <a href="/instagram"><i class="fa fa-facebook"></i></a> </li>

            <li class="icone"> <a href="/instagram"><i class="fa fa-instagram"></i></a> </li>

            <li class="icone"> <a href="/instagram"><i class="fa-brands fa-youtube"></i></a> </li>

            <li class="icone"> <a href="/instagram"><i class="fa fa-linkedin"></i></a> </li>

        </ul>

        <div class="textos">

            <a href="/tafort-ferramentas/wordpress/sobre-nos">Conheça a TAFORT</a>

        </div>

    </div>

    <div class="bloco-inferior">

        <div class="zona-blocos">

            <nav class="navbar navbar-expand-lg navbar-light bloco-nav">

                <a class="logo" href="<?= home_url() ?>">

                    <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                        echo '<img class="logoArea" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                    } else {
                        echo '<h1 class="logoArea">' . get_bloginfo('name') . '</h1>';
                    }
                    ?>

                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item">
                                <a class="btn-header" href="<?php echo home_url('/'); ?>">
                                    Home
                                </a>

                            </li>

                            <li class="nav-item dropdown">

                                <a class="dropdown-toggle btn-header" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Produtos
                                </a>

                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'menu-principal',
                                        'container'      => 'ul',
                                        'container_class'=> 'collapse navbar-collapse',
                                        'container_id'   => 'navbarTogglerDemo01',
                                        'menu_class'     => 'dropdown-menu nav-produtos',
                                        'li_class'  => 'your-class-name1 your-class-name-2',
                                        'walker'         => new Bootstrap_Nav_Walker(),
                                    )
                                );
                                ?>
                            </li>

                            <li class="nav-item">
                                <a class="btn-header" href="<?php echo home_url('/fale-conosco'); ?>">
                                    SAC
                                </a>
                            </li>


                        </ul>

                    </div>
            </nav>

            <div class="bloco-pesquisa">

                <form class="form-pesquisa" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">

                    <input type="text" placeholder="Pesquisar" name="s" value="<?= $pesquisa ?>">

                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>

                </form>

            </div>

        </div>

    </div>

</header>

<main>


