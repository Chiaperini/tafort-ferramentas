<?php /* template name: Home */ 

get_header(); 

$letreiro_1 = get_field('letreiro_1');
$letreiro_2 = get_field('letreiro_2');

$modelo_1 = get_field('modelo_1');
$modelo_2 = get_field('modelo_2');
$modelo_3 = get_field('modelo_3');
$modelo_4 = get_field('modelo_4');

$social_1 = get_field('social_1');
$social_2 = get_field('social_2');
$social_3 = get_field('social_3');
$social_4 = get_field('social_4');
$social_5 = get_field('social_5');

?>
<main>
    <div class="home">

        <div class="apresentacao">
            <p>Na CraftCode, estamos comprometidos em criar experiências digitais únicas que impulsionam o crescimento do seu negócio. 
            Especialistas em desenvolvimento de sites e landing pages,
            combinamos tecnologia e design para entregar resultados eficientes e personalizados.
            Vamos levar sua presença online para o próximo nível.</p>
        </div>
        <div class="portifolio">
            <div class="titulo">
                <img src="<?= $letreiro_1?>" alt="modelos-png">
                <p>Dê uma olhada em nossos modelos !</p>
                <p>Lembrando que todos são estáticos e meramente ilustrativos.</p>
            </div>
            <div class="modelos">
                <a href="" class="modelo">
                    <img src="<?= $modelo_1?>" alt="modelo">
                    <p>Modelo Teste</p>
                </a>
                <a href="" class="modelo">
                    <img src="<?= $modelo_2 ?>" alt="modelo">
                    <p>Modelo Teste</p>
                </a>
                <a href="" class="modelo">
                    <img src="<?= $modelo_3 ?>" alt="modelo">
                    <p>Modelo Teste</p>
                </a>
                <a href="" class="modelo">
                    <img src="<?= $modelo_4 ?>" alt="modelo">
                    <p>Modelo Teste</p>
                </a>
            </div>
        </div>
        <div class="contato">
            <div class="titulo">
                <img src="<?= $letreiro_2?>" alt="contato-png">
                <p>Entre em contato e faça seu orçamento !
                <br>E nos siga nas redes sociais para receber dicas sobre desenvolvimento web !!</p>
            </div>
            <div class="mensagem">
                <div class="links">
                    <a href="" class="link">
                        <img src="<?= $social_2 ?>" alt="whatsapp">
                    </a>
                    <a href="" class="link">
                        <img src="<?= $social_4 ?>" alt="tiktok">
                    </a>
                    <a href="" class="link">
                        <img src="<?= $social_5 ?>" alt="instagram">
                    </a>
                </div>
                <div class="form">
                    
                </div>
            </div>
        </div>
        
    </div>
</main>
<?php get_footer(); ?>