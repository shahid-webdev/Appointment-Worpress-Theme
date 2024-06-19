<?php
/**
 * Template part for displaying our brands
 *
 * @package vw-appointment-pro
 */

  $section_hide = get_theme_mod( 'vw_appoinment_pro_our_partners_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  if( get_theme_mod('vw_appoinment_pro_our_partners_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_our_partners_bgcolor','')).';';
  }elseif( get_theme_mod('vw_appoinment_pro_our_partners_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_appoinment_pro_our_partners_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $partners_loop="";
  if(get_theme_mod('vw_appoinment_pro_our_partners_slider_loop',true)=='1')
  {
    $partners_loop="true";
  }else{
    $partners_loop="false";
  }

?>
<section id="our-partners" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container">
    <div class="owl-carousel">
      <?php
      $brands_no=get_theme_mod('vw_appoinment_pro_our_partners_number');
      for($i=1;$i<=$brands_no;$i++)
      {
      ?>
        <div class="brand-images">
          <?php if(get_theme_mod('vw_appoinment_pro_our_partners_image'.$i)!=''){ ?>
            <img src="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_partners_image'.$i)); ?>" alt="partner-image">
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </div>
  <span id="partners-loop"><?php echo esc_html($partners_loop); ?></span>
</section>