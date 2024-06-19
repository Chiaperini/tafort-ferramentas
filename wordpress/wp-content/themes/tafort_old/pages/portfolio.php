<?php

/* template name: Portfóaalio */

get_header();

$fundo = get_field('imagem') ;

?>

<div class="portfolio">

    <div class="cabecalho">

        <h1>Seja bem vindo ao meu Portfólio</h1>

        <span>Aqui você encontra mais do que simples projetos, você encontra soluções que buscam facilitar o desenvolvimentos de suas ideias, que visam o ultrapassar o limite da conectividade.</span>

    </div>

    <div class="bloco_projetos">

        <div class="tabs_projetos">

            <nav class="nav nav-pills nav-fill">
                <a class="nav-link active" aria-current="page" href="#">Todos</a>
                <a class="nav-link" href="php">PHP</a>
                <a class="nav-link" href="#">Python</a>
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">JavaScript</a>
            </nav>



            <form role="search" class="pesquisa" method="get" id="searchform" action="<?php echo home_url('/portfolio/'); ?>">
                <input type="text" value="" name="s" id="s" placeholder="Pesquise pelo nome ou tecnologia que deseja encontrar o projeto">
                <input type="submit" id="searchsubmit" value="Buscar">
            </form>


        </div>

        <ul class="lista_projetos">


            <?php

            if (isset($_GET['s'])) {

                $search_query = sanitize_text_field($_GET['s']);

                $args = array(
                    'post_type' => 'projetos',
                    'posts_per_page' => -1,
                );

                // If search query is not empty, add the search parameter
                if (!empty($search_query)) {
                    $args['s'] = $search_query;
                }

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post(); ?>

                        <li class="projeto">

                            <div class="conteudo">

                                <img src="<?= get_the_post_thumbnail_url(); ?> ">

                            </div>

                            <div class="acoes">

                                <h2 class="nomeProjeto"><?=the_title(); ?></h2>

                                <div class="blocoTags">

                                    <h3>Tecnologias Utlizadas</h3>

                                    <ul class="tags">

                                        <?php

                                        $posttags = get_the_tags();
                                        if ($posttags) {
                                            foreach($posttags as $tag) { ?>

                                                <li class="tag"> <?= $tag->name ?> </li>

                                            <?php }
                                        }

                                        ?>

                                    </ul>

                                </div>



                                <div class="botoes">

                                    <a href="<?= get_permalink()?>">Ler Mais</a>

                                    <a href="<?=get_field('url_projeto');?>" target="_blank">Demo Projeto</a>

                                </div>


                            </div>

                        </li>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo 'Nenhum projeto encontrado.';
                endif;

            }
            ?>


        </ul>


    </div>

</div>



<?php get_footer(); ?>
