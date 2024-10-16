<?php
/* template name: Home */

get_header();

$banner_img_1 = get_field('banner_img_1');
$banner_img_2 = get_field('banner_img_2');
$banner_img_3 = get_field('banner_img_3');

$banner_mobile_1 = get_field('banner_mobile_1');
$banner_mobile_2 = get_field('banner_mobile_2');
$banner_mobile_3 = get_field('banner_mobile_3');

$acesso_img_1 = get_field('acesso_img_1');
$acesso_img_2 = get_field('acesso_img_2');
$acesso_img_3 = get_field('acesso_img_3');

$acesso_titulo_1 = get_field('titulo_1');
$acesso_titulo_2 = get_field('titulo_2');
$acesso_titulo_3 = get_field('titulo_3');

$acesso_url_1 = get_field('url_acesso_1');
$acesso_url_2 = get_field('url_acesso_2');
$acesso_url_3 = get_field('url_acesso_3');

?>

<div class="home">

    <div id="aviso" class="aviso">
        <div class="pop-up">
            <div class="superior">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M224 0c-17.7 0-32 14.3-32 32l0 19.2C119 66 64 130.6 64 208l0 18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416l384 0c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8l0-18.8c0-77.4-55-142-128-156.8L256 32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3l-64 0-64 0c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"/>
                </svg>
                <h2>IMPORTANTE</h2>
            </div>
            <div class="inferior">
                <p>Este site é uma aplicação de teste, onde a função é aplicar novas melhorias sem interferir no ambiente real. As informações técnicas sobre os produtos devem ser sempre consultadas no site <a target="_blank" href="https://www.chiaperini.com.br/categoria/tafort-ferramentas/"> Chiaperini</a>.</p>
            </div>
            <button class="pop-btn" onclick="hide_aviso()">OK</button>
        </div>
    </div>

    <div class="banner banner-pc">
        <div id="PCcarouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#PCcarouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#PCcarouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#PCcarouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img loading="lazy" class="d-block w-100" src="<?= $banner_img_1 ?>" alt="<?= bloginfo() . '-' . the_title(); ?>"   title="<?= the_title(); ?>">
                </div>
                <div class="carousel-item">
                    <img loading="lazy" class="d-block w-100" src="<?= $banner_img_2 ?>" alt="<?= bloginfo() . '-' . the_title(); ?>"   title="<?= the_title(); ?>">
                </div>
                <div class="carousel-item">
                    <img loading="lazy" class="d-block w-100" src="<?= $banner_img_3 ?>" alt="<?= bloginfo() . '-' . the_title(); ?>"   title="<?= the_title(); ?>">
                </div>
            </div>
            <a class="carousel-control-prev" href="#PCcarouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            </a>
            <a class="carousel-control-next" href="#PCcarouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>

            </a>
        </div>
    </div>

    <div class="banner banner-mobile">
        <div id="MOBcarouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#MOBcarouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#MOBcarouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#MOBcarouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img loading="lazy" class="d-block w-100" src="<?= $banner_mobile_1 ?>" alt="<?= bloginfo() . '-' . the_title(); ?>"   title="<?= the_title(); ?>">
                </div>
                <div class="carousel-item">
                    <img loading="lazy" class="d-block w-100" src="<?= $banner_mobile_2 ?>" alt="<?= bloginfo() . '-' . the_title(); ?>"   title="<?= the_title(); ?>">
                </div>
                <div class="carousel-item">
                    <img loading="lazy" class="d-block w-100" src="<?= $banner_mobile_3 ?>" alt="<?= bloginfo() . '-' . the_title(); ?>"   title="<?= the_title(); ?>">
                </div>
            </div>
            <a class="carousel-control-prev" href="#MOBcarouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#MOBcarouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>

    <div class="acesso-rapido">
        <div class="cabecalho">
            <h1>ACESSO RÁPIDO</h1>
        </div>
        <div class="bloco-acesso">
            <a class="acesso" href="<?= $acesso_url_1 ?>" aria-label="Acesso a categoria eletrica">
                <div class="capa" style="background-image: url(<?= $acesso_img_1 ?>)"></div>
                <h2>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M349.4 44.6c5.9-13.7 1.5-29.7-10.6-38.5s-28.6-8-39.9 1.8l-256 224c-10 8.8-13.6 22.9-8.9 35.3S50.7 288 64 288H175.5L98.6 467.4c-5.9 13.7-1.5 29.7 10.6 38.5s28.6 8 39.9-1.8l256-224c10-8.8 13.6-22.9 8.9-35.3s-16.6-20.7-30-20.7H272.5L349.4 44.6z"/>
                    </svg>
                    <?= $acesso_titulo_1 ?>
                    
                </h2>
            </a>
            <a class="acesso" href="<?= $acesso_url_2 ?>" aria-label="Acesso a categoria jardim e mangueiras">
                <div class="capa" style="background-image: url(<?= $acesso_img_2 ?>)"></div>
                <h2>
                    
                    <svg fill="#000000" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">    
                        <path d="M477.867,384h-4.745c2.935-5.043,4.745-10.82,4.745-17.067c0-18.825-15.309-34.133-34.133-34.133h-4.745 c2.935-5.043,4.745-10.82,4.745-17.067c0-18.825-15.309-34.133-34.133-34.133h-4.745c2.935-5.043,4.745-10.82,4.745-17.067 c0-18.825-15.309-34.133-34.133-34.133H181.393c-22.451,0-42.01-16.41-44.535-37.35c-1.468-12.177,2.193-23.97,10.308-33.203 c8.158-9.276,19.857-14.669,32.034-14.78h8.533c0,4.71,3.823,8.533,8.533,8.533h25.6c0,4.71,3.823,8.533,8.533,8.533h34.133 c4.71,0,8.533-3.823,8.533-8.533v-1.135l112.145-16.017c4.198-0.606,7.322-4.198,7.322-8.448V93.867 c0-4.25-3.123-7.842-7.322-8.448L273.067,69.402v-1.135c0-4.71-3.823-8.533-8.533-8.533H230.4c-4.71,0-8.533,3.823-8.533,8.533 h-25.6c-4.71,0-8.533,3.823-8.533,8.533H179.2c-31.036,0-60.877,13.175-81.886,36.156c-21.274,23.287-31.428,53.47-28.587,84.992 c3.174,35.243,23.859,65.715,53.239,83.652H102.4c-18.825,0-34.133,15.309-34.133,34.133c0,6.246,1.809,12.023,4.745,17.067 h-4.745c-18.825,0-34.133,15.309-34.133,34.133c0,6.246,1.809,12.023,4.745,17.067h-5.231C15.095,384,0,399.094,0,417.646v0.973 c0,18.551,15.095,33.647,33.647,33.647h444.22c18.825,0,34.133-15.309,34.133-34.133C512,399.308,496.691,384,477.867,384z M238.933,76.8H256v68.267h-17.067V76.8z M204.8,85.333h17.067v51.2H204.8V85.333z M102.4,298.667h80.23h192.836H409.6 c9.412,0,17.067,7.654,17.067,17.067c0,9.413-7.655,17.066-17.067,17.066H102.4c-9.412,0-17.067-7.654-17.067-17.067 C85.333,306.32,92.988,298.667,102.4,298.667z M477.867,435.2H33.647c-9.139,0-16.58-7.441-16.58-16.58v-0.973 c0-9.139,7.441-16.58,16.58-16.58h34.62h375.467h34.133c9.412,0,17.067,7.654,17.067,17.067 C494.933,427.545,487.279,435.2,477.867,435.2z"></path>
                    </svg>
                    <?= $acesso_titulo_2 ?>
            
                </h2>
            </a>
            <a class="acesso" href="<?= $acesso_url_3 ?>" aria-label="Acesso a categoria ferramentas">
                <div class="capa" style="background-image: url(<?= $acesso_img_3 ?>)"></div>
                <h2>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/>
                    </svg>
                    <?= $acesso_titulo_3 ?>
                    
                </h2>
            </a>
        </div>
    </div>

    <div class="bloco-produtos">

        <div class="cabecalho">
            <h1>NOSSOS PRODUTOS</h1>
        </div>

        <button class="btn-prox"> < </button>

        <ul class="slide-produtos">
            <?php
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => 10,
                'product_cat'    => 'uncategorized',
            );

            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post();

                global $product;
                ?>

                <li>
                    <a class="produto" href="<?php the_permalink(); ?>">
                        <img loading="lazy" class="thumbnail" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?= bloginfo() . '-' . the_title(); ?>"   title="<?= the_title(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                </li>

            <?php endwhile; wp_reset_query(); ?>
        </ul>

        <button class="btn-ant"> > </button>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.slide-produtos').slick({
                    slidesToShow: 3,    
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    arrows: true,
                    dots: true,
                    prevArrow: $('.btn-prox'),
                    nextArrow: $('.btn-ant'),
                });
            });
        </script>

    </div>
</div>
<script>
    var aviso = document.getElementById("aviso");

    function hide_aviso() {

            aviso.style.display = "none";
        }
</script>

<?php get_footer(); ?>