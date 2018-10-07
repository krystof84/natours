<footer class="footer">
        <div class="footer__logo-box">

            <picture class="footer__logo">
                <source srcset="img/logo-green-small-1x.png 1x, img/logo-green-small-2x.png 2x" media="(max-width: 37.5rem)">
                <img srcset="img/logo-green-1x.png 1x, img/logo-green-2x.png 2x" alt="Full logo" class="footer__logo" src="img/logo-green-2x.png">    
            </picture>
        </div>
        <div class="row">
            <div class="col-1-of-2">
                <div class="footer__navigation">
                    <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'footer',
                            'menu_class'        => 'footer__list',
                            'container'         => '',
                            'depth'             => 1            
                        ));
                    ?>
                </div>
            </div>
            <div class="col-1-of-2">
                <p class="footer__copyright">Bulit by <a href="#" class="footer__link">Krzysztof Czajka</a> designed by <a href="#" class="footer__link">Jonas Schmedtmann</a>. Copyright &copy; 2018. </p>
            </div>
        </div>   
    </footer>
    <?php wp_footer(); ?>   
</body>
</html>
