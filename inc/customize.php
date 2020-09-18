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





    
    $wp_customize->add_section( 'theme_font_settings', array(
        'title' => __( 'Theme Font Settings', 'awake' ),
        'priority' => 5,
    ));

    $font_sizes = array();


    
    //add setting to your section
    $wp_customize->add_setting( 
        'font_size_1_number', 
        array(
            'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
        )
    );
    
    $wp_customize->add_control( 
        'font_size_1_number', 
        array(
            'label' => esc_html__( 'Font Size 1 number', 'awake' ),
            'section' => 'theme_font_settings',
            'type' => 'text'
        )
    );


    
    //select sanitization function
    function theme_slug_sanitize_select( $input, $setting ){
          
        //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
        $input = sanitize_key($input);

        //get the list of possible select options 
        $choices = $setting->manager->get_control( $setting->id )->choices;
                          
        //return input if valid or return default option
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
          
    }
  
  
//add setting to your section
    $wp_customize->add_setting( 
        'theme_slug_customizer_select', 
        array(
            'sanitize_callback' => 'theme_slug_sanitize_select'
        )
    );
      
    $wp_customize->add_control( 
        'theme_slug_customizer_select', 
        array(
            'label' => esc_html__( 'Your Setting with select', 'theme_slug' ),
            'section' => 'theme_slug_customizer_your_section',
            'type' => 'select',
            'choices' => array(
                '' => esc_html__('Please select','theme_slug'),
                'one' => esc_html__('Choice One','theme_slug'),
                'two' => esc_html__('Choice Two','theme_slug'),
                'three' => esc_html__('Choice Three','theme_slug')               
            )
        )
    );      

}
add_action( 'customize_register', 'lt_customize_register' );