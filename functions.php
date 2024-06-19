<?php

/**
 * vw-appointment-pro functions and definitions
 *
 * @package vw-appointment-pro
 */

if ( ! function_exists( 'vw_appoinment_pro_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */

function vw_appoinment_pro_setup() {
  $GLOBALS['content_width'] = apply_filters( 'vw_appoinment_pro_content_width', 640 );
  if ( ! isset( $content_width ) ) $content_width = 640;
  load_theme_textdomain( 'vw-appointment-pro', get_template_directory() . '/languages' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'woocommerce' );
  add_theme_support( 'custom-header' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'wc-product-gallery-zoom' ); 
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );

  add_theme_support( 'custom-logo', array(
    'height'      => 240,
    'width'       => 240,
    'flex-height' => true,
  ) );
  add_image_size('vw-appointment-pro-homepage-thumb',240,145,true);
  register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'vw-appointment-pro' ),
  ) );
  add_theme_support( 'custom-background', array(
    'default-color' => 'f1f1f1'
  ) );
  add_editor_style();
}
endif;
add_action( 'after_setup_theme', 'vw_appoinment_pro_setup' );

// To defer JS Files to help page Speed First contentfull paint.
function defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 99 );
/* ----------- Amp Style ------------ */
if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
    add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
    /**
     * Dequeue JavaScript or Stylesheet.
     */ 
    wp_dequeue_style( 'amp-default' ); 
    //woocommerce block style
    remove_action( 'enqueue_block_assets', 'wp_enqueue_registered_block_scripts_and_styles' );
}

/* Theme enqueue scripts */
function vw_appoinment_pro_scripts() {
  wp_enqueue_style( 'vw-appointment-pro-font', vw_appoinment_pro_font_url(), array() );
  wp_enqueue_style( 'vw-appointment-pro-basic-style', get_stylesheet_uri() );
  wp_style_add_data( 'rtl-style', 'rtl', 'replace' );
  
  /* Inline style sheet */
  require get_parent_theme_file_path( '/inline_style.php');
  wp_add_inline_style( 'vw-appointment-pro-basic-style',$custom_css );

  if(is_rtl()){
    wp_enqueue_style( 'rtl-style', get_template_directory_uri().'/rtl.css',true, null,'all');
    wp_add_inline_style( 'rtl-style',$custom_css );
  }else{
    // ---------- CSS Enqueue -----------
    if(is_front_page() || is_home()){
      wp_enqueue_style( 'home-page-style', get_template_directory_uri().'/assets/css/main-css/home-page.css',true, null,'all');
      wp_add_inline_style( 'home-page-style',$custom_css );
    }else{
      wp_enqueue_style( 'other-page-style', get_template_directory_uri() . '/assets/css/main-css/other-pages.css',true, null,'all');
      wp_add_inline_style( 'other-page-style',$custom_css );
    }
    if('post' == get_post_type() && is_home()){
      wp_enqueue_style( 'other-page-style', get_template_directory_uri() . '/assets/css/main-css/other-pages.css',true, null,'all');
      wp_add_inline_style( 'other-page-style',$custom_css );
    }
    if(class_exists('IMMA_Class')){
      wp_enqueue_style( 'vw-appointment-pro-mega-menu-style', get_template_directory_uri().'/assets/css/main-css/mega-menu-style.css',true, null,'all');
    }
    wp_enqueue_style( 'header-footer-style', get_template_directory_uri().'/assets/css/main-css/header-footer.css',true, null,'all' );
    wp_enqueue_style( 'responsive-style', get_template_directory_uri().'/assets/css/main-css/mobile-main.css',true, null,'screen and (max-width: 1200px) and (min-width: 0px)' );
    
     
    wp_add_inline_style( 'header-footer-style',$custom_css );
    wp_add_inline_style( 'responsive-media-style',$custom_css );
  }
  if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
    wp_enqueue_style( 'amp-style', get_template_directory_uri().'/assets/css/main-css/amp-style.css',true, null,'all' );
  }else{
    wp_enqueue_style( 'animation-wow',get_template_directory_uri().'/assets/css/animate.css' );
    wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri().'/assets/css/owl.carousel.css' );
  }
  wp_enqueue_style( 'font-awesome-style',get_template_directory_uri().'/assets/css/fontawesome-all.min.css' );
  wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css' );
