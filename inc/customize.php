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






    
    //select sanitization function
    function theme_slug_sanitize_select( $input, $setting ){
        //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
        $input = sanitize_key($input);
        //get the list of possible select options 
        $choices = $setting->manager->get_control( $setting->id )->choices;
        //return input if valid or return default option
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
    }



    
    $wp_customize->add_section( 'theme_font_settings', array(
        'title' => __( 'Theme Font Settings', 'awake' ),
        'priority' => 5,
    ));

    $font_sizes = array();
    $font_sizes[] = array(
        'slug'   => 'font_size_1',
        'default_number' => 48,
        // 'default_unit' => 'px',
        'label_number' => __( 'Font Size 1 number', 'awake' ),
        // 'label_unit'   => __( 'Font Size 1 units',  'awake' ),
    );
    $font_sizes[] = array(
        'slug'   => 'font_size_2',
        'default_number' => 42,
        'label_number' => __( 'Font Size 2 number', 'awake' ),
    );
    $font_sizes[] = array(
        'slug'   => 'font_size_3',
        'default_number' => 36,
        'label_number' => __( 'Font Size 3 number', 'awake' ),
    );
    $font_sizes[] = array(
        'slug'   => 'font_size_4',
        'default_number' => 21,
        'label_number' => __( 'Font Size 4 number', 'awake' ),
    );
    $font_sizes[] = array(
        'slug'   => 'font_size_5',
        'default_number' => 18,
        'label_number' => __( 'Font Size 5 number', 'awake' ),
    );
    $font_sizes[] = array(
        'slug'   => 'font_size_6',
        'default_number' => 16,
        'label_number' => __( 'Font Size 6 number', 'awake' ),
    );
    $font_sizes[] = array(
        'slug'   => 'font_size_7',
        'default_number' => 14,
        'label_number' => __( 'Font Size 7 number', 'awake' ),
    );
    $font_sizes[] = array(
        'slug'   => 'font_size_8',
        'default_number' => 10,
        'label_number' => __( 'Font Size 8 number', 'awake' ),
    );

    foreach ( $font_sizes as $size ) {
        
        //add setting to your section
        $wp_customize->add_setting(
            $size['slug'].'_number',
            array(
                'default' => $size['default_number'],
                'sanitize_callback' => 'wp_filter_nohtml_kses', //removes all HTML from content
                'type' => 'option',
                'capability' => 'edit_theme_options',
            )
        );
        $wp_customize->add_control(
            $size['slug'].'_number',
            array(
                'label' => $size['label_number'],
                'section' => 'theme_font_settings',
                'type' => 'number'
            )
        );

        // TODO: hacer seleccionador de unidades mejorado
        // //add setting to your section
        // $wp_customize->add_setting(
        //     $size['slug'].'_unit',
        //     array(
        //         'default' => $size['default_unit'],
        //         'sanitize_callback' => 'theme_slug_sanitize_select',
        //         'type' => 'option',
        //         'capability' => 'edit_theme_options',
        //     )
        // );
        // $wp_customize->add_control(
        //     $size['slug'].'_unit',
        //     array(
        //         'label' => $size['label_unit'],
        //         'section' => 'theme_font_settings',
        //         'type' => 'select',
        //         'choices' => array(
        //             '' => esc_html__('Select Unit','awake'),
        //             'rem' => esc_html__('rem','awake'),
        //             'px'  => esc_html__('px','awake')
        //         )
        //     )
        // );
    }
}
add_action( 'customize_register', 'lt_customize_register' );