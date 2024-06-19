<?php      

  // ------------ Other Plugins --------

  $wp_customize->add_section('vw_appoinment_pro_title_banner',array(
    'title' => __('Our Other New Plugins','vw-appointment-pro'),
    'description' => __('Purchase Our other new plugins','vw-appointment-pro'),
    'priority' => 4,
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_buy_title_banner_plugin', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
  ) );
  $wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_appoinment_pro_buy_title_banner_plugin', array(
    'section' => 'vw_appoinment_pro_title_banner',
    'label' => __( 'VW Title Banner Plugin', 'vw-appointment-pro' ),
    'description' => __( 'Need to add banner images? Check out VW Title Banner Plugin', 'vw-appointment-pro' ),
    'content' => sprintf( __( 'Check the button %1$sBuy Now%2$s', 'vw-appointment-pro' ), '<a href="' . esc_url( vw_appoinment_pro_bannerplugin  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
  )));  
  $wp_customize->add_setting( 'vw_appoinment_pro_buy_social_icon_plugin', array(
    'default' => '',
      'sanitize_callback' => 'esc_url_raw',
  ) );
  $wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_appoinment_pro_buy_social_icon_plugin', array(
    'section' => 'vw_appoinment_pro_title_banner',
    'label' => __( 'VW Social Media Plugin', 'vw-appointment-pro' ),
    'description' => __( 'Need to add Social Profiles ? Check out VW Social Media Plugin', 'vw-appointment-pro' ),
    'content' => sprintf( __( 'Check the button %1$sBuy Now%2$s', 'vw-appointment-pro' ), '<a href="' . esc_url( vw_appoinment_pro_social_media_plugin  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
  ))); 
  $wp_customize->add_setting( 'vw_appoinment_pro_buy_vw_preloader_plugin', array(
    'default' => '',
      'sanitize_callback' => 'esc_url_raw',
  ) );
  $wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_appoinment_pro_buy_vw_preloader_plugin', array(
    'section' => 'vw_appoinment_pro_title_banner',
    'label' => __( 'VW Preloader Plugin', 'vw-appointment-pro' ),
    'description' => __( 'Need to add Preloader ? Check out VW Preloader Plugin', 'vw-appointment-pro' ),
    'content' => sprintf( __( 'Check the button %1$sBuy Now%2$s', 'vw-appointment-pro' ), '<a href="' . esc_url( vw_appoinment_pro_preloader_plugin  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
  )));  
  $wp_customize->add_setting( 'vw_appoinment_pro_buy_vw_accordinan_plugin', array(
    'default' => '',
      'sanitize_callback' => 'esc_url_raw',
  ) );
  $wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_appoinment_pro_buy_vw_accordinan_plugin', array(
    'section' => 'vw_appoinment_pro_title_banner',
    'label' => __( 'VW Accordion Plugin', 'vw-appointment-pro' ),
    'description' => __( 'Need to add Dropdown Content ? Check out VW Accordion Plugin', 'vw-appointment-pro' ),
    'content' => sprintf( __( 'Check the button %1$sBuy Now%2$s', 'vw-appointment-pro' ), '<a href="' . esc_url( vw_appoinment_pro_accordion_plugin  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
  )));   

  // -------------- Our Features ----------------

  $wp_customize->add_section('vw_appoinment_pro_our_features',array(
    'title' => __('Our Features','vw-appointment-pro'),
    'description' => __('Add Content Here','vw-appointment-pro'),
    'panel' => 'vw_appoinment_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_features_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_features_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_features',
    'choices' => array(
    'Enable' => __('Enable', 'vw-appointment-pro'),
    'Disable' => __('Disable', 'vw-appointment-pro')
  ),));

  $wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_our_features_enable', array(
    'selector' => '#our-features .container',
    'render_callback' => 'vw_appoinment_pro_customize_partial_vw_appoinment_pro_our_features_enable',
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_our_features_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_our_features_settings',
    array(
    'label' => __('Section Background Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_features'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_features_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_features_bgcolor', array(
    'label' => __('Section Background Color', 'vw-appointment-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_features',
    'settings' => 'vw_appoinment_pro_our_features_bgcolor',
  )));

  $wp_customize->add_setting('vw_appoinment_pro_our_features_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_appoinment_pro_our_features_bgimage',array(
    'label' => __('Section Background Image','vw-appointment-pro'),
    'description' => __('Dimension 1600px * 900px','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_features',
    'settings' => 'vw_appoinment_pro_our_features_bgimage'
  )));
   $wp_customize->add_setting('vw_appoinment_pro_our_features_bg_image_attachment',
    array(
      'default' => 'Scroll',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_features_bg_image_attachment',
      array(
      'type' => 'radio',
      'label' => __('Background Image Attachment', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_features',
      'choices' => array(
      'Scroll' => __('Scroll', 'vw-appointment-pro'),
      'Fixed' => __('Fixed', 'vw-appointment-pro')
  ),));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_features_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_our_features_content_settings',
    array(
    'label' => __('Section Content Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_features'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_features_slider_loop',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   ));
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_our_features_slider_loop',
     array(
        'label' => esc_html__( 'Slider Loop', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_our_features'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_features_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_features_number',array(
    'label' => __('No Of Features To Show','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_features',
    'setting' => 'vw_appoinment_pro_our_features_number',
    'type'    => 'number'
  ));

  $why_feature=get_theme_mod('vw_appoinment_pro_our_features_number');
  for($i=1;$i<=$why_feature;$i++)
  {
    $wp_customize->add_setting( 'vw_appoinment_pro_our_features_feature_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_our_features_feature_settings'.$i,
      array(
      'label' => __('Feature ','vw-appointment-pro').$i,
      'section' => 'vw_appoinment_pro_our_features'
    )));
    $wp_customize->add_setting('vw_appoinment_pro_our_features_box_bg_color'.$i, array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_features_box_bg_color'.$i,array(
        'label' => __('Box Background Color ', 'vw-appointment-pro').$i,
        'section' => 'vw_appoinment_pro_our_features',
        'settings' => 'vw_appoinment_pro_our_features_box_bg_color'.$i,
    )));
    $wp_customize->add_setting('vw_appoinment_pro_our_features_icon'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'vw_appoinment_pro_our_features_icon'.$i,array(
      'label' => __('Feature Icon ','vw-appointment-pro').$i,
      'description' => __('Dimension 50px * 80px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_features',
      'settings' => 'vw_appoinment_pro_our_features_icon'.$i
    )));
    $wp_customize->add_setting('vw_appoinment_pro_our_features_icon_bg_color'.$i, array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_features_icon_bg_color'.$i,array(
        'label' => __('Feature Icon Background Color ', 'vw-appointment-pro').$i,
        'section' => 'vw_appoinment_pro_our_features',
        'settings' => 'vw_appoinment_pro_our_features_icon_bg_color'.$i,
    )));
    $wp_customize->add_setting('vw_appoinment_pro_our_features_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_appoinment_pro_our_features_title'.$i,array(
      'label' => __('Feature Title ','vw-appointment-pro').$i,
      'section' => 'vw_appoinment_pro_our_features',
      'setting' => 'vw_appoinment_pro_our_features_title'.$i,
      'type'    => 'text'
    ));
    $wp_customize->add_setting('vw_appoinment_pro_our_features_url'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_appoinment_pro_our_features_url'.$i,array(
      'label' => __('Feature Title Url ','vw-appointment-pro').$i,
      'section' => 'vw_appoinment_pro_our_features',
      'setting' => 'vw_appoinment_pro_our_features_url'.$i,
      'type'    => 'text'
    ));
    $wp_customize->add_setting('vw_appoinment_pro_our_features_box_icon'.$i,
      array(
        'default'     => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control(new vw_appoinment_pro_Fontawesome_Icon_Chooser($wp_customize,'vw_appoinment_pro_our_features_box_icon'.$i,array(
            'settings'    => 'vw_appoinment_pro_our_features_box_icon'.$i,
            'section'   => 'vw_appoinment_pro_our_features',
            'type'      => 'icon',
            'label'     => esc_html__( 'Choose Icon ', 'vw-appointment-pro' ).$i,
    )));
    $wp_customize->add_setting('vw_appoinment_pro_our_features_hover_icon_color'.$i, array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_features_hover_icon_color'.$i,array(
        'label' => __('Feature Hover Icon Color ', 'vw-appointment-pro').$i,
        'section' => 'vw_appoinment_pro_our_features',
        'settings' => 'vw_appoinment_pro_our_features_hover_icon_color'.$i,
    )));
    $wp_customize->add_setting('vw_appoinment_pro_our_features_hover_icon_bgcolor'.$i, array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_features_hover_icon_bgcolor'.$i,array(
        'label' => __('Feature Icon Hover Background Color ', 'vw-appointment-pro').$i,
        'section' => 'vw_appoinment_pro_our_features',
        'settings' => 'vw_appoinment_pro_our_features_hover_icon_bgcolor'.$i,
    )));
  }
  $wp_customize->add_setting( 'vw_appoinment_pro_features_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_features_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_features'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_features_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_features_main_heading_color', array(
      'label' => __('Feature Title Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_features',
      'settings' => 'vw_appoinment_pro_features_main_heading_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_features_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_features_main_heading_font_family', array(
      'section'  => 'vw_appoinment_pro_our_features',
      'label'    => __( 'Feature Title Font Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_features_main_heading_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_features_main_heading_font_size', array(
      'label' => __('Feature Title Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_features',
      'settings' => 'vw_appoinment_pro_features_main_heading_font_size',
      'type'  => 'text',
  )));

 
  /* ---------------------About Us------------------- */
  $wp_customize->add_section('vw_appoinment_pro_about_us',array(
    'title' => __('About Us','vw-appointment-pro'),
    'description' => __('About Us Details','vw-appointment-pro'),
    'priority'  => null,
    'panel' => 'vw_appoinment_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_appoinment_pro_about_us_enabledisable',array(
      'default'=> 'Enable',
      'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_appoinment_pro_about_us_enabledisable', array(
      'type' => 'radio',
      'label' => 'Do you want this section',
      'section' => 'vw_appoinment_pro_about_us',
      'choices' => array(
          'Enable' => 'Enable',
          'Disable' => 'Disable'
  ),));
  $wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_about_us_enabledisable', array(
    'selector' => '#about-us .container',
    'render_callback' => 'vw_appoinment_pro_customize_partial_vw_appoinment_pro_about_us_enabledisable',
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_about_us_bg_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_about_us_bg_settings',
    array(
    'label' => __('Background Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_about_us'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_about_us_bg_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_about_us_bg_color',array(
      'label' => __('Background Color', 'vw-appointment-pro'),
      'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_about_us',
      'settings' => 'vw_appoinment_pro_about_us_bg_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_about_us_bg_image',array(
      'default'   => '',
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_appoinment_pro_about_us_bg_image',array(
      'label' => __('Background image ','vw-appointment-pro'),
      'description' => __('Dimension (1600px * 800px)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_about_us',
      'settings' => 'vw_appoinment_pro_about_us_bg_image'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_about_us_bg_image_attachment',
    array(
      'default' => 'Scroll',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_about_us_bg_image_attachment',
      array(
      'type' => 'radio',
      'label' => __('Background Image Attachment', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_about_us',
      'choices' => array(
      'Scroll' => __('Scroll', 'vw-appointment-pro'),
      'Fixed' => __('Fixed', 'vw-appointment-pro')
  ),));
  $wp_customize->add_setting( 'vw_appoinment_pro_about_us_maincontent_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_about_us_maincontent_settings',
    array(
    'label' => __('Section Content Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_about_us'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_about_section_image',array(
      'default'   => '',
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_appoinment_pro_about_section_image',array(
      'label' => __('Section Image ','vw-appointment-pro'),
      'description' => __('Dimension (500px * 600px)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_about_us',
      'settings' => 'vw_appoinment_pro_about_section_image'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_about_us_small_heading',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_appoinment_pro_about_us_small_heading',array(
      'label' => __('About Small Heading','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_about_us',
      'setting'   => 'vw_appoinment_pro_about_us_small_heading',
      'type'  => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_about_us_heading',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_appoinment_pro_about_us_heading',array(
      'label' => __('About Main Heading','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_about_us',
      'setting'   => 'vw_appoinment_pro_about_us_heading',
      'type'  => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_about_us_text',array(
      'default'   => '',
      'capability'         => 'edit_theme_options',
      'sanitize_callback'  => 'wp_kses_post'
  ));
  $wp_customize->add_control(new vw_appoinment_pro_Editor_Control($wp_customize,'vw_appoinment_pro_about_us_text',array(
      'label' => __('About Paragraph (Max limit of text is 30)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_about_us',
      'setting'   => 'vw_appoinment_pro_about_us_text',       
  )));
  $wp_customize->add_setting('vw_appoinment_pro_about_us_btntext',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('vw_appoinment_pro_about_us_btntext',array(
    'label' => __('Button Text','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_about_us',
    'setting' => 'vw_appoinment_pro_about_us_btntext',
    'type'  => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_about_us_btnurl',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control('vw_appoinment_pro_about_us_btnurl',array(
    'label' => __('Button Url','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_about_us',
    'setting' => 'vw_appoinment_pro_about_us_btnurl',
    'type'  => 'text'
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_about_us_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_about_us_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_about_us'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_about_us_small_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_about_us_small_heading_color', array(
      'label' => __('Small Heading Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_about_us',
      'settings' => 'vw_appoinment_pro_about_us_small_heading_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_about_us_small_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_about_us_small_heading_font_family', array(
      'section'  => 'vw_appoinment_pro_about_us',
      'label'    => __( 'Section Small Heading Font Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_about_us_small_heading_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_about_us_small_heading_font_size',array(
      'label' => __('Small Heading Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_about_us',
      'setting' => 'vw_appoinment_pro_about_us_small_heading_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_about_us_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_about_us_main_heading_color', array(
      'label' => __('Section Main Heading Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_about_us',
      'settings' => 'vw_appoinment_pro_about_us_main_heading_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_about_us_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_about_us_main_heading_font_family', array(
      'section'  => 'vw_appoinment_pro_about_us',
      'label'    => __( 'Section Main Heading Font Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
    $wp_customize->add_setting('vw_appoinment_pro_about_us_main_heading_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_about_us_main_heading_font_size',array(
      'label' => __('Main Heading Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_about_us',
      'setting' => 'vw_appoinment_pro_about_us_main_heading_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_about_us_main_heading_border_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_about_us_main_heading_border_color', array(
    'label' => 'Heading Border Color',
    'section' => 'vw_appoinment_pro_about_us',
    'settings' => 'vw_appoinment_pro_about_us_main_heading_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_about_us_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_about_us_text_color', array(
      'label' => __('Section Text Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_about_us',
      'settings' => 'vw_appoinment_pro_about_us_text_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_about_us_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_about_us_text_font_family', array(
      'section'  => 'vw_appoinment_pro_about_us',
      'label'    => __( 'Section Text Font Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
   $wp_customize->add_setting('vw_appoinment_pro_about_us_text_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_about_us_text_font_size',array(
      'label' => __('Section Text Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_about_us',
      'setting' => 'vw_appoinment_pro_about_us_text_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_about_us_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_about_us_button_color', array(
      'label' => __('Button Text Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_about_us',
      'settings' => 'vw_appoinment_pro_about_us_button_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_about_us_button_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_about_us_button_font_family', array(
      'section'  => 'vw_appoinment_pro_about_us',
      'label'    => __( 'Button Text Font Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_about_us_button_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_about_us_button_font_size',array(
      'label' => __('Button Text Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_about_us',
      'setting' => 'vw_appoinment_pro_about_us_button_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_about_us_button_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_about_us_button_border_color', array(
      'label' => __('Button Border Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_about_us',
      'settings' => 'vw_appoinment_pro_about_us_button_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_about_us_button_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_about_us_button_hover_color', array(
      'label' => __('Button Hover Text Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_about_us',
      'settings' => 'vw_appoinment_pro_about_us_button_hover_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_about_us_button_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_about_us_button_hover_bgcolor', array(
    'label' => 'Button Hover Background Color',
    'section' => 'vw_appoinment_pro_about_us',
    'settings' => 'vw_appoinment_pro_about_us_button_hover_bgcolor',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_about_us_button_hover_border_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_about_us_button_hover_border_color', array(
    'label' => 'Button Hover Border Color',
    'section' => 'vw_appoinment_pro_about_us',
    'settings' => 'vw_appoinment_pro_about_us_button_hover_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_about_us_img_shape_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_about_us_img_shape_color', array(
    'label' => 'Image Shape Background Color',
    'section' => 'vw_appoinment_pro_about_us',
    'settings' => 'vw_appoinment_pro_about_us_img_shape_color',
  )));
  // ----------- An Appointment --------
  $wp_customize->add_section('vw_appoinment_pro_an_appointment',array(
    'title' => __('Appointment','vw-appointment-pro'),
    'description' => __('Appointment Details','vw-appointment-pro'),
    'priority'  => null,
    'panel' => 'vw_appoinment_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_enabledisable',array(
      'default'=> 'Enable',
      'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_appoinment_pro_an_appointment_enabledisable', array(
      'type' => 'radio',
      'label' => 'Do you want this section',
      'section' => 'vw_appoinment_pro_an_appointment',
      'choices' => array(
          'Enable' => 'Enable',
          'Disable' => 'Disable'
  ),));
  $wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_an_appointment_enabledisable', array(
    'selector' => '#an-appointment .container',
    'render_callback' => 'customize_partial_vw_appoinment_pro_an_appointment_enabledisable',
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_bg_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_bg_settings',
    array(
    'label' => __('Background Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_an_appointment'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_bg_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_bg_color',array(
      'label' => __('Background Color', 'vw-appointment-pro'),
      'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_bg_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_bg_image',array(
      'default'   => '',
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_appoinment_pro_an_appointment_bg_image',array(
      'label' => __('Background image ','vw-appointment-pro'),
      'description' => __('Dimension (1600px * 800px)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_bg_image'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_image_attachment',
    array(
      'default' => 'Scroll',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_an_appointment_image_attachment',
      array(
      'type' => 'radio',
      'label' => __('Background Image Attachment', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'choices' => array(
      'Scroll' => __('Scroll', 'vw-appointment-pro'),
      'Fixed' => __('Fixed', 'vw-appointment-pro')
  ),));
  $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_content_settings',
    array(
    'label' => __('Section Content Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_an_appointment'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_heading',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_an_appointment_heading',array(
      'label' => __('Section Main Heading','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'setting' => 'vw_appoinment_pro_an_appointment_heading',
      'type'  => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_contact_shortcode',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_an_appointment_contact_shortcode',array(
    'label' => __('Form Shortcode','vw-appointment-pro'),
    'description' => __('Add Contact Form Shortcode Here','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_an_appointment',
    'setting' => 'vw_appoinment_pro_an_appointment_contact_shortcode',
    'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_an_appointment'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_main_heading_color', array(
      'label' => __('Main Heading Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_main_heading_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_an_appointment_main_heading_font_family', array(
    'section'  => 'vw_appoinment_pro_an_appointment',
    'label'    => __( 'Main Heading Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_main_heading_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_an_appointment_main_heading_font_size',array(
      'label' => __('Main Heading Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'setting' => 'vw_appoinment_pro_an_appointment_main_heading_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_main_heading_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_main_heading_border_color', array(
      'label' => __('Main Heading Border Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_main_heading_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_form_field_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_form_field_color', array(
      'label' => __('Form Input Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_form_field_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_form_field_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_an_appointment_form_field_font_family', array(
    'section'  => 'vw_appoinment_pro_an_appointment',
    'label'    => __( 'Form Input Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_form_feild_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_an_appointment_form_feild_font_size',array(
      'label' => __('Form Input Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'setting' => 'vw_appoinment_pro_an_appointment_form_feild_font_size',
      'type'    => 'text'
  ));
   $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_form_field_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_form_field_border_color', array(
      'label' => __('Form Field Border Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_form_field_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_form_agree_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_form_agree_color', array(
      'label' => __('Form Agree Field Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_form_agree_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_form_agree_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_an_appointment_form_agree_font_family', array(
    'section'  => 'vw_appoinment_pro_an_appointment',
    'label'    => __( 'Form Agree Field Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_form_agree_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_an_appointment_form_agree_font_size',array(
      'label' => __('Form Agree Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'setting' => 'vw_appoinment_pro_an_appointment_form_agree_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_form_agree_checkbox_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_form_agree_checkbox_color', array(
      'label' => __('Form Agree Checkbox Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_form_agree_checkbox_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_form_submit_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_form_submit_color', array(
      'label' => __('Form Submit Button Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_form_submit_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_form_submit_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_an_appointment_form_submit_font_family', array(
    'section'  => 'vw_appoinment_pro_an_appointment',
    'label'    => __( 'Form Submit Button Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_form_submit_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_an_appointment_form_submit_font_size',array(
      'label' => __('Form Submit Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'setting' => 'vw_appoinment_pro_an_appointment_form_submit_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_form_submit_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_form_submit_bgcolor', array(
      'label' => __('Form Submit Button Background Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_form_submit_bgcolor',
  )));
   $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_form_cancel_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_form_cancel_color', array(
      'label' => __('Form Cancel Button Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_form_cancel_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_form_cancel_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_an_appointment_form_cancel_font_family', array(
    'section'  => 'vw_appoinment_pro_an_appointment',
    'label'    => __( 'Form Cancel Button Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_form_cancel_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_an_appointment_form_cancel_font_size',array(
      'label' => __('Form Cancel Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'setting' => 'vw_appoinment_pro_an_appointment_form_cancel_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_form_cancel_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_form_cancel_border_color', array(
      'label' => __('Form Cancel Button Border Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_form_cancel_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_calender_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_calender_bgcolor', array(
      'label' => __('Calender Background Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_calender_bgcolor',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_calender_month_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_calender_month_color', array(
      'label' => __('Calender Month Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_calender_month_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_calender_month_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_an_appointment_calender_month_font_family', array(
    'section'  => 'vw_appoinment_pro_an_appointment',
    'label'    => __( 'Calender Month Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_calender_month_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_an_appointment_calender_month_font_size',array(
      'label' => __('Calender Month Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'setting' => 'vw_appoinment_pro_an_appointment_calender_month_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_calender_nav_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_calender_nav_color', array(
      'label' => __('Calender Nav Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_calender_nav_color',
  )));
   $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_calender_day_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_calender_day_color', array(
      'label' => __('Calender Days Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_calender_day_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_calender_day_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_an_appointment_calender_day_font_family', array(
    'section'  => 'vw_appoinment_pro_an_appointment',
    'label'    => __( 'Calender Days Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_calender_day_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_an_appointment_calender_day_font_size',array(
      'label' => __('Calender Days Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'setting' => 'vw_appoinment_pro_an_appointment_calender_day_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_calender_day_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_calender_day_border_color', array(
      'label' => __('Calender Days Border Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_calender_day_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_calender_date_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_calender_date_color', array(
      'label' => __('Calender Date Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_calender_date_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_calender_date_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_an_appointment_calender_date_font_family', array(
    'section'  => 'vw_appoinment_pro_an_appointment',
    'label'    => __( 'Calender Date Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_an_appointment_calender_date_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_an_appointment_calender_date_font_size',array(
      'label' => __('Calender Date Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'setting' => 'vw_appoinment_pro_an_appointment_calender_date_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_an_appointment_calender_activeday_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_an_appointment_calender_activeday_border_color', array(
      'label' => __('Calender current Days Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_an_appointment',
      'settings' => 'vw_appoinment_pro_an_appointment_calender_activeday_border_color',
  )));
  //--------------------- Our Services ------------------------

  $wp_customize->add_section('vw_appoinment_pro_our_services',array(
    'title' => __(' Our Services ','vw-appointment-pro'),
    'description' => __('Add Content Here','vw-appointment-pro'),
    'panel' => 'vw_appoinment_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_services_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_services',
    'choices' => array(
    'Enable' => __('Enable', 'vw-appointment-pro'),
    'Disable' => __('Disable', 'vw-appointment-pro')
  ),));

  $wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_our_services_enable', array(
    'selector' => '#our-services .container',
    'render_callback' => 'vw_appoinment_pro_customize_partial_vw_appoinment_pro_our_services_enable',
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_our_services_settings',
    array(
    'label' => __('Section Background Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_services'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_bgcolor', array(
    'label' => __('Section Background Color', 'vw-appointment-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_services',
    'settings' => 'vw_appoinment_pro_our_services_bgcolor',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_appoinment_pro_our_services_bgimage',array(
    'label' => __('Section Background Image','vw-appointment-pro'),
    'description' => __('Dimension 1600px * 900px','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_services',
    'settings' => 'vw_appoinment_pro_our_services_bgimage'
  )));  
 $wp_customize->add_setting('vw_appoinment_pro_our_services_image_bg',
    array(
      'default' => 'Scroll',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_services_image_bg',
      array(
      'type' => 'radio',
      'label' => __('Background Image Attachment', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'choices' => array(
      'Scroll' => __('Scroll', 'vw-appointment-pro'),
      'Fixed' => __('Fixed', 'vw-appointment-pro')
  ),));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_our_services_content_settings',
    array(
    'label' => __('Section Content Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_services'
  )));
    $wp_customize->add_setting('vw_appoinment_pro_our_services_small_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_services_small_heading',array(
    'label' => __('Section Small Heading','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_services',
    'setting' => 'vw_appoinment_pro_our_services_small_heading',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_services_main_heading',array(
    'label' => __('Section Main Heading','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_services',
    'setting' => 'vw_appoinment_pro_our_services_main_heading',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_button_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_services_button_text',array(
    'label' => __('Services Top Button Text ','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_services',
    'setting' => 'vw_appoinment_pro_our_services_button_text',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_button_url',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_services_button_url',array(
    'label' => __('Services Top Button Text Url ','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_services',
    'setting' => 'vw_appoinment_pro_our_services_button_url',
    'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_working_area_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_working_area_content_settings',
    array(
    'label' => __('Working Area Content Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_services'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_working_area_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_working_area_title',array(
    'label' => __('Working Area Heading','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_services',
    'setting' => 'vw_appoinment_pro_working_area_title',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_working_area_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_working_area_text',array(
    'label' => __('Working Area Text','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_services',
    'setting' => 'vw_appoinment_pro_working_area_text',
    'type'    => 'textarea'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_working_area_box_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_working_area_box_number',array(
    'label' => __('No Of Area To Show','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_services',
    'setting' => 'vw_appoinment_pro_working_area_box_number',
    'type'    => 'number'
  ));
  $area_no=get_theme_mod('vw_appoinment_pro_working_area_box_number');
  for($i=1;$i<=$area_no;$i++)
  {
    $wp_customize->add_setting( 'vw_appoinment_pro_working_area_box_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_working_area_box_settings'.$i,
      array(
      'label' => __('Area Box ','vw-appointment-pro').$i,
      'section' => 'vw_appoinment_pro_our_services'
    )));
    $wp_customize->add_setting('vw_appoinment_pro_working_area_box_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_appoinment_pro_working_area_box_title'.$i,array(
      'label' => __('Working Area Title','vw-appointment-pro').$i,
      'section' => 'vw_appoinment_pro_our_services',
      'setting' => 'vw_appoinment_pro_working_area_box_title'.$i,
      'type'    => 'text'
    ));
  }
  $wp_customize->add_setting('vw_appoinment_pro_working_area_box_button_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_working_area_box_button_text',array(
    'label' => __('Working Area Button Text ','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_services',
    'setting' => 'vw_appoinment_pro_working_area_box_button_text',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_working_area_box_button_url',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_working_area_box_button_url',array(
    'label' => __('Working Area Button Text Url ','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_services',
    'setting' => 'vw_appoinment_pro_working_area_box_button_url',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_services_number',array(
    'label' => __('No Of Services To Show','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_services',
    'setting' => 'vw_appoinment_pro_our_services_number',
    'type'    => 'number'
  ));
    $why_feakture=get_theme_mod('vw_appoinment_pro_our_services_number');
  for($i=1;$i<=$why_feakture;$i++)
  {
  $wp_customize->add_setting('vw_appoinment_pro_our_service_box_bg_color'.$i, array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_service_box_bg_color'.$i,array(
        'label' => __('Box Background Color ', 'vw-appointment-pro').$i,
        'section' => 'vw_appoinment_pro_our_services',
        'settings' => 'vw_appoinment_pro_our_service_box_bg_color'.$i,
    )));
  }
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_color_settings',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_our_services_color_settings',
    array(
      'label' => __('Section Content Color And Font Settings','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_small_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_small_heading_color', array(
      'label' => __('Small Heading Gradient Color 1', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'settings' => 'vw_appoinment_pro_our_services_small_heading_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_small_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_our_services_small_heading_font_family', array(
      'section'  => 'vw_appoinment_pro_our_services',
      'label'    => __('Section Small Heading Font Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_small_heading_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_services_small_heading_font_size',array(
      'label' => __('Small Heading Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'setting' => 'vw_appoinment_pro_our_services_small_heading_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_main_heading_color', array(
      'label' => __('Section Main Heading Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'settings' => 'vw_appoinment_pro_our_services_main_heading_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_our_services_main_heading_font_family', array(
      'section'  => 'vw_appoinment_pro_our_services',
      'label'    => __('Section Main Heading Font Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_main_heading_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_services_main_heading_font_size',array(
      'label' => __('Main Heading Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'setting' => 'vw_appoinment_pro_our_services_main_heading_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_main_heading_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_main_heading_border_color', array(
      'label' => __('Section Heading Border Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'settings' => 'vw_appoinment_pro_our_services_main_heading_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_top_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_top_button_color', array(
      'label' => __('Button Text Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'settings' => 'vw_appoinment_pro_our_services_top_button_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_top_button_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_our_services_top_button_font_family', array(
      'section'  => 'vw_appoinment_pro_our_services',
      'label'    => __( 'Button Text Font Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_top_button_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_services_top_button_font_size',array(
      'label' => __('Button Text Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'setting' => 'vw_appoinment_pro_our_services_top_button_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_top_button_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_top_button_border_color', array(
      'label' => __('Button Border Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'settings' => 'vw_appoinment_pro_our_services_top_button_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_top_button_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_top_button_hover_color', array(
      'label' => __('Button Hover Text Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'settings' => 'vw_appoinment_pro_our_services_top_button_hover_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_top_button_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_top_button_hover_bgcolor', array(
    'label' => 'Button Hover Background Color',
    'section' => 'vw_appoinment_pro_our_services',
    'settings' => 'vw_appoinment_pro_our_services_top_button_hover_bgcolor',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_top_button_hover_border_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_top_button_hover_border_color', array(
    'label' => 'Button Hover Border Color',
    'section' => 'vw_appoinment_pro_our_services',
    'settings' => 'vw_appoinment_pro_our_services_top_button_hover_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_para_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_para_title_color', array(
      'label' => __('Para Title Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'settings' => 'vw_appoinment_pro_our_services_para_title_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_para_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_our_services_para_title_font_family', array(
      'section'  => 'vw_appoinment_pro_our_services',
      'label'    => __('Para Title Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_para_title_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_services_para_title_font_size',array(
      'label' => __('Para Title Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'setting' => 'vw_appoinment_pro_our_services_para_title_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_text_color', array(
      'label' => __('Text Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'settings' => 'vw_appoinment_pro_our_services_text_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_our_services_text_font_family', array(
      'section'  => 'vw_appoinment_pro_our_services',
      'label'    => __('Text Font Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_text_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_services_text_font_size',array(
      'label' => __('Text Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'setting' => 'vw_appoinment_pro_our_services_text_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_icon_color', array(
      'label' => __('List Icon Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'settings' => 'vw_appoinment_pro_our_services_icon_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_list_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_list_text_color', array(
      'label' => __('List Text Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'settings' => 'vw_appoinment_pro_our_services_list_text_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_list_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_our_services_list_text_font_family', array(
      'section'  => 'vw_appoinment_pro_our_services',
      'label'    => __('List Text Font Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_list_text_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_services_list_text_font_size',array(
      'label' => __('List Text Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'setting' => 'vw_appoinment_pro_our_services_list_text_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_button_color', array(
      'label' => __('Bottom Button Text Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'settings' => 'vw_appoinment_pro_our_services_button_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_button_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_our_services_button_font_family', array(
      'section'  => 'vw_appoinment_pro_our_services',
      'label'    => __('Bottom Button Text Font Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_button_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_services_button_font_size',array(
      'label' => __('Bottom Button Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'setting' => 'vw_appoinment_pro_our_services_button_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_button_bg_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_button_bg_color', array(
      'label' => __('Button Background Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'settings' => 'vw_appoinment_pro_our_services_button_bg_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_button_hover_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_button_hover_text_color', array(
      'label' => __('Button Hover Text Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'settings' => 'vw_appoinment_pro_our_services_button_hover_text_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_button_hover_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_button_hover_border_color', array(
      'label' => __('Button Hover Border Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'settings' => 'vw_appoinment_pro_our_services_button_hover_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_button_hover_bg_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_button_hover_bg_color', array(
      'label' => __('Button Hover Background Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'settings' => 'vw_appoinment_pro_our_services_button_hover_bg_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_services_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_services_title_color', array(
      'label' => __('Service Title Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'settings' => 'vw_appoinment_pro_our_services_title_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_our_services_title_font_family', array(
      'section'  => 'vw_appoinment_pro_our_services',
      'label'    => __('Service Title Font Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_services_title_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_services_title_font_size',array(
      'label' => __('Service Title Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_services',
      'setting' => 'vw_appoinment_pro_our_services_title_font_size',
      'type'    => 'text'
  ));
  // ------------ Gallery -------------

  $wp_customize->add_section('vw_appoinment_pro_gallery',array(
    'title' => __('Gallery','vw-appointment-pro'),
    'description' => __('Add Gallery Here','vw-appointment-pro'),
    'panel' => 'vw_appoinment_pro_panel_id',
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_gallery_video', array(
    'default' => '',
      'sanitize_callback' => 'esc_url_raw',
  ) );
  $wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_appoinment_pro_gallery_video', array(
      'section' => 'vw_appoinment_pro_gallery',
      'label' => __( 'Youtube video', 'vw-appointment-pro' ),
      'description' => __( 'Watch our youtube video for How to add gallery using Customizer','vw-appointment-pro' ),
      'content' => __( '<a href="https://www.youtube.com/watch?v=O6elK2kSHQw" target="_blank" class="button button-secondary alignright review_st">watch Now
        </a>', 'vw-appointment-pro' ),
  )));
  $wp_customize->add_setting('vw_appoinment_pro_gallery_enable',
    array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_appoinment_pro_gallery_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_gallery',
    'choices' => array(
    'Enable' => __('Enable', 'vw-appointment-pro'),
    'Disable' => __('Disable', 'vw-appointment-pro')
  ),));
  $wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_gallery_enable', array(
    'selector' => '#gellery .gellery-head h3',
    'render_callback' => 'vw_appoinment_pro_customize_partial_vw_appoinment_pro_gallery_enable',
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_gallery_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_gallery_settings',
    array(
    'label' => __('Section Background Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_gallery'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_gallery_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_gallery_bgcolor', array(
    'label' => __('Section Background Color', 'vw-appointment-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_gallery',
    'settings' => 'vw_appoinment_pro_gallery_bgcolor',
  )));

  $wp_customize->add_setting('vw_appoinment_pro_gallery_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_appoinment_pro_gallery_bgimage',array(
    'label' => __('Section Background Image','vw-appointment-pro'),
    'description' => __('Dimension 1600px * 900px','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_gallery',
    'settings' => 'vw_appoinment_pro_gallery_bgimage'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_gallery_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_gallery_content_settings',
    array(
    'label' => __('Section Content Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_gallery'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_gallery_small_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_gallery_small_heading',array(
    'label' => __('Section Small Heading','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_gallery',
    'setting' => 'vw_appoinment_pro_gallery_small_heading',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_gallery_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_gallery_main_heading',array(
    'label' => __('Section Main Heading','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_gallery',
    'setting' => 'vw_appoinment_pro_gallery_main_heading',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_gallery_shortcode',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_appoinment_pro_gallery_shortcode',array(
      'label' => __('Shortcode','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_gallery',
      'description' => __('Gallery Shortcode [vw-galleryshow vw_gallery="48" numberofitem="8" bootstraponecolsize="3"]', 'vw-appointment-pro'),
      'setting' => 'vw_appoinment_pro_gallery_shortcode',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_appoinment_pro_gallery_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_gallery_color_settings',
  array(
    'label' => __('Section Content Color And Font Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_gallery'
  )));

  $wp_customize->add_setting( 'vw_appoinment_pro_gallery_small_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_gallery_small_heading_color', array(
    'label' => __('Section Small Heading Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_gallery',
    'settings' => 'vw_appoinment_pro_gallery_small_heading_color',
  )));

  $wp_customize->add_setting('vw_appoinment_pro_gallery_small_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_gallery_small_heading_font_family', array(
    'section'  => 'vw_appoinment_pro_gallery',
    'label'    => __('Section Small Heading Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_gallery_small_heading_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_gallery_small_heading_font_size',array(
      'label' => __('Section Small Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_gallery',
      'setting' => 'vw_appoinment_pro_gallery_small_heading_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_gallery_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_gallery_main_heading_color', array(
    'label' => __('Section Main Heading Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_gallery',
    'settings' => 'vw_appoinment_pro_gallery_main_heading_color',
  )));

  $wp_customize->add_setting('vw_appoinment_pro_gallery_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_gallery_main_heading_font_family', array(
    'section'  => 'vw_appoinment_pro_gallery',
    'label'    => __('Section Main Heading Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  )); 
   $wp_customize->add_setting('vw_appoinment_pro_gallery_main_heading_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_gallery_main_heading_font_size',array(
      'label' => __('Section Main Heading Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_gallery',
      'setting' => 'vw_appoinment_pro_gallery_main_heading_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_gallery_main_heading_border_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_gallery_main_heading_border_color', array(
    'label' => __('Section Main Heading Border Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_gallery',
    'settings' => 'vw_appoinment_pro_gallery_main_heading_border_color',
  )));
    // ---------- Our Team -----------

  $wp_customize->add_section('vw_appoinment_pro_our_team',array(
    'title' => __('Our Team','vw-appointment-pro'),
    'description' => __('Our Team Details','vw-appointment-pro'),
    'priority'  => null,
    'panel' => 'vw_appoinment_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_enabledisable',array(
      'default'=> 'Enable',
      'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_team_enabledisable', array(
      'type' => 'radio',
      'label' => 'Do you want this section',
      'section' => 'vw_appoinment_pro_our_team',
      'choices' => array(
          'Enable' => 'Enable',
          'Disable' => 'Disable'
      ),
  ));
  $wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_our_team_enabledisable', array(
    'selector' => '#our-team .container',
    'render_callback' => 'vw_appoinment_pro_customize_partial_vw_appoinment_pro_our_team_enabledisable',
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_bg_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_our_team_bg_settings',
    array(
    'label' => __('Background Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_team'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_bg_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_bg_color',array(
      'label' => __('Background Color', 'vw-appointment-pro'),
      'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'settings' => 'vw_appoinment_pro_our_team_bg_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_bg_image',array(
      'default'   => '',
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_appoinment_pro_our_team_bg_image',array(
      'label' => __('Background Image ','vw-appointment-pro'),
      'description' => __('Dimension (1600px * 800px)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'settings' => 'vw_appoinment_pro_our_team_bg_image'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_bg_image_attachment',
    array(
      'default' => 'Scroll',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_team_bg_image_attachment',
      array(
      'type' => 'radio',
      'label' => __('Background Image Attachment', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'choices' => array(
      'Scroll' => __('Scroll', 'vw-appointment-pro'),
      'Fixed' => __('Fixed', 'vw-appointment-pro')
  ),));
 $wp_customize->add_setting( 'vw_appoinment_pro_our_team_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_our_team_content_settings',
    array(
    'label' => __('Section Content Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_team'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_slider_loop',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   ));
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_our_team_slider_loop',
     array(
        'label' => esc_html__( 'Slider Loop', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_our_team'
  )));

  $wp_customize->add_setting('vw_appoinment_pro_our_team_small_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_team_small_heading',array(
    'label' => __('Section Small Heading','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_team',
    'setting' => 'vw_appoinment_pro_our_team_small_heading',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_team_main_heading',array(
    'label' => __('Section Main Heading','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_team',
    'setting' => 'vw_appoinment_pro_our_team_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('vw_appoinment_pro_our_team_button_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_team_button_text',array(
    'label' => __('Section Button Text','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_team',
    'setting' => 'vw_appoinment_pro_our_team_button_text',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('vw_appoinment_pro_our_team_button_url',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_team_button_url',array(
    'label' => __('Section Button Url','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_team',
    'setting' => 'vw_appoinment_pro_our_team_button_url',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('vw_appoinment_pro_our_team_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_team_number',array(
    'label' => __('No Of Team To Show','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_team',
    'setting' => 'vw_appoinment_pro_our_team_number',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_our_team_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_team'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_small_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_small_heading_color', array(
      'label' => __('Small Heading Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'settings' => 'vw_appoinment_pro_our_team_small_heading_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_small_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_our_team_small_heading_font_family', array(
      'section'  => 'vw_appoinment_pro_our_team',
      'label'    => __( 'Section Small Heading Font Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_small_heading_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_team_small_heading_font_size',array(
      'label' => __('Small Heading Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'setting' => 'vw_appoinment_pro_our_team_small_heading_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_main_heading_color', array(
      'label' => __('Main Heading Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'settings' => 'vw_appoinment_pro_our_team_main_heading_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_our_team_main_heading_font_family', array(
    'section'  => 'vw_appoinment_pro_our_team',
    'label'    => __( 'Main Heading Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_main_heading_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_team_main_heading_font_size',array(
      'label' => __('Main Heading Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'setting' => 'vw_appoinment_pro_our_team_main_heading_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_main_heading_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_main_heading_border_color', array(
      'label' => __('Heading Border Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'settings' => 'vw_appoinment_pro_our_team_main_heading_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_button_color', array(
      'label' => __('Team Button Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'settings' => 'vw_appoinment_pro_our_team_button_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_button_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_our_team_button_font_family', array(
    'section'  => 'vw_appoinment_pro_our_team',
    'label'    => __( 'Team Button Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_button_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
  $wp_customize->add_control('vw_appoinment_pro_our_team_button_font_size',array(
      'label' => __('Team Button Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'setting' => 'vw_appoinment_pro_our_team_button_font_size',
      'type'    => 'text'
    ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_button_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_button_border_color', array(
      'label' => __('Button Border Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'settings' => 'vw_appoinment_pro_our_team_button_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_button_hover_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_button_hover_text_color', array(
    'label' => 'Button hover Text Color',
    'section' => 'vw_appoinment_pro_our_team',
    'settings' => 'vw_appoinment_pro_our_team_button_hover_text_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_button_hover_bg_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_button_hover_bg_color', array(
    'label' => 'Button hover Background Color',
    'section' => 'vw_appoinment_pro_our_team',
    'settings' => 'vw_appoinment_pro_our_team_button_hover_bg_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_button_hover_border_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_button_hover_border_color', array(
    'label' => 'Button hover Border Color',
    'section' => 'vw_appoinment_pro_our_team',
    'settings' => 'vw_appoinment_pro_our_team_button_hover_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_title_color', array(
      'label' => __('Team Title Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'settings' => 'vw_appoinment_pro_our_team_title_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_our_team_title_font_family', array(
    'section'  => 'vw_appoinment_pro_our_team',
    'label'    => __( 'Team Title Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_title_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
  $wp_customize->add_control('vw_appoinment_pro_our_team_title_font_size',array(
      'label' => __('Team Title Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'setting' => 'vw_appoinment_pro_our_team_title_font_size',
      'type'    => 'text'
    ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_desig_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_desig_color', array(
      'label' => __('Team Designation Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'settings' => 'vw_appoinment_pro_our_team_desig_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_desig_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_our_team_desig_font_family', array(
    'section'  => 'vw_appoinment_pro_our_team',
    'label'    => __( 'Team Designation Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_desig_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
  $wp_customize->add_control('vw_appoinment_pro_our_team_desig_font_size',array(
      'label' => __('Team Designation Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'setting' => 'vw_appoinment_pro_our_team_desig_font_size',
      'type'    => 'text'
    ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_social_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_social_icon_color', array(
    'label' => __('Team Social Icon Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_team',
    'settings' => 'vw_appoinment_pro_our_team_social_icon_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_social_icon_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_social_icon_hover_color', array(
    'label' => __('Social Icon Hover Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_team',
    'settings' => 'vw_appoinment_pro_our_team_social_icon_hover_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_social_icon_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_social_icon_hover_bgcolor', array(
    'label' => __('Social Icon Hover Background Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_team',
    'settings' => 'vw_appoinment_pro_our_team_social_icon_hover_bgcolor',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_phone_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_phone_color', array(
      'label' => __('Team Phone Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'settings' => 'vw_appoinment_pro_our_team_phone_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_phone_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_our_team_phone_font_family', array(
    'section'  => 'vw_appoinment_pro_our_team',
    'label'    => __( 'Team Phone Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_phone_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
  $wp_customize->add_control('vw_appoinment_pro_our_team_phone_font_size',array(
      'label' => __('Team Phone Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'setting' => 'vw_appoinment_pro_our_team_phone_font_size',
      'type'    => 'text'
    ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_phone_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_phone_icon_color', array(
    'label' => __('Team Phone Icon Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_team',
    'settings' => 'vw_appoinment_pro_our_team_phone_icon_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_email_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_email_color', array(
      'label' => __('Team Email Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'settings' => 'vw_appoinment_pro_our_team_email_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_email_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_our_team_email_font_family', array(
    'section'  => 'vw_appoinment_pro_our_team',
    'label'    => __( 'Team Email Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_team_email_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
  $wp_customize->add_control('vw_appoinment_pro_our_team_email_font_size',array(
      'label' => __('Team Email Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_team',
      'setting' => 'vw_appoinment_pro_our_team_email_font_size',
      'type'    => 'text'
    ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_email_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_email_icon_color', array(
    'label' => __('Team Email Icon Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_team',
    'settings' => 'vw_appoinment_pro_our_team_email_icon_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_team_image_overlay_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_team_image_overlay_color', array(
    'label' => __('Image Overlay Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_team',
    'settings' => 'vw_appoinment_pro_our_team_image_overlay_color',
  )));
  // ----------- Video Sec --------
  $wp_customize->add_section('vw_appoinment_pro_video_sec',array(
    'title' => __('Video','vw-appointment-pro'),
    'description' => __('Video','vw-appointment-pro'),
    'priority'  => null,
    'panel' => 'vw_appoinment_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_appoinment_pro_video_sec_enabledisable',array(
      'default'=> 'Enable',
      'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_appoinment_pro_video_sec_enabledisable', array(
      'type' => 'radio',
      'label' => 'Do you want this section',
      'section' => 'vw_appoinment_pro_video_sec',
      'choices' => array(
          'Enable' => 'Enable',
          'Disable' => 'Disable'
      ),
  ));
  $wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_video_sec_enabledisable', array(
    'selector' => '#video_sec .container',
    'render_callback' => 'customize_partial_pro_video_sec_enabledisable',
  ));
  
  $wp_customize->add_setting( 'vw_appoinment_pro_video_sec_bg_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_video_sec_bg_settings',
    array(
    'label' => __('Background Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_video_sec'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_video_sec_bg_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_video_sec_bg_color',array(
      'label' => __('Background Color', 'vw-appointment-pro'),
      'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_video_sec',
      'settings' => 'vw_appoinment_pro_video_sec_bg_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_video_sec_bg_image',array(
      'default'   => '',
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_appoinment_pro_video_sec_bg_image',array(
      'label' => __('Background image ','vw-appointment-pro'),
      'description' => __('Dimension (1600px * 800px)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_video_sec',
      'settings' => 'vw_appoinment_pro_video_sec_bg_image'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_video_sec_image_attachment',
    array(
      'default' => 'Scroll',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_video_sec_image_attachment',
      array(
      'type' => 'radio',
      'label' => __('Background Image Attachment', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_video_sec',
      'choices' => array(
      'Scroll' => __('Scroll', 'vw-appointment-pro'),
      'Fixed' => __('Fixed', 'vw-appointment-pro')
  ),));
  $wp_customize->add_setting( 'vw_appoinment_pro_video_sec_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_video_sec_content_settings',
    array(
    'label' => __('Section Content Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_video_sec'
  )));
 $wp_customize->add_setting('vw_appoinment_pro_video_sec_video_hour_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_video_sec_video_hour_text',array(
    'label' => __('Hour Title','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_video_sec',
    'setting' => 'vw_appoinment_pro_video_sec_video_hour_text',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_video_sec_video_phone_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_video_sec_video_phone_text',array(
    'label' => __('Video Call Title','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_video_sec',
    'setting' => 'vw_appoinment_pro_video_sec_video_phone_text',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_video_sec_video_play_icon',array(
    'default'     => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new vw_appoinment_pro_Fontawesome_Icon_Chooser($wp_customize,'vw_appoinment_pro_video_sec_video_play_icon',array(
    'settings'    => 'vw_appoinment_pro_video_sec_video_play_icon',
    'section'   => 'vw_appoinment_pro_video_sec',
    'type'      => 'icon',
    'label'     => esc_html__( 'Choose Play Icon', 'vw-appointment-pro' ),
  )));
  $wp_customize->add_setting('vw_appoinment_pro_video_sec_video_url',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_video_sec_video_url',array(
    'label' => __('Video Url','vw-appointment-pro'),
    'description' => __('Add Youtube Video Url Here From (https://www.youtube.com/)','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_video_sec',
    'setting' => 'vw_appoinment_pro_video_sec_video_url',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_video_sec_video_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_video_sec_video_heading',array(
    'label' => __('Section Heading','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_video_sec',
    'setting' => 'vw_appoinment_pro_video_sec_video_heading',
    'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_video_sec_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_video_sec_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_video_sec'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_video_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_video_icon_color', array(
      'label' => __('Video Icon Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_video_sec',
      'settings' => 'vw_appoinment_pro_video_icon_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_video_icon_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_video_icon_bgcolor', array(
      'label' => __('Video Background Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_video_sec',
      'settings' => 'vw_appoinment_pro_video_icon_bgcolor',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_video_sec_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_video_sec_main_heading_color', array(
      'label' => __('Main Heading Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_video_sec',
      'settings' => 'vw_appoinment_pro_video_sec_main_heading_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_video_sec_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_video_sec_main_heading_font_family', array(
    'section'  => 'vw_appoinment_pro_video_sec',
    'label'    => __( 'Main Heading Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_video_sec_main_heading_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_video_sec_main_heading_font_size',array(
      'label' => __('Main Heading Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_video_sec',
      'setting' => 'vw_appoinment_pro_video_sec_main_heading_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_video_sec_phone_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_video_sec_phone_color', array(
      'label' => __('Phone Text Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_video_sec',
      'settings' => 'vw_appoinment_pro_video_sec_phone_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_video_sec_phone_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_video_sec_phone_font_family', array(
    'section'  => 'vw_appoinment_pro_video_sec',
    'label'    => __( 'Phone Text Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_video_sec_phone_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_video_sec_phone_font_size',array(
      'label' => __('Pgone Text Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_video_sec',
      'setting' => 'vw_appoinment_pro_video_sec_phone_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_video_sec_value_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_video_sec_value_color', array(
      'label' => __('Value Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_video_sec',
      'settings' => 'vw_appoinment_pro_video_sec_value_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_video_sec_value_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_video_sec_value_font_family', array(
    'section'  => 'vw_appoinment_pro_video_sec',
    'label'    => __( 'Value Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_video_sec_value_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
  $wp_customize->add_control('vw_appoinment_pro_video_sec_value_font_size',array(
      'label' => __('Value Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_video_sec',
      'setting' => 'vw_appoinment_pro_video_sec_value_font_size',
      'type'    => 'text'
    ));
  $wp_customize->add_setting( 'vw_appoinment_pro_video_svg_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_video_svg_settings',
    array(
    'label' => __('SVG Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_video_sec'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_video_sec_circle_toggle',
    array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_video_sec_circle_toggle',
    array(
      'label' => esc_html__( 'Show/Hide Circle SVG', 'vw-appointment-pro' ),
      'section' => 'vw_appoinment_pro_video_sec'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_video_icon_circle_bgcolor', array(
    'default' => '#4421a9',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_video_icon_circle_bgcolor', array(
    'label' => 'Circle SVG Color',
    'section' => 'vw_appoinment_pro_video_sec',
    'settings' => 'vw_appoinment_pro_video_icon_circle_bgcolor',
  )));
   // ----------- Our Records -------------

  $wp_customize->add_section('vw_appoinment_pro_our_records',array(
    'title' => __('Our Records','vw-appointment-pro'),
    'description' => __('Add Content Here','vw-appointment-pro'),
    'panel' => 'vw_appoinment_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_records_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_records_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_records',
    'choices' => array(
    'Enable' => __('Enable', 'vw-appointment-pro'),
    'Disable' => __('Disable', 'vw-appointment-pro')
  ),));

  $wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_our_records_enable', array(
    'selector' => '#our-records .container',
    'render_callback' => 'vw_appoinment_pro_customize_partial_vw_appoinment_pro_our_records_enable',
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_our_records_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_our_records_content_settings',
    array(
    'label' => __('Section Content Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_records'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_records_slider_loop',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   ));
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_our_records_slider_loop',
     array(
        'label' => esc_html__( 'Slider Loop', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_our_records'
  )));

  $wp_customize->add_setting('vw_appoinment_pro_our_records_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_records_number',array(
    'label' => __('No Of Records To Show','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_records',
    'setting' => 'vw_appoinment_pro_our_records_number',
    'type'    => 'number'
  ));
  $records_no=get_theme_mod('vw_appoinment_pro_our_records_number');
  for($i=1;$i<=$records_no;$i++)
  {
    $wp_customize->add_setting( 'vw_appoinment_pro_our_records_box_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_our_records_box_settings'.$i,
      array(
      'label' => __('Record ','vw-appointment-pro').$i,
      'section' => 'vw_appoinment_pro_our_records'
    )));
    $wp_customize->add_setting('vw_appoinment_pro_our_records_box_bg_color'.$i, array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_records_box_bg_color'.$i,array(
        'label' => __('Box Background Color ', 'vw-appointment-pro').$i,
        'section' => 'vw_appoinment_pro_our_records',
        'settings' => 'vw_appoinment_pro_our_records_box_bg_color'.$i,
    )));
    $wp_customize->add_setting('vw_appoinment_pro_our_records_no'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_appoinment_pro_our_records_no'.$i,array(
      'label' => __('Record Number ','vw-appointment-pro').$i,
      'section' => 'vw_appoinment_pro_our_records',
      'setting' => 'vw_appoinment_pro_our_records_no'.$i,
      'type'    => 'text'
    ));
    $wp_customize->add_setting('vw_appoinment_pro_our_records_iconbg_color'.$i, array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_records_iconbg_color'.$i,array(
        'label' => __('Record Icon Background Color ', 'vw-appointment-pro').$i,
        'section' => 'vw_appoinment_pro_our_records',
        'settings' => 'vw_appoinment_pro_our_records_iconbg_color'.$i,
    )));
    $wp_customize->add_setting('vw_appoinment_pro_our_records_icon'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'vw_appoinment_pro_our_records_icon'.$i,array(
      'label' => __('Records Icon ','vw-appointment-pro').$i,
      'description' => __('Dimension 50px * 50px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_records',
      'settings' => 'vw_appoinment_pro_our_records_icon'.$i
    )));
    $wp_customize->add_setting('vw_appoinment_pro_our_records_title_one'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_appoinment_pro_our_records_title_one'.$i,array(
      'label' => __('Record Title ','vw-appointment-pro').$i,
      'section' => 'vw_appoinment_pro_our_records',
      'setting' => 'vw_appoinment_pro_our_records_title_one'.$i,
      'type'    => 'text'
    ));

  }
  $wp_customize->add_setting( 'vw_appoinment_pro_our_records_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_our_records_color_settings',
  array(
    'label' => __('Section Content Color And Font Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_records'
  )));
 
  $wp_customize->add_setting( 'vw_appoinment_pro_our_records_number_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_records_number_color', array(
    'label' => __('Record Number Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_records',
    'settings' => 'vw_appoinment_pro_our_records_number_color',
  )));

  $wp_customize->add_setting('vw_appoinment_pro_our_records_number_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_our_records_number_font_family', array(
    'section'  => 'vw_appoinment_pro_our_records',
    'label'    => __('Record Number Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_records_number_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
  $wp_customize->add_control('vw_appoinment_pro_our_records_number_font_size',array(
      'label' => __('Record Number Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_records',
      'setting' => 'vw_appoinment_pro_our_records_number_font_size',
      'type'    => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_records_title_one_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_records_title_one_color', array(
    'label' => __('Record Title Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_records',
    'settings' => 'vw_appoinment_pro_our_records_title_one_color',
  )));

  $wp_customize->add_setting('vw_appoinment_pro_our_records_title_one_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_our_records_title_one_font_family', array(
    'section'  => 'vw_appoinment_pro_our_records',
    'label'    => __('Record Title Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_records_title_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
  $wp_customize->add_control('vw_appoinment_pro_our_records_title_font_size',array(
      'label' => __('Record Title Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_records',
      'setting' => 'vw_appoinment_pro_our_records_title_font_size',
      'type'    => 'text'
    ));
  // ----------- Why Choose Us --------
  $wp_customize->add_section('vw_appoinment_pro_why_choose_us',array(
    'title' => __('Why Choose Us','vw-appointment-pro'),
    'description' => __('Why Choose Us Details','vw-appointment-pro'),
    'priority'  => null,
    'panel' => 'vw_appoinment_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_appoinment_pro_why_choose_us_enabledisable',array(
      'default'=> 'Enable',
      'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_appoinment_pro_why_choose_us_enabledisable', array(
      'type' => 'radio',
      'label' => 'Do you want this section',
      'section' => 'vw_appoinment_pro_why_choose_us',
      'choices' => array(
          'Enable' => 'Enable',
          'Disable' => 'Disable'
      ),
  ));
  $wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_why_choose_us_enabledisable', array(
    'selector' => '#why-choose-us .container',
    'render_callback' => 'vw_appoinment_pro_customize_partial_vw_appoinment_pro_why_choose_us_enabledisable',
  ));
  $wp_customize->add_setting( 'vw_appoinment_proour_marketing_bg_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_proour_marketing_bg_settings',
    array(
    'label' => __('Background Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_why_choose_us'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_why_choose_us_bg_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_why_choose_us_bg_color',array(
      'label' => __('Background Color', 'vw-appointment-pro'),
      'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_why_choose_us',
      'settings' => 'vw_appoinment_pro_why_choose_us_bg_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_why_choose_us_bg_image',array(
      'default'   => '',
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_appoinment_pro_why_choose_us_bg_image',array(
      'label' => __('Background image ','vw-appointment-pro'),
      'description' => __('Dimension (1600px * 800px)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_why_choose_us',
      'settings' => 'vw_appoinment_pro_why_choose_us_bg_image'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_why_choose_us_image_attachment',
    array(
      'default' => 'Scroll',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_why_choose_us_image_attachment',
      array(
      'type' => 'radio',
      'label' => __('Background Image Attachment', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_why_choose_us',
      'choices' => array(
      'Scroll' => __('Scroll', 'vw-appointment-pro'),
      'Fixed' => __('Fixed', 'vw-appointment-pro')
  ),));
  $wp_customize->add_setting( 'vw_appoinment_pro_why_choose_us_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_why_choose_us_content_settings',
    array(
    'label' => __('Section Content Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_why_choose_us'
  )));
   $wp_customize->add_setting('vw_appoinment_pro_why_choose_us_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_why_choose_us_main_heading',array(
    'label' => __('Section Main Heading','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_why_choose_us',
    'setting' => 'vw_appoinment_pro_why_choose_us_main_heading',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_why_choose_us_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_why_choose_us_text',array(
    'label' => __('Section Text Top','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_why_choose_us',
    'setting' => 'vw_appoinment_pro_why_choose_us_text',
    'type'    => 'textarea'
  )); 
   $wp_customize->add_setting('vw_appoinment_pro_why_choose_us_text_two',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_why_choose_us_text_two',array(
    'label' => __('Section Text Bottom','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_why_choose_us',
    'setting' => 'vw_appoinment_pro_why_choose_us_text_two',
    'type'    => 'textarea'
  )); 
  $wp_customize->add_setting('vw_appoinment_pro_why_choose_us_box_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_why_choose_us_box_number',array(
    'label' => __('No Of Box To Show','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_why_choose_us',
    'setting' => 'vw_appoinment_pro_why_choose_us_box_number',
    'type'    => 'number'
  ));

  $why_choose_box=get_theme_mod('vw_appoinment_pro_why_choose_us_box_number');
  for($i=1;$i<=$why_choose_box;$i++)
  {
    $wp_customize->add_setting( 'vw_appoinment_pro_why_choose_us_box_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_why_choose_us_box_settings'.$i,
      array(
      'label' => __('Why Choose Us Box ','vw-appointment-pro').$i,
      'section' => 'vw_appoinment_pro_why_choose_us'
    )));
    $wp_customize->add_setting('vw_appoinment_pro_why_choose_us_feature_icon'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'vw_appoinment_pro_why_choose_us_feature_icon'.$i,array(
      'label' => __('Why Choose Us Box Image ','vw-appointment-pro').$i,
      'description' => __('Dimension 50px * 80px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_why_choose_us',
      'settings' => 'vw_appoinment_pro_why_choose_us_feature_icon'.$i
    )));
    $wp_customize->add_setting('vw_appoinment_pro_why_choose_us_feature_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_appoinment_pro_why_choose_us_feature_title'.$i,array(
      'label' => __('Why Choose Us Box Title ','vw-appointment-pro').$i,
      'section' => 'vw_appoinment_pro_why_choose_us',
      'setting' => 'vw_appoinment_pro_why_choose_us_feature_title'.$i,
      'type'    => 'text'
    ));
    $wp_customize->add_setting('vw_appoinment_pro_why_choose_us_feature_title_url'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_appoinment_pro_why_choose_us_feature_title_url'.$i,array(
      'label' => __('Why Choose Us Box Title Url ','vw-appointment-pro').$i,
      'section' => 'vw_appoinment_pro_why_choose_us',
      'setting' => 'vw_appoinment_pro_why_choose_us_feature_title_url'.$i,
      'type'    => 'text'
    ));
  }
  $wp_customize->add_setting('vw_appoinment_pro_why_choose_us_right_sec_image',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_appoinment_pro_why_choose_us_right_sec_image',array(
    'label' => __('Section Image','vw-appointment-pro'),
    'description' => __('Dimension 500px * 700px','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_why_choose_us',
    'settings' => 'vw_appoinment_pro_why_choose_us_right_sec_image'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_why_choose_us_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_why_choose_us_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_why_choose_us'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_why_choose_us_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_why_choose_us_main_heading_color', array(
      'label' => __('Section Main Heading Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_why_choose_us',
      'settings' => 'vw_appoinment_pro_why_choose_us_main_heading_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_why_choose_us_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_why_choose_us_main_heading_font_family', array(
      'section'  => 'vw_appoinment_pro_why_choose_us',
      'label'    => __( 'Section Main Heading Font Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_why_choose_us_main_heading_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_why_choose_us_main_heading_font_size', array(
      'label' => __('Section Main Heading Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_why_choose_us',
      'settings' => 'vw_appoinment_pro_why_choose_us_main_heading_font_size',
      'type'  => 'text',
  )));
   $wp_customize->add_setting( 'vw_appoinment_pro_why_choose_us_main_heading_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_why_choose_us_main_heading_border_color', array(
      'label' => __('Heading Border Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_why_choose_us',
      'settings' => 'vw_appoinment_pro_why_choose_us_main_heading_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_why_choose_us_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_why_choose_us_text_color', array(
      'label' => __('Section Text Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_why_choose_us',
      'settings' => 'vw_appoinment_pro_why_choose_us_text_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_why_choose_us_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_why_choose_us_text_font_family', array(
      'section'  => 'vw_appoinment_pro_why_choose_us',
      'label'    => __( 'Section Text Font Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_why_choose_us_text_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_why_choose_us_text_font_size', array(
      'label' => __('Section Text Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_why_choose_us',
      'settings' => 'vw_appoinment_pro_why_choose_us_text_font_size',
      'type'  => 'text',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_why_choose_us_feature_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_why_choose_us_feature_color', array(
      'label' => __('Feature Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_why_choose_us',
      'settings' => 'vw_appoinment_pro_why_choose_us_feature_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_why_choose_us_feature_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_why_choose_us_feature_font_family', array(
      'section'  => 'vw_appoinment_pro_why_choose_us',
      'label'    => __( 'Feature Font Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_why_choose_us_feature_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_why_choose_us_feature_font_size', array(
      'label' => __('Feature Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_why_choose_us',
      'settings' => 'vw_appoinment_pro_why_choose_us_feature_font_size',
      'type'  => 'text',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_why_choose_us_image_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_why_choose_us_image_border_color', array(
      'label' => __('Image Shape Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_why_choose_us',
      'settings' => 'vw_appoinment_pro_why_choose_us_image_border_color',
  )));
    // ------------- Testimonial ------------
  $wp_customize->add_section('vw_appoinment_pro_testimonial',array(
    'title' => __('Our Testimonial','vw-appointment-pro'),
    'description' => __('Add Content Here','vw-appointment-pro'),
    'panel' => 'vw_appoinment_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_appoinment_pro_testimonial_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_appoinment_pro_testimonial_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_testimonial',
    'choices' => array(
    'Enable' => __('Enable', 'vw-appointment-pro'),
    'Disable' => __('Disable', 'vw-appointment-pro')
  ),));

  $wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_testimonial_enable', array(
    'selector' => '#testimonial .container',
    'render_callback' => 'vw_appoinment_pro_customize_partial_testimonial_enable',
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_testimonial_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_testimonial_settings',
    array(
    'label' => __('Section Background Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_testimonial'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_testimonial_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_testimonial_bgcolor', array(
    'label' => __('Section Background Color', 'vw-appointment-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_testimonial',
    'settings' => 'vw_appoinment_pro_testimonial_bgcolor',
  )));

  $wp_customize->add_setting('vw_appoinment_pro_testimonial_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_appoinment_pro_testimonial_bgimage',array(
    'label' => __('Section Background Image','vw-appointment-pro'),
    'description' => __('Dimension 1600px * 900px','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_testimonial',
    'settings' => 'vw_appoinment_pro_testimonial_bgimage'
  )));

  $wp_customize->add_setting( 'vw_appoinment_pro_testimonial_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_testimonial_content_settings',
    array(
    'label' => __('Section Content Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_testimonial'
  )));

  $wp_customize->add_setting( 'vw_appoinment_pro_testimonial_slider_loop',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   ));
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_testimonial_slider_loop',
     array(
        'label' => esc_html__( 'Slider Loop', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_testimonial'
  )));
   $wp_customize->add_setting('vw_appoinment_pro_our_testimonial_image',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_appoinment_pro_our_testimonial_image',array(
    'label' => __('Section Right Image','vw-appointment-pro'),
    'description' => __('Dimension 500px * 900px','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_testimonial',
    'settings' => 'vw_appoinment_pro_our_testimonial_image'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_testimonial_heading_icon',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  )); 
  $wp_customize->add_control(new vw_appoinment_pro_Fontawesome_Icon_Chooser(
      $wp_customize,'vw_appoinment_pro_our_testimonial_heading_icon',array(
      'label' => __('Choose Icon','vw-appointment-pro'),
      'transport' => 'refresh',
      'section' => 'vw_appoinment_pro_testimonial',
      'setting' => 'vw_appoinment_pro_our_testimonial_heading_icon',
      'type'    => 'icon'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_testimonial_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_testimonial_number',array(
    'label' => __('No Of Testimonials To Show','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_testimonial',
    'setting' => 'vw_appoinment_pro_testimonial_number',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_testimonial_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_testimonial_color_settings',
  array(
    'label' => __('Section Content Color And Font Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_testimonial'
  )));

  $wp_customize->add_setting( 'vw_appoinment_pro_testimonial_quates_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_testimonial_quates_color', array(
    'label' => __('Testimonial Quote Icon Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_testimonial',
    'settings' => 'vw_appoinment_pro_testimonial_quates_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_testimonial_quates_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_testimonial_quates_bgcolor', array(
    'label' => __('Testimonial Quote Icon Background Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_testimonial',
    'settings' => 'vw_appoinment_pro_testimonial_quates_bgcolor',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_testimonial_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_testimonial_text_color', array(
    'label' => __('Testimonial Text Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_testimonial',
    'settings' => 'vw_appoinment_pro_testimonial_text_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_testimonial_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_testimonial_text_font_family', array(
    'section'  => 'vw_appoinment_pro_testimonial',
    'label'    => __('Testimonial Text Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_testimonial_text_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_testimonial_text_font_size', array(
      'label' => __('Testimonial Text Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_testimonial',
      'settings' => 'vw_appoinment_pro_testimonial_text_font_size',
      'type'  => 'text',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_testimonial_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_testimonial_title_color', array(
    'label' => __('Testimonial Title Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_testimonial',
    'settings' => 'vw_appoinment_pro_testimonial_title_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_testimonial_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_testimonial_title_font_family', array(
    'section'  => 'vw_appoinment_pro_testimonial',
    'label'    => __('Testimonial Title Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_testimonial_title_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_testimonial_title_font_size', array(
      'label' => __('Testimonial Title Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_testimonial',
      'settings' => 'vw_appoinment_pro_testimonial_title_font_size',
      'type'  => 'text',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_testimonial_desig_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_testimonial_desig_color', array(
    'label' => __('Testimonial Designation Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_testimonial',
    'settings' => 'vw_appoinment_pro_testimonial_desig_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_testimonial_desig_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_testimonial_desig_font_family', array(
    'section'  => 'vw_appoinment_pro_testimonial',
    'label'    => __('Testimonial Designation Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_testimonial_desig_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_testimonial_desig_font_size', array(
      'label' => __('Testimonial Designation Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_testimonial',
      'settings' => 'vw_appoinment_pro_testimonial_desig_font_size',
      'type'  => 'text',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_testimonial_dots_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_testimonial_dots_color', array(
    'label' => __('Testimonial Slider Dots Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_testimonial',
    'settings' => 'vw_appoinment_pro_testimonial_dots_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_testimonial_dots_border_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_testimonial_dots_border_color', array(
    'label' => __('Testimonial Slider Dots Border Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_testimonial',
    'settings' => 'vw_appoinment_pro_testimonial_dots_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_testimonial_slider_Active_dots_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_testimonial_slider_Active_dots_bgcolor', array(
    'label' => __('Testimonial Slider Active Dots Background Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_testimonial',
    'settings' => 'vw_appoinment_pro_testimonial_slider_Active_dots_bgcolor',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_testimonial_activedots_border_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_testimonial_activedots_border_color', array(
    'label' => __('Testimonial Slider Active Dots Border Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_testimonial',
    'settings' => 'vw_appoinment_pro_testimonial_activedots_border_color',
  )));
  // --------------  Our Blog -----------

  $wp_customize->add_section('vw_appoinment_pro_our_blog',array(
    'title' => __('Our Blog','vw-appointment-pro'),
    'description' => __('Our Blog Details','vw-appointment-pro'),
    'priority'  => null,
    'panel' => 'vw_appoinment_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_blog_enabledisable',array(
      'default'=> 'Enable',
      'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_blog_enabledisable', array(
      'type' => 'radio',
      'label' => 'Do you want this section',
      'section' => 'vw_appoinment_pro_our_blog',
      'choices' => array(
          'Enable' => 'Enable',
          'Disable' => 'Disable'
      ),
  ));
  $wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_our_blog_enabledisable', array(
    'selector' => '#our-blogs .container',
    'render_callback' => 'vw_appoinment_pro_customize_partial_our_blog_enabledisable',
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_bg_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_our_blog_bg_settings',
    array(
    'label' => __('Background Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_blog'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_blog_bg_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_bg_color',array(
      'label' => __('Background Color', 'vw-appointment-pro'),
      'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_bg_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_blog_bg_image',array(
      'default'   => '',
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_appoinment_pro_our_blog_bg_image',array(
      'label' => __('Background image ','vw-appointment-pro'),
      'description' => __('Dimension (1600px * 700px)','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_bg_image'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_blog_bg_image_attachment',
    array(
      'default' => 'Scroll',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_blog_bg_image_attachment',
      array(
      'type' => 'radio',
      'label' => __('Background Image Attachment', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'choices' => array(
      'Scroll' => __('Scroll', 'vw-appointment-pro'),
      'Fixed' => __('Fixed', 'vw-appointment-pro')
  ),));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_our_blog_content_settings',
    array(
    'label' => __('Section Content Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_blog'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_blog_small_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_blog_small_heading',array(
    'label' => __('Section Small Heading','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_blog',
    'setting' => 'vw_appoinment_pro_our_blog_small_heading',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_blog_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_blog_main_heading',array(
    'label' => __('Section Main Heading','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_blog',
    'setting' => 'vw_appoinment_pro_our_blog_main_heading',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_blog_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_blog_number',array(
    'label' => __('No Of Blogs To Show','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_blog',
    'setting' => 'vw_appoinment_pro_our_blog_number',
    'type'    => 'number'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_our_blog_button_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_blog_button_text',array(
    'label' => __('Section Link Title','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_blog',
    'setting' => 'vw_appoinment_pro_our_blog_button_text',
    'type'    => 'text'
  ));  
  $wp_customize->add_setting('vw_appoinment_pro_our_blog_button_url',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control('vw_appoinment_pro_our_blog_button_url',array(
    'label' => __('Section Link Url','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_blog',
    'setting' => 'vw_appoinment_pro_our_blog_button_url',
    'type'  => 'text'
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_our_blog_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_our_blog'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_small_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_small_heading_color', array(
      'label' => __('Small Heading Color ', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_small_heading_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_blog_small_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'vw_appoinment_pro_our_blog_small_heading_font_family', array(
      'section'  => 'vw_appoinment_pro_our_blog',
      'label'    => __( 'Section Small Heading Font Family','vw-appointment-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
   $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_small_heading_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_small_heading_font_size', array(
      'label' => __('Section Small Heading Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_small_heading_font_size',
      'type'  => 'text',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_main_heading_color', array(
      'label' => __('Section Main Heading Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_main_heading_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_blog_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_our_blog_main_heading_font_family', array(
    'section'  => 'vw_appoinment_pro_our_blog',
    'label'    => __( 'Section Main Heading Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_main_heading_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_main_heading_font_size', array(
      'label' => __('Section Main Heading Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_main_heading_font_size',
      'type'  => 'text',
  )));
   $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_main_heading_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_main_heading_border_color', array(
      'label' => __('Main Heading Border Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_main_heading_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_title_color', array(
      'label' => __('Blog Title Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_title_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_blog_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_our_blog_title_font_family', array(
    'section'  => 'vw_appoinment_pro_our_blog',
    'label'    => __( 'Blog Title Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_title_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_title_font_size', array(
      'label' => __('Blog Title Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_title_font_size',
      'type'  => 'text',
  )));
   $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_text_color', array(
      'label' => __('Blog Text Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_text_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_blog_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_our_blog_text_font_family', array(
    'section'  => 'vw_appoinment_pro_our_blog',
    'label'    => __( 'Blog Text Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_text_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_text_font_size', array(
      'label' => __('Blog Text Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_text_font_size',
      'type'  => 'text',
  )));
  
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_meta_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_meta_color', array(
      'label' => __('Meta Text Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_meta_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_blog_meta_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_our_blog_meta_font_family', array(
    'section'  => 'vw_appoinment_pro_our_blog',
    'label'    => __( 'Meta Text Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_meta_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_meta_font_size', array(
      'label' => __('Meta Text Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_meta_font_size',
      'type'  => 'text',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_meta_iconcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_meta_iconcolor', array(
      'label' => __('Meta Icon Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_meta_iconcolor',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_meta_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_meta_border_color', array(
      'label' => __('Meta Border Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_meta_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_date_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_date_color', array(
      'label' => __('Blog Date Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_date_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_blog_date_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_our_blog_date_font_family', array(
    'section'  => 'vw_appoinment_pro_our_blog',
    'label'    => __( 'Blog Date Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
    $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_date_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_date_font_size', array(
      'label' => __('Blog Date Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_date_font_size',
      'type'  => 'text',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_date_box_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_date_box_bgcolor', array(
      'label' => __('Date Box Background Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_date_box_bgcolor',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_date_box_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_date_box_hover_bgcolor', array(
      'label' => __('Date Box Hover Background Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_date_box_hover_bgcolor',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_button_color', array(
      'label' => __('Section Button Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_button_color',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_our_blog_button_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_appoinment_pro_our_blog_button_font_family', array(
    'section'  => 'vw_appoinment_pro_our_blog',
    'label'    => __( 'Section Button Font Family','vw-appointment-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
    $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_button_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_button_font_size', array(
      'label' => __('Section Button Font Size in px', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_button_font_size',
      'type'  => 'text',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_button_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_button_border_color', array(
      'label' => __('Button Border Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_button_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_button_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_button_hover_color', array(
      'label' => __('Button Hover Text Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_button_hover_color',
  )));
   $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_button_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_button_hover_bgcolor', array(
      'label' => __('Button Hover Background Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_button_hover_bgcolor',
  )));
   $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_button_hover_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_button_hover_border_color', array(
      'label' => __('Button Hover Border Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_button_hover_border_color',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_our_blog_main_box_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_our_blog_main_box_bgcolor', array(
      'label' => __('Blog Content Box Background Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_our_blog',
      'settings' => 'vw_appoinment_pro_our_blog_main_box_bgcolor',
  )));
  // --------------- General Settings -------------

  $wp_customize->add_section('vw_appoinment_pro_products_sidebar_settings',array(
    'title' => __('General Settings','vw-appointment-pro'),
    'description'   => __('Change Your Setting','vw-appointment-pro'),
    'priority'  => null,
    'panel' => 'vw_appoinment_pro_panel_id',
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_products_shop_page_sidebar',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   ));
 
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_products_shop_page_sidebar',
     array(
        'label' => esc_html__( 'Hide Shop Page Sidebar', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_products_sidebar_settings'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_products_single_page_sidebar',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   ));
 
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_products_single_page_sidebar',
     array(
        'label' => esc_html__( 'Hide Product Page Sidebar', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_products_sidebar_settings'
  )));

  //Page Title layout
  $wp_customize->add_setting('vw_appoinment_pro_page_title_content_option',array(
    'default' => __('Left','vw-appointment-pro'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new vw_appoinment_pro_Image_Radio_Control($wp_customize, 'vw_appoinment_pro_page_title_content_option', array(
      'type' => 'select',
      'label' => __('Page Title Layouts','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_products_sidebar_settings',
      'choices' => array(
          'Left' => get_template_directory_uri().'/assets/images/header-layout1.png',
          'Center' => get_template_directory_uri().'/assets/images/header-layout2.png',
          'Right' => get_template_directory_uri().'/assets/images/header-layout3.png',
  ))));

  //Blog layout
  $wp_customize->add_setting('vw_appoinment_pro_blog_option',array(
      'default' => __('two_col','vw-appointment-pro'),
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_blog_option',array(
      'type' => 'select',
      'label' => __('Post Layout','vw-appointment-pro'),
      'description' => __('Here you can change the Posts layout for Blog Pages. ','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_products_sidebar_settings',
      'choices' => array(
          'one_col' => __('One Columns','vw-appointment-pro'),
          'two_col' => __('Two Columns','vw-appointment-pro')
      ),  
  ) );
  //Blog layout
  $wp_customize->add_setting('vw_appoinment_pro_blog_layout_option',array(
        'default' => __('Left','vw-appointment-pro'),
        'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
    ));
    $wp_customize->add_control(new vw_appoinment_pro_Image_Radio_Control($wp_customize, 'vw_appoinment_pro_blog_layout_option', array(
        'type' => 'select',
        'label' => __('Blog Layouts','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_products_sidebar_settings',
        'choices' => array(
            'Left' => get_template_directory_uri().'/assets/images/slider-content1.png',
            'Center' => get_template_directory_uri().'/assets/images/slider-content2.png',
            'Right' => get_template_directory_uri().'/assets/images/slider-content3.png',
    ))));
    $wp_customize->add_setting( 'vw_appoinment_pro_blog_featured_image_enable',
       array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
    ));
    $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_blog_featured_image_enable',
         array(
            'label' => esc_html__( 'Hide/show featured image', 'vw-appointment-pro' ),
            'section' => 'vw_appoinment_pro_products_sidebar_settings'
    )));

  $wp_customize->add_setting( 'vw_appoinment_pro_blog_featured_image_border_radius', array(
      'default'              => "",
      'type'                 => 'theme_mod',
      'transport'        => 'refresh',
      'sanitize_callback'    => 'absint',
      'sanitize_js_callback' => 'absint',
  ) );
  $wp_customize->add_control( 'vw_appoinment_pro_blog_featured_image_border_radius', array(
      'label'       => esc_html__( 'Featured Image Border Radius','vw-appointment-pro' ),
      'section'     => 'vw_appoinment_pro_products_sidebar_settings',
      'type'        => 'range',
      'input_attrs' => array(
        'step'             => 1,
        'min'              => 1,
        'max'              => 50,
  ),) );
  $wp_customize->add_setting('vw_appoinment_pro_blog_featured_image_box_shadow',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_blog_featured_image_box_shadow',array(
        'label' => __('Featured Image Box Shadow','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'text'
    )); 

    $wp_customize->add_setting('vw_appoinment_pro_blog_category_prev_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_blog_category_prev_title',array(
        'label' => __('Previous Title','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'text'
    ));

    $wp_customize->add_setting('vw_appoinment_pro_blog_category_next_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_blog_category_next_title',array(
        'label' => __('Next Title','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'text'
    ));
    $wp_customize->add_setting( 'vw_appoinment_pro_products_spinner_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_products_spinner_settings',
    array(
    'label' => __('Preloader Settings','vw-life-coach-pro'),
    'section' => 'vw_appoinment_pro_products_sidebar_settings'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_products_spinner_enable',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_products_spinner_enable',
     array(
        'label' => esc_html__( 'Preloader Enable/Disable', 'vw-life-coach-pro' ),
        'section' => 'vw_appoinment_pro_products_sidebar_settings'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_products_spinner_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_products_spinner_bgcolor', array(
    'label' => __('Preloader Background Color ', 'vw-life-coach-pro'),
    'section' => 'vw_appoinment_pro_products_sidebar_settings',
    'settings' => 'vw_appoinment_pro_products_spinner_bgcolor',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_products_scrolltop_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_products_scrolltop_settings',
    array(
    'label' => __('Scroll To Top Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_products_sidebar_settings'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_hide_show_scroll',array(
      'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
    ));  
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_hide_show_scroll',array(
      'label' => esc_html__( 'Show / Hide Scroll To Top','vw-appointment-pro' ),
      'section' => 'vw_appoinment_pro_products_sidebar_settings'
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_general_scroll_top_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_general_scroll_top_bgcolor', array(
    'label' => __('Scroll Top Background Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_products_sidebar_settings',
    'settings' => 'vw_appoinment_pro_general_scroll_top_bgcolor',
  )));
  $wp_customize->add_setting( 'vw_appoinment_pro_general_scroll_top_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_general_scroll_top_hover_bgcolor', array(
    'label' => __('Scroll Top Hover Background Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_products_sidebar_settings',
    'settings' => 'vw_appoinment_pro_general_scroll_top_hover_bgcolor',
  )));
  $wp_customize->add_setting('vw_appoinment_pro_scroll_top_icon_width',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_scroll_top_icon_width',array(
        'label' => __('Scroll Top Icon Width','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'number'
    ));
    $wp_customize->add_setting('vw_appoinment_pro_scroll_top_icon_height',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_scroll_top_icon_height',array(
        'label' => __('Scroll Top Icon Height','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'number'
    ));
    $wp_customize->add_setting('vw_appoinment_pro_scroll_top_icon_border_radius',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_scroll_top_icon_border_radius',array(
        'label' => __('Scroll Top Icon Border Radius','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'number'
    ));
  $wp_customize->add_setting('vw_appoinment_pro_scroll_to_top_icon',array(
  'default' => 'fas fa-angle-up',
  'sanitize_callback' => 'sanitize_text_field'
  )); 
  $wp_customize->add_control(new vw_appoinment_pro_Fontawesome_Icon_Chooser(
      $wp_customize,'vw_appoinment_pro_scroll_to_top_icon',array(
  'label' => __('Add Scroll to Top Icon','vw-appointment-pro'),
  'transport' => 'refresh',
  'section' => 'vw_appoinment_pro_products_sidebar_settings',
  'setting' => 'vw_appoinment_pro_scroll_to_top_icon',
  'type'    => 'icon'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_scroll_top_alignment',array(
        'default' => __('Right','vw-appointment-pro'),
        'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control(new vw_appoinment_pro_Image_Radio_Control($wp_customize, 'vw_appoinment_pro_scroll_top_alignment', array(
    'type' => 'select',
    'label' => __('Scroll To Top','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_products_sidebar_settings',
    'settings' => 'vw_appoinment_pro_scroll_top_alignment',
    'choices' => array(
        'Left' => get_template_directory_uri().'/assets/images/header-layout1.png',
        'Center' => get_template_directory_uri().'/assets/images/header-layout2.png',
        'Right' => get_template_directory_uri().'/assets/images/header-layout3.png'
    ))));
  $wp_customize->add_setting( 'vw_appoinment_pro_site_frame_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_site_frame_settings',
    array(
    'label' => __('Site Frame Settings','vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_products_sidebar_settings'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_site_frame_width',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('vw_appoinment_pro_site_frame_width',array(
      'label' => __('Frame Width','vw-appointment-pro'),
      'section'   => 'vw_appoinment_pro_products_sidebar_settings',
      'type'      => 'number'
  ));

  $wp_customize->add_setting('vw_appoinment_pro_site_frame_type',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_site_frame_type',array(
        'type' => 'select',
        'label' => __('Frame Type','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_products_sidebar_settings',
        'choices' => array(
            '' => '',
            'solid' => __('Solid','vw-appointment-pro'),
            'dashed' => __('Dashed','vw-appointment-pro'),
            'double' => __('Double','vw-appointment-pro'),
            'groove' => __('Groove','vw-appointment-pro'),
            'ridge' => __('Ridge','vw-appointment-pro'),
            'inset' => __('Inset','vw-appointment-pro')
        ),  
   ) );

  $wp_customize->add_setting( 'vw_appoinment_pro_site_frame_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_site_frame_color', array(
      'label' => __('Frame Color', 'vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_products_sidebar_settings',
      'settings' => 'vw_appoinment_pro_site_frame_color',
  )));
  // ------------- Button Settings ----------

    $wp_customize->add_setting( 'vw_appoinment_pro_site_button_setting',array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_site_button_setting',
        array(
        'label' => __('Button Settings','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_products_sidebar_settings'
    )));

    $wp_customize->add_setting('vw_appoinment_pro_button_padding_top',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_button_padding_top',array(
        'label' => __('Button Padding Top and Bottom','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'number'
    ));

    $wp_customize->add_setting('vw_appoinment_pro_button_padding_left',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_button_padding_left',array(
        'label' => __('Button Padding Left and Right','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'number'
    ));

    $wp_customize->add_setting('vw_appoinment_pro_button_border_radius',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_button_border_radius',array(
        'label' => __('Button Border Radius','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'number'
    ));

    // ----------- Social Icon Setting -------------

    $wp_customize->add_setting( 'vw_appoinment_pro_social_icon_setting',array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_social_icon_setting',
        array(
        'label' => __('Social Icon Settings','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_products_sidebar_settings'
    )));
    $wp_customize->add_setting('vw_appoinment_pro_social_icon_width',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_social_icon_width',array(
        'label' => __('Social Icon Width','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'number'
    ));

    $wp_customize->add_setting('vw_appoinment_pro_social_icon_height',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_social_icon_height',array(
        'label' => __('Social Icon Height','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'number'
    ));

    $wp_customize->add_setting('vw_appoinment_pro_social_icon_font_size',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_social_icon_font_size',array(
        'label' => __('Social Icon Font Size','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'number'
    ));
    $wp_customize->add_setting( 'vw_appoinment_pro_social_icon_font_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_social_icon_font_color', array(
        'label' => __('Social Icon Color', 'vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_products_sidebar_settings',
        'settings' => 'vw_appoinment_pro_social_icon_font_color',
    )));
    $wp_customize->add_setting('vw_appoinment_pro_social_icon_border_radius',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_social_icon_border_radius',array(
        'label' => __('Social Icon Border Radius','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'number'
    ));

    $wp_customize->add_setting('vw_appoinment_pro_social_icon_padding',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_social_icon_padding',array(
        'label' => __('Social Icon Padding','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'number'
    ));
    $wp_customize->add_setting( 'vw_appoinment_pro_social_icon_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_social_icon_bgcolor', array(
    'label' => __('Social Icon Background Color', 'vw-appointment-pro'),
    'section' => 'vw_appoinment_pro_products_sidebar_settings',
    'settings' => 'vw_appoinment_pro_social_icon_bgcolor',
  )));

    // ------------ Breadcrumb -----------

    $wp_customize->add_setting( 'vw_appoinment_pro_site_breadcrumb_setting',array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_site_breadcrumb_setting',
        array(
        'label' => __('Breadcrumb Settings','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_products_sidebar_settings'
    )));

    $wp_customize->add_setting( 'vw_appoinment_pro_site_breadcrumb_enable',array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
    ));  
    $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_site_breadcrumb_enable',array(
          'label' => esc_html__( 'Show / Hide Breadcrumb','vw-appointment-pro' ),
          'section' => 'vw_appoinment_pro_products_sidebar_settings'
    )));

    $wp_customize->add_setting( 'vw_appoinment_pro_site_breadcrumb_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_site_breadcrumb_color', array(
        'label' => __('Breadcrumb Color', 'vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_products_sidebar_settings',
        'settings' => 'vw_appoinment_pro_site_breadcrumb_color',
    )));

    $wp_customize->add_setting('vw_appoinment_pro_site_breadcrumb_font_size',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_site_breadcrumb_font_size',array(
        'label' => __('Breadcrumb Font Size','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'number'
    ));
    // ------------- Search Padding Settings ----------

    $wp_customize->add_setting( 'vw_appoinment_pro_Search_setting',array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_Search_setting',
        array(
        'label' => __('Search Settings','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_products_sidebar_settings'
    )));

    $wp_customize->add_setting('vw_appoinment_pro_Search_top_bottom_padding',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_Search_top_bottom_padding',array(
        'label' => __('Search Padding Top and Bottom','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'number'
    ));

    $wp_customize->add_setting('vw_appoinment_pro_Search_left_right_padding',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_Search_left_right_padding',array(
        'label' => __('Search Padding Left and Right','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'number'
    ));

    $wp_customize->add_setting('vw_appoinment_pro_Search_setting_radius',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_Search_setting_radius',array(
        'label' => __('Search Border Radius','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'number'
    ));
     $wp_customize->add_setting('vw_appoinment_pro_header_search_placeholder_text',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_header_search_placeholder_text',array(
        'label' => __('Search placeholder Text','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_products_sidebar_settings',
        'type'      => 'text'
    ));
    // -----------Woocommerce Product settings-------------------
    $wp_customize->add_section('vw_appoinment_pro_woocom_product_setting',array(
        'title' => __('Woocommerce Product Settings','vw-appointment-pro'),
        'panel' => 'vw_appoinment_pro_panel_id',
    ));
    $wp_customize->add_setting('vw_appoinment_pro_product_sale_left_right_padding',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_product_sale_left_right_padding',array(
        'label' => __('Product Sale Left Right Padding','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_woocom_product_setting',
        'type'      => 'number'
    ));
    $wp_customize->add_setting('vw_appoinment_pro_product_sale_top_bottom_padding',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_product_sale_top_bottom_padding',array(
        'label' => __('Product Sale Top Bottom Padding','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_woocom_product_setting',
        'type'      => 'number'
    ));
    $wp_customize->add_setting('vw_appoinment_pro_product_sale_border_radius',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_product_sale_border_radius',array(
        'label' => __('Product Sale Border Radius','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_woocom_product_setting',
        'type'      => 'number'
    ));

  // --------------- Post General Settings ---------------

  $wp_customize->add_section('vw_appoinment_pro_post_general_settings',array(
    'title' => __('Post Settings','vw-appointment-pro'),
    'description'   => __('Change Your Setting','vw-appointment-pro'),
    'priority'  => null,
    'panel' => 'vw_appoinment_pro_panel_id',
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_post_general_settings_post_date',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   ));
 
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_post_general_settings_post_date',
     array(
        'label' => esc_html__( 'Show or Hide Post Date', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_post_general_settings'
  )));

  $wp_customize->add_setting( 'vw_appoinment_pro_post_general_settings_post_comments',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
  ));
 
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_post_general_settings_post_comments',
     array(
        'label' => esc_html__( 'Show or Hide Comments', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_post_general_settings_post_author',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   )
  );
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_post_general_settings_post_author',
     array(
        'label' => esc_html__( 'Show or Hide Author', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_post_general_settings_post_share',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_post_general_settings_post_share',
     array(
        'label' => esc_html__( 'Show or Hide Share Icons', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_post_general_settings_post_share_facebook',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_post_general_settings_post_share_facebook',
     array(
        'label' => esc_html__( 'Post Share Facebook', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_post_general_settings_post_share_linkedin',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_post_general_settings_post_share_linkedin',
     array(
        'label' => esc_html__( 'Post Share Linkedin', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_post_general_settings_post_share_twitter',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_post_general_settings_post_share_twitter',
     array(
        'label' => esc_html__( 'Post Share Twitter', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_post_general_settings_post_tags',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_post_general_settings_post_tags',
     array(
        'label' => esc_html__( 'Show or Hide Tags', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_post_general_settings_post_category',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_post_general_settings_post_category',
     array(
        'label' => esc_html__( 'Show or Hide Category', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'vw_appoinment_pro_post_general_settings_post_sidebar',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_post_general_settings_post_sidebar',
     array(
        'label' => esc_html__( 'Show or Hide Sidebar', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_post_general_settings'
     )
  ));
  $wp_customize->add_setting('vw_appoinment_pro_post_content_blog',array(
        'default' => __('Excerpt Content','vw-appointment-pro'),
          'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_appoinment_pro_post_content_blog',array(
          'type' => 'radio',
          'label' => __('Post Content Type','vw-appointment-pro'),
          'section' => 'vw_appoinment_pro_post_general_settings',
          'choices' => array(
              'No Content' => __('No Content','vw-appointment-pro'),
              'Full Content' => __('Full Content','vw-appointment-pro'),
              'Excerpt Content' => __('Excerpt Content','vw-appointment-pro'),
          ),
  ) );
  $wp_customize->add_setting( 'vw_appoinment_pro_excerpt_length', array(
      'default'              => 25,
      'sanitize_callback' => 'sanitize_text_field'
  ) );
  $wp_customize->add_control( 'vw_appoinment_pro_excerpt_length', array(
      'label' => esc_html__( 'Post Excerpt Length','vw-appointment-pro' ),
      'section'  => 'vw_appoinment_pro_post_general_settings',
      'type'  => 'number',
      'settings' => 'vw_appoinment_pro_excerpt_length',
      'input_attrs' => array(
        'step'             => 1,
        'min'              => 0,
        'max'              => 50,
      ),
  ) );

  $wp_customize->add_setting( 'vw_appoinment_pro_button_excerpt_suffix', array(
      'default'   => '[...]',
      'sanitize_callback' => 'sanitize_text_field'
  ) );
  $wp_customize->add_control( 'vw_appoinment_pro_button_excerpt_suffix', array(
      'label'       => esc_html__( 'Excerpt Suffix','vw-appointment-pro' ),
      'section'     => 'vw_appoinment_pro_post_general_settings',
      'type'        => 'text',
      'settings' => 'vw_appoinment_pro_button_excerpt_suffix'
  ) );
  $wp_customize->add_setting( 'vw_appoinment_pro_related_posts',array(
      'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
    ));  
    $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_related_posts',array(
        'label' => esc_html__( 'Enable / Disable Related Posts','vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_post_general_settings'
    )));

    $wp_customize->add_setting('vw_appoinment_pro_related_posts_title',array(
       'default' => 'Related Posts',
       'sanitize_callback'  => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_appoinment_pro_related_posts_title',array(
       'type' => 'text',
       'label' => __('Related Posts Title','vw-appointment-pro'),
       'section' => 'vw_appoinment_pro_post_general_settings'
    ));

    $wp_customize->add_setting( 'vw_appoinment_pro_related_post_count', array(
      'default' => 3,
      'sanitize_callback' => 'sanitize_text_field'
  ) );
  $wp_customize->add_control( 'vw_appoinment_pro_related_post_count', array(
      'label' => esc_html__( 'Related Posts Count','vw-appointment-pro' ),
      'section' => 'vw_appoinment_pro_post_general_settings',
      'type' => 'number',
      'settings' => 'vw_appoinment_pro_related_post_count',
      'input_attrs' => array(
        'step'             => 1,
        'min'              => 0,
        'max'              => 6,
    ),) );

  //404 Page Setting
  $wp_customize->add_section('vw_appoinment_pro_404_page',array(
    'title' => __('404 Page Settings','vw-appointment-pro'),
    'panel' => 'vw_appoinment_pro_panel_id',
  )); 

  $wp_customize->add_setting('vw_appoinment_pro_404_page_title',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('vw_appoinment_pro_404_page_title',array(
    'label' => __('Add Title','vw-appointment-pro'),
    'input_attrs' => array(
            'placeholder' => __( '404 Not Found', 'vw-appointment-pro' ),
        ),
    'section'=> 'vw_appoinment_pro_404_page',
    'type'=> 'text'
  ));
  $wp_customize->add_setting('vw_appoinment_pro_404_page_content',array(
      'default'   => '',
      'capability'         => 'edit_theme_options',
      'sanitize_callback'  => 'wp_kses_post'
  ));
  $wp_customize->add_control(new vw_appoinment_pro_Editor_Control($wp_customize,'vw_appoinment_pro_404_page_content',array(
      'label' => __('Add Text','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_404_page',
      'setting'   => 'vw_appoinment_pro_404_page_content',       
  )));
  $wp_customize->add_setting('vw_appoinment_pro_404_page_button_text',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_appoinment_pro_404_page_button_text',array(
    'label' => __('Add Button Text','vw-appointment-pro'),
    'input_attrs' => array(
            'placeholder' => __( 'GO BACK', 'vw-appointment-pro' ),
        ),
    'section'=> 'vw_appoinment_pro_404_page',
    'type'=> 'text'
  ));
  //Responsive Media Settings
  $wp_customize->add_section('vw_appoinment_pro_responsive_media',array(
    'title' => __('Responsive Media','vw-appointment-pro'),
    'panel' => 'vw_appoinment_pro_panel_id',
  ));

    $wp_customize->add_setting( 'vw_appoinment_pro_resp_slider_hide_show',array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
    ));  
    $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_Control( $wp_customize, 'vw_appoinment_pro_resp_slider_hide_show',array(
          'label' => esc_html__( 'Show / Hide Slider','vw-appointment-pro' ),
          'section' => 'vw_appoinment_pro_responsive_media'
    )));

  $wp_customize->add_setting( 'vw_appoinment_pro_metabox_hide_show',array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
    ));  
    $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_Control( $wp_customize, 'vw_appoinment_pro_metabox_hide_show',array(
          'label' => esc_html__( 'Show / Hide Metabox','vw-appointment-pro' ),
          'section' => 'vw_appoinment_pro_responsive_media'
    )));

    $wp_customize->add_setting( 'vw_appoinment_pro_sidebar_hide_show',array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
    ));  
    $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_Control( $wp_customize, 'vw_appoinment_pro_sidebar_hide_show',array(
          'label' => esc_html__( 'Show / Hide Sidebar','vw-appointment-pro' ),
          'section' => 'vw_appoinment_pro_responsive_media'
    )));
    $wp_customize->add_setting(
      'vw_appoinment_pro_res_open_menu_icon',
      array(
        'default'     => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );
    $wp_customize->add_control(
      new vw_appoinment_pro_Fontawesome_Icon_Chooser(
        $wp_customize,
        'vw_appoinment_pro_res_open_menu_icon',
        array(
          'settings'    => 'vw_appoinment_pro_res_open_menu_icon',
          'section'   => 'vw_appoinment_pro_responsive_media',
          'type'      => 'icon',
          'label'     => esc_html__( 'Choose Open Menu Icon', 'vw-appointment-pro' ),
        )
      )
    );
    $wp_customize->add_setting(
      'vw_appoinment_pro_res_close_menus_icon',
      array(
        'default'     => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );
    $wp_customize->add_control(
      new vw_appoinment_pro_Fontawesome_Icon_Chooser(
        $wp_customize,
        'vw_appoinment_pro_res_close_menus_icon',
        array(
          'settings'    => 'vw_appoinment_pro_res_close_menus_icon',
          'section'   => 'vw_appoinment_pro_responsive_media',
          'type'      => 'icon',
          'label'     => esc_html__( 'Choose Close Icon', 'vw-appointment-pro' ),
        )
      )
    );
    $wp_customize->add_setting('vw_appoinment_pro_site_menu_width',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_site_menu_width',array(
        'label' => __('Responsive Menu Width','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_responsive_media',
        'type'      => 'number'
    ));

?>