 <?php

function natours_customize_register( $wp_customize ) {

    // Header Section
    $wp_customize->add_section( 'natours_header_section' , array(
        'title' => __( 'Header Section', 'natours' ),
        'priority' => 105, // Before Widgets.
    ));

    // Header Settings
    $wp_customize->add_setting('header-image', array(
        'default' => get_template_directory_uri() . '/assest/img/hero-small.jpg',
        'transport'     => 'refresh',
    ));

    $wp_customize->add_setting('header-image-retina', array(
        'default' => get_template_directory_uri() . '/assest/img/hero.jpg',
        'transport'     => 'refresh',
    ));

    $wp_customize->add_setting('header-text-big', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_setting('header-text-small', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_setting('header-button-text', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_setting('header-button-url', array(
        'sanitize_callback' => 'esc_url_raw' 
    ));

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


    // About Section
    $wp_customize->add_section( 'natours_about_section' , array(
        'title' => __( 'About Section', 'natours' ),
        'priority' => 105, // Before Widgets.
    ));

    // About Settings
    $wp_customize->add_setting('about-heading-text', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_setting('about-content-text', array());
    $wp_customize->add_setting('about-button-text', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_setting('about-button-url', array(
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_setting('about-button-hide', array());

    $wp_customize->add_setting('about-image-1', array(
        'transport'     => 'refresh',
    ));
    $wp_customize->add_setting('about-image-1-retina', array(
        'transport'     => 'refresh',
    ));

    $wp_customize->add_setting('about-image-2', array(
        'transport'     => 'refresh',
    ));
    $wp_customize->add_setting('about-image-2-retina', array(
        'transport'     => 'refresh',
    ));

    $wp_customize->add_setting('about-image-3', array(
        'transport'     => 'refresh',
    ));
    $wp_customize->add_setting('about-image-3-retina', array(
        'transport'     => 'refresh',
    ));

    // About Controls
    $wp_customize->add_control('about_control_heading_text', array(
        'label'     => __( 'Heading text', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_about_section',
        'settings'  => 'about-heading-text'
    ));

    $wp_customize->add_control('about_control_content_text', array(
        'label'     => __( 'Text content', 'natours' ),
        'type'      => 'textarea',
        'section'   => 'natours_about_section',
        'settings'  => 'about-content-text'
    ));

    $wp_customize->add_control('about_control_button_text', array(
        'label'     => __( 'Button text', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_about_section',
        'settings'  => 'about-button-text'
    ));

    $wp_customize->add_control('about_control_button_url', array(
        'label'     => __( 'Button url', 'natours' ),
        'type'      => 'url',
        'section'   => 'natours_about_section',
        'settings'  => 'about-button-url'
    ));

    $wp_customize->add_control( 'about_control_hide_button', array(
        'label'      => 'Hide Button',
        'type'       => 'checkbox',
        'section'    => 'natours_about_section',
        'settings'   => 'about-button-hide'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'about_control_image_1', array(
        'label' => __( 'Picture 1', 'natours' ),
        'section' => 'natours_about_section',
        'settings' => 'about-image-1',
        'mime_type' => 'image',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'about_control_image_1_retina', array(
        'label' => __( 'Picture 1 retina', 'natours' ),
        'section' => 'natours_about_section',
        'settings' => 'about-image-1-retina',
        'mime_type' => 'image',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'about_control_image_2', array(
        'label' => __( 'Picture 2', 'natours' ),
        'section' => 'natours_about_section',
        'settings' => 'about-image-2',
        'mime_type' => 'image',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'about_control_image_2_retina', array(
        'label' => __( 'Picture 2 retina', 'natours' ),
        'section' => 'natours_about_section',
        'settings' => 'about-image-2-retina',
        'mime_type' => 'image',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'about_control_image_3', array(
        'label' => __( 'Picture 3', 'natours' ),
        'section' => 'natours_about_section',
        'settings' => 'about-image-3',
        'mime_type' => 'image',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'about_control_image_3_retina', array(
        'label' => __( 'Picture 3 retina', 'natours' ),
        'section' => 'natours_about_section',
        'settings' => 'about-image-3-retina',
        'mime_type' => 'image',
    ) ) );


}
add_action( 'customize_register', 'natours_customize_register' );