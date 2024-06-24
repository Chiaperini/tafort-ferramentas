<?php

/* template name: Fale Conosco */

get_header();

?>

<div class="fale-conosco">

    <div class="cabecalho">
        <h1 class="titulo">Fale Conosco</h1>
        <p class="aviso">Preencha todos os campos.</p>
        <div class="linha"></div>
    </div>

    <div class="bloco-formulario">

        <?= the_content() ?>

    </div>


</div>


<?php get_footer(); ?>