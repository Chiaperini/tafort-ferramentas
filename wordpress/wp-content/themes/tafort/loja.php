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
					<?php echo do_shortcode("[woof  sid='generator_66c3276eb74b1' autohide='0' autosubmit='1' is_ajax='1' ajax_redraw='1' start_filtering_btn='0' btn_position='b' dynamic_recount='-1' hide_terms_count_txt='0' mobile_mode='0' ]"); ?>
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