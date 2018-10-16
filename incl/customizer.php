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

    $wp_customize->add_setting('about-image-1', array());
    $wp_customize->add_setting('about-image-1-retina', array());

    $wp_customize->add_setting('about-image-2', array());
    $wp_customize->add_setting('about-image-2-retina', array());

    $wp_customize->add_setting('about-image-3', array());
    $wp_customize->add_setting('about-image-3-retina', array());

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

    // Features section
    $wp_customize->add_section( 'natours_features_section' , array(
        'title' => __( 'Features Section', 'natours' ),
        'priority' => 105, // Before Widgets.
    ));    

    // Features settings
    $wp_customize->add_setting('features-image-1', array());

    $wp_customize->add_setting('features-icon-1', array());
    $wp_customize->add_setting('features-title-1', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_setting('features-content-1', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_setting('features-icon-2', array());
    $wp_customize->add_setting('features-title-2', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_setting('features-content-2', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_setting('features-icon-3', array());
    $wp_customize->add_setting('features-title-3', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_setting('features-content-3', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_setting('features-icon-4', array());
    $wp_customize->add_setting('features-title-4', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_setting('features-content-4', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    // Features controls
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'image_features_control', array(
        'label' => __( 'Background image', 'natours' ),
        'section' => 'natours_features_section',
        'settings' => 'features-image-1',
        'mime_type' => 'image',
    ) ) );

    $wp_customize->add_control('feature_panel_1_icon', array(
        'label'     => __( 'Panel 1 icon', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_features_section',
        'settings'  => 'features-icon-1'
    ));
    $wp_customize->add_control('feature_panel_1_title', array(
        'label'     => __( 'Panel 1 title', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_features_section',
        'settings'  => 'features-title-1'
    ));
    $wp_customize->add_control('feature_panel_1_content', array(
        'label'     => __( 'Panel 1 content', 'natours' ),
        'type'      => 'textarea',
        'section'   => 'natours_features_section',
        'settings'  => 'features-content-1'
    ));

    $wp_customize->add_control('feature_panel_2_icon', array(
        'label'     => __( 'Panel 2 icon', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_features_section',
        'settings'  => 'features-icon-2'
    ));
    $wp_customize->add_control('feature_panel_2_title', array(
        'label'     => __( 'Panel 2 title', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_features_section',
        'settings'  => 'features-title-2'
    ));
    $wp_customize->add_control('feature_panel_2_content', array(
        'label'     => __( 'Panel 2 content', 'natours' ),
        'type'      => 'textarea',
        'section'   => 'natours_features_section',
        'settings'  => 'features-content-2'
    ));

    $wp_customize->add_control('feature_panel_3_icon', array(
        'label'     => __( 'Panel 3 icon', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_features_section',
        'settings'  => 'features-icon-3'
    ));
    $wp_customize->add_control('feature_panel_3_title', array(
        'label'     => __( 'Panel 3 title', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_features_section',
        'settings'  => 'features-title-3'
    ));
    $wp_customize->add_control('feature_panel_3_content', array(
        'label'     => __( 'Panel 3 content', 'natours' ),
        'type'      => 'textarea',
        'section'   => 'natours_features_section',
        'settings'  => 'features-content-3'
    ));

    $wp_customize->add_control('feature_panel_4_icon', array(
        'label'     => __( 'Panel 4 icon', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_features_section',
        'settings'  => 'features-icon-4'
    ));
    $wp_customize->add_control('feature_panel_4_title', array(
        'label'     => __( 'Panel 4 title', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_features_section',
        'settings'  => 'features-title-4'
    ));
    $wp_customize->add_control('feature_panel_4_content', array(
        'label'     => __( 'Panel 4 content', 'natours' ),
        'type'      => 'textarea',
        'section'   => 'natours_features_section',
        'settings'  => 'features-content-4'
    ));

    // Most Popular Tours panel
    $wp_customize->add_panel( 'natours_mp_tours_panel' , array(
        'title' => __( 'Most Popular Tours Section', 'natours' ),
        'priority' => 110, 
    ));

    // Most Popular Tours section
    $wp_customize->add_section( 'natours_mp_tours_section_1' , array(
        'title' => __( 'Settings', 'natours' ),
        'panel' => 'natours_mp_tours_panel',
        'priority' => 105, 
    ));
    $wp_customize->add_section( 'natours_mp_tours_section_2' , array(
        'title' => __( 'Tour 1', 'natours' ),
        'panel' => 'natours_mp_tours_panel',
        'priority' => 105, 
    ));
    $wp_customize->add_section( 'natours_mp_tours_section_3' , array(
        'title' => __( 'Tour 2', 'natours' ),
        'panel' => 'natours_mp_tours_panel',
        'priority' => 105, 
    ));
    $wp_customize->add_section( 'natours_mp_tours_section_4' , array(
        'title' => __( 'Tour 3', 'natours' ),
        'panel' => 'natours_mp_tours_panel',
        'priority' => 105, 
    ));

    // Most Popular Tours settings
    $wp_customize->add_setting('mptours-title', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_setting('mptours-button-hide', array());
    $wp_customize->add_setting('mptours-button-text', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_setting('mptours-button-url', array(
        'sanitize_callback' => 'esc_url_raw' 
    ));


    $wp_customize->add_setting('tour-1-image', array());
    $wp_customize->add_setting('tour-1-name', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' 
    ));
    $wp_customize->add_setting('tour-1-content', array());
    $wp_customize->add_setting('tour-1-price', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' 
    ));
    $wp_customize->add_setting('tour-1-button-hide', array());
    $wp_customize->add_setting('tour-1-button-text', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' 
    ));
    $wp_customize->add_setting('tour-1-popup-heading', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' 
    ));
    $wp_customize->add_setting('tour-1-popup-subheading', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' 
    ));
    $wp_customize->add_setting('tour-1-popup-content', array());
    $wp_customize->add_setting('tour-1-popup-button-text', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' 
    ));
    $wp_customize->add_setting('tour-1-popup-button-url', array(
        'sanitize_callback' => 'esc_url_raw' 
    ));


    $wp_customize->add_setting('tour-2-image', array());
    $wp_customize->add_setting('tour-2-name', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' 
    ));
    $wp_customize->add_setting('tour-2-content', array());
    $wp_customize->add_setting('tour-2-price', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' 
    ));
    $wp_customize->add_setting('tour-2-button-hide', array());
    $wp_customize->add_setting('tour-2-button-text', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' 
    ));
    $wp_customize->add_setting('tour-2-popup-heading', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' 
    ));
    $wp_customize->add_setting('tour-2-popup-subheading', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' 
    ));
    $wp_customize->add_setting('tour-2-popup-content', array());
    $wp_customize->add_setting('tour-2-popup-button-text', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' 
    ));
    $wp_customize->add_setting('tour-2-popup-button-url', array(
        'sanitize_callback' => 'esc_url_raw' 
    ));


    $wp_customize->add_setting('tour-3-image', array());
    $wp_customize->add_setting('tour-3-name', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' 
    ));
    $wp_customize->add_setting('tour-3-content', array());
    $wp_customize->add_setting('tour-3-price', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' 
    ));
    $wp_customize->add_setting('tour-3-button-hide', array());
    $wp_customize->add_setting('tour-3-button-text', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' 
    ));
    $wp_customize->add_setting('tour-3-popup-heading', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' 
    ));
    $wp_customize->add_setting('tour-3-popup-subheading', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' 
    ));
    $wp_customize->add_setting('tour-3-popup-content', array());
    $wp_customize->add_setting('tour-3-popup-button-text', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' 
    ));
    $wp_customize->add_setting('tour-3-popup-button-url', array(
        'sanitize_callback' => 'esc_url_raw' 
    ));


    // Most Popular Tours controls
    $wp_customize->add_control('mp_tours_heading', array(
        'label'     => __( 'Heading text', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_1',
        'settings'  => 'mptours-title'
    ));
    $wp_customize->add_control( 'mp_tours_hide_button', array(
        'label'      => 'Hide Button',
        'type'       => 'checkbox',
        'section'    => 'natours_mp_tours_section_1',
        'settings'   => 'mptours-button-hide'
    ));
    $wp_customize->add_control('mp_tours_text_button', array(
        'label'     => __( 'Button text', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_1',
        'settings'  => 'mptours-button-text'
    ));
    $wp_customize->add_control('mp_tours_url_button', array(
        'label'     => __( 'Button url', 'natours' ),
        'type'      => 'url',
        'section'   => 'natours_mp_tours_section_1',
        'settings'  => 'mptours-button-url'
    ));


    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'tour_1_image_control', array(
        'label' => __( 'Tour 1 image', 'natours' ),
        'section' => 'natours_mp_tours_section_2',
        'settings' => 'tour-1-image',
        'mime_type' => 'image',
    )));
    $wp_customize->add_control('tour_1_name_control', array(
        'label'     => __( 'Tour 1 name', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_2',
        'settings'  => 'tour-1-name'
    ));
    $wp_customize->add_control('tour_1_content_control', array(
        'label'     => __( 'Tour 1 content', 'natours' ),
        'type'      => 'textarea',
        'section'   => 'natours_mp_tours_section_2',
        'settings'  => 'tour-1-content'
    ));
    $wp_customize->add_control('tour_1_price_control', array(
        'label'     => __( 'Tour 1 price', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_2',
        'settings'  => 'tour-1-price'
    ));
    $wp_customize->add_control( 'tour_1_hide_popup_control', array(
        'label'      => 'Hide Popup 1',
        'type'       => 'checkbox',
        'section'    => 'natours_mp_tours_section_2',
        'settings'   => 'tour-1-button-hide'
    ));
    $wp_customize->add_control('tour_1_button_control', array(
        'label'     => __( 'Button text', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_2',
        'settings'  => 'tour-1-button-text'
    ));
    $wp_customize->add_control('tour_1_popup_heading_control', array(
        'label'     => __( 'Popup 1 heading', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_2',
        'settings'  => 'tour-1-popup-heading'
    ));
    $wp_customize->add_control('tour_1_popup_subheading_control', array(
        'label'     => __( 'Popup 1 subheading', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_2',
        'settings'  => 'tour-1-popup-subheading'
    ));
    $wp_customize->add_control('tour_1_popup_content_control', array(
        'label'     => __( 'Popup 1 content', 'natours' ),
        'type'      => 'textarea',
        'section'   => 'natours_mp_tours_section_2',
        'settings'  => 'tour-1-popup-content'
    ));
    $wp_customize->add_control('tour_1_popup_button_text', array(
        'label'     => __( 'Popup 1 button text', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_2',
        'settings'  => 'tour-1-popup-button-text'
    ));
    $wp_customize->add_control('tour_1_popup_button_url', array(
        'label'     => __( 'Popup 1 button url', 'natours' ),
        'type'      => 'url',
        'section'   => 'natours_mp_tours_section_2',
        'settings'  => 'tour-1-popup-button-url'
    ));


    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'tour_2_image_control', array(
        'label' => __( 'Tour 2 image', 'natours' ),
        'section' => 'natours_mp_tours_section_3',
        'settings' => 'tour-2-image',
        'mime_type' => 'image',
    )));
    $wp_customize->add_control('tour_2_name_control', array(
        'label'     => __( 'Tour 2 name', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_3',
        'settings'  => 'tour-2-name'
    ));
    $wp_customize->add_control('tour_2_content_control', array(
        'label'     => __( 'Tour 2 content', 'natours' ),
        'type'      => 'textarea',
        'section'   => 'natours_mp_tours_section_3',
        'settings'  => 'tour-2-content'
    ));
    $wp_customize->add_control('tour_2_price_control', array(
        'label'     => __( 'Tour 2 price', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_3',
        'settings'  => 'tour-2-price'
    ));
    $wp_customize->add_control( 'tour_2_hide_popup_control', array(
        'label'      => 'Hide Popup 2',
        'type'       => 'checkbox',
        'section'    => 'natours_mp_tours_section_3',
        'settings'   => 'tour-2-button-hide'
    ));
    $wp_customize->add_control('tour_2_button_control', array(
        'label'     => __( 'Button text', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_3',
        'settings'  => 'tour-2-button-text'
    ));
    $wp_customize->add_control('tour_2_popup_heading_control', array(
        'label'     => __( 'Popup 2 heading', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_3',
        'settings'  => 'tour-2-popup-heading'
    ));
    $wp_customize->add_control('tour_2_popup_subheading_control', array(
        'label'     => __( 'Popup 2 subheading', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_3',
        'settings'  => 'tour-2-popup-subheading'
    ));
    $wp_customize->add_control('tour_2_popup_content_control', array(
        'label'     => __( 'Popup 2 content', 'natours' ),
        'type'      => 'textarea',
        'section'   => 'natours_mp_tours_section_3',
        'settings'  => 'tour-2-popup-content'
    ));
    $wp_customize->add_control('tour_2_popup_button_text', array(
        'label'     => __( 'Popup 2 button text', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_3',
        'settings'  => 'tour-2-popup-button-text'
    ));
    $wp_customize->add_control('tour_2_popup_button_url', array(
        'label'     => __( 'Popup 2 button url', 'natours' ),
        'type'      => 'url',
        'section'   => 'natours_mp_tours_section_3',
        'settings'  => 'tour-2-popup-button-url'
    ));


    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'tour_3_image_control', array(
        'label' => __( 'Tour 3 image', 'natours' ),
        'section' => 'natours_mp_tours_section_4',
        'settings' => 'tour-3-image',
        'mime_type' => 'image',
    )));
    $wp_customize->add_control('tour_3_name_control', array(
        'label'     => __( 'Tour 3 name', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_4',
        'settings'  => 'tour-3-name'
    ));
    $wp_customize->add_control('tour_3_content_control', array(
        'label'     => __( 'Tour 3 content', 'natours' ),
        'type'      => 'textarea',
        'section'   => 'natours_mp_tours_section_4',
        'settings'  => 'tour-3-content'
    ));
    $wp_customize->add_control('tour_3_price_control', array(
        'label'     => __( 'Tour 3 price', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_4',
        'settings'  => 'tour-3-price'
    ));
    $wp_customize->add_control( 'tour_3_hide_popup_control', array(
        'label'      => 'Hide Popup 3',
        'type'       => 'checkbox',
        'section'    => 'natours_mp_tours_section_4',
        'settings'   => 'tour-3-button-hide'
    ));
    $wp_customize->add_control('tour_3_button_control', array(
        'label'     => __( 'Button text', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_4',
        'settings'  => 'tour-3-button-text'
    ));
    $wp_customize->add_control('tour_3_popup_heading_control', array(
        'label'     => __( 'Popup 3 heading', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_4',
        'settings'  => 'tour-3-popup-heading'
    ));
    $wp_customize->add_control('tour_3_popup_subheading_control', array(
        'label'     => __( 'Popup 3 subheading', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_4',
        'settings'  => 'tour-3-popup-subheading'
    ));
    $wp_customize->add_control('tour_3_popup_content_control', array(
        'label'     => __( 'Popup 3 content', 'natours' ),
        'type'      => 'textarea',
        'section'   => 'natours_mp_tours_section_4',
        'settings'  => 'tour-3-popup-content'
    ));
    $wp_customize->add_control('tour_3_popup_button_text', array(
        'label'     => __( 'Popup 3 button text', 'natours' ),
        'type'      => 'text',
        'section'   => 'natours_mp_tours_section_4',
        'settings'  => 'tour-3-popup-button-text'
    ));
    $wp_customize->add_control('tour_3_popup_button_url', array(
        'label'     => __( 'Popup 3 button url', 'natours' ),
        'type'      => 'url',
        'section'   => 'natours_mp_tours_section_4',
        'settings'  => 'tour-3-popup-button-url'
    ));





}
add_action( 'customize_register', 'natours_customize_register' );