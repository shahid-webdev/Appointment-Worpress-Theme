<?php 

/**
 * Template to show the content of Slider
 *
 * @package vw-appointment-pro
 */ 

$section_hide = get_theme_mod( 'vw_appoinment_pro_slider_enabledisable' );
if ( 'Disable' == $section_hide ) {
  return;
}
$number = get_theme_mod('vw_appoinment_pro_slide_number'); 
$slide_delay = get_theme_mod('vw_appoinment_pro_slide_delay'); 
  if($number != ''){
?>
  <section id="slider" class="p-0">
      <div id="carouselExampleIndicators" class="carousel slide <?php if ( get_theme_mod('vw_appoinment_pro_slide_remove_fade',true) == 1 ) { ?> carousel-fade <?php } ?>" data-ride="carousel" data-interval="<?php echo esc_attr($slide_delay); ?>">
        <div class="carousel-inner" role="listbox">
          <?php for ($i=1; $i<=$number; $i++) {  ?>
            <?php if(get_theme_mod('vw_appoinment_pro_slide_image'.$i) != ''){ ?>
              <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                <?php if ( get_theme_mod('vw_appoinment_pro_slide_image'.$i) != "" ) { ?>
                  <img  src="<?php echo esc_url(get_theme_mod('vw_appoinment_pro_slide_image'.$i)); ?>" class="w-100">
                <?php } ?>
                <?php if ( get_theme_mod('vw_appoinment_pro_slide_small_heading'.$i) != "" || get_theme_mod('vw_appoinment_pro_slide_main_heading'.$i) != "" || get_theme_mod('vw_appoinment_pro_slide_btntext1'.$i) != '') { ?>
                <div class="carousel-caption d-md-block mt-5">
                  <div class="container">
                      <div class="inner_carousel">
                        <div class="row">
                        <div class="col-lg-6 col-md-6">
                          <div class="slider-box">
                              <?php if ( get_theme_mod('vw_appoinment_pro_slide_small_heading'.$i) != ""){ ?>
                                <span class="animated fadeInRight delay-1000 small-text"><?php echo esc_html(get_theme_mod('vw_appoinment_pro_slide_small_heading'.$i)); ?></span>
                              <?php } if ( get_theme_mod('vw_appoinment_pro_slide_main_heading'.$i) != ""){ ?>
                                <h1 class="animated fadeInLeft delay-1000 p-0">
                                  <?php echo esc_html(get_theme_mod('vw_appoinment_pro_slide_main_heading'.$i)); ?>
                                </h1>
                              <?php } ?>
                              <?php if ( get_theme_mod('vw_appoinment_pro_slide_text'.$i) != ""){ ?>
                                <p class="delay-1000">
                                  <?php
                                    echo wp_trim_words_vw( get_theme_mod('vw_appoinment_pro_slide_text'.$i), 15, '' );
                                    ?>
                                </p>
                                <div class="button-box">
                                  <?php } if( get_theme_mod('vw_appoinment_pro_slide_btntext1'.$i) != ''){ ?>
                                    <a class="slider-button-1 hvr-wobble-horizontal" href="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_slide_btnurl1'.$i)); ?>"><?php echo esc_html(get_theme_mod('vw_appoinment_pro_slide_btntext1'.$i)); ?>
                                    </a>
                                  <?php } ?>
                                  <?php } if( get_theme_mod('vw_appoinment_pro_slide_btntext2'.$i) != ''){ ?>
                                    <a class="slider-button-2 hvr-wobble-horizontal" href="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_slide_btnurl2'.$i)); ?>"><?php echo esc_html(get_theme_mod('vw_appoinment_pro_slide_btntext2'.$i)); ?>
                                    </a>
                                  <?php } ?>
                                </div>  
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="slider_rightimg">
                            <?php if ( get_theme_mod('vw_appointment_pro_slide_right_image'.$i) != "" ) { ?>
                              <img  src="<?php echo esc_url(get_theme_mod('vw_appointment_pro_slide_right_image'.$i)); ?>" width="515px" height="686px" class="sideimg">
                            <?php } ?>
                          </div>
                        </div>
                            
                      </div>
                    </div> 
                    <?php if ( get_theme_mod('vw_appoinment_pro_slider_nav',true) == "1" ) { ?>
                      <div class="slide_nav">
                        <a class="carousel-prev-button vw-hvr-shrink" href="#carouselExampleIndicators" data-slide="prev">
                          <span class="carousel-control-prev-icon"
                          ><i class="fas fa-chevron-left"></i></span>
                          <span class="sr-only"><?php esc_html_e('Previous','vw-appointment-pro'); ?></span>
                        </a>
                        <a class="carousel-next-button vw-hvr-shrink" href="#carouselExampleIndicators" data-slide="next">
                          <span class="carousel-control-next-icon"><i class="fas fa-chevron-right"></i></span>
                          <span class="sr-only"><?php esc_html_e('Next','vw-appointment-pro'); ?></span>
                        </a>
                      </div>
                    <?php }?>
                  </div>
                </div>  
              </div>
            <?php } ?>
          <?php } ?>
        </div>
        <?php if ( get_theme_mod('vw_appoinment_pro_slider_dots') == "1" ) { ?>
          <ol class="carousel-indicators">
            <?php for($i=1;$i<=$number;$i++){ ?>
              <?php if(get_theme_mod('vw_appoinment_pro_slide_image'.$i) != ''){ ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo($i-1); ?>" class="<?php if($i==1){echo 'active';} ?> p-1"></li>
            <?php } } ?>
          </ol> 
        <?php } ?> 
      </div> 
  </section>
<?php } ?>