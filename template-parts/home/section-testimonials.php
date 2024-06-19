<?php
/**
 * Template part for displaying testimonial
 *
 * @package vw-appointment-pro
 */

  $section_hide = get_theme_mod( 'vw_appoinment_pro_testimonial_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  if( get_theme_mod('vw_appoinment_pro_testimonial_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_testimonial_bgcolor','')).';';
  }elseif( get_theme_mod('vw_appoinment_pro_testimonial_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_appoinment_pro_testimonial_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $testimonial_loop="";
  if(get_theme_mod('vw_appoinment_pro_testimonial_slider_loop',true)=='1')
  {
    $testimonial_loop="true";
  }else{
    $testimonial_loop="false";
  }

?>
<section id="testimonial" style="<?php echo esc_attr($about_backg); ?>" class="pb-0 pt-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-7 textbxi pt-5">
        <div class="owl-carousel">
          <?php
          $args = array(
            'post_type' => 'testimonials',
            'post_status' => 'publish',
            'posts_per_page' => get_theme_mod('vw_appoinment_pro_testimonial_number')
          );  
          $query = new WP_Query($args); 
          if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post(); 
          ?>
            <div class="testimonials-box pt-4 wow fadeInDown delay-1000" data-wow-duration="1s" >
                <div class="testi-text">
                  <?php the_content(); ?>
                </div>
                <div class="test-img">
                  <?php if(get_theme_mod('vw_appoinment_pro_our_testimonial_heading_icon')!=''){ ?>
                    <span>
                      <i class="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_testimonial_heading_icon')); ?>"></i>
                    </span>
                  <?php } ?>
                  <span><img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_testimonial_image_alt_text'.$i)); ?>"></span>
                </div>
                <div class="test-content">
                  <h5 class="m-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                  <?php if(get_post_meta($post->ID,'vw_appoinment_pro_posttype_testimonial_desigstory',true)) { ?>
                    <span>
                      <?php echo esc_html(get_post_meta($post->ID,'vw_appoinment_pro_posttype_testimonial_desigstory',true)); ?>
                    </span>
                  <?php } ?>
                </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="col-lg-5 col-md-5">
        <div class="appointment-images">
          <?php if(get_theme_mod('vw_appoinment_pro_our_testimonial_image')!=''){ ?>
            <img src="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_testimonial_image')); ?>" alt="">
          <?php } ?>          
        </div>
      </div>
    </div>    
  </div>
  <span id="testimonials-loop"><?php echo esc_html($testimonial_loop); ?></span>
</section>