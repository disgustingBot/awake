<?php


function lt_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'theme_colors_settings', array(
        'title' => __( 'Theme Colors Settings', 'awake' ),
        'priority' => 5,
    ));

    $theme_colors = array();

    // Navigation Background Color
    $theme_colors[] = array(
        'slug'=>'primary_color',
        'default' => '#000000',
        'label' => __('Primary Color', 'awake')
    );
    $theme_colors[] = array(
        'slug'=>'secondary_color',
        'default' => '#000000',
        'label' => __('Secondary Color', 'awake')
    );

    foreach( $theme_colors as $color ) {
        $wp_customize->add_setting(
            $color['slug'], array(
                'default' => $color['default'],
                'sanitize_callback' => 'sanitize_hex_color',
                'type' => 'option',
                'capability' => 'edit_theme_options'
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                $color['slug'],
                array('label' => $color['label'],
                'section' => 'theme_colors_settings',
                'settings' => $color['slug'])
            )
        );
    }
}
add_action( 'customize_register', 'lt_customize_register' );