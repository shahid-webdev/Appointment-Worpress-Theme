<?php

/* Theme Widgets Setup */
function vw_appoinment_pro_widgets_init() {
	register_sidebar( array(
     'name'          => __( 'Blog Right Sidebar', 'vw-appointment-pro' ),
     'description'   => __( 'Appears on blog page sidebar', 'vw-appointment-pro' ),
     'id'            => 'sidebar-1',
     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
     'after_widget'  => '</aside>',
     'before_title'  => '<h3 class="widget-title">',
     'after_title'   => '</h3>',
   ) );
   register_sidebar( array(
     'name'          => __( 'Blog Left Sidebar', 'vw-appointment-pro' ),
     'description'   => __( 'Appears on blog page sidebar', 'vw-appointment-pro' ),
     'id'            => 'sidebar-left',
     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
     'after_widget'  => '</aside>',
     'before_title'  => '<h3 class="widget-title">',
     'after_title'   => '</h3>',
   ) );
   register_sidebar( array(
     'name'          => __( 'Page Right Sidebar', 'vw-appointment-pro' ),
     'description'   => __( 'Appears on page sidebar', 'vw-appointment-pro' ),
     'id'            => 'sidebar-2',
     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
     'after_widget'  => '</aside>',
     'before_title'  => '<h3 class="widget-title">',
     'after_title'   => '</h3>',
   ) );
   register_sidebar( array(
     'name'          => __( 'Page Left Sidebar', 'vw-appointment-pro' ),
     'description'   => __( 'Appears on page sidebar', 'vw-appointment-pro' ),
     'id'            => 'sidebar-page-left',
     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
     'after_widget'  => '</aside>',
     'before_title'  => '<h3 class="widget-title">',
     'after_title'   => '</h3>',
   ) );
   register_sidebar( array(
     'name'          => __( 'Footer 1', 'vw-appointment-pro' ),
     'description'   => __( 'Appears on footer', 'vw-appointment-pro' ),
     'id'            => 'footer-1',
     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
     'after_widget'  => '</aside>',
     'before_title'  => '<h3 class="widget-title">',
     'after_title'   => '</h3>',
   ) );
   register_sidebar( array(
     'name'          => __( 'Footer 2', 'vw-appointment-pro' ),
     'description'   => __( 'Appears on footer', 'vw-appointment-pro' ),
     'id'            => 'footer-2',
     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
     'after_widget'  => '</aside>',
     'before_title'  => '<h3 class="widget-title">',
     'after_title'   => '</h3>',
   ) );
   register_sidebar( array(
     'name'          => __( 'Footer 3', 'vw-appointment-pro' ),
     'description'   => __( 'Appears on footer', 'vw-appointment-pro' ),
     'id'            => 'footer-3',
     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
     'after_widget'  => '</aside>',
     'before_title'  => '<h3 class="widget-title">',
     'after_title'   => '</h3>',
   ) );
}
add_action( 'widgets_init', 'vw_appoinment_pro_widgets_init' );