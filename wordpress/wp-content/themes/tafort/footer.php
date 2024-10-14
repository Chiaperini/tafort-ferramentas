</main>

<footer>

    <div class="rodape">

        <div class="blocos">

            <div class="bloco">

                <a class="logo" href="<?= home_url() ?>">

                    <img class="logoArea" src="http://marketing-teste-site.tafort.com.br/wp-content/uploads/2024/10/logo-TAFORT-white.webp" alt="<?= bloginfo() . '-' . the_title(); ?>"   title="<?= the_title(); ?>"   title="<?= the_title(); ?>">

                </a>

            </div>

            <div class="bloco">

            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-footer',
                        'container'      => 'nav',
                        'container_class'=> 'navbar navbar-expand-lg navbar-light',
                        'container_id'   => 'navbarTogglerDemo01',
                        'menu_class'     => 'navbar-nav',
                        'walker'         => new Custom_Bootstrap_Nav_Walker(),
                        'items_wrap'     => '
                        <div class="navbar-collapse" id="navbarNavDropdown" style="align-items: center;">
                            <ul id="%1$s" class="%2$s">%3$s</ul> 
                        </div>',
                    )
                );
            ?>


            </div>

            <div class="bloco">

                <ul class="redes-sociais">


                <li class="icon"><a href="" alt="logo facebook" aria-label="Encaminha para o facebook"><i class="fa fa-facebook"></i></a></li>

                <li class="icon"><a href="" alt="logo instagram" aria-label="Encaminha para o instagram"><i class="fa fa-instagram"></i></a></li>

                <li class="icon"><a href="" alt="logo youtube" aria-label="Encaminha para o youtube"><i class="fa-brands fa-youtube"></i></a></li>

                <li class="icon"><a href="" alt="logo linkedin" aria-label="Encaminha para o linkedin"><i class="fa fa-linkedin"></i></a></li>

                </ul>
                
                <div class="contatos">
                    
                    <span class="contato"><i class="fa fa-phone"></i><p> (16) 3954-9400</p></span>

                    <span class="contato"><i class="fa fa-envelope"></i><p> tafort@tafort.com.br</p></span>

                </div>

            </div>

        </div>

        <div class="copy">

           <span>&copy <?= date(format: "Y")?>. Todos os direitos reservados.</span>

        </div>

    </div>

</footer>

<script 
    type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js">
</script>

</body>
</html>