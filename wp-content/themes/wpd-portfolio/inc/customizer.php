<?php
function wpd_customize_register($wp_customize){
    
    // email field
    $wp_customize->add_setting( 'wpd_email', array(
        'sanitize_callback' => 'sanitize_email',
      ) );

      $wp_customize->add_control( 'wpd_email', array(
        'type' => 'email',
        'section' => 'Header_Top', 
        'label' => __( 'Email',TEXTDOMAIN ),
      ) );

    // mobile field
    $wp_customize->add_setting( 'wpd_mobile', array(
    'sanitize_callback' => 'sanitize_text_field',
     ) );

     $wp_customize->add_control( 'wpd_mobile', array(
    'type' => 'text',
    'section' => 'Header_Top', 
    'label' => __( 'Mobile',TEXTDOMAIN ),
     ) );
     // facebook url
     $wp_customize->add_setting( 'facebook', array(
    'sanitize_callback' => 'esc_url_raw',
     ) );

     $wp_customize->add_control( 'facebook', array(
    'type' => 'url',
    'section' => 'Header_Top', 
    'label' => __( 'Facebook',TEXTDOMAIN ),
     ) );
     // twiter url
     $wp_customize->add_setting( 'twiter', array(
    'sanitize_callback' => 'esc_url_raw',
     ) );

     $wp_customize->add_control( 'twiter', array(
    'type' => 'url',
    'section' => 'Header_Top', 
    'label' => __( 'Twiter',TEXTDOMAIN ),
     ) );
     // instagram url
     $wp_customize->add_setting( 'instagram', array(
    'sanitize_callback' => 'esc_url_raw',
     ) );

     $wp_customize->add_control( 'instagram', array(
    'type' => 'url',
    'section' => 'Header_Top', 
    'label' => __( 'Instagram',TEXTDOMAIN ),
     ) );
     // vimeo url
    $wp_customize->add_setting( 'vimeo', array(
    'sanitize_callback' => 'esc_url_raw',
     ) );

     $wp_customize->add_control( 'vimeo', array(
    'type' => 'url',
    'section' => 'Header_Top', 
    'label' => __( 'Vimeo',TEXTDOMAIN ),
     ) );
      $wp_customize->add_section( 'Header_Top', array(
        'title' => __( 'Header Top',TEXTDOMAIN),
        
      ) );
      // background color settings
   $wp_customize->add_setting( 'header_top_bg', array(
    'default'=> '#fbfaf8',
    'sanitize_callback' => 'sanitize_hex_color',
     ) );

      // background color control
      $wp_customize->add_control( 
        new WP_Customize_Color_Control( 
        $wp_customize, 
        'header_top_bg', 
        array(
            'label'      => __( 'Background Color',TEXTDOMAIN),
            'section'    => 'Header_Top',
        ) ) 
    );
}
add_action('customize_register','wpd_customize_register');