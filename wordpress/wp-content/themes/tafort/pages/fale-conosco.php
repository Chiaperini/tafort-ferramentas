<?php

/* template name: Fale Conosco */

get_header();

?>

<div class="fale-conosco">

    <div class="cabecario">
        <h1 class="titulo">Fale Conosco</h1>
        <p class="aviso">Preencha todos os campos.</p>
        <div class="linha"></div>
    </div>

    <div class="bloco-formulario">

        <!--

        Correção: Colocar o Shortcode para ser trocado pela página de fale-conosco no Wordpress

        Código Antigo

        <php echo do_shortcode('[contact-form-7 id="411727c" title="Contact form 1"]'); ?>

        -->

        <!--

        Código Novo

         Colocar o Shortcode diretamente ná página.

         -->

        <?= the_content() ?>

    </div>


</div>


<?php get_footer(); ?>