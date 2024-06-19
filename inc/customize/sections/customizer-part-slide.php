<?php
	$wp_customize->add_section('vw_appoinment_pro_slider_section',array(
		'title'	=> __('Slider Settings','vw-appointment-pro'),
		'description'	=> __('Add slider images here.','vw-appointment-pro'),
		'priority'	=> null,
		'panel' => 'vw_appoinment_pro_panel_id',
	));
	$wp_customize->add_setting( 'vw_appoinment_pro_slider_section_youtube_link', array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
	) );
	$wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_appoinment_pro_slider_section_youtube_link', array(
	      'section' => 'vw_appoinment_pro_slider_section',
	      'label' => __( 'Youtube Video', 'vw-appointment-pro' ),
	      'description' => __( 'Watch our youtube video for How to add Slider using Customizer.', 'vw-appointment-pro' ),
	      'content' => sprintf( __( 'Check the button %1$sWatch Now%2$s', 'vw-appointment-pro' ), '<a href="' . esc_url( vw_appoinment_pro_slider_link  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
	)));
	$wp_customize->add_setting('vw_appoinment_pro_slider_enabledisable',array(
        'default'=> 'Enable',
        'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
    ));
	$wp_customize->add_control('vw_appoinment_pro_slider_enabledisable', array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_appoinment_pro_slider_section',
        'choices' => array(
            'Enable' => 'Enable',
            'Disable' => 'Disable'
        ),
    ));
    $wp_customize->selective_refresh->add_partial( 'vw_appoinment_pro_slider_enabledisable', array(
	    'selector' => '#slider .slider-box',
	    'render_callback' => 'vw_appoinment_pro_customize_partial_vw_appoinment_pro_slider_enabledisable',
	));
	$wp_customize->add_setting('vw_appoinment_pro_slide_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_appoinment_pro_slide_number',array(
		'label'	=> __('Number of slides to show','vw-appointment-pro'),
		'section'	=> 'vw_appoinment_pro_slider_section',
		'type'		=> 'number'
	));
	$count =  get_theme_mod('vw_appoinment_pro_slide_number');
	for($i=1; $i<=$count; $i++) {
		$wp_customize->add_setting( 'vw_appoinment_pro_slider_section_settings'.$i,
		    array(
		    'default' => '',
		    'transport' => 'postMessage',
		    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
		));
		$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_slider_section_settings'.$i,
		    array(
		    'label' => __('Slider Settings ','vw-appointment-pro').$i,
		    'section' => 'vw_appoinment_pro_slider_section'
		)));
		$wp_customize->add_setting('vw_appoinment_pro_slide_image'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_appoinment_pro_slide_image'.$i,
	        array(
            'label' => __('Slider Image ','vw-appointment-pro').$i.__(' (1600px * 562px)','vw-appointment-pro'),
            'section' => 'vw_appoinment_pro_slider_section',
            'settings' => 'vw_appoinment_pro_slide_image'.$i
		)));
		$wp_customize->add_setting('vw_appoinment_pro_slide_small_heading'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_appoinment_pro_slide_small_heading'.$i,array(
			'label' => __('Slide Small Heading ','vw-appointment-pro').$i,
			'section' => 'vw_appoinment_pro_slider_section',
			'setting'	=> 'vw_appoinment_pro_slide_small_heading'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_appoinment_pro_slide_main_heading'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_appoinment_pro_slide_main_heading'.$i,array(
			'label' => __('Slide Main Heading ','vw-appointment-pro').$i,
			'section' => 'vw_appoinment_pro_slider_section',
			'setting'	=> 'vw_appoinment_pro_slide_main_heading'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_appoinment_pro_slide_text'.$i,array(
		    'default'   => '',
		    'capability'         => 'edit_theme_options',
		    'sanitize_callback'  => 'wp_kses_post'
		));
		$wp_customize->add_control(new vw_appoinment_pro_Editor_Control($wp_customize,'vw_appoinment_pro_slide_text'.$i,array(
		    'label' => __('Slide Text (Max limit of text is 15)','vw-appointment-pro').$i,
		    'description'	=> __('Add Slide Text','vw-appointment-pro').$i,
		    'section' => 'vw_appoinment_pro_slider_section',
		    'setting'   => 'vw_appoinment_pro_slide_text'.$i,       
		)));
		$wp_customize->add_setting('vw_appoinment_pro_slide_btntext1'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_textarea_field',
		));
		$wp_customize->add_control('vw_appoinment_pro_slide_btntext1'.$i,array(
			'label' => __('Slider Button 1 Text','vw-appointment-pro').$i,
			'section' => 'vw_appoinment_pro_slider_section',
			'setting'	=> 'vw_appoinment_pro_slide_btntext1'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_appoinment_pro_slide_btnurl1'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control('vw_appoinment_pro_slide_btnurl1'.$i,array(
			'label' => __('Slider Button 2 Url','vw-appointment-pro').$i,
			'section' => 'vw_appoinment_pro_slider_section',
			'setting'	=> 'vw_appoinment_pro_slide_btnurl1'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_appoinment_pro_slide_btntext2'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_textarea_field',
		));
		$wp_customize->add_control('vw_appoinment_pro_slide_btntext2'.$i,array(
			'label' => __('Slider Button 2 Text','vw-appointment-pro').$i,
			'section' => 'vw_appoinment_pro_slider_section',
			'setting'	=> 'vw_appoinment_pro_slide_btntext2'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_appoinment_pro_slide_btnurl2'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control('vw_appoinment_pro_slide_btnurl2'.$i,array(
			'label' => __('Slider Button 1 Url','vw-appointment-pro').$i,
			'section' => 'vw_appoinment_pro_slider_section',
			'setting'	=> 'vw_appoinment_pro_slide_btnurl2'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_appointment_pro_slide_right_image'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_appointment_pro_slide_right_image'.$i,
	        array(
            'label' => __('Slider Right Image ','vw-appointment-pro').$i.__(' (600px * 562px)','vw-appointment-pro'),
            'section' => 'vw_appoinment_pro_slider_section',
            'settings' => 'vw_appointment_pro_slide_right_image'.$i
		)));
	}
	$wp_customize->add_setting( 'vw_appoinment_pro_slider_option_section_settings',array(
	    'default' => '',
	    'transport' => 'postMessage',
	    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_slider_option_section_settings',array(
	    'label' => __('Slider option Settings ','vw-appointment-pro'),
	    'section' => 'vw_appoinment_pro_slider_section'
	)));
	$wp_customize->add_setting('vw_appoinment_pro_slide_delay',array(
		'default'	=> 10000,
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_appoinment_pro_slide_delay',array(
		'label'	=> __('Slide Delay','vw-appointment-pro'),
		'section'	=> 'vw_appoinment_pro_slider_section',
		'description' => __('interval is in milliseconds. 1000 = 1 second -> so 1000 * 10 = 10 seconds', 'vw-appointment-pro'),
		'type'		=> 'number'
	));
	$wp_customize->add_setting( 'vw_appoinment_pro_slide_remove_fade',
     array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
    ));
    $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_slide_remove_fade',
       array(
          'label' => esc_html__( 'Fade Effect', 'vw-appointment-pro' ),
          'section' => 'vw_appoinment_pro_slider_section'
    )));	
	$wp_customize->add_setting('vw_appoinment_pro_slider_section_content_option',array(
        'default' => __('Left','vw-appointment-pro'),
        'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
	));
	$wp_customize->add_control(new vw_appoinment_pro_Image_Radio_Control($wp_customize, 'vw_appoinment_pro_slider_section_content_option', array(
        'type' => 'select',
        'label' => __('Slider Content Layouts','vw-appointment-pro'),
        'section' => 'vw_appoinment_pro_slider_section',
        'choices' => array(
            'Left' => get_template_directory_uri().'/assets/images/slider-content1.png',
            'Center' => get_template_directory_uri().'/assets/images/slider-content2.png',
            'Right' => get_template_directory_uri().'/assets/images/slider-content3.png',
    ))));
	$wp_customize->add_setting('vw_appoinment_pro_slider_section_content_spacing',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('vw_appoinment_pro_slider_section_content_spacing',array(
		'label'	=> esc_html__('Slider Content Spacing','vw-appointment-pro'),
		'description'	=> __('Add value in percentage here.','vw-appointment-pro'),
		'section'=> 'vw_appoinment_pro_slider_section',
	));
	$wp_customize->add_setting( 'vw_appoinment_pro_slider_section_slider_top_spacing', array(
		'default'  => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control( 'vw_appoinment_pro_slider_section_slider_top_spacing', array(
		'label' => esc_html__( 'Top','vw-appointment-pro' ),
		'section' => 'vw_appoinment_pro_slider_section',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
	),));
	$wp_customize->add_setting( 'vw_appoinment_pro_slider_section_slider_bottom_spacing', array(
		'default'  => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control( 'vw_appoinment_pro_slider_section_slider_bottom_spacing', array(
		'label' => esc_html__( 'Bottom','vw-appointment-pro' ),
		'section' => 'vw_appoinment_pro_slider_section',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
	),));
	$wp_customize->add_setting( 'vw_appoinment_pro_slider_section_slider_left_spacing', array(
		'default'  => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control( 'vw_appoinment_pro_slider_section_slider_left_spacing', array(
		'label' => esc_html__( 'Left','vw-appointment-pro'),
		'section' => 'vw_appoinment_pro_slider_section',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
	),));
	$wp_customize->add_setting( 'vw_appoinment_pro_slider_section_slider_right_spacing', array(
		'default'  => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control( 'vw_appoinment_pro_slider_section_slider_right_spacing', array(
		'label' => esc_html__('Right','vw-appointment-pro'),
		'section' => 'vw_appoinment_pro_slider_section',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
	),));
	$wp_customize->add_setting( 'vw_appoinment_pro_slider_opacity_color',
      array(
        'default' => 1,
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
      ));
  	$wp_customize->add_control( new vw_appoinment_pro_Slider_Custom_Control( $wp_customize, 'vw_appoinment_pro_slider_opacity_color',
    array(
      'label' => __( 'Slider Image Opacity', 'vw-appointment-pro' ),
      'section' => 'vw_appoinment_pro_slider_section',
      'input_attrs' => array(
        'min' => 0,
        'max' =>1, 
        'step' => 0.1, 
    ),)));
	$wp_customize->add_setting( 'vw_appoinment_pro_slider_dots',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   	));
  	$wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_slider_dots',
     array(
        'label' => esc_html__( 'Show/Hide Slider Dots', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_slider_section'
    )));	
    $wp_customize->add_setting( 'vw_appoinment_pro_slider_nav',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
   	));
  	$wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_slider_nav',
     array(
        'label' => esc_html__( 'Show/Hide Slider Nav', 'vw-appointment-pro' ),
        'section' => 'vw_appoinment_pro_slider_section'
    )));	
	$wp_customize->add_setting( 'vw_appoinment_pro_slider_color_section_settings',array(
	    'default' => '',
	    'transport' => 'postMessage',
	    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_slider_color_section_settings',array(
	    'label' => __('Font and Color Option ','vw-appointment-pro'),
	    'section' => 'vw_appoinment_pro_slider_section'
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_slider_small_Heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_slider_small_Heading_color', array(
		'label' => __('Slider Small Heading Color', 'vw-appointment-pro'),
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_slider_small_Heading_color',
	)));
	$wp_customize->add_setting('vw_appoinment_pro_slider_small_Heading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_appoinment_pro_slider_small_Heading_font_family', array(
	    'section'  => 'vw_appoinment_pro_slider_section',
	    'label'    => __( 'Slider Small Heading Fonts','vw-appointment-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_appoinment_pro_slider_small_heading_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
 	$wp_customize->add_control('vw_appoinment_pro_slider_small_heading_font_size',array(
      'label' => __('Small Heading Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_slider_section',
      'setting' => 'vw_appoinment_pro_slider_small_heading_font_size',
      'type'    => 'text'
    ));
	$wp_customize->add_setting( 'vw_appoinment_pro_main_heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_main_heading_color', array(
		'label' => __('Slider Main Heading Color', 'vw-appointment-pro'),
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_main_heading_color',
	)));
	$wp_customize->add_setting('vw_appoinment_pro_main_heading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_appoinment_pro_main_heading_font_family', array(
	    'section'  => 'vw_appoinment_pro_slider_section',
	    'label'    => __( 'Slider Main Heading Fonts','vw-appointment-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_appoinment_pro_main_heading_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
  	$wp_customize->add_control('vw_appoinment_pro_main_heading_font_size',array(
      'label' => __('Main Heading Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_slider_section',
      'setting' => 'vw_appoinment_pro_main_heading_font_size',
      'type'    => 'text'
    ));
    $wp_customize->add_setting( 'vw_appoinment_pro_main_heading_border_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_main_heading_border_color', array(
		'label' => 'Main Heading Border Color',
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_main_heading_border_color',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_slider_section_text_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_slider_section_text_color', array(
		'label' => __('Slider Text Color', 'vw-appointment-pro'),
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_slider_section_text_color',
	)));
	$wp_customize->add_setting('vw_appoinment_pro_slider_section_text_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_appoinment_pro_slider_section_text_font_family', array(
	    'section'  => 'vw_appoinment_pro_slider_section',
	    'label'    => __( 'Slider Text Fonts','vw-appointment-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_appoinment_pro_slider_section_text_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  	);
  	$wp_customize->add_control('vw_appoinment_pro_slider_section_text_font_size',array(
      'label' => __('Main Heading Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_slider_section',
      'setting' => 'vw_appoinment_pro_slider_section_text_font_size',
      'type'    => 'text'
    ));
	// Button color 1 settings
	$wp_customize->add_setting( 'vw_appoinment_pro_slider_btn1_section_settings',array(
	    'default' => '',
	    'transport' => 'postMessage',
	    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_slider_btn1_section_settings',array(
	    'label' => __('Button 1 Option ','vw-appointment-pro'),
	    'section' => 'vw_appoinment_pro_slider_section'
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_slide_buttoncolor1', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_slide_buttoncolor1', array(
		'label' => 'Button 1 Text Color',
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_slide_buttoncolor1',
	)));	

	$wp_customize->add_setting('vw_appoinment_pro_button_fontfamily1',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'vw_appoinment_pro_button_fontfamily1', array(
	    'section'  => 'vw_appoinment_pro_slider_section',
	    'label'    => __( 'Button 1 Text Fonts','vw-appointment-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
 	));
 	$wp_customize->add_setting('vw_appoinment_pro_slide_button_font_size1',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
  	$wp_customize->add_control('vw_appoinment_pro_slide_button_font_size1',array(
      'label' => __('Button 1 Text Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_slider_section',
      'setting' => 'vw_appoinment_pro_slide_button_font_size1',
      'type'    => 'text'
    ));
    $wp_customize->add_setting( 'vw_appoinment_pro_slide_button_bordercolor1', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_slide_button_bordercolor1', array(
		'label' => 'Button 1 Border Color',
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_slide_button_bordercolor1',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_slide_button_bgcolor1', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_slide_button_bgcolor1', array(
		'label' => 'Button 1 Background Color',
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_slide_button_bgcolor1',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_slide_button_hover_color1', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_slide_button_hover_color1', array(
		'label' => 'Button 1 Text Hover Color',
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_slide_button_hover_color1',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_slide_button_hover_bordercolor1', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_slide_button_hover_bordercolor1', array(
		'label' => 'Button 1 Hover Border Color',
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_slide_button_hover_bordercolor1',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_slide_button_hover_bgcolor1', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_slide_button_hover_bgcolor1', array(
		'label' => 'Button 1 Hover Background Color',
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_slide_button_hover_bgcolor1',
	)));
	// Button color 1 settings
	$wp_customize->add_setting( 'vw_appoinment_pro_slider_btn2_section_settings',array(
	    'default' => '',
	    'transport' => 'postMessage',
	    'sanitize_callback' => 'vw_appoinment_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_appoinment_pro_slider_btn2_section_settings',array(
	    'label' => __('Button 2 Option ','vw-appointment-pro'),
	    'section' => 'vw_appoinment_pro_slider_section'
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_slide_buttoncolor2', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_slide_buttoncolor2', array(
		'label' => 'Button 2 Text Color',
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_slide_buttoncolor2',
	)));	

	$wp_customize->add_setting('vw_appoinment_pro_button_fontfamily2',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_appoinment_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'vw_appoinment_pro_button_fontfamily2', array(
	    'section'  => 'vw_appoinment_pro_slider_section',
	    'label'    => __( 'Button 2 Text Fonts','vw-appointment-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
 	));
 	$wp_customize->add_setting('vw_appoinment_pro_slide_button_font_size2',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
  	$wp_customize->add_control('vw_appoinment_pro_slide_button_font_size2',array(
      'label' => __('Button 2 Text Font Size in px','vw-appointment-pro'),
      'section' => 'vw_appoinment_pro_slider_section',
      'setting' => 'vw_appoinment_pro_slide_button_font_size2',
      'type'    => 'text'
    ));
    $wp_customize->add_setting( 'vw_appoinment_pro_slide_button_bordercolor2', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_slide_button_bordercolor2', array(
		'label' => 'Button 2 Border Color',
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_slide_button_bordercolor2',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_slide_button_bgcolor2', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_slide_button_bgcolor2', array(
		'label' => 'Button 2 Background Color',
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_slide_button_bgcolor2',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_slide_button_hover_color2', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_slide_button_hover_color2', array(
		'label' => 'Button 2 Text Hover Color',
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_slide_button_hover_color2',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_slide_button_hover_bordercolor2', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_slide_button_hover_bordercolor1', array(
		'label' => 'Button 2 Hover Border Color',
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_slide_button_hover_bordercolor2',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_slide_button_hover_bgcolor2', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_slide_button_hover_bgcolor2', array(
		'label' => 'Button 2 Hover Background Color',
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_slide_button_hover_bgcolor2',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_slide_dots_border_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_slide_dots_border_color', array(
		'label' => 'Slider Dots Border Color',
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_slide_dots_border_color',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_slide_dots_active_border_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_slide_dots_active_border_color', array(
		'label' => 'Active Slider Dots Color',
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_slide_dots_active_border_color',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_slide_nav_icon_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_slide_nav_icon_color', array(
		'label' => 'Slider Nav Icon Color',
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_slide_nav_icon_color',
	)));
	$wp_customize->add_setting( 'vw_appoinment_pro_slide_nav_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_appoinment_pro_slide_nav_bgcolor', array(
		'label' => 'Slider Nav Hover Background Color',
		'section' => 'vw_appoinment_pro_slider_section',
		'settings' => 'vw_appoinment_pro_slide_nav_bgcolor',
	)));
	