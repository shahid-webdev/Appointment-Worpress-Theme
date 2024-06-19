<?php
/**
 * Template part for displaying our features
 *
 * @package vw-appointment-pro
 */

  $section_hide = get_theme_mod( 'vw_appoinment_pro_our_features_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  if( get_theme_mod('vw_appoinment_pro_our_features_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_our_features_bgcolor','')).';';
  }elseif( get_theme_mod('vw_appoinment_pro_our_features_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_appoinment_pro_our_features_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $att_style="";
  $image_att = get_theme_mod( 'vw_appoinment_pro_our_features_bg_image_attachment',true );
  if ( 'Scroll' == $image_att ) {
      $att_style="section_bg_scroll";
  }else{
      $att_style="section_bg_fixed";
  }

  $features_loop="";
  if(get_theme_mod('vw_appoinment_pro_our_features_slider_loop',true)=='1')
  {
    $features_loop="true";
  }else{
    $features_loop="false";
  }
?>
<section id="our-features" class="<?php echo esc_attr($att_style); ?> p-0" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container">
    <div class="owl-carousel">
      <?php
        $feature_no=get_theme_mod('vw_appoinment_pro_our_features_number');
        for($i=1;$i<=$feature_no;$i++){

          if( get_theme_mod('vw_appoinment_pro_our_features_box_bg_color'.$i,'') ) {
            $box_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_our_features_box_bg_color'.$i,'')).';';
          }else{
            $box_backg='';
          }

          if( get_theme_mod('vw_appoinment_pro_our_features_icon_bg_color'.$i,'') ) {
            $icon_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_our_features_icon_bg_color'.$i,'')).';';
          }else{
            $icon_backg='';
          }
        
      ?>
       
        <div class="features-info text-center features-boxin<?php echo $i ?> wow fadeInOut, moveLeft300px, bounce delay-1000" data-wow-duration="1s" style="<?php echo esc_attr($box_backg); ?> visibility: visible; -webkit-animation-delay: 1s; -moz-animation-delay: 1s; animation-delay: 1s;">
          <?php if(get_theme_mod('vw_appoinment_pro_our_features_icon'.$i)!=''){ ?>
            <img src="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_features_icon'.$i)); ?>" alt="featuresimag" style="<?php echo esc_attr($icon_backg); ?>">
          <?php } ?>
          <?php if(get_theme_mod('vw_appoinment_pro_our_features_title'.$i)!=''){ ?>
            <h5>
              <a href="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_features_url'.$i)); ?>" class="first-title">
                <?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_features_title'.$i)); ?>
              </a>
            </h5>
            <i class="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_features_box_icon'.$i)); ?> animated zoomIn"></i>
          <?php } ?>
        </div>
      <?php }?>
    </div>
  </div>
  <span id="features-loop"><?php echo esc_html($features_loop); ?></span>
</section>
<?php for($i=1;$i<=$feature_no;$i++){
    $box_iconbackg = 'color:'.esc_attr(get_theme_mod('vw_appoinment_pro_our_features_hover_icon_color'.$i,'')).';';
    $box_iconbackg1 = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_our_features_hover_icon_bgcolor'.$i,'')).';';
    $box_iconbackg2 = 'border-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_our_features_hover_icon_bgcolor'.$i,'')).';';
  ?>
  <style type="text/css">
    #our-features .features-boxin<?php echo $i ?>:hover i{
      <?php echo $box_iconbackg;
            echo $box_iconbackg1;
            echo $box_iconbackg2; ?>
    }
  </style>
<?php } ?>