<?php
/**
 * Template part for displaying our records
 *
 * @package vw-appointment-pro
 */

  $section_hide = get_theme_mod( 'vw_appoinment_pro_our_records_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }

  $records_loop="";
  if(get_theme_mod('vw_appoinment_pro_our_records_slider_loop',true)=='1')
  {
    $records_loop="true";
  }else{
    $records_loop="false";
  }

?>
<div id="our-records" class="pt-0">
  <div class="container">
    <div class="owl-carousel">
      <?php
      $records_no= get_theme_mod('vw_appoinment_pro_our_records_number');
      for($i=1;$i<=$records_no;$i++)
      {
        if( get_theme_mod('vw_appoinment_pro_our_records_box_bg_color'.$i,'') ) {
          $box_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_our_records_box_bg_color'.$i,'')).';';
        }else{
          $box_backg='';
        }

        if( get_theme_mod('vw_appoinment_pro_our_records_iconbg_color'.$i,'') ) {
          $icon_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_our_records_iconbg_color'.$i,'')).';';
        }else{
          $icon_backg='';
        }
      ?>
        <div class="record_box wow fadeInDown delay-1000" data-wow-duration="1s" style="<?php echo esc_attr($box_backg); ?> ">
          <div class="records-icons wow fadeInDown delay-1000" data-wow-duration="1s">
            <?php if(get_theme_mod('vw_appoinment_pro_our_records_icon'.$i)!=''){ ?>
              <img src="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_records_icon'.$i)); ?>" alt="recod-img" style="<?php echo esc_attr($icon_backg); ?>">
            <?php } ?>
          </div>
          <div class="recods-content wow fadeInDown delay-1000" data-wow-duration="1s">
            <?php if(get_theme_mod('vw_appoinment_pro_our_records_no'.$i)!=''){ ?>
              <h4 class="count">
                <?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_records_no'.$i)); ?>  
              </h4>
            <?php } if(get_theme_mod('vw_appoinment_pro_our_records_title_one'.$i)!=''){ ?>
              <p>
                <?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_records_title_one'.$i)); ?>
              </p>
            <?php } ?>
          </div> 
        </div>
      <?php } ?>
    </div>
  </div>
  <span id="records-loop"><?php echo esc_html($records_loop); ?></span>
</div>