<?php 
  
/**
 * Template part for displaying features
 *
 * @package vw-appointment-pro
 */

  $section_hide = get_theme_mod( 'vw_appoinment_pro_why_choose_us_enabledisable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  if( get_theme_mod('vw_appoinment_pro_why_choose_us_bg_color','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_why_choose_us_bg_color','')).';';
  }elseif( get_theme_mod('vw_appoinment_pro_why_choose_us_bg_image','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_appoinment_pro_why_choose_us_bg_image')).'\');';
  }else{
    $about_backg= '';
  }
  $att_style="";
  $image_att = get_theme_mod( 'vw_appoinment_pro_why_choose_us_image_attachment',true );
  if ( 'Scroll' == $image_att ) {
   $att_style="section_bg_scroll";
  }else{
   $att_style="section_bg_fixed";
  }
?>

<section id="why-choose-us" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($att_style); ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="choose-us-box wow fadeInDown delay-1000" data-wow-duration="1s" >
          <?php if(get_theme_mod('vw_appoinment_pro_why_choose_us_main_heading')!=''){ ?>
            <h3>
              <?php echo esc_html(get_theme_mod('vw_appoinment_pro_why_choose_us_main_heading')); ?>
            </h3> 
          <?php } if(get_theme_mod('vw_appoinment_pro_why_choose_us_text')!=''){ ?>
            <p class="text">
              <?php echo esc_html(get_theme_mod('vw_appoinment_pro_why_choose_us_text')); ?>
            </p>    
           <?php } if(get_theme_mod('vw_appoinment_pro_why_choose_us_text_two')!=''){ ?>
            <p class="textbtm">
              <?php echo esc_html(get_theme_mod('vw_appoinment_pro_why_choose_us_text_two')); ?>
            </p>           
          <?php } ?>
          <div class="row">
            <?php $why_count=get_theme_mod('vw_appoinment_pro_why_choose_us_box_number');
            for($i=1;$i<=$why_count;$i++)
            {
            ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
              <div class="why-choose-us-feature wow  fadeInDown delay-1000" data-wow-duration="1s" >
                <div class="why-choos-icons">
                  <img src="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_why_choose_us_feature_icon'.$i)); ?>" alt="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_why_choose_us_feature_icon_text'.$i)); ?>">
                </div>
                <?php if(get_theme_mod('vw_appoinment_pro_why_choose_us_feature_title'.$i)!=''){ ?>
                  <h5>
                    <a href="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_why_choose_us_feature_title_url'.$i)); ?>">
                      <?php echo esc_html(get_theme_mod('vw_appoinment_pro_why_choose_us_feature_title'.$i)); ?>
                    </a>
                  </h5>
                <?php } ?>
              </div>
            </div>
           <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="why-choose-images">
          <?php if(get_theme_mod('vw_appoinment_pro_why_choose_us_right_sec_image')!=''){ ?>
            <img src="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_why_choose_us_right_sec_image')); ?>" alt="why-choose-images">
          <?php } ?>          
        </div>
      </div>
    </div>
  </div>
</section>