// ---------- JS Enqueue -----------
  wp_enqueue_script( 'amp-sidebar', get_template_directory_uri() . '/assets/js/amp-sidebar-0.1.js', array( 'jquery' ) );
  wp_enqueue_script( 'animation-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'tether', get_template_directory_uri() . '/assets/js/tether.js', array( 'jquery' ) );
  wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array( 'jquery' ) );
  wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js', array( 'jquery' ) );
 
  wp_enqueue_script( 'vw-customscripts', get_template_directory_uri() . '/assets/js/custom.js');
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'jquery-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'jquery-appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array( 'jquery' ) );
  
}
add_action( 'wp_enqueue_scripts', 'vw_appoinment_pro_scripts' );

/* Implement the Custom Header feature. */
require get_parent_theme_file_path('/inc/custom-header.php' );
/* Custom template tags for this theme. */
require get_parent_theme_file_path('/inc/template-tags.php' );

// theme_verfication
require get_template_directory().'/inc/customize/verify_theme_version.php';
/* Google Fonts */
require get_parent_theme_file_path('/inc/google-fonts.php' );
/* Widget Sidebar */
require get_parent_theme_file_path('/inc/widget-sidebar.php' );
//social widget file
require get_parent_theme_file_path('/inc/widget/socail-widget.php' );
//Contact Widget file
require get_parent_theme_file_path('/inc/widget/contact-widget.php' );
//about us
require get_template_directory() . '/inc/widget/about-us-widget.php';

/* Theme Wizard */
require get_parent_theme_file_path('/theme-wizard/config.php' );

require get_parent_theme_file_path('/theme-wizard/plugin-activation.php' );

/* Customizer additions. */
require get_parent_theme_file_path('/inc/customize/customizer.php' );

/* URL DEFINES */
define('vw_appoinment_pro_SITE_URL','https://www.vwthemes.com/');
/* Theme Credit link */
function vw_appoinment_pro_credit_link() {
  echo esc_html_e(' Design & Developed by','vw-appointment-pro'). "<a href=".esc_url(vw_appoinment_pro_SITE_URL)." target='_blank'> VW Themes</a>";
}
/*Radio Button sanitization*/
function vw_appoinment_pro_sanitize_choices( $input, $setting ) {
  global $wp_customize;
  $control = $wp_customize->get_control( $setting->id );
  if ( array_key_exists( $input, $control->choices ) ) {
    return $input;
  } else {
    return $setting->default;
  }
}

 /* Breadcrumb Begin */
function vw_appoinment_pro_the_breadcrumb() {
  if (!is_home()) {
    echo '<a href="';
      echo esc_url(home_url());
    echo '">';
      bloginfo('name');
    echo "</a> ";
    if (is_category() || is_single()) {
      the_category(', ');
      if (is_single()) {
        echo "<span> ";
          the_title();
        echo "</span> ";
      }
    } elseif (is_page()) {
      the_title();
    }
  }
}

/* Excerpt Limit Begin */
function vw_appoinment_pro_string_limit_words($string, $word_limit) {
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}

/* Excerpt Read more overwrite */
function vw_appoinment_pro_excerpt_more( $link ) {
  if ( is_admin() ) {
    return $link;
  }
  $link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
    esc_url( get_permalink( get_the_ID() ) ),
    /* translators: %s: Name of current post */
    sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'vw-appointment-pro' ), get_the_title( get_the_ID() ) )
  );
  return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'vw_appoinment_pro_excerpt_more' );

define('vw_appoinment_pro_THEME_DOC','https://www.vwthemesdemo.com/docs/vw-appointment-pro/');
define('vw_appoinment_pro_SUPPORT','https://www.vwthemes.com/support/vw-theme/');
define('vw_appoinment_pro_FAQ','https://www.vwthemes.com/faqs/');
define('vw_appoinment_pro_CONTACT','https://www.vwthemes.com/contact/');
define('vw_appoinment_pro_REVIEW','https://www.vwthemes.com/topic/reviews-and-testimonials/');
define('vw_appoinment_pro_SHOPIFY','https://www.vwthemes.com/premium-shopify/vw-showcase-shopify-theme/');
define('vw_appoinment_pro_MOODLE','https://vwthemes.com/lms-themes/taleem-responsive-moodle-theme/');
define('vw_appoinment_pro_MOBILE_APP','https://www.vwthemes.com/premium-plugin/vw-woocommerce-mobile-app/');

