<?php
	// --------------- Header Section ---------------
	$wp_customize->add_section('vw_appoinment_pro_topbar_section',array(
		'title'	=> __('Top Bar','vw-appointment-pro'),
		'description'	=> __('Top Bar Settings','vw-appointment-pro'),
		'priority'	=> null,
		'panel' => 'vw_appoinment_pro_panel_id',
	));
	$wp_customize->add_setting('vw_appoinment_pro_topbar_enable',array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
    ));
    $wp_customize->add_control('vw_appoinment_pro_topbar_enable',array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_appoinment_pro_topbar_section',
        'choices' => array(
            'Enable' => __('Enable', 'vw-appointment-pro'),
            'Disable' => __('Disable', 'vw-appointment-pro')
    ),));
    $wp_customize->add_setting( 'vw_appoinment_pro_header_search_toggle',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
	  ));
	  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_header_search_toggle',
	     array(
	        'label' => esc_html__( 'Show or Hide Search', 'vw-appointment-pro' ),
	        'section' => 'vw_appoinment_pro_topbar_section'
	  )));
	$wp_customize->add_setting( 'vw_appoinment_pro_topbar_background_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_topbar_background_color', array(
		'label' => __('Background Color', 'vw-appointment-pro'),
		'section' => 'vw_appoinment_pro_topbar_section',
		'settings' => 'vw_appoinment_pro_topbar_background_color',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_topbar_content_settings',
		array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_topbar_content_settings',
		array(
		'label' => __('Section Content Settings','vw-appointment-pro'),
		'section' => 'vw_appoinment_pro_topbar_section'
	)));
	
	$wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_contact_details_phone_icon', array(
	    'selector' => '#topbar .container',
	    'render_callback' => 'vw_appoinment_pro_customize_partial_vw_appoinment_pro_contact_details_phone_icon',
	));
	$wp_customize->add_setting('vw_appoinment_pro_contact_details_phone_icon',
	    array(
	      'default'     => 'fas fa-phone',
	      'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new vw_appoinment_pro_Fontawesome_Icon_Chooser($wp_customize,'vw_appoinment_pro_contact_details_phone_icon',
	      array(
	        'settings'    => 'vw_appoinment_pro_contact_details_phone_icon',
	        'section'   => 'vw_appoinment_pro_topbar_section',
	        'type'      => 'icon',
	        'label'     => esc_html__( 'Choose Phone Icon', 'vw-appointment-pro' ),
	)));
	$wp_customize->add_setting('vw_appoinment_pro_contact_details_phone_text',array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_appoinment_pro_contact_details_phone_text',array(
	    'label' => __('Phone Text','vw-appointment-pro'),
	    'section' => 'vw_appoinment_pro_topbar_section',
	    'setting' => 'vw_appoinment_pro_contact_details_phone_text',
	    'type'    => 'text'
	));
	$wp_customize->add_setting('vw_appoinment_pro_topbar_email_icon',
	    array(
	      'default'     => 'fas fa-envelope-open',
	      'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new vw_appoinment_pro_Fontawesome_Icon_Chooser($wp_customize,'vw_appoinment_pro_topbar_email_icon',
	      array(
	        'settings'    => 'vw_appoinment_pro_topbar_email_icon',
	        'section'   => 'vw_appoinment_pro_topbar_section',
	        'type'      => 'icon',
	        'label'     => esc_html__( 'Choose Email Icon', 'vw-appointment-pro' ),
	)));
	$wp_customize->add_setting('vw_appoinment_pro_topbar_email_text',array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_appoinment_pro_topbar_email_text',array(
	    'label' => __('Email Text','vw-appointment-pro'),
	    'section' => 'vw_appoinment_pro_topbar_section',
	    'setting' => 'vw_appoinment_pro_topbar_email_text',
	    'type'    => 'text'
	));
	$wp_customize->add_setting('vw_appoinment_pro_social_icons_shortcode',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_appoinment_pro_social_icons_shortcode',array(
        'label' => __('Add Social Icon Shortcode','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_topbar_section',
        'setting' => 'vw_appoinment_pro_social_icons_shortcode',
        'type'    => 'text'
    ));
    $wp_customize->add_setting( 'vw_appoinment_pro_header_search_toggle',
	   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   	));
  	$wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_header_search_toggle',
     array(
        'label' => esc_html__( 'Show or Hide Search', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_topbar_section'
    )));
	$wp_customize->add_setting( 'vw_appoinment_pro_topbar_color_settings',
		array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_topbar_color_settings',
		array(
		'label' => __('Font and Color Settings','vw-appointment-pro'),
		'section' => 'vw_appoinment_pro_topbar_section'
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_topbar_contact_icon_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_topbar_contact_icon_color', array(
	    'label' => __('Phone/Email Icon Color', 'vw-appointment-pro'),
	    'section' => 'vw_appoinment_pro_topbar_section',
	    'settings' => 'vw_appoinment_pro_topbar_contact_icon_color',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_topbar_contact_text_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_topbar_contact_text_color', array(
	    'label' => __('Phone/Email Text Color', 'vw-appointment-pro'),
	    'section' => 'vw_appoinment_pro_topbar_section',
	    'settings' => 'vw_appoinment_pro_topbar_contact_text_color',
	)));
	$wp_customize->add_setting('vw_appoinment_pro_topbar_contact_text_font_family',array(
	  	'default' => '',
	  	'capability' => 'edit_theme_options',
	  	'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'vw_appoinment_pro_topbar_contact_text_font_family', array(
	    'section'  => 'vw_appoinment_pro_topbar_section',
	    'label'    => __( 'Phone/Email Text Fonts','vw-appointment-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'vw_appoinment_pro_topbar_contact_text_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_topbar_contact_text_font_size', array(
	  'label' => __('Phone/Email Text Font Size in px', 'vw-appointment-pro'),
	  'section' => 'vw_appoinment_pro_topbar_section',
	  'settings' => 'vw_appoinment_pro_topbar_contact_text_font_size',
	  'type'  => 'text',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_topbar_contact_border_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_topbar_contact_border_color', array(
	    'label' => __('Phone/Email Border Color', 'vw-appointment-pro'),
	    'section' => 'vw_appoinment_pro_topbar_section',
	    'settings' => 'vw_appoinment_pro_topbar_contact_border_color',
	)));
    $wp_customize->add_setting( 'vw_appoinment_pro_topbar_social_icon_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_topbar_social_icon_color', array(
	    'label' => __('Social Icon Color', 'vw-appointment-pro'),
	    'section' => 'vw_appoinment_pro_topbar_section',
	    'settings' => 'vw_appoinment_pro_topbar_social_icon_color',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_topbar_social_icon_bordercolor', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_topbar_social_icon_bordercolor', array(
	    'label' => __('Social Icon Border Color', 'vw-appointment-pro'),
	    'section' => 'vw_appoinment_pro_topbar_section',
	    'settings' => 'vw_appoinment_pro_topbar_social_icon_bordercolor',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_topbar_search_icon_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_topbar_search_icon_color', array(
	    'label' => __('Search Icon Color', 'vw-appointment-pro'),
	    'section' => 'vw_appoinment_pro_topbar_section',
	    'settings' => 'vw_appoinment_pro_topbar_search_icon_color',
	)));
	$wp_customize->add_setting('vw_appoinment_pro_topbar_top_bottom_padding',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_topbar_top_bottom_padding',array(
        'label' => __('Topbar Top Bottom Padding','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_topbar_section',
        'type'      => 'number'
    ));
	/*------------------------------ Header -------------------------------*/ 
	$wp_customize->add_section('vw_appoinment_pro_header_section',array(
		'title'	=> __('Header','vw-appointment-pro'),
		'description'	=> __('Header Settings','vw-appointment-pro'),
		'priority'	=> null,
		'panel' => 'vw_appoinment_pro_panel_id',
	));	

	$wp_customize->add_setting( 'vw_appoinment_pro_header_section_youtube_link', array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
	) );
	$wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_appoinment_pro_header_section_youtube_link', array(
	    'section' => 'vw_appoinment_pro_header_section',
	    'label' => __( 'Youtube Video', 'vw-appointment-pro' ),
	    'description' => __( 'Watch our youtube video for how to create Menu in WordPress Website', 'vw-appointment-pro' ),
	    'content' => sprintf( __( 'Check the button %1$sWatch Now%2$s', 'vw-appointment-pro' ), '<a href="' . esc_url( vw_appoinment_pro_header_section_video  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
	)));
  $wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_header_section_youtube_link', array(
      'selector' => '.container .menubar',
      'render_callback' => 'vw_appoinment_pro_customize_partial_vw_appoinment_pro_header_section_youtube_link',
  ));
  $wp_customize->add_setting( 'vw_appoinment_pro_header_background_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_header_background_color', array(
		'label' => __('Header Background Color', 'vw-appointment-pro'),
		'section' => 'vw_appoinment_pro_header_section',
		'settings' => 'vw_appoinment_pro_header_background_color',
	)));
  $wp_customize->add_setting( 'vw_appoinment_pro_header_section_sticky',
    array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_header_section_sticky',
     array(
        'label' => esc_html__( 'Sticky Header On/Off', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_header_section'
  )));
  $wp_customize->add_setting('vw_appoinment_pro_sticky_header_alingment',array(
			'default' => __('center','vw-appointment-pro'),
			'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
		));
		$wp_customize->add_control(new vw_appoinment_pro_Image_Radio_Control($wp_customize, 'vw_appoinment_pro_sticky_header_alingment', array(
			'type' => 'select',
			'label' => __('Sticky Header Alignment','vw-appointment-pro'),
			'section' => 'vw_appoinment_pro_header_section',
			'settings' => 'vw_appoinment_pro_sticky_header_alingment',
			'choices' => array(
		    'left' => get_template_directory_uri().'/assets/images/copyright1.png',
		    'center' => get_template_directory_uri().'/assets/images/copyright2.png',
		    'right' => get_template_directory_uri().'/assets/images/copyright3.png'
		))));
  $wp_customize->add_setting( 'vw_appoinment_pro_header_section_color_settings',
	    array(
	    'default' => '',
	    'transport' => 'postMessage',
	    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_header_section_color_settings',
	    array(
	    'label' => __('Section Content Color And Font Settings','vw-appointment-pro'),
	    'section' => 'vw_appoinment_pro_header_section'
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_header_section_logo_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_header_section_logo_title_color', array(
	      'label' => __('Logo Title Color', 'vw-appointment-pro'),
	      'section' => 'vw_appoinment_pro_header_section',
	      'settings' => 'vw_appoinment_pro_header_section_logo_title_color',
	)));
	$wp_customize->add_setting('vw_appoinment_pro_header_section_logo_title_font_family',array(
	    'default' => '',
	    'capability' => 'edit_theme_options',
	    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	      'vw_appoinment_pro_header_section_logo_title_font_family', array(
	      'section'  => 'vw_appoinment_pro_header_section',
	      'label'    => __( 'Logo Title Font Family','vw-appointment-pro'),
	      'type'     => 'select',
	      'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'vw_appoinment_pro_header_section_logo_sub_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_header_section_logo_sub_title_color', array(
	      'label' => __('Logo Sub Title Color', 'vw-appointment-pro'),
	      'section' => 'vw_appoinment_pro_header_section',
	      'settings' => 'vw_appoinment_pro_header_section_logo_sub_title_color',
	)));
	$wp_customize->add_setting('vw_appoinment_pro_header_section_logo_sub_title_font_family',array(
	    'default' => '',
	    'capability' => 'edit_theme_options',
	    'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	      'vw_appoinment_pro_header_section_logo_sub_title_font_family', array(
	      'section'  => 'vw_appoinment_pro_header_section',
	      'label'    => __( 'Logo Sub Title Font Family','vw-appointment-pro'),
	      'type'     => 'select',
	      'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'vw_appoinment_pro_headermenu_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_headermenu_color', array(
		'label' => __('Menu Item Color', 'vw-appointment-pro'),
		'section' => 'vw_appoinment_pro_header_section',
		'settings' => 'vw_appoinment_pro_headermenu_color',
	)));
	$wp_customize->add_setting('vw_appoinment_pro_headermenu_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'vw_appoinment_pro_headermenu_font_family', array(
	    'section'  => 'vw_appoinment_pro_header_section',
	    'label'    => __( 'Menu Item Fonts','vw-appointment-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'vw_appoinment_pro_headermenu_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_headermenu_font_size', array(
	  'label' => __('Menu Item Font Size in px', 'vw-appointment-pro'),
	  'section' => 'vw_appoinment_pro_header_section',
	  'settings' => 'vw_appoinment_pro_headermenu_font_size',
	  'type'  => 'text',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_header_menuhover_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_header_menuhover_color', array(
		'label' => __('Menu Item Hover Color', 'vw-appointment-pro'),
		'section' => 'vw_appoinment_pro_header_section',
		'settings' => 'vw_appoinment_pro_header_menuhover_color',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_header_menu_border_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_header_menu_border_color', array(
		'label' => __('Menu Border Color', 'vw-appointment-pro'),
		'section' => 'vw_appoinment_pro_header_section',
		'settings' => 'vw_appoinment_pro_header_menu_border_color',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_header_menu_active_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_header_menu_active_color', array(
		'label' => __('Active Menu Item Color', 'vw-appointment-pro'),
		'section' => 'vw_appoinment_pro_header_section',
		'settings' => 'vw_appoinment_pro_header_menu_active_color',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_submenu_setting',array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_submenu_setting',
        array(
        'label' => __('Menu Dropdown Settings','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_header_section'
    )));
	$wp_customize->add_setting( 'vw_appoinment_pro_dropdownbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_dropdownbg_color', array(
		'label' => __('Menu DropDown Background Color', 'vw-appointment-pro'),
		'section' => 'vw_appoinment_pro_header_section',
		'settings' => 'vw_appoinment_pro_dropdownbg_color',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_dropdownbg_itemcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_dropdownbg_itemcolor', array(
		'label' => __('Menu DropDown Item Color', 'vw-appointment-pro'),
		'section' => 'vw_appoinment_pro_header_section',
		'settings' => 'vw_appoinment_pro_dropdownbg_itemcolor',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_dropdown_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_dropdown_font_size', array(
	  'label' => __('Menudropdown Item Font Size in px', 'vw-appointment-pro'),
	  'section' => 'vw_appoinment_pro_header_section',
	  'settings' => 'vw_appoinment_pro_dropdown_font_size',
	  'type'  => 'text',
	)));
	$wp_customize->add_setting('vw_appoinment_pro_dropdown_letter_spacing',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
	);
	$wp_customize->add_control('vw_appoinment_pro_dropdown_letter_spacing',array(
		'label' => __('Menu DropDown Item Letter Spacing','vw-appointment-pro'),
		'section' => 'vw_appoinment_pro_header_section',
		'setting' => 'vw_appoinment_pro_dropdown_letter_spacing',
		'type'    => 'number'
		)
	);
	//Font weight
	$wp_customize->add_setting('vw_appoinment_pro_dropdown_font_weight',array(
      'default' => '',
      'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
	));

	$wp_customize->add_control( 'vw_appoinment_pro_dropdown_font_weight', array(
	'label'       => esc_html__( 'Menu DropDown Item Font Weight','vw-appointment-pro' ),
	'section'     => 'vw_appoinment_pro_header_section',
	'type'        => 'select',
	'settings'    => 'vw_appoinment_pro_dropdown_font_weight',
	'choices' => array(
      '100' =>  esc_attr('100','vw-appointment-pro'),
      '200' =>  esc_attr('200','vw-appointment-pro'),
      '300' =>  esc_attr('300','vw-appointment-pro'),
      '400' =>  esc_attr('400','vw-appointment-pro'),
      '500' =>  esc_attr('500','vw-appointment-pro'),
      '600' =>  esc_attr('600','vw-appointment-pro'),
      '700' =>  esc_attr('700','vw-appointment-pro'),
      '800' =>  esc_attr('800','vw-appointment-pro'),
      '900' =>  esc_attr('900','vw-appointment-pro'),
      'bold' =>  esc_attr('bold','vw-appointment-pro'),
      'bolder' =>  esc_attr('bolder','vw-appointment-pro')
	),
	));
	$wp_customize->add_setting('vw_appoinment_pro_dropdown_text_transform',array(
      'default' => '',
      'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
	));

	$wp_customize->add_control( 'vw_appoinment_pro_dropdown_text_transform', array(
	'label'       => esc_html__( 'Menus Text Transform','vw-appointment-pro' ),
	'section'     => 'vw_appoinment_pro_header_section',
	'type'        => 'select',
	'settings'    => 'vw_appoinment_pro_dropdown_text_transform',
	'choices' => array(
      'uppercase' =>  esc_attr('uppercase','vw-appointment-pro'),
      'lowercase' =>  esc_attr('lowercase','vw-appointment-pro'),
      'capitalize' =>  esc_attr('capitalize','vw-appointment-pro'),
      'unset' =>  esc_attr('unset','vw-appointment-pro')
	),
	));
	/* --------- menudropdown Opacity  ----------- */

	$wp_customize->add_setting('vw_appoinment_pro_dropdown_bg_opacity_color',array(
      'default'              => '1',
      'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
	));

	$wp_customize->add_control( 'vw_appoinment_pro_dropdown_bg_opacity_color', array(
		'label'       => esc_html__( 'Menu Dropdown Opacity','vw-appointment-pro' ),
		'section'     => 'vw_appoinment_pro_header_section',
		'type'        => 'select',
		'settings'    => 'vw_appoinment_pro_dropdown_bg_opacity_color',
		'choices' => array(
	      '0' =>  esc_attr('0','vw-appointment-pro'),
	      '0.1' =>  esc_attr('0.1','vw-appointment-pro'),
	      '0.2' =>  esc_attr('0.2','vw-appointment-pro'),
	      '0.3' =>  esc_attr('0.3','vw-appointment-pro'),
	      '0.4' =>  esc_attr('0.4','vw-appointment-pro'),
	      '0.5' =>  esc_attr('0.5','vw-appointment-pro'),
	      '0.6' =>  esc_attr('0.6','vw-appointment-pro'),
	      '0.7' =>  esc_attr('0.7','vw-appointment-pro'),
	      '0.8' =>  esc_attr('0.8','vw-appointment-pro'),
	      '0.9' =>  esc_attr('0.9','vw-appointment-pro'),
	      '1' =>  esc_attr('1','vw-appointment-pro')
		),
	));
	$wp_customize->add_setting('vw_appoinment_pro_dropdown_box_shadow',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_dropdown_box_shadow',array(
        'label' => __('Menu Dropdown Shadow in px','vw-appointment-pro'),
        'section'   => 'vw_appoinment_pro_header_section',
        'type'      => 'text'
    ));
	//In Responsive
	$wp_customize->add_setting( 'vw_appoinment_pro_dropdownbg_responsivecolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_dropdownbg_responsivecolor', array(
		'label' => __('Responsive Menu Background Color', 'vw-appointment-pro'),
		'description' => __('This Background Color Will Apply Only To Toggle Menu', 'vw-appointment-pro'),
		'section' => 'vw_appoinment_pro_header_section',
		'settings' => 'vw_appoinment_pro_dropdownbg_responsivecolor',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_headermenu_responsive_item_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_headermenu_responsive_item_color', array(
		'label' => __('Responsive Menu Item Color', 'vw-appointment-pro'),
		'description' => __('This Color Will Apply Only To Toggle Menu Item', 'vw-appointment-pro'),
		'section' => 'vw_appoinment_pro_header_section',
		'settings' => 'vw_appoinment_pro_headermenu_responsive_item_color',
	)));
