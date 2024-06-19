<?php

/* template name: Home */

get_header();

$banner_img_1 = get_field('banner_img_1') ;
$banner_img_2 = get_field('banner_img_2') ;
$banner_img_3 = get_field('banner_img_3') ;

$acesso_img = get_field('capa_do_acesso') ;
$acesso_titulo = get_field('nome_do_campo') ;
$acesso_url = get_field('pagina_de_destino') ;

?>

<div class="home">

    <div class="banner">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?= $banner_img_1 ?>" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= $banner_img_2 ?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= $banner_img_3 ?>" alt="Third slide">
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>

    </div>

    <div class="acesso-rapido">

        <div class="cabecalho">

            <h1>ACESSO RÁPIDO</h1>

        </div>

        <div class="bloco-acesso">

            <a class="acesso" href="<?= $acesso_url ?>">

                <div class="capa" style="background-image: url(<?= $acesso_img ?>)"></div>

                <h2><?= $acesso_titulo ?></h2>

            </a>

            <a class="acesso" href="<?= $acesso_url ?>">

                <div class="capa" style="background-image: url(<?= $acesso_img ?>)"></div>

                <h2><?= $acesso_titulo ?></h2>

            </a>

            <a class="acesso" href="<?= $acesso_url ?>">

                <div class="capa" style="background-image: url(<?= $acesso_img ?>)"></div>

                <h2><?= $acesso_titulo ?></h2>

            </a>

        </div>

    </div>

    <div class="bloco-produtos">

        <div class="cabecalho">

            <h1>NOSSOS PRODUTOS</h1>

        </div>

        <ul class="lista-produtos">

            <?php
            // Get WooCommerce products
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => 10, // Adjust the number of products per page as needed
            );

            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post();

                global $product;

                ?>

                <li>

                    <a class="produto" href="<?= the_permalink(); ?>">

                        <img class="thumbnail" src="<?= get_the_post_thumbnail_url() ?>">

                        <h3><?= the_title(); ?></h3>

                    </a>

                </li>

            <?php
            endwhile;
            wp_reset_query();
            ?>
        </ul>

    </div>


</div>

<?php get_footer(); ?>
