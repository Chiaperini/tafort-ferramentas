<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header();

$queried_object = get_queried_object();
$page_slug = '';

if (isset($queried_object->slug)) {
    $page_slug = $queried_object->slug;
} elseif (isset($queried_object->post_name)) {
    $page_slug = $queried_object->post_name;
}

$pageslug = str_replace("-", " ", $page_slug);
?>


<div class="categoria">

	<div class="page-name">
		<h4> Exibindo</h4><h4 style="color: #217247; padding-left: 10px; text-transform: capitalize; font-weight: bold;" ><?= $pageslug ?></h4>
	</div>

	<div class="blocos">
		<div class="bloco-esq">
			<div class="filtros">
				<div class="filtro">
					<?php echo do_shortcode('[br_filter_single filter_id=896]'); ?>
				</div>
				<div class="filtro">
					<?php echo do_shortcode('[br_filter_single filter_id=105]'); ?>
				</div>
				<div class="filtro">
					<?php echo do_shortcode('[br_filter_single filter_id=179]'); ?>
				</div>
				<div class="filtro">
					<?php echo do_shortcode('[br_filter_single filter_id=895]'); ?>
				</div>

				
			</div>
		</div>
		<div class="bloco-dir">
		<ul class="lista-resultados">

		<?php

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
	</div>

	</div>
</div>






<?php get_footer(); ?>
