<?php
/**
 * Template part for displaying Our Services
 *
 * @package vw-appointment-pro
 */

  $section_hide = get_theme_mod( 'vw_appoinment_pro_our_services_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }

  if( get_theme_mod('vw_appoinment_pro_our_services_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_our_services_bgcolor','')).';';
  }elseif( get_theme_mod('vw_appoinment_pro_our_services_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_appoinment_pro_our_services_bgimage')).'\');';
  }else{
    $about_backg='';
  }
   $att_style="";
  $image_att = get_theme_mod( 'vw_appoinment_pro_our_services_image_bg',true );
  if ( 'Scroll' == $image_att ) {
   $att_style="section_bg_scroll";
  }else{
   $att_style="section_bg_fixed";
  }

?>
<div class="clearfix"></div>
<section id="our-services" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($att_style); ?>" >
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <div class="services-head">
          <?php if(get_theme_mod('vw_appoinment_pro_our_services_small_heading')!=''){ ?>
            <p>
              <?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_services_small_heading')); ?>
            </p>
          <?php } if(get_theme_mod('vw_appoinment_pro_our_services_main_heading')!=''){ ?>
            <h3>
              <?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_services_main_heading')); ?>
            </h3>
          <?php } ?>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12 service-button text-right">
        <?php if(get_theme_mod('vw_appoinment_pro_our_services_button_text')!=''){ ?>
          <a href="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_services_button_url')); ?>" class="area-top-button">
            <?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_services_button_text')); ?>
          </a>
        <?php } ?>
      </div>
    </div>
    <div class="area-content row">
      <div class="col-lg-6 col-md-12 area-text">
        <?php if(get_theme_mod('vw_appoinment_pro_working_area_title')!=''){ ?>
          <h4 class="area-title m-0 pb-0 pt-3">
            <?php echo esc_html(get_theme_mod('vw_appoinment_pro_working_area_title')); ?>
          </h4>
        <?php } if(get_theme_mod('vw_appoinment_pro_working_area_text')!=''){ ?>
          <p class="pt-2">
            <?php echo esc_html(get_theme_mod('vw_appoinment_pro_working_area_text')); ?>
          </p>
        <?php } ?>
        <div class="area-box row mb-4 pb-3">
          <?php 
            $area_box=get_theme_mod('vw_appoinment_pro_working_area_box_number');
            for($i=1;$i<=$area_box;$i++)
            {
            ?>
              <?php if(get_theme_mod('vw_appoinment_pro_working_area_box_title'.$i)!=''){ ?>
                <div class="col-lg-4 col-md-4 col-sm-6 working-title">
                  <i class="fas fa-check"></i>
                  <?php echo esc_html(get_theme_mod('vw_appoinment_pro_working_area_box_title'.$i)); ?>
                </div>
          <?php } } ?>
        </div>
        <?php if(get_theme_mod('vw_appoinment_pro_working_area_box_button_text')!=''){ ?>
          <a href="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_working_area_box_button_url')); ?>" class="area-button">
            <?php echo esc_html(get_theme_mod('vw_appoinment_pro_working_area_box_button_text')); ?>
          </a>
        <?php } ?>
      </div>
      <div class="col-lg-6 col-md-12 service-boxs">
        <div class="row">
          <?php
          $i=1;
          $args = array(
            'post_type' => 'services',
            'post_status' => 'publish',
            'posts_per_page' => get_theme_mod('vw_appoinment_pro_our_services_number')
          );  
          $query = new WP_Query($args); 
          if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post(); 
            if( get_theme_mod('vw_appoinment_pro_our_service_box_bg_color'.$i,'') ) {
            $box_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_our_service_box_bg_color'.$i,'')).';';
          }else{
            $box_backg='';
          }
          ?>

            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="services-box text-center wow fadeInDown delay-500" data-wow-duration="0.5s" style="<?php echo esc_attr($box_backg); ?>">
                <?php the_post_thumbnail(); ?>
                <h5 class="pt-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              </div>
            </div>
          <?php $i++; endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>