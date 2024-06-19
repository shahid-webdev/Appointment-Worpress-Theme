<?php 
	
/**
 * Template part for displaying About Us
 *
 * @package vw-appointment-pro
 */

    $section_hide = get_theme_mod( 'vw_appoinment_pro_about_us_enabledisable' );
    if ( 'Disable' == $section_hide ) {
      return;
    }
    if( get_theme_mod('vw_appoinment_pro_about_us_bg_color','') ) {
      $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_about_us_bg_color','')).';';
    }elseif( get_theme_mod('vw_appoinment_pro_about_us_bg_image','') ){
      $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_appoinment_pro_about_us_bg_image')).'\')';
    }else{
      $about_backg= '';
    }
    
    $att_style="";
	$image_att = get_theme_mod( 'vw_appoinment_pro_about_us_bg_image_attachment',true );
	if ( 'Scroll' == $image_att ) {
	    $att_style="section_bg_scroll";
	}else{
	    $att_style="section_bg_fixed";
	}
?>
<section id="about-us" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($att_style); ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="about-images">
          <?php if(get_theme_mod('vw_appoinment_pro_about_section_image')!=''){ ?>
            <img src="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_about_section_image')); ?>" alt="about-image">
          <?php } ?>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="about-box">
          <?php if(get_theme_mod('vw_appoinment_pro_about_us_small_heading')!=''){ ?>
            <p class="m-0">
              <?php echo esc_html(get_theme_mod('vw_appoinment_pro_about_us_small_heading')); ?>
            </p> 
          <?php } if(get_theme_mod('vw_appoinment_pro_about_us_heading')!=''){ ?>
            <h3>
              <?php echo esc_html(get_theme_mod('vw_appoinment_pro_about_us_heading')); ?>
            </h3> 
          <?php } if(get_theme_mod('vw_appoinment_pro_about_us_text')!=''){ ?>
            <p class="text">
            <?php echo wp_trim_words_vw( get_theme_mod('vw_appoinment_pro_about_us_text'), 55, '' );?>
            </p>           
          <?php } if( get_theme_mod('vw_appoinment_pro_about_us_btnurl') != ''){ ?>
            <a class="read-more" href="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_about_us_btnurl')); ?>">
              <?php echo esc_html(get_theme_mod('vw_appoinment_pro_about_us_btntext')); ?>
            </a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>