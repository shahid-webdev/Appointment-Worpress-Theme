<?php
/**
 * The Header for our theme.
 *
 * @package vw-appointment-pro
 */

$sticky_header="";
if ( get_theme_mod('vw_appoinment_pro_header_section_sticky',true) == "1" ) {
  $sticky_header="yes";
}else{

  $sticky_header="no";
}
$menu_width="";
if ( get_theme_mod('vw_appoinment_pro_site_menu_width',true) != "" ) {
  $menu_width=get_theme_mod('vw_appoinment_pro_site_menu_width','250');
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="shortcut icon" href="#">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="menu_overlay"></div>
  <?php if ( get_theme_mod('vw_appoinment_pro_products_spinner_enable',true) == "1" ) { ?>
    <div id="custom_preloader">
      <div id="preloader_status"></div>
    </div>
  <?php } ?>
 <header id="masthead" class="site-header">
    <div id="header">
      <div id="header-menu" class="header-main">
        <?php get_template_part('template-parts/header/topbar');  ?>
        <div class="header-wrap">
          <?php 
            get_template_part('template-parts/header/navigation'); 
          ?>
        </div>
        <span id="sticky-onoff"><?php echo esc_html($sticky_header); ?></span>
        <span class="d-none" id="menu-width"><?php echo esc_html($menu_width); ?></span>
      </div>
    </div>
  </header>