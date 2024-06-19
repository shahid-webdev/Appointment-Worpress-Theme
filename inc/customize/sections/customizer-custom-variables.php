<?php


  $wp_customize->add_section('vw_appoinment_pro_section_ordering_settings',array(
      'title' => __('Section Ordering','vw-appointment-pro'),
      'description'=> __('Section Ordering.','vw-appointment-pro'),
      'panel' => 'vw_appoinment_pro_panel_id',
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_section_ordering_settings_repeater',
      array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control( new vw_appoinment_pro_Repeater_Custom_Control( $wp_customize, 'vw_appoinment_pro_section_ordering_settings_repeater',
      array(
        'label' => __( 'Section Reordering','vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_section_ordering_settings',
        'button_labels' => array(
          'add' => __( 'Add Row','vw-appointment-pro' ), 
        )
      )
  ) );

  // ---------- Padding Top ---------

  $wp_customize->add_setting( 'vw_appoinment_pro_section_ordering_padding_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_section_ordering_padding_settings',
    array(
    'label' => __('Section Padding Top Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_section_ordering_settings'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_about_us_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_appoinment_pro_about_us_padding_top',array(
      'label' => __('About Us Padding Top','vw-appointment-pro'),
      'description' => __('Add Padding Top Either in Percentage or Pixels ( Example 10px or 10%)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_section_ordering_settings',
      'setting'   => 'vw_appoinment_pro_about_us_padding_top',
      'type'  => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_feature_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_appoinment_pro_feature_padding_top',array(
      'label' => __('Features Padding Top','vw-appointment-pro'),
      'description' => __('Add Padding Top Either in Percentage or Pixels ( Example 10px or 10%)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_section_ordering_settings',
      'setting'   => 'vw_appoinment_pro_feature_padding_top',
      'type'  => 'text'
  ));
  
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_appoinment_pro_an_appointment_padding_top',array(
      'label' => __('An Appointment Padding Top','vw-appointment-pro'),
      'description' => __('Add Padding Top Either in Percentage or Pixels ( Example 10px or 10%)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_section_ordering_settings',
      'setting'   => 'vw_appoinment_pro_an_appointment_padding_top',
      'type'  => 'text'
  ));
    $wp_customize->add_setting('vw_appoinment_pro_services_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_appoinment_pro_services_padding_top',array(
      'label' => __('Services Padding Top','vw-appointment-pro'),
      'description' => __('Add Padding Top Either in Percentage or Pixels ( Example 10px or 10%)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_section_ordering_settings',
      'setting'   => 'vw_appoinment_pro_services_padding_top',
      'type'  => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_gallery_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_appoinment_pro_gallery_padding_top',array(
      'label' => __('Gallery Padding Top','vw-appointment-pro'),
      'description' => __('Add Padding Top Either in Percentage or Pixels ( Example 10px or 10%)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_section_ordering_settings',
      'setting'   => 'vw_appoinment_pro_gallery_padding_top',
      'type'  => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_team_padding_top',array(
      'label' => __('Our Team Padding Top','vw-appointment-pro'),
      'description' => __('Add Padding Top Either in Percentage or Pixels ( Example 10px or 10%)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_section_ordering_settings',
      'setting'   => 'vw_appoinment_pro_our_team_padding_top',
      'type'  => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_video_sec_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_appoinment_pro_video_sec_padding_top',array(
      'label' => __('Video Padding Top','vw-appointment-pro'),
      'description' => __('Add Padding Top Either in Percentage or Pixels ( Example 10px or 10%)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_section_ordering_settings',
      'setting'   => 'vw_appoinment_pro_video_sec_padding_top',
      'type'  => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_record_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_appoinment_pro_record_padding_top',array(
      'label' => __('Record Padding Top','vw-appointment-pro'),
      'description' => __('Add Padding Top Either in Percentage or Pixels ( Example 10px or 10%)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_section_ordering_settings',
      'setting'   => 'vw_appoinment_pro_record_padding_top',
      'type'  => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_why_choose_us_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_appoinment_pro_why_choose_us_padding_top',array(
      'label' => __('Why Choose Us Padding Top','vw-appointment-pro'),
      'description' => __('Add Padding Top Either in Percentage or Pixels ( Example 10px or 10%)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_section_ordering_settings',
      'setting'   => 'vw_appoinment_pro_why_choose_us_padding_top',
      'type'  => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_testimonials_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_appoinment_pro_testimonials_padding_top',array(
      'label' => __('Testimonials Padding Top','vw-appointment-pro'),
      'description' => __('Add Padding Top Either in Percentage or Pixels ( Example 10px or 10%)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_section_ordering_settings',
      'setting'   => 'vw_appoinment_pro_testimonials_padding_top',
      'type'  => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_blogs_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_blogs_padding_top',array(
      'label' => __('Our Blogs Padding Top','vw-appointment-pro'),
      'description' => __('Add Padding Top Either in Percentage or Pixels ( Example 10px or 10%)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_section_ordering_settings',
      'setting'   => 'vw_appoinment_pro_our_blogs_padding_top',
      'type'  => 'text'
  )); 
  $wp_customize->add_setting('vw_appoinment_pro_content_area_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_appoinment_pro_content_area_padding_top',array(
      'label' => __('Content Area Padding Top','vw-appointment-pro'),
      'description' => __('Add Padding Top Either in Percentage or Pixels ( Example 10px or 10%)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_section_ordering_settings',
      'setting'   => 'vw_appoinment_pro_content_area_padding_top',
      'type'  => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_footer_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_appoinment_pro_footer_padding_top',array(
      'label' => __('Footer Padding Top','vw-appointment-pro'),
      'description' => __('Add Padding Top Either in Percentage or Pixels ( Example 10px or 10%)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_section_ordering_settings',
      'setting'   => 'vw_appoinment_pro_footer_padding_top',
      'type'  => 'text'
  ));

  //General Color Pallete
  $wp_customize->add_section('vw_appoinment_pro_color_pallette',array(
      'title' => __('Typography / General settings','vw-appointment-pro'),
      'description'=> __('Typography settings','vw-appointment-pro'),
      'panel' => 'vw_appoinment_pro_panel_id',
  ));

  $wp_customize->add_setting('vw_appoinment_pro_radio_boxed_full_layout',
      array(
    'default' => 'full-Width',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_appoinment_pro_radio_boxed_full_layout',
      array(
    'type' => 'radio',
    'label' => __('Choose Boxed or Full Width Layout', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette',
    'choices' => array(
    'full-Width' => __('Full Width', 'vw-appointment-pro'),
    'boxed' => __('Boxed', 'vw-appointment-pro')
      ),
  ));

  $wp_customize->add_setting('vw_appoinment_pro_radio_boxed_full_layout_value',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_appoinment_pro_radio_boxed_full_layout_value',array(
    'label' => __('Add Boxed layout Width Here','vw-appointment-pro'),
    'description' => __('Boxed width is always set more than 1140px.','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette',
    'setting' => 'vw_appoinment_pro_radio_boxed_full_layout_value',
    'type'    => 'text'
    )
  );

  //This is Button Text FontFamily picker setting
  $wp_customize->add_setting('vw_appoinment_pro_body_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_body_font_family', array(
    'section'  => 'vw_appoinment_pro_color_pallette',
    'label'    => __( 'Body Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_body_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_appoinment_pro_body_font_size',array(
      'label' => __('Body Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_color_pallette',
      'setting' => 'vw_appoinment_pro_body_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_appoinment_pro_body_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_body_color', array(
    'label' => __('Body Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette',
    'settings' => 'vw_appoinment_pro_body_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_h1_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_h1_font_family', array(
    'section'  => 'vw_appoinment_pro_color_pallette',
    'label'    => __( 'H1 Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_h1_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_appoinment_pro_h1_font_size',array(
    'label' => __('H1 Font Size in px','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette',
    'setting' => 'vw_appoinment_pro_h1_font_size',
    'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_appoinment_pro_h1_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_h1_color', array(
    'label' => __('H1 Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette',
    'settings' => 'vw_appoinment_pro_h1_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_h2_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_h2_font_family', array(
      'section'  => 'vw_appoinment_pro_color_pallette',
      'label'    => __( 'H2 Font Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_h2_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_appoinment_pro_h2_font_size',array(
      'label' => __('H2 Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_color_pallette',
      'setting' => 'vw_appoinment_pro_h2_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_appoinment_pro_h2_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_h2_color', array(
    'label' => __('H2 Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette',
    'settings' => 'vw_appoinment_pro_h2_color',
  )));

  $wp_customize->add_setting('vw_appoinment_pro_h3_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_h3_font_family', array(
    'section'  => 'vw_appoinment_pro_color_pallette',
    'label'    => __( 'H3 Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_h3_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_appoinment_pro_h3_font_size',array(
    'label' => __('H3 Font Size in px','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette',
    'setting' => 'vw_appoinment_pro_h3_font_size',
    'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_appoinment_pro_h3_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_h3_color', array(
    'label' => __('H3 Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette',
    'settings' => 'vw_appoinment_pro_h3_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_h4_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_h4_font_family', array(
    'section'  => 'vw_appoinment_pro_color_pallette',
    'label'    => __( 'H4 Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_h4_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_appoinment_pro_h4_font_size',array(
    'label' => __('H4 Font Size in px','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette',
    'setting' => 'vw_appoinment_pro_h4_font_size',
    'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_appoinment_pro_h4_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_h4_color', array(
    'label' => __('H4 Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette',
    'settings' => 'vw_appoinment_pro_h4_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_h5_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_h5_font_family', array(
    'section'  => 'vw_appoinment_pro_color_pallette',
    'label'    => __( 'H5 Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_h5_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_appoinment_pro_h5_font_size',array(
    'label' => __('H5 Font Size in px','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette',
    'setting' => 'vw_appoinment_pro_h5_font_size',
    'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_appoinment_pro_h5_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_h5_color', array(
    'label' => __('H5 Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette',
    'settings' => 'vw_appoinment_pro_h5_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_h6_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_h6_font_family', array(
    'section'  => 'vw_appoinment_pro_color_pallette',
    'label'    => __( 'H6 Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_h6_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_appoinment_pro_h6_font_size',array(
    'label' => __('H6 Font Size in px','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette',
    'setting' => 'vw_appoinment_pro_h6_font_size',
    'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_appoinment_pro_h6_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_h6_color', array(
    'label' => __('H6 Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette',
    'settings' => 'vw_appoinment_pro_h6_color',
  )));
  //paragarph font family
  $wp_customize->add_setting('vw_appoinment_pro_paragarpah_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_paragarpah_font_family', array(
    'section'  => 'vw_appoinment_pro_color_pallette',
    'label'    => __( 'Paragraph Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_para_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_appoinment_pro_para_font_size',array(
    'label' => __('Paragraph Font Size in px','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette',
    'setting' => 'vw_appoinment_pro_para_font_size',
    'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_appoinment_pro_para_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_para_color', array(
    'label' => __('Paragraph Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette',
    'settings' => 'vw_appoinment_pro_para_color',
  )));

  $wp_customize->add_setting( 'vw_appoinment_pro_color_pallette1_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_color_pallette1_settings',
    array(
    'label' => __('Global Color 1 Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette'
  )));

  $wp_customize->add_setting( 'vw_appoinment_pro_global_color_one', array(
    'default' => '#3a80e7',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_global_color_one', array(
    'label' => __('Global Color 1', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette',
    'settings' => 'vw_appoinment_pro_global_color_one',
  )));
   $wp_customize->add_setting( 'vw_appoinment_pro_color_pallette_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_color_pallette_settings',
    array(
    'label' => __('Global Color 2 Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette'
  )));

  $wp_customize->add_setting( 'vw_appoinment_pro_global_color_two', array(
    'default' => '#fb6e79',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_global_color_two', array(
    'label' => __('Global Color 2', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_color_pallette',
    'settings' => 'vw_appoinment_pro_global_color_two',
  )));