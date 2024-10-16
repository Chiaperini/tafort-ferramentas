<?php

/* template name: Sobre Nós */

get_header();

$img_sobre_1 = get_field('img_sobre_1');

?>

    <div class="sobre-mim">
        
        <div class="cabecalho">
            <h1>Conheça nossa Empresa</h1>
            <p>A Tafort está presente no mercado de ferramentas visando sempre garantir a satisfação do cliente.</p>
        </div>

        <img loading="lazy" src="<?= $img_sobre_1 ?>" alt="<?= bloginfo() . '-' . the_title(); ?>"   title="<?= the_title(); ?>">
        
        <div class="textos">
            <div class="conteudo">

                <h2 class="alto">Missão</h2>

                <p class="texto">
                    Sempre em busca do aperfeiçoamento contínuo, sistêmico e progressivo da qualidade de nossos produtos e serviços que superem as expectativas de nossos clientes, fornecedores e colaboradores.
                </p>

            </div>
            <div class="conteudo">

                <h2 class="alto">Visão</h2>

                <p class="texto">
                    Ser uma das principais empresas brasileiras do segmento de máquinas e ferramentas de uso doméstico e industrial fornecendo, produtos e serviços reconhecidos pela qualidade, confiabilidade e comprometimento com seus clientes.
                </p>

            </div>
            <div class="conteudo">

                <h2 class="alto">Valores</h2>

                <ul class="valores">
                    <li>Lideranças Interativas</li>
                    <li>Trabalho em Equipe</li>
                    <li>Proatividade</li>
                    <li>Qualidade</li>
                    <li>Ética e Respeito</li>
                </ul>

            </div>
        </div>
    
    </div>

<?php get_footer(); ?>


