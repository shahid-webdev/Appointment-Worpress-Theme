<?php
/**
 * vw-appointment-pro Theme Customizer
 *
 * @package vw-appointment-pro
 */
/**
 * Loads custom control for layout settings
 */
function vw_appoinment_pro_custom_controls() {
    require_once get_template_directory() . '/inc/customize/controls/admin/customize-texteditor-control.php';
    require_once get_template_directory() . '/inc/customize/controls/custom-controls.php';
    
}
add_action( 'customize_register', 'vw_appoinment_pro_custom_controls' );
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_appoinment_pro_customize_register( $wp_customize ) {

    $wp_customize->selective_refresh->add_partial( 'blogname', array(
        'selector' => '.logo a',
        'render_callback' => 'twentyfifteen_customize_partial_blogname',
    ));
    $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
        'selector' => '.site-description',
        'render_callback' => 'twentyfifteen_customize_partial_blogdescription',
    ));
    $wp_customize->add_setting('vw_appoinment_pro_logo_custom_text',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_appoinment_pro_logo_custom_text',array(
      'label' => __('Logo Custom Text','vw-appointment-pro'),
      'section' => 'title_tagline',
      'priority'    => 8,
      'setting'   => 'vw_appoinment_pro_logo_custom_text',
      'type'  => 'text'
    ));
    $wp_customize->add_setting( 'vw_appoinment_pro_hide_custom_text_from_media',
        array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_appoinment_pro_switch_sanitization'
    ));
    $wp_customize->add_control( new vw_appoinment_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_appoinment_pro_hide_custom_text_from_media',
         array(
            'label' => esc_html__( 'Logo Text Hide ', 'vw-appointment-pro' ),
             'description' => __('Hide logo text from small media','vw-appointment-pro'),
            'section' => 'title_tagline'
    )));
    $wp_customize->add_setting('vw_appoinment_pro_display_title',array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_appoinment_pro_display_title',array(
        'type' => 'checkbox',
        'label' => __('Show Title','vw-appointment-pro'),
        'section' => 'title_tagline',
    ));
    $wp_customize->add_setting('vw_appoinment_pro_display_tagline',array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_appoinment_pro_display_tagline',array(
        'type' => 'checkbox',
        'label' => __('Show Tagline','vw-appointment-pro'),
        'section' => 'title_tagline',
    ));
    
    //add home page setting pannel
    $wp_customize->add_panel( 'vw_appoinment_pro_panel_id', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Theme Settings', 'vw-appointment-pro' ),
        'description' => __( 'Description of what this panel does.', 'vw-appointment-pro' ),
    ) );
    $font_array = array(
        '' => __( 'No Fonts', 'vw-appointment-pro' ),
        'Abril Fatface' => __( 'Abril Fatface', 'vw-appointment-pro' ),
        'Acme' => __( 'Acme', 'vw-appointment-pro' ),
        'Anton' => __( 'Anton', 'vw-appointment-pro' ),
        'Architects Daughter' => __( 'Architects Daughter', 'vw-appointment-pro' ),
        'Arimo' => __( 'Arimo', 'vw-appointment-pro' ),
        'Arsenal' => __( 'Arsenal', 'vw-appointment-pro' ),
        'Arvo' => __( 'Arvo', 'vw-appointment-pro' ),
        'Alegreya' => __( 'Alegreya', 'vw-appointment-pro' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'vw-appointment-pro' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'vw-appointment-pro' ),
        'Bangers' => __( 'Bangers', 'vw-appointment-pro' ),
        'Boogaloo' => __( 'Boogaloo', 'vw-appointment-pro' ),
        'Bad Script' => __( 'Bad Script', 'vw-appointment-pro' ),
        'Bitter' => __( 'Bitter', 'vw-appointment-pro' ),
        'Bree Serif' => __( 'Bree Serif', 'vw-appointment-pro' ),
        'BenchNine' => __( 'BenchNine', 'vw-appointment-pro' ),
        'Cabin' => __( 'Cabin', 'vw-appointment-pro' ),
        'Cardo' => __( 'Cardo', 'vw-appointment-pro' ),
        'Courgette' => __( 'Courgette', 'vw-appointment-pro' ),
        'Cherry Swash' => __( 'Cherry Swash', 'vw-appointment-pro' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'vw-appointment-pro' ),
        'Crimson Text' => __( 'Crimson Text', 'vw-appointment-pro' ),
        'Cuprum' => __( 'Cuprum', 'vw-appointment-pro' ),
        'Cookie' => __( 'Cookie', 'vw-appointment-pro' ),
        'Chewy' => __( 'Chewy', 'vw-appointment-pro' ),
        'Days One' => __( 'Days One', 'vw-appointment-pro' ),
        'Dosis' => __( 'Dosis', 'vw-appointment-pro' ),
        'Economica' => __( 'Economica', 'vw-appointment-pro' ),
        'Fredoka One' => __( 'Fredoka One', 'vw-appointment-pro' ),
        'Fjalla One' => __( 'Fjalla One', 'vw-appointment-pro' ),
        'Francois One' => __( 'Francois One', 'vw-appointment-pro' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'vw-appointment-pro' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'vw-appointment-pro' ),
        'Great Vibes' => __( 'Great Vibes', 'vw-appointment-pro' ),
        'Handlee' => __( 'Handlee', 'vw-appointment-pro' ),
        'Hammersmith One' => __( 'Hammersmith One', 'vw-appointment-pro' ),
        'Inconsolata' => __( 'Inconsolata', 'vw-appointment-pro' ),
        'Indie Flower' => __( 'Indie Flower', 'vw-appointment-pro' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'vw-appointment-pro' ),
        'Julius Sans One' => __( 'Julius Sans One', 'vw-appointment-pro' ),
        'Josefin Slab' => __( 'Josefin Slab', 'vw-appointment-pro' ),
        'Josefin Sans' => __( 'Josefin Sans', 'vw-appointment-pro' ),
        'Kanit' => __( 'Kanit', 'vw-appointment-pro' ),
        'Lobster' => __( 'Lobster', 'vw-appointment-pro' ),
        'Lato' => __( 'Lato', 'vw-appointment-pro' ),
        'Lora' => __( 'Lora', 'vw-appointment-pro' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'vw-appointment-pro' ),
        'Lobster Two' => __( 'Lobster Two', 'vw-appointment-pro' ),
        'Merriweather' => __( 'Merriweather', 'vw-appointment-pro' ),
        'Monda' => __( 'Monda', 'vw-appointment-pro' ),
        'Montserrat' => __( 'Montserrat', 'vw-appointment-pro' ),
        'Muli' => __( 'Muli', 'vw-appointment-pro' ),
        'Marck Script' => __( 'Marck Script', 'vw-appointment-pro' ),
        'Noto Serif' => __( 'Noto Serif', 'vw-appointment-pro' ),
        'Open Sans' => __( 'Open Sans', 'vw-appointment-pro' ),
        'Overpass' => __( 'Overpass', 'vw-appointment-pro' ),
        'Overpass Mono' => __( 'Overpass Mono', 'vw-appointment-pro' ),
        'Oxygen' => __( 'Oxygen', 'vw-appointment-pro' ),
        'Orbitron' => __( 'Orbitron', 'vw-appointment-pro' ),
        'Patua One' => __( 'Patua One', 'vw-appointment-pro' ),
        'Pacifico' => __( 'Pacifico', 'vw-appointment-pro' ),
        'Padauk' => __( 'Padauk', 'vw-appointment-pro' ),
        'Playball' => __( 'Playball', 'vw-appointment-pro' ),
        'Playfair Display' => __( 'Playfair Display', 'vw-appointment-pro' ),
        'PT Sans' => __( 'PT Sans', 'vw-appointment-pro' ),
        'Philosopher' => __( 'Philosopher', 'vw-appointment-pro' ),
        'Permanent Marker' => __( 'Permanent Marker', 'vw-appointment-pro' ),
        'Poiret One' => __( 'Poiret One', 'vw-appointment-pro' ),
        'Quicksand' => __( 'Quicksand', 'vw-appointment-pro' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'vw-appointment-pro' ),
        'Raleway' => __( 'Raleway', 'vw-appointment-pro' ),
        'Rubik' => __( 'Rubik', 'vw-appointment-pro' ),
        'Rokkitt' => __( 'Rokkitt', 'vw-appointment-pro' ),
        'Russo One' => __( 'Russo One', 'vw-appointment-pro' ),
        'Righteous' => __( 'Righteous', 'vw-appointment-pro' ),
        'Slabo' => __( 'Slabo', 'vw-appointment-pro' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'vw-appointment-pro' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'vw-appointment-pro'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'vw-appointment-pro' ),
        'Sacramento' => __( 'Sacramento', 'vw-appointment-pro' ),
        'Shrikhand' => __( 'Shrikhand', 'vw-appointment-pro' ),
        'Tangerine' => __( 'Tangerine', 'vw-appointment-pro' ),
        'Ubuntu' => __( 'Ubuntu', 'vw-appointment-pro' ),
        'VT323' => __( 'VT323', 'vw-appointment-pro' ),
        'Varela Round' => __( 'Varela Round', 'vw-appointment-pro' ),
        'Vampiro One' => __( 'Vampiro One', 'vw-appointment-pro' ),
        'Vollkorn' => __( 'Vollkorn', 'vw-appointment-pro' ),
        'Volkhov' => __( 'Volkhov', 'vw-appointment-pro' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'vw-appointment-pro' )
    );
    
    require_once get_template_directory() . '/inc/customize/controls/button-controls.php';
    require_once get_template_directory() . '/inc/customize/controls/social-icons/social-icon-picker.php';
    require_once get_template_directory() . '/inc/customize/controls/slider-line-control/slider-line-control.php';
    require_once get_template_directory() . '/inc/customize/controls/customizer-notice/class/customizer-notice.php';
    require_once get_template_directory() . '/inc/customize/controls/customizer-seperator/class/customizer-seperator.php';
    require_once get_template_directory() . '/inc/customize/controls/customizer-text-radio-button/class/customizer-text-radio-button.php';
    require_once get_template_directory() . '/inc/customize/controls/customize-repeater/customize-repeater.php';
    if ( (ThemeWhizzie::get_the_validation_status() === 'true') && (ThemeWhizzie::get_the_suspension_status() == 'false') ) {
        //general Settings
        require_once get_template_directory(). '/inc/customize/sections/customizer-custom-variables.php';
        //Header
        require_once get_template_directory(). '/inc/customize/sections/customizer-part-header.php';
        //Slider
        require_once get_template_directory() . '/inc/customize/sections/customizer-part-slide.php';
        //Home page sections
        require_once get_template_directory(). '/inc/customize/sections/customizer-part-home.php';
        //Footer
        require_once get_template_directory(). '/inc/customize/sections/customizer-part-footer.php';
    }
}
add_action( 'customize_register', 'vw_appoinment_pro_customize_register' );
//Integer
function vw_appoinment_pro_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class vw_appoinment_pro_customize {
    /**
     * Returns the instance.
     *
     * @since  1.0.0
     * @access public
     * @return object
     */
    public static function get_instance() {
        static $instance = null;
        if ( is_null( $instance ) ) {
            $instance = new self;
            $instance->setup_actions();
        }
        return $instance;
    }
    /**
     * Constructor method.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function __construct() {}
    /**
     * Sets up initial actions.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function setup_actions() {
        // Register panels, sections, settings, controls, and partials.
        add_action( 'customize_register', array( $this, 'themeBundleLink' ) );
         add_action( 'customize_register', array( $this, 'sections' ) );
         add_action( 'customize_register', array( $this, 'mobileApp' ) );
        // Register scripts and styles for the controls.
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
    }
    /**
     * Sets up the customizer sections.
     *
     * @since  1.0.0
     * @access public
     * @param  object  $manager
     * @return void
     */
     public function themeBundleLink( $manager ) {
        // Load custom sections.
        load_template( trailingslashit( get_template_directory() ) . '/inc/review-section.php' );
        // Register custom section types.
        $manager->register_section_type( 'vw_appoinment_pro_customize_reviews_and_testimonials' );
        // Register sections.
        $manager->add_section(
            new vw_appoinment_pro_customize_reviews_and_testimonials(
                $manager,
                'example_1',
                array(
                    'title'    => esc_html__( 'Theme Bundle', 'vw-appointment-pro' ),
                    'reviews_and_testimonials_text' => esc_html__( 'Buy Now', 'vw-appointment-pro' ),
                    'reviews_and_testimonials_url'  => 'https://www.vwthemes.com/premium/theme-bundle/',
                    'priority'   => 1,
                )
            )
        );
    }
    public function sections( $manager ) {
        // Load custom sections.
        load_template( trailingslashit( get_template_directory() ) . '/inc/review-section.php' );
        // Register custom section types.
        $manager->register_section_type( 'vw_appoinment_pro_customize_reviews_and_testimonials' );
        // Register sections.
        $manager->add_section(
            new vw_appoinment_pro_customize_reviews_and_testimonials(
                $manager,
                'example_review',
                array(
                    'title'    => esc_html__( 'Review & Testimonial', 'vw-appointment-pro' ),
                    'reviews_and_testimonials_text' => esc_html__( 'Rate Us', 'vw-appointment-pro' ),
                    'reviews_and_testimonials_url'  => 'https://www.vwthemes.com/topic/reviews-and-testimonials/',
                    'priority'   => 2,
                )
            )
        );
    }

    public function mobileApp( $manager ) {
        // Load custom sections.
        load_template( trailingslashit( get_template_directory() ) . '/inc/review-section.php' );
        // Register custom section types.
        $manager->register_section_type( 'vw_appoinment_pro_customize_reviews_and_testimonials' );
        // Register sections.
        $manager->add_section(
            new vw_appoinment_pro_customize_reviews_and_testimonials(
                $manager,
                'example_2',
                array(
                    'title'    => esc_html__( 'WooCommerce App', 'vw-appointment-pro' ),
                    'reviews_and_testimonials_text' => esc_html__( 'Buy Now', 'vw-appointment-pro' ),
                    'reviews_and_testimonials_url'  => 'https://www.vwthemes.com/premium-plugin/vw-woocommerce-mobile-app/',
                    'priority'   => 3,
                )
            )
        );
    }
    /**
     * Loads theme customizer CSS.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function enqueue_control_scripts() {
        function wpdocs_enqueue_custom_admin_style() {
                wp_enqueue_script( 'vw-appointment-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );
                wp_enqueue_style( 'vw-appointment-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
        }
        add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );
    }
}
// Doing this customizer thang!
vw_appoinment_pro_customize::get_instance();