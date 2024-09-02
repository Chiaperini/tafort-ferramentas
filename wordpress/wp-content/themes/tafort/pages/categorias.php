<?php
/* template name: Categorias */

get_header();

?>

<div class="categorias">

    <div class="lista-categorias">

    <?php

    $categorias_por_pagina = 24;

    $pagina_atual = max(1, get_query_var('paged'));

    $args = array(
        'taxonomy'   => 'product_cat',
        'orderby'    => 'name',
        'hide_empty' => true,
        'number'     => $categorias_por_pagina,
        'offset'     => ($pagina_atual - 1) * $categorias_por_pagina,
    );

    $categorias = get_terms($args);

    foreach ($categorias as $categoria) {
        $thumbnail_id = get_term_meta($categoria->term_id, 'thumbnail_id', true);
        $image_url = wp_get_attachment_url($thumbnail_id);

        if ($categoria->name != "slide") {
            ?>
            <a class="categoria" target="_blank" href="<?= get_term_link($categoria) ?>" style="background-image: url(<?= $image_url ?>)">
                <span class="nome-categoria"><?= $categoria->name ?></span>
            </a>
            <?php
        }
    }
    ?>

    </div>

    <div class="pagination">
    <?php

    $total_categorias = wp_count_terms(array(
        'taxonomy'   => 'product_cat',
        'hide_empty' => false,
    ));


    $paginas = paginate_links(array(
        'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
        'format'    => '?paged=%#%',
        'current'   => $pagina_atual,
        'total'     => ceil($total_categorias / $categorias_por_pagina),
        'prev_text' => __('<'),
        'next_text' => __('>'),
        'type'      => 'array'
    ));

    if ($paginas) {
        echo '<ul class="pagination">';
        foreach ($paginas as $pagina) {
            echo '<li>' . $pagina . '</li>';
        }
        echo '</ul>';
    }
    ?>
    </div>

</div>

<?php

get_footer();

?>
