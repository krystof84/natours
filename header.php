<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

    <!-- <link rel="shortcut icon" type="image/png" href="img/favicon.png"> -->

    <style>
    
    .header {
        background-image: -webkit-gradient(linear, left top, right bottom, from(rgba(126, 214, 95, 0.8)), to(rgba(40, 180, 133, 0.8))), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod( 'header-image' ))); ?>");
        background-image: -webkit-linear-gradient(left top, rgba(126, 214, 95, 0.8), rgba(40, 180, 133, 0.8)), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod( 'header-image' ))); ?>");
        background-image: -o-linear-gradient(left top, rgba(126, 214, 95, 0.8), rgba(40, 180, 133, 0.8)), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod( 'header-image' ))); ?>");
        background-image: linear-gradient(to right bottom, rgba(126, 214, 95, 0.8), rgba(40, 180, 133, 0.8)), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod( 'header-image' ))); ?>");
    }

      @media only screen and (-webkit-min-device-pixel-ratio: 2) and (min-width: 37.5em), only screen and (-o-min-device-pixel-ratio: 2/1) and (min-width: 37.5em), only screen and (min-resolution: 192dpi) and (min-width: 37.5em), only screen and (min-width: 125em) {
    .header {
        background-image: -webkit-gradient(linear, left top, right bottom, from(rgba(126, 214, 95, 0.8)), to(rgba(40, 180, 133, 0.8))), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('header-image-retina'))); ?>");
        background-image: -webkit-linear-gradient(left top, rgba(126, 214, 95, 0.8), rgba(40, 180, 133, 0.8)), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('header-image-retina'))); ?>");
        background-image: -o-linear-gradient(left top, rgba(126, 214, 95, 0.8), rgba(40, 180, 133, 0.8)), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('header-image-retina'))); ?>");
        background-image: linear-gradient(to right bottom, rgba(126, 214, 95, 0.8), rgba(40, 180, 133, 0.8)), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('header-image-retina'))); ?>"); } 
    }
    
    </style>
    
</head>
<body>

    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

        <?php if( has_nav_menu('primary') ): ?>

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>
            <div class="navigation__background">&nbsp;</div>

        <?php endif; ?>

        <nav class="navigation__nav">

            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'navigation__list',
                    'menu_id'        => 'primary-menu',
                    'container'      => '',
                    'depth'          => 1,
                ));
            ?>

        </nav>
    </div>

    <header class="header">
        <div class="header__logo-box">
        <?php 
            if( function_exists('the_custom_logo') ) {
                the_custom_logo();
            }
        ?>
        </div>
        
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main"><?php echo get_theme_mod('header-text-big', __('Outdoors', 'natours')); ?> </span>
                <span class="heading-primary--sub">
                    <?php echo get_theme_mod('header-text-small', __('is where life happens', 'natours')); ?>
                </span>
            </h1>
            
            <a href="<?php echo esc_url( get_theme_mod('header-button-url') )?>" class="btn btn--white btn--animated">
                <?php echo get_theme_mod('header-button-text', __('Discover our tours', 'natours')) ?>
            </a>   
        </div>
    </header>