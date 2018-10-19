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
            background-image: linear-gradient(to right bottom, rgba(126, 214, 95, 0.8), rgba(40, 180, 133, 0.8)), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('header-image-retina'))); ?>"); 
        } 
    }

    .section-features {
        background-image: -webkit-gradient(linear, left top, right bottom, from(rgba(126, 214, 95, 0.8)), to(rgba(40, 180, 133, 0.8))), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('features-image-1'))); ?>");
        background-image: -webkit-linear-gradient(left top, rgba(126, 214, 95, 0.8), rgba(40, 180, 133, 0.8)), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('features-image-1'))); ?>");
        background-image: -o-linear-gradient(left top, rgba(126, 214, 95, 0.8), rgba(40, 180, 133, 0.8)), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('features-image-1'))); ?>");
        background-image: linear-gradient(to right bottom, rgba(126, 214, 95, 0.8), rgba(40, 180, 133, 0.8)), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('features-image-1'))); ?>");
    }

    .card__picture--1 {
        background-image: -webkit-gradient(linear, left top, right bottom, from(#ffb900), to(#ff7730)), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('tour-1-image'))); ?>");
        background-image: -webkit-linear-gradient(left top, #ffb900, #ff7730), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('tour-1-image'))); ?>");
        background-image: -o-linear-gradient(left top, #ffb900, #ff7730), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('tour-1-image'))); ?>");
        background-image: linear-gradient(to right bottom, #ffb900, #ff7730), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('tour-1-image'))); ?>");
    }

    .card__picture--2 {
        background-image: -webkit-gradient(linear, left top, right bottom, from(#7ed65f), to(#28b485)), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('tour-2-image'))); ?>");
        background-image: -webkit-linear-gradient(left top, #7ed65f, #28b485), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('tour-2-image'))); ?>");
        background-image: -o-linear-gradient(left top, #7ed65f, #28b485), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('tour-2-image'))); ?>");
        background-image: linear-gradient(to right bottom, #7ed65f, #28b485), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('tour-2-image'))); ?>");
    }

    .card__picture--3 {
        background-image: -webkit-gradient(linear, left top, right bottom, from(#2998ff), to(#5643fa)), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('tour-3-image'))); ?>");
        background-image: -webkit-linear-gradient(left top, #2998ff, #5643fa), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('tour-3-image'))); ?>");
        background-image: -o-linear-gradient(left top, #2998ff, #5643fa), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('tour-3-image'))); ?>");
        background-image: linear-gradient(to right bottom, #2998ff, #5643fa), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('tour-3-image'))); ?>");
    }

    .book {
        background-image: -webkit-linear-gradient(345deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.9) 50%, transparent 50%), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('form-image'))); ?>");
        background-image: -o-linear-gradient(345deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.9) 50%, transparent 50%), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('form-image'))); ?>");
        background-image: linear-gradient(105deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.9) 50%, transparent 50%), url("<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('form-image'))); ?>");
    }

    </style>
    
</head>
<body>

    <?php
    // response messages
    $missing_content = __('Please fill all form fields.', 'natours');
    $email_invalid   = __('Email Address Invalid.', 'natours');
    $message_unsent  = __('Message was not sent. Try Again.', 'natours');
    $message_sent    = __('Thanks! Your message has been sent.', 'natours');
    
    // form fields
    $fullName = sanitize_text_field($_POST['fullName']);
    $email = sanitize_email($_POST['email']);
    $size = $_POST['size'];
    $message = __('Full name: ', 'natours') . $fullName . "\r\n" . __('Email: ', 'natours') . $email . "\r\n" . 'Group size: ' . $size;

    // mailer settings
    if(get_theme_mod('email-recipient')) {
        $to = get_theme_mod('email-recipient');
    } else {
        $to = get_option('admin_email');
    }
    $subject = get_theme_mod('email-subject');
    $headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";

    if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
        if( !empty($fullName) && !empty($email) && !empty($size) ) {

            if( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
                nat_generate_response('error', $email_invalid);    
            } else {
                $sent = wp_mail($to, $subject, $message, $headers);
    
                if($sent) {
                    nat_generate_response('success', $message_sent);
                } else {
                    nat_generate_response('error', $message_unsent);
                }
            }
    
        } else {
            nat_generate_response('error', $missing_content);
        }
    }

    ?>

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