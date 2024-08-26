<?php
get_header();
$categoria_slug = isset($_GET['categoria']) ? sanitize_text_field($_GET['categoria']) : get_queried_object()->slug;

// Obtém a página atual
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'product',
    'posts_per_page' => 12,
    'paged' => $paged, // Adiciona paginação
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => $categoria_slug,
        ),
    ),
);

$query = new WP_Query($args);
$products = $query->posts;

$has_attributes = false;

foreach ($products as $product) {
    $product_obj = wc_get_product($product->ID);
    if ($product_obj->get_attributes()) {
        $has_attributes = true;
        break;
    }
}
?>

<div class="categoria">

    <div class="page-name">
        <h4> Exibindo</h4>
        <h4 class="h4-verde"><?php woocommerce_page_title(); ?></h4>
    </div>
    <div class="blocos">
        <div class="bloco-filtro <?php echo $has_attributes ? 'filtro-visivel' : 'filtro-oculto'; ?>">

            <?php if ($has_attributes) { ?>
                <form method="GET" class="filtro" action="" onsubmit="removeEmptyInputs()">

                    <input type="hidden" name="categoria" value="<?= esc_attr($categoria_slug); ?>">

                    <h4>Filtrar Produtos</h4>

                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field'    => 'slug',
                                'terms'    => $categoria_slug,
                            ),
                        ),
                    );

                    if (isset($_GET['attribute']) && !empty($_GET['attribute'])) {
                        $tax_query = array('relation' => 'AND');
                        foreach ($_GET['attribute'] as $taxonomy => $terms) {
                            if (!empty($terms)) {
                                $tax_query[] = array(
                                    'taxonomy' => sanitize_text_field($taxonomy),
                                    'field'    => 'slug',
                                    'terms'    => array_map('sanitize_text_field', $terms),
                                );
                            }
                        }
                        $args['tax_query'][] = $tax_query;
                    }

                    $query = new WP_Query($args);
                    $products = $query->posts;

                    $relevant_attributes = array();
                    foreach ($products as $product) {
                        $product_obj = wc_get_product($product->ID);
                        $product_attributes = $product_obj->get_attributes();
                        foreach ($product_attributes as $taxonomy => $terms) {
                            if (!array_key_exists($taxonomy, $relevant_attributes)) {
                                $relevant_attributes[$taxonomy] = get_terms($taxonomy);
                            }
                        }
                    }

                    foreach ($relevant_attributes as $taxonomy => $terms) {
                        if (!empty($terms) && !is_wp_error($terms)) {
                            echo '<div class="grupo">';
                            echo '<span class="label">' . wc_attribute_label($taxonomy) . '</span>';
                            echo '<select name="attribute[' . $taxonomy . '][]">';
                            echo '<option value="">' . wc_attribute_label($taxonomy) . '</option>';

                            foreach ($terms as $term) {
                                echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
                            }

                            echo '</select>';
                            echo '</div>';
                        }
                    }
                    ?>
                    <div class="botoes">
                        <button type="submit" class="btn-filtro">Aplicar</button>
                        <button type="button" class="btn-clear" onclick="resetFilters()">Limpar</button>
                    </div>

                </form>
            <?php } ?>
        </div>

        <div class="bloco-produtos">
            <ul class="lista-produtos">

                <?php
                if (!empty($products)) {
                    foreach ($products as $product) {
                        $product_obj = wc_get_product($product->ID); ?>

                        <li>
                            <a class="produto" href="<?= esc_url($product_obj->get_permalink()); ?>">
                                <img class="thumbnail" src="<?= esc_url(get_the_post_thumbnail_url($product_obj->get_id())); ?>" alt="<?= esc_attr($product_obj->get_name()); ?>">
                                <h3><?= esc_html($product_obj->get_name()); ?></h3>
                            </a>
                        </li>

                    <?php }
                } else {
                    echo '<li>Nenhum produto encontrado.</li>';
                }
                ?>

            </ul>
            <div class="paginacao">
                <?php
                echo paginate_links(array(
                    'total' => $query->max_num_pages,
                    'current' => $paged,
                    'format' => '?paged=%#%',
                    'prev_text' => __('<'),
                    'next_text' => __('>'),
                ));
                ?>
            </div>
        </div>
    </div>

</div>

<script>
    function resetFilters() {
        const url = new URL(window.location.href);
        url.search = '?categoria=<?= esc_attr($categoria_slug); ?>';
        window.location.href = url.href;
    }

    function removeEmptyInputs() {
        const inputs = document.querySelectorAll('.filtro select, .filtro input[type="text"], .filtro input[type="checkbox"]');
        inputs.forEach(input => {
            if (!input.value) {
                input.name = '';
            }
        });
    }
</script>

<?php get_footer(); ?>
