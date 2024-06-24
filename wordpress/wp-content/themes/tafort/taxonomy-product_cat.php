<?php

get_header();

/* template name: Categorias */

 $categoria = str_replace("-", " ", get_page_uri());

?>

<div class="categoria">


    <div class="page-name">
        <h4> Exibindo</h4>
        <h4 class="h4-verde"><?= $categoria ?></h4>
    </div>

    <div class="blocos">

        <div class="bloco-filtro">

            <div class="filtros">

                <?= the_content() ?>

            </div>

        </div>

        <div class="bloco-produtos">

            <ul class="produtos">
                
              <?php
                $args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => 12,
                    'product_cat'    => $categoria,
                );

                $loop = new WP_Query($args);

                while ($loop->have_posts()) : $loop->the_post();

                    global $product;
              ?>

                    <li>
                        <a class="produto" href="<?php the_permalink(); ?>">
                            <img class="thumbnail" src="<?php echo get_the_post_thumbnail_url(); ?>">
                            <h3><?php the_title(); ?></h3>
                        </a>
                    </li>

                <?php endwhile; wp_reset_query(); ?>
            </ul>

        </div>

    </div>

</div>

<?php get_footer(); ?>
