<?php

/* template name: Home */

get_header();

$fundo = get_field('imagem') ;

?>

<div class="home">

    <div class="textos">

        <div class="conteudo">

            <h2>Precisando desenvolver um projeto?</h2>

            <h1>Olá meu nome é Luciel!!</h1>

            <h4>Desenvolvedor Web</h4>

            <p>
                Bem-vindo ao mundo da inovação digital, onde as possibilidades são tão vastas quanto a imaginação!
                Se você está à procura de um desenvolvedor web que não apenas compreende a linguagem do código,
                mas que também respira vida e criatividade nos pixels, você está no lugar certo.
            </p>

            <p>
                Sou Luciel, um apaixonado desenvolvedor web, e minha missão é criar experiências online que transcendem as expectativas.
                Trabalho incansavelmente para transformar conceitos abstratos em interfaces intuitivas, navegáveis e visualmente deslumbrantes.
            </p>

            <a href="resumo" class="btn btnSimples">

                Venha conhecer o meu trabalho

            </a>

        </div>

    </div>

    <div class="imagem" style="background-image: url(<?= $fundo ?>)">


    </div>

</div>

<?php get_footer(); ?>