define('vw_appoinment_pro_slider_link','https://www.youtube.com/watch?v=1xGlbWOzQBg&feature=youtu.be');
define('vw_appoinment_pro_bannerplugin','https://www.vwthemes.com/premium-plugin/vw-title-banner-plugin/');
define('vw_appoinment_pro_social_media_plugin','https://www.vwthemes.com/free-plugin/vw-social-media/');
define('vw_appoinment_pro_preloader_plugin','https://www.vwthemes.com/free-plugin/vw-preloader/');
define('vw_appoinment_pro_accordion_plugin','https://www.vwthemes.com/free-plugin/vw-accordion/');
define('vw_appoinment_pro_gallery_plugin','https://www.vwthemes.com/premium-plugin/vw-gallery-plugin/');
define('vw_appoinment_pro_header_section_video','https://www.youtube.com/watch?v=nLB9E6BBBv0');
define('vw_appoinment_pro_footer_section_video','https://www.youtube.com/watch?v=7BvTpLh-RB8');
define('vw_appoinment_pro_contact_page_video','https://www.youtube.com/watch?v=gjccwcAK47o');
define('vw_appoinment_pro_shortcode_page_video','https://www.youtube.com/watch?v=ovcok3FPRto');

define( 'IBTANA_THEME_LICENCE_ENDPOINT', 'https://vwthemes.com/wp-json/ibtana-licence/v2/' );

/*===================================================================================
* Add Author Links
* =================================================================================*/
function add_to_author_profile( $contactmethods ) {

$contactmethods['tumbler_url'] = 'Tumbler URL';
$contactmethods['pinterest_profile'] = 'Pinterest Profile URL';
$contactmethods['twitter_profile'] = 'Twitter Profile URL';
$contactmethods['facebook_profile'] = 'Facebook Profile URL';

return $contactmethods;
}
add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1);
Class My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {
   function widget($args, $instance) {
           if ( ! isset( $args['widget_id'] ) ) {
           $args['widget_id'] = $this->id;
       }
       $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts', 'vw-appointment-pro' );
       /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
       $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
       $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
       if ( ! $number )
           $number = 5;
       $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;
       /**
        * Filter the arguments for the Recent Posts widget.
        *
        * @since 3.4.0
        *
        * @see WP_Query::get_posts()
        *
        * @param array $args An array of arguments used to retrieve the recent posts.
        */
       $r = new WP_Query( apply_filters( 'widget_posts_args', array(
           'posts_per_page'      => $number,
           'no_found_rows'       => true,
           'post_status'         => 'publish',
           'ignore_sticky_posts' => true
       ) ) );
       if ($r->have_posts()) :
       ?>
       <?php echo $args['before_widget']; ?>
       <?php if ( $title ) {
           echo $args['before_title'] . esc_html($title) . $args['after_title'];
       } ?>
       <ul>
         <?php while ( $r->have_posts() ) : $r->the_post(); ?>
             <li>
                 <div class="row recent-post-box">
                   <div class="post-thumb <?php if(has_post_thumbnail()) { echo 'col-lg-4 col-md-12 col-sm-12 col-12'; } ?> ">
                       <?php the_post_thumbnail(); ?>
                   </div>
                   <div class="post-content <?php if(has_post_thumbnail()) { echo 'col-lg-8 col-md-12 col-sm-12 col-12'; } else { echo 'col-md-12 col-sm-12 col-12'; }?>">
                       <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     <?php if ( $show_date ) : ?>
                         <p class="post-date"><?php the_time(get_option('date_format')); ?></p>
                     <?php endif; ?>
                   </div>
                 </div>
             </li>
         <?php endwhile; 
         wp_reset_postdata(); ?>
       </ul>

       <?php echo $args['after_widget'];
       
       endif;
   }
}
function vw_recent_widget_registration() {
 unregister_widget('WP_Widget_Recent_Posts');
register_widget('My_Recent_Posts_Widget');
}
add_action('widgets_init', 'vw_recent_widget_registration');

/**
 * Sync lite options.
 */
