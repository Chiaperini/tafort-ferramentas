</main>

<footer>

    <div class="rodape">

        <div class="blocos">

            <div class="bloco">

                <a class="logo" href="<?= home_url() ?>">

                    <img class="logoArea" src="http://localhost/tafort-ferramentas/wordpress/wp-content/uploads/2024/05/logo-TAFORT-white.png" >

                </a>

            </div>

            <div class="bloco">

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-principal',
                        'container'      => 'nav',
                        'container_class'=> 'navbar navbar-expand-lg navbar-light',
                        'container_id'   => 'navbarTogglerDemo01',
                        'menu_class'     => 'navbar-nav',
                        'walker'         => new Custom_Bootstrap_Nav_Walker(),
                        'items_wrap'     => '
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul id="%1$s" class="%2$s">%3$s</ul> 
                        </div>',
                    )
                );
                ?>

            </div>

            <div class="bloco">

                <ul class="redes-sociais">

                    <li class="icon"> <a href="">  <img src="http://localhost/tafort-ferramentas/wordpress/wp-content/uploads/2024/05/youtube-bg-white.png"> </a> </li>

                    <li class="icon"> <a href=""> <img src="http://localhost/tafort-ferramentas/wordpress/wp-content/uploads/2024/05/facebook-bg-white.png"> </a> </li>

                    <li class="icon"> <a href=""> <img src="http://localhost/tafort-ferramentas/wordpress/wp-content/uploads/2024/05/instagram-bg-white.png"> </a> </li>

                    <li class="icon"> <a href=""> <img src="http://localhost/tafort-ferramentas/wordpress/wp-content/uploads/2024/05/linkedin-bg-white.png"> </a> </li>

                </ul>
                
                <div class="contatos">
                    
                    <span class="contato"> <img src="http://localhost/tafort-ferramentas/wordpress/wp-content/uploads/2024/05/telefone-white.png"> <p> (16) 3954-9400 </p> </span>

                    <span class="contato"> <img src="http://localhost/tafort-ferramentas/wordpress/wp-content/uploads/2024/05/mail-white.png"> <p> tafort@tafort.com.br </p> </span>

                </div>

            </div>

        </div>

        <div class="copy">

           <span>&copy <?= date(format: "Y")?>. Todos os direitos reservados.</span>

        </div>

    </div>

</footer>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

</body>
</html>