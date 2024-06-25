<?php
/* template name: Categorias */

get_header();

?>

<div class="categorias">

    <div class="lista-categorias">

        <?php

        $categoriasArray = array(
            'taxonomy'   => 'product_cat',
            'orderby'    => 'name',
            'hide_empty' => false, // Change to true if you want to hide empty categories
        );

        $categorias = get_terms($categoriasArray);

            foreach( $categorias as $categoria ) {

                $thumbnail_id = get_term_meta($categoria->term_id, 'thumbnail_id', true);

                $image_url = wp_get_attachment_url($thumbnail_id);

                if($categoria -> name != "slide"){


                ?>

                <a class="categoria" target="_blank" href="<?= get_term_link($categoria) ?>" style="background-image: url(<?= $image_url ?>)">

                    <span class="nome-categoria"><?= $categoria -> name ?></span>

                </a>

            <?php } }

        ?>

    </div>

</div>

<?php

get_footer();

?>
