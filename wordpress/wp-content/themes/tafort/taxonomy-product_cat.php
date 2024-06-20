<?php

get_header();

/* template name: Categorias */

/**
 *
 * Correções:
 *
 * Arquivo estava utilizando as configurações do Plugin
 *
 * Slug capturado de uma forme muito complexa
 *
 * defined( 'ABSPATH' ) || exit;
 *
 * $queried_object = get_queried_object();
 * $page_slug = '';
 *
 * if (isset($queried_object->slug)) {
 * $page_slug = $queried_object->slug;
 * } elseif (isset($queried_object->post_name)) {
 * $page_slug = $queried_object->post_name;
 * }
 *
 * $categoria = str_replace("-", " ", $page_slug);
 *
 */

 $categoria = str_replace("-", " ", get_page_uri());

?>

<div class="categoria">

    <!-- Correções:

    Nunca utilizar Estilo no HTML

    <h4 style="color: #217247; padding-left: 10px; text-transform: capitalize; font-weight: bold;" ><= $categoria ?></h4>

    -->

    <div class="page-name">
        <h4> Exibindo</h4>
        <h4 style="color: #217247; padding-left: 10px; text-transform: capitalize; font-weight: bold;" ><?= $categoria ?></h4>
    </div>

    <div class="blocos">

        <div class="bloco-filtro">

            <div class="filtros">

                <?= the_content() ?>

            </div>

        </div>

        <div class="bloco-produtos">

            <!--

            Correções: Produtos sendo chamados utilizando o Layout do Plugin, desta forma
            perderá o código, caso o plugin atualize

           <ul class="lista-resultados">

               <php

               if ( woocommerce_product_loop() )
               {

                   /**
                    * Hook: woocommerce_before_shop_loop.
                    *
                    * @hooked woocommerce_output_all_notices - 10
                    * @hooked woocommerce_result_count - 20
                    * @hooked woocommerce_catalog_ordering - 30
                    */



                   do_action( 'woocommerce_before_shop_loop' );

                   woocommerce_product_loop_start();

                   if ( wc_get_loop_prop( 'total' ) ) {
                       while ( have_posts() ) {

                           the_post();

                           /**
                            * Hook: woocommerce_shop_loop.
                            */

                           do_action( 'woocommerce_shop_loop' );

                           wc_get_template_part( 'content', 'product' );
                       }
                   }

                   woocommerce_product_loop_end();

                   /**
                    * Hook: woocommerce_after_shop_loop.
                    *
                    * @hooked woocommerce_pagination - 12
                    */

                   do_action( 'woocommerce_after_shop_loop' );

               } else {

                   /**
                    * Hook: woocommerce_no_products_found.
                    *
                    * @hooked wc_no_products_found - 12
                    */

                   do_action( 'woocommerce_no_products_found' );
               }
               

               ?>

               

           </ul>
           -->

            <ul class="produtos">
                <?php
                $args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => 10,
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
