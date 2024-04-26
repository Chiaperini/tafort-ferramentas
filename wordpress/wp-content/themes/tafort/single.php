<?php get_header();

$idPost = get_the_ID();
$idAutor = get_post_field( 'post_author', $idPost );
$autorNome = get_the_author_meta( 'display_name', $idAutor );

$tituloPost = get_the_title();
$dataPost = get_the_date("d F,Y");

$conteudo = get_the_content();

$fundo = get_the_post_thumbnail_url() ;


?>
<div class="featuredImage " style="background-image: url('<?= $fundo ?>')" >

    <div class="destaque">

        <div class="texto">

            <h1>
                <?php

                if (is_front_page()){

                    $titulo = the_title();

                }else{
                    $titulo = "";

                }
                ?>

            </h1>

        </div>


    </div>



</div>

<div class="postPage">

    <div class="container">

        <div class="singlePost">

            <img src="<?= the_post_thumbnail_url() ?>">

            <div class="textos">

                <span class="category"><?= the_category() ?></span>

                <div class="dataTag">

                    <span class="data fa fa-calendar"> <?= $dataPost ?></span>

                    <span class="tag fa fa-tag"> <?= the_tags() ?></span>

                </div>

                <h1 class="title"><?= $tituloPost ?></h1>

                <span class="autor">Autor: <?= $autorNome ?></span>

                <div class="conteudo"><?= $conteudo ?></div>

            </div>


        </div>

    </div>

</div>

<?php get_footer();?>
