<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title><?php wp_title();?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <script src="../wp-content/themes/lftech/js/header-menu.js"></script>
    <script src="wp-content/themes/lftech/js/header-menu.js"></script>
    <script src="../wp-content/themes/lftech/js/index.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <?php wp_head();?>

</head>
<body>

<!-- header id="header">

    <img id="iconBars" onclick="controleMenu()" class="bars-menu" src="<?php echo get_template_directory_uri(); ?>/assets/icons/bars.svg" width="15px" alt="Bars Icon">

    <img id="iconX" onclick="controleMenu()" class="bars-menu" src="<?php echo get_template_directory_uri(); ?>/assets/icons/bars.svg" width="15px" alt="Bars Icon">

    <div id="cabecalho">

        <a class="logo" href="<?= home_url() ?>">  <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
                echo '<img class="logoArea" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
            } else {
                echo '<h1 class="logoArea">' . get_bloginfo('name') . '</h1>';
            }
            ?></a>

        <?=
        wp_nav_menu(
            array( 'theme_location'=>'menu-principal',
            )
        ); ?>

        <div class="rodape">

            <?= date('Y') ?>

            &copy;. Todos os direitos reservados.

        </div>

    </div>

</header -->

<header>

    <div class="bloco">

        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                <a class="logo" href="<?= home_url() ?>">  <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                        echo '<img class="logoArea" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                    } else {
                        echo '<h1 class="logoArea">' . get_bloginfo('name') . '</h1>';
                    }
                    ?>
                </a>

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-principal',
                        'container'      => 'ul',
                        'container_class'=> 'collapse navbar-collapse',
                        'container_id'   => 'navbarTogglerDemo01',
                        'menu_class'     => 'navbar-nav mr-auto mt-2 mt-lg-0',
                        'walker'         => new Bootstrap_Nav_Walker(),
                    )
                );
                ?>

            </div>
        </nav>

    </div>

</header>

<main>