function vw_appoinment_pro_sync_options() {
  $theme_mods_match_id = array(
    'appointment_booking_email_address' => 'vw_appoinment_pro_topbar_email_text',
    'appointment_booking_phone_number' => 'vw_appoinment_pro_contact_details_phone_text'
  );
  $matchTheme=array(
    'vw-appointment-pro' => 'appointment-booking'
  );
  $newTheme = wp_get_theme();
  $themename = $newTheme->get_stylesheet();
  global $wpdb;
  if(isset($matchTheme[$themename])){
    $old_theme = $matchTheme[$themename];
    $checkWord = 'theme_mods_'.$old_theme;
    $mqr = "SELECT * FROM wp_options where option_name='$checkWord'";
    $result = $wpdb->get_row($mqr);
    if($result){
      $optionValue = $result->option_value;
      $data_array=unserialize($optionValue);
      foreach ($theme_mods_match_id as $key => $word){
        $data_array[$word] = $data_array[$key];
      }
      $increment=0;
      foreach ($data_array as $d => $old) {
        $match = 'appointment_booking_slider_page';
        if(strpos($d, $match) !== false){
          $increment++;
          $postId = $old;
          $post = get_post($postId);
          $data_array['vw_appoinment_pro_slide_main_heading'.$increment] = get_the_title($postId);
          $data_array['vw_appoinment_pro_slide_text'.$increment] = get_the_excerpt($postId);
          $data_array['vw_appoinment_pro_slide_btntext1'.$increment] =  get_permalink($postId);
        }
      }
      $data_array['vw_appoinment_pro_slide_number'] =  $increment;
      $data_array_1=serialize($data_array);
      $newWord = 'theme_mods_'.$themename;
      $update = $wpdb->update('wp_options',['option_value'=>$data_array_1],['option_name'=>$newWord]);
    }
  }
}
add_action( 'after_switch_theme', 'vw_appoinment_pro_sync_options'  );

function wp_trim_words_vw( $text, $num_words = 55, $more = null ) {
    if ( null === $more ) {
        $more = __( '&hellip;' );
    }
 
    $original_text = $text;
    $text          = wp_strip_all_tags( $text );
    $num_words     = (int) $num_words;
 
    /*
     * translators: If your word count is based on single characters (e.g. East Asian characters),
     * enter 'characters_excluding_spaces' or 'characters_including_spaces'. Otherwise, enter 'words'.
     * Do not translate into your own language.
     */
    if ( strpos( _x( 'words', 'Word count type. Do not translate!' ), 'characters' ) === 0 && preg_match( '/^utf\-?8$/i', get_option( 'blog_charset' ) ) ) {
        $text = trim( preg_replace( "/[\n\r\t ]+/", ' ', $text ), ' ' );
        preg_match_all( '/./u', $text, $words_array );
        $words_array = array_slice( $words_array[0], 0, $num_words + 1 );
        $sep         = '';
    } else {
        $words_array = preg_split( "/[\n\r\t ]+/", $text, $num_words + 1, PREG_SPLIT_NO_EMPTY );
        $sep         = ' ';
    }
 
    if ( count( $words_array ) > $num_words ) {
        array_pop( $words_array );
        $text = implode( $sep, $words_array );
        $text = $text . $more;
    } else {
        $text = implode( $sep, $words_array );
    }
 
    /**
     * Filters the text content after words have been trimmed.
     *
     * @since 3.3.0
     *
     * @param string $text          The trimmed text.
     * @param int    $num_words     The number of words to trim the text to. Default 55.
     * @param string $more          An optional string to append to the end of the trimmed text, e.g. &hellip;.
     * @param string $original_text The text before it was trimmed.
     */
    return apply_filters( 'wp_trim_words_vw', $text, $num_words, $more, $original_text );
}
/* --------- Verify Mega Menu --------- */
//require get_parent_theme_file_path( '/verify-addons/ibtana-mega-menu-verify.php' );

//-------- Bundle Notice --------- 
add_action( 'admin_notices', 'vw_theme_bundle_admin_notice' );
function vw_theme_bundle_admin_notice() {
       ?>
    <div class="notice bundle-notice is-dismissible">
      <div class="theme_box">
        <h3><?php echo esc_html('Thank You For Purchasing VW Appointment Pro Theme','vw-appointment-pro'); ?></h3>
        <p><?php echo esc_html('Get our all','vw-appointment-pro'); ?>
        <strong><?php echo esc_html('120+ Premium Themes','vw-appointment-pro'); ?></strong>
        <?php echo esc_html('worth $7021 With Our','vw-appointment-pro'); ?>
        <strong><?php echo esc_html('WP Theme Bundle','vw-appointment-pro'); ?></strong>
        <?php echo esc_html('in just $89.','vw-appointment-pro'); ?></p>
        
      </div>
      <div class="bubdle_button">
        <a href="https://www.vwthemes.com/premium/all-themes/" class="button button-primary button-hero" target="_blank" rel="noopener"><?php echo esc_html('Get Bundle at $89','vw-appointment-pro'); ?></a>
      </div>
    </div>
   <?php 
} 

add_action('switch_theme', 'vw_appoinment_pro_deactivate');
function vw_appoinment_pro_deactivate() {
  ThemeWhizzie::remove_the_theme_key();
  ThemeWhizzie::set_the_validation_status('false');
}

define('CUSTOM_TEXT_DOMAIN', 'appointment-booking');