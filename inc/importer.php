<?php

/* -------- Import Theme Demo Content ------------- */
if ( ! function_exists( 'vw_appoinment_pro_import_files' ) ) :
  function vw_appoinment_pro_import_files() {
    return array(
      array(
        'import_file_name'             => 'Default Demo',
        'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo-data/vw-appointment-pro-demo.xml',
        'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo-data/vw-appointment-pro-widgets.wie',
        'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo-data/vw-appointment-pro-export.dat',
        'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'vw-appointment-pro' )
      )
    );
  }
  add_filter( 'pt-ocdi/import_files', 'vw_appoinment_pro_import_files' );
endif;

/* ---------- Setting Home Page And Primary Menu --------- */

if ( ! function_exists( 'vw_appoinment_pro_after_import' ) ) :
function vw_appoinment_pro_after_import( $selected_import ) {

  // -------- Menu Setting --------

  $top_menu = get_term_by('name', 'Menu 1', 'nav_menu');
  set_theme_mod( 'nav_menu_locations' , array( 
        'primary' => $top_menu->term_id, 
       ) 
  );

  // ---------- Setting Home Page -------

  $page = get_page_by_title( 'Home');
  if ( isset( $page->ID ) ) {
    update_option( 'page_on_front', $page->ID );
    update_option( 'show_on_front', 'page' );
  }
}
add_action( 'pt-ocdi/after_import', 'vw_appoinment_pro_after_import' );
endif;