<?php

function natours_customize_register( $wp_customize ) {

    // Header Section
    $wp_customize->add_section( 'natours_header_section' , array(
        'title' => __( 'Header Section', 'natours' ),
        'priority' => 105, // Before Widgets.
    ));

    // Header Settings
    $wp_customize->add_setting('header-image', array(
        'default-image' => get_template_directory_uri() . '/assest/img/hero-small.jpg',
        'transport'     => 'refresh',
    ));

    $wp_customize->add_setting('header-image-retina', array(
        'default-image' => get_template_directory_uri() . '/assest/img/hero.jpg',
        'transport'     => 'refresh',
    ));

    $wp_customize->add_setting('header-text-big', array());

    $wp_customize->add_setting('header-text-small', array());

    $wp_customize->add_setting('header-button-text', array());

    $wp_customize->add_setting('header-button-url', array());

    // Header Controls
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'image_control', array(
        'label' => __( 'Header image', 'natours' ),
        'section' => 'natours_header_section',
        'settings' => 'header-image',
        'mime_type' => 'image',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'image_control_retina', array(
        'label' => __( 'Header image retina', 'natours' ),
        'section' => 'natours_header_section',
        'settings' => 'header-image-retina',
        'mime_type' => 'image',
    ) ) );

    $wp_customize->add_control('header_control_text_big', array(
        'label'     => __( 'Header text big', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_header_section',
        'settings'  => 'header-text-big'
    ));

    $wp_customize->add_control('header_control_text_small', array(
        'label'     => __( 'Header text small', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_header_section',
        'settings'  => 'header-text-small'
    ));

    $wp_customize->add_control('header_control_button_text', array(
        'label'     => __( 'Button text', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_header_section',
        'settings'  => 'header-button-text'
    ));

    $wp_customize->add_control('header_control_button_url', array(
        'label'     => __( 'Button url', 'natours' ),
        'type'      => 'url',
        'section'   => 'natours_header_section',
        'settings'  => 'header-button-url'
    ));

}
add_action( 'customize_register', 'natours_customize_register' );