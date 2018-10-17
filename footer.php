<footer class="footer">
        <div class="footer__logo-box">

            <picture class="footer__logo">
                <source srcset="<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('footer-logo-mobile'))); ?>" media="(max-width: 37.5rem)">
                <img srcset="<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('footer-logo-desktop'))); ?>" alt="Full logo" class="footer__logo" src="<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('footer-logo-desktop'))); ?>">    
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
                <p class="footer__copyright">
                    <?php echo get_theme_mod('footer-copyright'); ?>
                </p>
            </div>
        </div>   
    </footer>
    <?php wp_footer(); ?>   
</body>
</html>
