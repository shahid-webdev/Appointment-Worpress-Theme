<?php 
  
/**
 * Template part for displaying features
 *
 * @package vw-appointment-pro
 */

  $section_hide = get_theme_mod( 'vw_appoinment_pro_video_sec_enabledisable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  if( get_theme_mod('vw_appoinment_pro_video_sec_bg_color','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_video_sec_bg_color','')).';';
  }elseif( get_theme_mod('vw_appoinment_pro_video_sec_bg_image','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_appoinment_pro_video_sec_bg_image')).'\');';
  }else{
    $about_backg= '';
  }
  $att_style="";
  $image_att = get_theme_mod( 'vw_appoinment_pro_video_sec_image_attachment',true );
  if ( 'Scroll' == $image_att ) {
   $att_style="section_bg_scroll";
  }else{
   $att_style="section_bg_fixed";
  }
?>
<section id="video_sec"  style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($att_style); ?>"> 
  <div class="container">
    <div class="video-text">
      <div class="hour-no wow animated zoomInDown delay-1000">
        <div class="innebx">
          <?php if(get_theme_mod('vw_appoinment_pro_video_sec_circle_toggle',true)=='1'){ ?>
          <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
            <defs>
              <style>
                .cls-1 {
                  fill: <?php echo (get_theme_mod('vw_appoinment_pro_video_icon_circle_bgcolor')); ?>;
                  fill-rule: evenodd;
                }
              </style>
            </defs>
            <path class="cls-1" d="M259.884,4176.98a1.04,1.04,0,1,1-1.04,1.04A1.042,1.042,0,0,1,259.884,4176.98Zm-36.893,0a1.04,1.04,0,1,1-1.04,1.04A1.043,1.043,0,0,1,222.991,4176.98Zm18.7,18.19a1.035,1.035,0,1,1-1.039,1.04A1.037,1.037,0,0,1,241.7,4195.17Zm24.745-19.23a1.561,1.561,0,0,0-1.559,1.56,23.382,23.382,0,1,1-23.382-23.38,23.144,23.144,0,0,1,14.31,4.89,1.561,1.561,0,0,0,1.911-2.47A26.5,26.5,0,1,0,268,4177.5,1.561,1.561,0,0,0,266.441,4175.94Zm-7.274-24.49a1.552,1.552,0,0,0-1.559,1.55v5.79h-5.716a1.56,1.56,0,0,0,0,3.12h7.275a1.56,1.56,0,0,0,1.558-1.56V4153A1.551,1.551,0,0,0,259.167,4151.45Zm-17.471,7.34a1.04,1.04,0,1,1-1.039,1.04A1.043,1.043,0,0,1,241.7,4158.79Z" transform="translate(-215 -4151)"/>
          </svg>
          <?php } ?>
        <span>
          <?php echo esc_html(get_theme_mod('vw_appoinment_pro_video_sec_video_hour_text')); ?>
        </span>
        </div>
      </div>
      <p class="video-call wow fadeInDown delay-500" data-wow-duration="0.5s">
        <?php echo esc_html(get_theme_mod('vw_appoinment_pro_video_sec_video_phone_text')); ?>
      </p>
      <p class="small-title wow fadeInDown delay-500" data-wow-duration="0.5s" >
        <?php echo esc_html(get_theme_mod('vw_appoinment_pro_video_sec_video_heading')); ?>
      </p>
    </div>
    <?php if(get_theme_mod('vw_appoinment_pro_video_sec_video_play_icon')!=''){ ?>
      <a data-toggle="modal" href="#myModal" id="myBtn"><i class="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_video_sec_video_play_icon')); ?> wow animated fadeInDown delay-500"></i></a>
    <?php } ?>
  </div>
</div>
<div id="myNewModal" class="modal-new">
  <!-- Modal content -->
  <div class="modal-contents">
    <span class="close-one">&times;</span>
    <?php if( get_theme_mod('vw_appoinment_pro_video_sec_video_url') != ''){ ?>
        <iframe width="100%" height="345" src=" <?php echo (get_theme_mod('vw_appoinment_pro_video_sec_video_url')); ?>">
      </iframe>
    <?php }else{ ?>
      <h3><?php esc_html_e('Add Video Url In Customizer To Display Video Here','vw-appointment-pro'); ?></h3>
    <?php } ?>
  </div>
</section>