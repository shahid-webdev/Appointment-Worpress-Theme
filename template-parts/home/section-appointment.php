<?php 
  
/**
 * Template part for displaying An Appointment
 *
 * @package vw-appointment-pro
 */

  $section_hide = get_theme_mod( 'vw_appoinment_pro_an_appointment_enabledisable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  if( get_theme_mod('vw_appoinment_pro_an_appointment_bg_color','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_an_appointment_bg_color','')).';';
  }elseif( get_theme_mod('vw_appoinment_pro_an_appointment_bg_image','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_appoinment_pro_an_appointment_bg_image')).'\');';
  }else{
    $about_backg= '';
  }
  $att_style="";
  $image_att = get_theme_mod( 'vw_appoinment_pro_an_appointment_image_attachment',true );
  if ( 'Scroll' == $image_att ) {
   $att_style="section_bg_scroll";
  }else{
   $att_style="section_bg_fixed";
  }
?>
<section id="an-appointment" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($att_style); ?>">
  <div class="container">
    <div class="appointment-content" >            
      <?php if(get_theme_mod('vw_appoinment_pro_an_appointment_heading')!=''){ ?>
        <h3 class="headbox">
          <?php echo esc_html(get_theme_mod('vw_appoinment_pro_an_appointment_heading')); ?>
        </h3>
      <?php } ?>
      <div class="appointment-form">
        <?php if(get_theme_mod('vw_appoinment_pro_an_appointment_contact_shortcode')!=''){ ?>
          <div class="newsletter-form">
            <?php echo do_shortcode(get_theme_mod('vw_appoinment_pro_an_appointment_contact_shortcode')); ?>
          </div>
        <?php }else{ ?>
          <h5 class="message"><?php esc_html_e('Install Vw Appointment plugin and add shortcode here','vw-appointment-pro') ?></h5>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="clearfix"></div>
</section>
