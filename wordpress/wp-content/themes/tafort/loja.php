<?php

/* template name: Loja */

get_header();

$fundo = get_field('imagem') ;
?>

<div class="loja">


    <div class="page-name">

    </div>
    <div class="blocos">
        <div class="bloco-esq">
			<div class="filtros">
			<div class="filtro">
					<?php echo do_shortcode('[br_filter_single filter_id=981]'); ?>
				</div>
				<div class="filtro">
					<?php echo do_shortcode('[br_filter_single filter_id=1457]'); ?>
				</div>
				<div class="filtro">
					<?php echo do_shortcode('[br_filter_single filter_id=1456]'); ?>
				</div>
                <div class="filtro">
					<?php echo do_shortcode('[br_filter_single filter_id=1455]'); ?>
				</div>
				<div class="filtro">
					<?php echo do_shortcode('[br_filter_single filter_id=1454]'); ?>
				</div>
				
			</div>
		</div>
        <div class="bloco-dir">
            <ul class="lista-resultados">
                <?php echo do_shortcode('[products limit="12" colums="3" paginate="true"]'); ?>
            </ul>
        </div>
    </div>




</div>


<?php get_footer(); ?>