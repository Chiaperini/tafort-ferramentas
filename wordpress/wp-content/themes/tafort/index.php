<?php
/* Template Name: Portfólio */
get_header();

$fundo = get_field('imagem');
$pesquisa = $_GET['s'];

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'product',
    'posts_per_page' => -1, // Display all projects
    'paged' => $paged,
    'tax_query' => array(),
);

if (isset($_GET['s']) && !empty($_GET['s'])) {
    $args['s'] = sanitize_text_field($_GET['s']);
}

$query = new WP_Query($args);

?>

<div class="index-page">

	<div class="page-name">
        <?php if ($query->have_posts()): ?>
        
            <h4>Exibindo <spam class="h4-verde"><?= $pesquisa ?> </spam></h4>
        
        <?php else: ?>

            <h4 class="h4-verde">Erro de Pesquisa</h4>;
            <p>Nenhum produto encontrado.</p>
        <?php endif ?>
         
	</div>  

    <div class="bloco-resultados">

        <ul class="lista-resultados">
            <?php
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>

                    <li class="resultado">

                        <a href="<?= the_permalink(); ?>">

                            <img loading="lazy" class="thumbnail" src="<?= get_the_post_thumbnail_url(); ?> ">

                            <h2 class="nome-resultado"><?= the_title(); ?></h2>

                        </a>

                    </li>
                <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

        </ul>

    </div>

    <div class="paginacao">

        <?php
        // Display pagination links
        echo paginate_links(array(
            'total' => $query->max_num_pages,
            'current' => max(1, get_query_var('paged')),
            'format' => '?paged=%#%',
            'show_all' => false,
            'end_size' => 1,
            'mid_size' => 2,
            'prev_next' => true,
            'prev_text' => __('<span class="texto"> « Anterior </span>'),
            'next_text' => __('<span class="texto"> Próximo » </span>'),
        ));
        ?>

    </div>

</div>

<?php get_footer(); ?>
