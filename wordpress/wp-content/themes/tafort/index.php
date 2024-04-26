<?php
/* template name: Portfólio */
get_header();

$fundo = get_field('imagem');

?>

<div class="portfolio">

    <div class="cabecalho">

        <h1>Seja bem-vindo ao meu Portfólio</h1>

        <span>Aqui você encontra mais do que simples projetos, você encontra soluções que buscam facilitar o desenvolvimento de suas ideias, ultrapassando o limite da conectividade.</span>

    </div>

    <div class="bloco_projetos">

        <div class="tabs_projetos">

            <nav class="nav nav-pills nav-fill">

                <?php
                $tags = get_tags();

                if ($tags) {
                    foreach ($tags as $tag) { ?>

                        <a class="nav-link" aria-current="page" href="?tags=<?= $tag->name ?>" > <?= $tag->name ?></a>

                    <?php }
                } else {
                    echo 'Nenhuma caracterisca encontrada.';
                }
                ?>

            </nav>

            <form role="search" class="pesquisa" method="get" id="searchform" action="<?php echo home_url('/portfolio/'); ?>">
                <input type="text" value="" name="s" id="s" placeholder="Pesquise pelo nome ou tecnologia que deseja encontrar o projeto">
                <input type="submit" id="searchsubmit" value="Buscar">
            </form>

        </div>

        <ul class="lista_projetos">

            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'projeto',
                'posts_per_page' => 2, // Display 10 projects per page
                'paged' => $paged,
                'tax_query' => array(),
            );

            if (isset($_GET['s']) && !empty($_GET['s'])) {
                $args['s'] = sanitize_text_field($_GET['s']);
            }

            if (isset($_GET['tags']) && !empty($_GET['tags'])) {
                $args['tax_query'][] = array(
                    'taxonomy' => 'post_tag',
                    'field' => 'slug',
                    'terms' => sanitize_text_field($_GET['tags']),
                );
            }

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>

                    <li class="projeto">

                        <div class="conteudo">
                            <img src="<?= get_the_post_thumbnail_url(); ?> ">
                        </div>

                        <div class="acoes">
                            <h2 class="nomeProjeto"><?= the_title(); ?></h2>

                            <div class="blocoTags">
                                <h3>Tecnologias Utilizadas</h3>
                                <ul class="tags">

                                    <?php
                                    $posttags = get_the_tags();
                                    if ($posttags) {
                                        foreach ($posttags as $tag) { ?>
                                            <li class="tag"> <?= $tag->name ?> </li>
                                        <?php }
                                    }
                                    ?>

                                </ul>
                            </div>

                            <div class="botoes">
                                <a href="<?= get_permalink() ?>">Ler Mais</a>
                                <a href="<?= get_field('url_projeto'); ?>" target="_blank">Demo Projeto</a>
                            </div>

                        </div>

                    </li>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo 'Nenhum projeto encontrado.';
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
