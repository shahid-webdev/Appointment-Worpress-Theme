<?php
    $wp_customize->add_section('vw_appoinment_pro_our_partners',array(
        'title' => __('Our Partners','vw-appointment-pro'),
        'description' => __('Add Content Here','vw-appointment-pro'),
        'panel' => 'vw_appoinment_pro_panel_id',
    ));
    $wp_customize->add_setting('vw_appoinment_pro_our_partners_enable',
          array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
    ));
    $wp_customize->add_control('vw_appoinment_pro_our_partners_enable',
        array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_our_partners',
        'choices' => array(
        'Enable' => __('Enable', 'vw-appointment-pro'),
        'Disable' => __('Disable', 'vw-appointment-pro')
    ),));
    $wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_our_partners_enable', array(
        'selector' => '#vw-appointment-our-partners .container',
        'render_callback' => 'vw_appoinment_pro_customize_partial_vw_appoinment_pro_our_partners_enable',
    ));
    $wp_customize->add_setting( 'vw_appoinment_pro_our_partners_settings',
        array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_our_partners_settings',
        array(
        'label' => __('Section Background Settings','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_our_partners'
    )));
    $wp_customize->add_setting( 'vw_appoinment_pro_our_partners_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_partners_bgcolor', array(
        'label' => __('Section Background Color', 'vw-appointment-pro'),
        'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_our_partners',
        'settings' => 'vw_appoinment_pro_our_partners_bgcolor',
    )));
    $wp_customize->add_setting('vw_appoinment_pro_our_partners_bgimage',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control( $wp_customize,'vw_appoinment_pro_our_partners_bgimage',array(
        'label' => __('Section Background Image','vw-appointment-pro'),
        'description' => __('Dimension 1600px * 900px','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_our_partners',
        'settings' => 'vw_appoinment_pro_our_partners_bgimage'
    )));
    $wp_customize->add_setting( 'vw_appoinment_pro_our_partners_content_settings',
        array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_our_partners_content_settings',
        array(
        'label' => __('Section Content Settings','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_our_partners'
    )));
    $wp_customize->add_setting( 'vw_appoinment_pro_our_partners_slider_loop',
       array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
    ));
    $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_our_partners_slider_loop',
         array(
            'label' => esc_html__( 'Slider Loop', 'vw-appointment-pro' ),
            'section' => 'vw_appoinment_pro_our_partners'
    )));
    $wp_customize->add_setting('vw_appoinment_pro_our_partners_number',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_appoinment_pro_our_partners_number',array(
        'label' => __('No Of Partners To Show','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_our_partners',
        'setting' => 'vw_appoinment_pro_our_partners_number',
        'type'    => 'number'
    ));
    $partners=get_theme_mod('vw_appoinment_pro_our_partners_number');
    for($i=1;$i<=$partners;$i++)
    {
        $wp_customize->add_setting('vw_appoinment_pro_our_partners_image'.$i,array(
          'default' => '',
          'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(
          new WP_Customize_Image_Control( $wp_customize,'vw_appoinment_pro_our_partners_image'.$i,array(
          'label' => __('Partner Image ','vw-appointment-pro').$i,
          'description' => __('Dimension 160px * 70px','vw-appointment-pro'),
          'section' => 'vw_appoinment_pro_our_partners',
          'settings' => 'vw_appoinment_pro_our_partners_image'.$i
        )));
        $wp_customize->add_setting('vw_appoinment_pro_partners_image_alter_text'.$i,array(
          'default' => '',
          'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control('vw_appoinment_pro_partners_image_alter_text'.$i,array(
          'label' => __('Partner Image Alter Text ','vw-appointment-pro').$i,
          'section' => 'vw_appoinment_pro_our_partners',
          'setting' => 'vw_appoinment_pro_partners_image_alter_text'.$i,
          'type'  => 'text'
        ));
    }
    $wp_customize->add_setting( 'vw_appoinment_pro_our_partners_border_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_partners_border_color', array(
        'label' => __('Border Color', 'vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_our_partners',
        'settings' => 'vw_appoinment_pro_our_partners_border_color',
    )));
    /*------------------- Footer Sections ----------------------*/
    $wp_customize->add_section('vw_appoinment_pro_footer_widget_section',array(
        'title' => __('Footer Widgets','vw-appointment-pro'),
        'description'   => __('Edit footer Widgets sections','vw-appointment-pro'),
        'panel' => 'vw_appoinment_pro_panel_id',
    ));
    $wp_customize->add_setting( 'vw_appoinment_pro_footer_widget_section_youtube_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_appoinment_pro_footer_widget_section_youtube_link', array(
          'section' => 'vw_appoinment_pro_footer_widget_section',
          'label' => __( 'Youtube Video', 'vw-appointment-pro' ),
          'description' => __( 'Watch our youtube video for How to Create a Footer Widget in WordPress.', 'vw-appointment-pro' ),
          'content' => sprintf( __( 'Check the button %1$sWatch Now%2$s', 'vw-appointment-pro' ), '<a href="' . esc_url( vw_appoinment_pro_footer_section_video  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
    )));
    $wp_customize->add_setting('vw_appoinment_pro_footer_widgets_enable',
    array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
    ));
    $wp_customize->add_control('vw_appoinment_pro_footer_widgets_enable',
    array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_appoinment_pro_footer_widget_section',
        'choices' => array(
            'Enable' => __('Enable', 'vw-appointment-pro'),
            'Disable' => __('Disable', 'vw-appointment-pro')
        ),
    ));

    $wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_footer_widgets_enable', array(
      'selector' => '#footer .container',
      'render_callback' => 'vw_appoinment_pro_customize_partial_vw_appoinment_pro_footer_widgets_enable',
    ) );

    $wp_customize->add_setting( 'vw_appoinment_pro_footer_widget_section_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_footer_widget_section_setting',
        array(
          'label' => __('Section Background Setting','vw-appointment-pro'),
          'section' => 'vw_appoinment_pro_footer_widget_section'
        )
    ) );
    // add color picker setting
    $wp_customize->add_setting( 'vw_appoinment_pro_footer_widget_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_footer_widget_bgcolor', array(
        'label' => __('Background Color', 'vw-appointment-pro'),
        'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_footer_widget_section',
        'settings' => 'vw_appoinment_pro_footer_widget_bgcolor',
    )));
    $wp_customize->add_setting('vw_appoinment_pro_footer_widget_section_bg_image',array(
      'default'   => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_appoinment_pro_footer_widget_section_bg_image',array(
          'label' => __('Background Image ','vw-appointment-pro'),
          'description' => __('Dimension (1600px * 700px)','vw-appointment-pro'),
          'section' => 'vw_appoinment_pro_footer_widget_section',
          'settings' => 'vw_appoinment_pro_footer_widget_section_bg_image'
    )));
    $wp_customize->add_setting('vw_appoinment_pro_footer_widget_section_bg_image_attachment',
    array(
      'default' => 'Scroll',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_appoinment_pro_footer_widget_section_bg_image_attachment',
          array(
          'type' => 'radio',
          'label' => __('Background Image Attachment', 'vw-appointment-pro'),
          'section' => 'vw_appoinment_pro_footer_widget_section',
          'choices' => array(
          'Scroll' => __('Scroll', 'vw-appointment-pro'),
          'Fixed' => __('Fixed', 'vw-appointment-pro')
    ),));
    $wp_customize->add_setting( 'vw_appoinment_pro_footer_widget_section_text_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_footer_widget_section_text_setting',
        array(
          'label' => __('Section Text Color and Font Setting','vw-appointment-pro'),
          'section' => 'vw_appoinment_pro_footer_widget_section'
        )
    ) );

    $wp_customize->add_setting('vw_appoinment_pro_footer_widget_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_footer_widget_heading_color', array(
        'label' => __('Footer Heading Color', 'vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_footer_widget_section',
        'settings' => 'vw_appoinment_pro_footer_widget_heading_color',
    )));
    
    $wp_customize->add_setting('vw_appoinment_pro_footer_widget_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_appoinment_pro_footer_widget_heading_font_family', array(
        'section'  => 'vw_appoinment_pro_footer_widget_section',
        'label'    => __( 'Footer Heading Font Family','vw-appointment-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
        $wp_customize->add_setting( 'vw_appoinment_pro_footer_widget_heading_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_footer_widget_heading_font_size', array(
      'label' => __('Footer Heading Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_footer_widget_section',
      'settings' => 'vw_appoinment_pro_footer_widget_heading_font_size',
      'type'  => 'text',
  )));
   $wp_customize->add_setting('vw_appoinment_pro_footer_widget_heading_border_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_footer_widget_heading_border_color', array(
        'label' => __('Footer Heading Border Color', 'vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_footer_widget_section',
        'settings' => 'vw_appoinment_pro_footer_widget_heading_border_color',
    )));
    $wp_customize->add_setting('vw_appoinment_pro_footer_widget_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_footer_widget_content_color', array(
        'label' => __('Footer Content Color', 'vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_footer_widget_section',
        'settings' => 'vw_appoinment_pro_footer_widget_content_color',
    )));
    
    $wp_customize->add_setting('vw_appoinment_pro_footer_widget_content_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_appoinment_pro_footer_widget_content_font_family', array(
        'section'  => 'vw_appoinment_pro_footer_widget_section',
        'label'    => __( 'Footer Content Font Family','vw-appointment-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'vw_appoinment_pro_footer_widget_content_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_footer_widget_content_font_size', array(
      'label' => __('Footer Content Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_footer_widget_section',
      'settings' => 'vw_appoinment_pro_footer_widget_content_font_size',
      'type'  => 'text',
  )));
    
    /*----------------- Footer Copyright --------------*/

    $wp_customize->add_section('vw_appoinment_pro_footer_section',array(
        'title' => __('Footer Text','vw-appointment-pro'),
        'description'   => __('Add some text for footer like copyright etc.','vw-appointment-pro'),
        'priority'  => null,
        'panel' => 'vw_appoinment_pro_panel_id',
    ));

    $wp_customize->add_setting('vw_appoinment_pro_footer_section_enable',
    array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
    ));
    $wp_customize->add_control('vw_appoinment_pro_footer_section_enable',
    array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_appoinment_pro_footer_section',
        'choices' => array(
            'Enable' => __('Enable', 'vw-appointment-pro'),
            'Disable' => __('Disable', 'vw-appointment-pro')
        ),
    ));
    $wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_footer_section_enable', array(
      'selector' => '.copyright .container',
      'render_callback' => 'vw_appoinment_pro_customize_partial_vw_appoinment_pro_footer_section_enable',
    ) );
    $wp_customize->add_setting( 'vw_appoinment_pro_footer_section_bg_settings',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_footer_section_bg_settings',
      array(
      'label' => __('Background Settings','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_footer_section'
    )));
    $wp_customize->add_setting('vw_appoinment_pro_footer_section_bg_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_footer_section_bg_color',array(
        'label' => __('Background Color', 'vw-appointment-pro'),
        'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_footer_section',
        'settings' => 'vw_appoinment_pro_footer_section_bg_color',
    )));
    $wp_customize->add_setting('vw_appoinment_pro_footer_section_bg_image',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_appoinment_pro_footer_section_bg_image',array(
        'label' => __('Background image ','vw-appointment-pro'),
        'description' => __('Dimension (1600px * 200px)','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_footer_section',
        'settings' => 'vw_appoinment_pro_footer_section_bg_image'
    )));
     $wp_customize->add_setting('vw_appoinment_pro_footer_copy_year',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_footer_copy_year',array(
        'label' => __('Copyright Text Year','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_footer_section',
        'type'      => 'textarea'
    ));
     $wp_customize->add_setting('vw_appoinment_pro_footer_copy_themename',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_footer_copy_themename',array(
        'label' => __('Copyright Theme Name Text ','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_footer_section',
        'type'      => 'textarea'
    ));
    $wp_customize->add_setting('vw_appoinment_pro_footer_copy',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_footer_copy',array(
        'label' => __('Copyright Text','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_footer_section',
        'type'      => 'textarea'
    ));
    $wp_customize->add_setting('vw_appoinment_pro_footer_social_icons_shortcode',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_appoinment_pro_footer_social_icons_shortcode',array(
        'label' => __('Add Social Icon Shortcode','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_footer_section',
        'setting' => 'vw_appoinment_pro_footer_social_icons_shortcode',
        'type'    => 'text'
    ));
    $wp_customize->add_setting('vw_appoinment_pro_footer_copy_text_alignment',array(
          'default' => __('Left','vw-appointment-pro'),
          'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
    ));
    $wp_customize->add_control(new vw_appoinment_pro_Image_Radio_Control($wp_customize, 'vw_appoinment_pro_footer_copy_text_alignment', array(
      'type' => 'select',
      'label' => __('Copyright Text Alignment','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_footer_section',
      'settings' => 'vw_appoinment_pro_footer_copy_text_alignment',
      'choices' => array(
          'Left' => get_template_directory_uri().'/assets/images/header-layout1.png',
          'Center' => get_template_directory_uri().'/assets/images/header-layout2.png',
          'Right' => get_template_directory_uri().'/assets/images/header-layout3.png'
      ))));
    
    $wp_customize->add_setting('vw_appoinment_pro_copyright_top_bottom_padding',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_copyright_top_bottom_padding',array(
        'label' => __('Copyright Top Bottom Padding','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_footer_section',
        'type'      => 'number'
    ));
    $wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_footer_copy', array(
      'selector' => '.copy-text',
      'render_callback' => 'vw_appoinment_pro_customize_partial_vw_appoinment_pro_footer_copy',
    ) );

    $wp_customize->add_setting( 'vw_appoinment_pro_footer_copy_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_footer_copy_content_color', array(
        'label' => __('Content Color', 'vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_footer_section',
        'settings' => 'vw_appoinment_pro_footer_copy_content_color',
    )));

    $wp_customize->add_setting('vw_appoinment_pro_footer_copy_content_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_appoinment_pro_footer_copy_content_font_family', array(
        'section'  => 'vw_appoinment_pro_footer_section',
        'label'    => __( 'Content Font Family','vw-appointment-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'vw_appoinment_pro_footer_copy_content_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_footer_copy_content_font_size', array(
      'label' => __('Footer Content Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_footer_section',
      'settings' => 'vw_appoinment_pro_footer_copy_content_font_size',
      'type'  => 'text',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_hide_show_credit_link',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   ));
 
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_hide_show_credit_link',
     array(
        'label' => esc_html__( 'Show or Hide Credit Link', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_footer_section'
  )));
    /*---------------Contact Page section-------------*/

    $wp_customize->add_section('vw_appoinment_pro_contact_page_section',array(
        'title' => __('Contact','vw-appointment-pro'),
        'description'   => __('Add contact page settings here).','vw-appointment-pro'),
        'priority'  => null,
        'panel' => 'vw_appoinment_pro_panel_id',
    ));
    $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_section_youtube_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_appoinment_pro_contact_page_section_youtube_link', array(
            'section' => 'vw_appoinment_pro_contact_page_section',
            'label' => __( 'Youtube Video', 'vw-appointment-pro' ),
            'description' => __( 'Watch our youtube video for installing contact form7 plugin and create contact form in WordPress.', 'vw-appointment-pro' ),
            'content' => sprintf( __( 'Check the button %1$sWatch Now%2$s', 'vw-appointment-pro' ), '<a href="' . esc_url( vw_appoinment_pro_contact_page_video  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
    )));
    $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_section_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_contact_page_section_setting',
        array(
          'label' => __('Section Heading Setting','vw-appointment-pro'),
          'section' => 'vw_appoinment_pro_contact_page_section'
        )
    ) );

    $wp_customize->add_setting('vw_appoinment_pro_contactpage_form_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_contactpage_form_title',array(
        'label' => __('Contact Form Title','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'setting'   => 'vw_appoinment_pro_contactpage_form_title',
        'type'  => 'text'
    ));
    $wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_contactpage_form_title', array(
        'selector' => '.contact-box .container',
        'render_callback' => 'vw_appoinment_pro_customize_partial_vw_appoinment_pro_contactpage_form_title',
    ));
    $wp_customize->add_setting('vw_appoinment_pro_contactpage_form_text',array(
        'default'   => '',
        'capability'         => 'edit_theme_options',
        'sanitize_callback'  => 'wp_kses_post'
    ));
    $wp_customize->add_control(new vw_appoinment_pro_Editor_Control($wp_customize,'vw_appoinment_pro_contactpage_form_text',array(
        'label' => __('Contact Form Text','vw-appointment-pro'),
        'description' => __('Add Contact Form Text','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'setting'   => 'vw_appoinment_pro_contactpage_form_text',       
    )));
    $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_section_map_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_contact_page_section_map_setting',
        array(
          'label' => __('Section Map Setting','vw-appointment-pro'),
          'section' => 'vw_appoinment_pro_contact_page_section'
        )
    ) );

    $wp_customize->add_setting('vw_appoinment_pro_address_longitude',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_appoinment_pro_address_longitude',array(
        'label' => __('Longitude','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'setting'   => 'vw_appoinment_pro_address_longitude',
        'type'=>'text'
    ));
    $wp_customize->add_setting('vw_appoinment_pro_address_latitude',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_appoinment_pro_address_latitude',array(
        'label' => __('Latitude','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'setting'   => 'vw_appoinment_pro_address_latitude',
        'type'=>'text'
    ));
    $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_section_email_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_contact_page_section_email_setting',
        array(
          'label' => __('Section Email Setting','vw-appointment-pro'),
          'section' => 'vw_appoinment_pro_contact_page_section'
        )
    ) );
    $wp_customize->add_setting(
      'vw_appoinment_pro_contact_page_section_email_icon',
      array(
        'default'     => 'far fa-envelope-open',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );
    $wp_customize->add_control(
      new vw_appoinment_pro_Fontawesome_Icon_Chooser(
        $wp_customize,
        'vw_appoinment_pro_contact_page_section_email_icon',
        array(
          'settings'    => 'vw_appoinment_pro_contact_page_section_email_icon',
          'section'   => 'vw_appoinment_pro_contact_page_section',
          'type'      => 'icon',
          'label'     => esc_html__( 'Choose Email Icon', 'vw-appointment-pro' ),
        )
      )
    );
    $wp_customize->add_setting('vw_appoinment_pro_contactpage_email_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_contactpage_email_title',array(
        'label' => __('Email Title','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'setting'   => 'vw_appoinment_pro_contactpage_email_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_appoinment_pro_contactpage_email_one',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_contactpage_email_one',array(
        'label' => __('First Email','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'setting'   => 'vw_appoinment_pro_contactpage_email_one',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_appoinment_pro_contactpage_email_two',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_contactpage_email_two',array(
        'label' => __('Second Email','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'setting'   => 'vw_appoinment_pro_contactpage_email_two',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_section_address_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_contact_page_section_address_setting',
        array(
          'label' => __('Section Address Setting','vw-appointment-pro'),
          'section' => 'vw_appoinment_pro_contact_page_section'
        )
    ) );
    $wp_customize->add_setting(
      'vw_appoinment_pro_contact_page_section_address_icon',
      array(
        'default'     => 'fas fa-map-marker-alt',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );
    $wp_customize->add_control(
      new vw_appoinment_pro_Fontawesome_Icon_Chooser(
        $wp_customize,
        'vw_appoinment_pro_contact_page_section_address_icon',
        array(
          'settings'    => 'vw_appoinment_pro_contact_page_section_address_icon',
          'section'   => 'vw_appoinment_pro_contact_page_section',
          'type'      => 'icon',
          'label'     => esc_html__( 'Choose Address Icon', 'vw-appointment-pro' ),
        )
      )
    );
    $wp_customize->add_setting('vw_appoinment_pro_address_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_address_title',array(
        'label' => __('Address Title','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'setting'   => 'vw_appoinment_pro_address_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_appoinment_pro_address',array(
        'default'   => '',
        'capability'         => 'edit_theme_options',
        'sanitize_callback'  => 'wp_kses_post'
    ));
    $wp_customize->add_control(new vw_appoinment_pro_Editor_Control($wp_customize,'vw_appoinment_pro_address',array(
        'label' => __('Address Text','vw-appointment-pro'),
        'description' => __('Add Address Text','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'setting'   => 'vw_appoinment_pro_address',       
    )));

    $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_section_phone_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_contact_page_section_phone_setting',
        array(
          'label' => __('Section Phone Setting','vw-appointment-pro'),
          'section' => 'vw_appoinment_pro_contact_page_section'
        )
    ) );
    $wp_customize->add_setting(
      'vw_appoinment_pro_contact_page_section_phone_icon',
      array(
        'default'     => 'fas fa-phone',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );
    $wp_customize->add_control(
      new vw_appoinment_pro_Fontawesome_Icon_Chooser(
        $wp_customize,
        'vw_appoinment_pro_contact_page_section_phone_icon',
        array(
          'settings'    => 'vw_appoinment_pro_contact_page_section_phone_icon',
          'section'   => 'vw_appoinment_pro_contact_page_section',
          'type'      => 'icon',
          'label'     => esc_html__( 'Choose Phone Icon', 'vw-appointment-pro' ),
        )
      )
    );
    $wp_customize->add_setting('vw_appoinment_pro_contactpage_phone_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_contactpage_phone_title',array(
        'label' => __('Phone Title','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'setting'   => 'vw_appoinment_pro_contactpage_phone_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_appoinment_pro_contactpage_phone_one',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_contactpage_phone_one',array(
        'label' => __('First Phone','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'setting'   => 'vw_appoinment_pro_contactpage_phone_one',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('vw_appoinment_pro_contactpage_phone_two',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_contactpage_phone_two',array(
        'label' => __('Second Phone','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'setting'   => 'vw_appoinment_pro_contactpage_phone_two',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_section_details_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_contact_page_section_details_setting',
        array(
          'label' => __('Section Text Color and Font Setting','vw-appointment-pro'),
          'section' => 'vw_appoinment_pro_contact_page_section'
        )
    ) );

    $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_contact_page_heading_color', array(
        'label' => __('Section Heading Color', 'vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'settings' => 'vw_appoinment_pro_contact_page_heading_color',
    )));

    $wp_customize->add_setting('vw_appoinment_pro_contact_page_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_appoinment_pro_contact_page_heading_font_family', array(
        'section'  => 'vw_appoinment_pro_contact_page_section',
        'label'    => __( 'Section Heading Font Family','vw-appointment-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_heading_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_contact_page_heading_font_size', array(
      'label' => __('Heading Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_contact_page_section',
      'settings' => 'vw_appoinment_pro_contact_page_heading_font_size',
      'type'  => 'text',
  )));
    $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_icon_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));   
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_contact_page_icon_color', array(
        'label' => __('Contact Icon Color', 'vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'settings' => 'vw_appoinment_pro_contact_page_icon_color',
    )));
    $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_content_title_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_contact_page_content_title_color', array(
        'label' => __('Contact Title Color', 'vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'settings' => 'vw_appoinment_pro_contact_page_content_title_color',
    )));

    $wp_customize->add_setting('vw_appoinment_pro_contact_page_content_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_appoinment_pro_contact_page_content_title_font_family', array(
        'section'  => 'vw_appoinment_pro_contact_page_section',
        'label'    => __( 'Contact Title Font Family','vw-appointment-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
        $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_content_title_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_contact_page_content_title_font_size', array(
      'label' => __('Contact Title Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_contact_page_section',
      'settings' => 'vw_appoinment_pro_contact_page_content_title_font_size',
      'type'  => 'text',
  )));
    $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_contact_page_text_color', array(
        'label' => __('Contact Text Color', 'vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'settings' => 'vw_appoinment_pro_contact_page_text_color',
    )));

    $wp_customize->add_setting('vw_appoinment_pro_contact_page_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_appoinment_pro_contact_page_text_font_family', array(
        'section'  => 'vw_appoinment_pro_contact_page_section',
        'label'    => __( 'Contact Text Font Family','vw-appointment-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
   $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_text_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_contact_page_text_font_size', array(
      'label' => __('Contact Text Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_contact_page_section',
      'settings' => 'vw_appoinment_pro_contact_page_text_font_size',
      'type'  => 'text',
  )));
    // add color picker control
    $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_form_title_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));   
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_contact_page_form_title_color', array(
        'label' => __('Contact Form Title Color', 'vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'settings' => 'vw_appoinment_pro_contact_page_form_title_color',
    )));

    $wp_customize->add_setting('vw_appoinment_pro_contact_page_contacts_form_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_appoinment_pro_contact_page_contacts_form_title_font_family', array(
        'section'  => 'vw_appoinment_pro_contact_page_section',
        'label'    => __( 'Contact Form Title Font Family','vw-appointment-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
   $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_contacts_form_title_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_contact_page_contacts_form_title_font_size', array(
      'label' => __('Contact Form Title Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_contact_page_section',
      'settings' => 'vw_appoinment_pro_contact_page_contacts_form_title_font_size',
      'type'  => 'text',
    )));
 
    $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_form_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));   
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_contact_page_form_text_color', array(
        'label' => __('Contact Form Text Color', 'vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'settings' => 'vw_appoinment_pro_contact_page_form_text_color',
    )));
    $wp_customize->add_setting('vw_appoinment_pro_contact_page_contacts_form_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_appoinment_pro_contact_page_contacts_form_text_font_family', array(
        'section'  => 'vw_appoinment_pro_contact_page_section',
        'label'    => __( 'Contact Form Text Font Family','vw-appointment-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
       $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_contacts_form_text_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_contact_page_contacts_form_text_font_size', array(
      'label' => __('Contact Form Text Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_contact_page_section',
      'settings' => 'vw_appoinment_pro_contact_page_contacts_form_text_font_size',
      'type'  => 'text',
    )));
    $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_form_button_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));   
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_contact_page_form_button_color', array(
        'label' => __('Contact Form Button Text Color', 'vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'settings' => 'vw_appoinment_pro_contact_page_form_button_color',
    )));
    $wp_customize->add_setting('vw_appoinment_pro_contact_page_contacts_form_button_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_appoinment_pro_contact_page_contacts_form_button_font_family', array(
        'section'  => 'vw_appoinment_pro_contact_page_section',
        'label'    => __( 'Contact Form Button Text Font Family','vw-appointment-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_contacts_form_button_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_contact_page_contacts_form_button_font_size', array(
      'label' => __('Contact Form Button Text Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_contact_page_section',
      'settings' => 'vw_appoinment_pro_contact_page_contacts_form_button_font_size',
      'type'  => 'text',
    )));
    $wp_customize->add_setting( 'vw_appoinment_pro_contact_page_button_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_contact_page_button_bgcolor', array(
        'label' => __('Form Button Background Color', 'vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_contact_page_section',
        'settings' => 'vw_appoinment_pro_contact_page_button_bgcolor',
    )));

    //Shortcode Section
    $wp_customize->add_section('vw_appoinment_pro_shortcode_section',array(
        'title' => __('Shortcode Settings','vw-appointment-pro'),
        'description'   => __('Use below shortcode here.','vw-appointment-pro'),
        'priority'  => null,
        'panel' => 'vw_appoinment_pro_panel_id',
    ));
    $wp_customize->add_setting( 'vw_appoinment_pro_shortcode',
       array(
           'default' => '',
           'transport' => 'postMessage',
           'sanitize_callback' => 'vw_startup_pro_text_sanitization'
       )
   );
   $wp_customize->add_control( new VW_Themes_Simple_Notice_Custom_Control( $wp_customize, 'vw_appoinment_pro_shortcode',
       array(
           'label' => __( 'Shortcodes', 'vw-appointment-pro'),
           'description' => __('Below  shortcodes are present in the theme. Simply copy and paste into any page or post and get their listing <br><br> <ul><li><strong>[vw-appointment-pro-services]</strong></li><br><li><strong>[vw-appointment-pro-team]</strong></li><li><strong>[vw-appointment-pro-testimonials]</strong></li></ul>','vw-appointment-pro' ),
           'section' => 'vw_appoinment_pro_shortcode_section'
       )
   ));
    $wp_customize->add_setting( 'vw_appoinment_pro_shortcode_section_youtube_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_appoinment_pro_shortcode_section_youtube_link', array(
          'section' => 'vw_appoinment_pro_shortcode_section',
          'label' => __( 'Youtube Video', 'vw-appointment-pro' ),
          'description' => __( 'Watch our youtube video for How to Create Pages Using Shortcode in WordPress.', 'vw-appointment-pro' ),
          'content' => sprintf( __( 'Check the button %1$sWatch Now%2$s', 'vw-appointment-pro' ), '<a href="' . esc_url( vw_appoinment_pro_shortcode_page_video  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
    ))); 
?>