<?php get_header();

$idPost = get_the_ID();
$idAutor = get_post_field('post_author', $idPost);
$autorNome = get_the_author_meta('display_name', $idAutor);
$tituloPost = get_the_title();
$dataPost = get_the_date("d F, Y");
$conteudo = get_the_content();
$imagemDestaque = get_the_post_thumbnail_url();
$tipoPost = get_post_type();
$shortDescription = get_the_excerpt();

if ($tipoPost == 'product') {

    $product = wc_get_product($idPost);
    $attachment_ids = $product->get_gallery_image_ids();
    $dados = wc_get_product_category_list($idPost);

    ?>

    <div class="produto">


        <div class="exposicao">
            <div class="imagens">
                <img class="img-principal" src="<?= esc_url($imagemDestaque) ?>" id="img-principal">
                <div class="galeria">
                    <?php foreach ($attachment_ids as $attachment_id) : 
                            $original_image_url = wp_get_attachment_url($attachment_id); ?>
                        <img class="img" src="<?= esc_url($original_image_url) ?>" onclick="changeMainImage('<?= esc_url($original_image_url) ?>')">
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="textos-principais">
                <h1><?= esc_html($tituloPost) ?></h1>
                <hr>
                <span class="descricao-curta"><?= esc_html($shortDescription) ?></span>

                <div class="dados">
                    <h4>Categorias:</h4>
                    <span><?= $dados ?></span>
                </div>
            </div>
        </div>

        <div class="descricao">
            <h2 class="titulo-destaque">CARACTERÍSTICAS DO PRODUTO</h2>
            <div class="conteudo">
                <h3>Descrição</h3>
                <?= wp_kses_post($conteudo) ?>
            </div>
        </div>

        <div class="produtos-relacionados">
            <h2 class="titulo-destaque">OUTROS PRODUTOS</h2>
            <div class="produtos">
                <?php
                $related_products = wc_get_related_products($idPost);
                foreach ($related_products as $related_product_id) {
                    $related_product = wc_get_product($related_product_id);
                    ?>
                    <div class="produto-relacionado">
                        <a href="<?= esc_url(get_permalink($related_product_id)) ?>">
                            <?= $related_product->get_image('thumbnail') ?>
                            <h3><?= esc_html($related_product->get_name()) ?></h3>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>

    <script>
        function changeMainImage(url) {
            document.getElementById('img-principal').src = url;
        }
    </script>

<?php } else { ?>

    <div class="featuredImage" style="background-image: url('<?= esc_url($imagemDestaque) ?>')">
        <div class="destaque">
            <div class="texto">
                <h1><?= is_front_page() ? esc_html($tituloPost) : '' ?></h1>
            </div>
        </div>
    </div>

    <div class="postPage">
        <div class="container">
            <div class="singlePost">
                <img src="<?= esc_url(get_the_post_thumbnail_url()) ?>">
                <div class="textos">
                    <span class="category"><?= the_category(', ') ?></span>
                    <div class="dataTag">
                        <span class="data fa fa-calendar"><?= esc_html($dataPost) ?></span>
                        <span class="tag fa fa-tag"><?= get_the_tag_list('', ', ') ?></span>
                    </div>
                    <h1 class="title"><?= esc_html($tituloPost) ?></h1>
                    <span class="autor">Autor: <?= esc_html($autorNome) ?></span>
                    <div class="conteudo"><?= wp_kses_post($conteudo) ?></div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>

<?php get_footer(); ?>
