<?php

	require get_template_directory() . '/theme-wizard/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function vw_appoinment_proregister_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'VW Appointment Pro Posttype', 'vw-appointment-pro' ),
			'slug'             => 'vw-appointment-pro-posttype',
			'source'           => get_template_directory() .'/inc/plugins/vw-appointment-pro-posttype.zip',
			'required'         => true,
			'force_activation' => false,
		),	
		array(
			'name'             => __( 'Contact Form 7', 'vw-appointment-pro' ),
			'slug'             => 'contact-form-7',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'VW Social Media', 'vw-appointment-pro' ),
			'slug'             => 'vw-social-media',
			'source'           => get_template_directory() .'/inc/plugins/vw-social-media.zip',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'VW Appoinment Plugin', 'vw-appointment-pro' ),
			'slug'             => 'vw-appointments-plugin',
			'source'           => get_template_directory() .'/inc/plugins/vw-appointments-plugin.zip',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'VW Gallery Images', 'vw-appointment-pro' ),
			'slug'             => 'vw-gallery-images',
			'source'           => get_template_directory() . '/inc/plugins/vw-gallery-images.zip',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ibtana - WordPress Website Builder', 'vw-appoinment-pro' ),
			'slug'             => 'ibtana-visual-editor',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),
		
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'vw_appoinment_proregister_recommended_plugins' );