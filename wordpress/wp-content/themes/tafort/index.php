<?php
/* Template Name: Portfólio */
get_header();

$fundo = get_field('imagem');
$pesquisa = $_GET['s']
?>




<div class="index-page">

	<div class="page-name">
         <h4> Exibindo</h4><h4 class="h4-verde"><?= $pesquisa ?></h4>
	</div>  

    <div class="bloco-resultados">

        <ul class="lista-resultados">

            <?php
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

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>

                    <li class="resultado">

                        <a href="<?= the_permalink(); ?>">

                            <img class="thumbnail" src="<?= get_the_post_thumbnail_url(); ?> ">

                            <h2 class="nome-resultado"><?= the_title(); ?></h2>

                        </a>

                    </li>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo 'Nenhum resultado encontrado.';
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
