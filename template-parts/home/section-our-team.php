<?php 
  
/**
 * Template part for displaying Our Team
 *
 * @package vw-appointment-pro
 */

  $section_hide = get_theme_mod( 'vw_appoinment_pro_our_team_enabledisable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  if( get_theme_mod('vw_appoinment_pro_our_team_bg_color','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_our_team_bg_color','')).';';
  }elseif( get_theme_mod('vw_appoinment_pro_our_team_bg_image','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_appoinment_pro_our_team_bg_image')).'\')';
  }else{
    $about_backg= '';
  }

  $att_style="";
  $image_att = get_theme_mod( 'vw_appoinment_pro_our_team_bg_image_attachment',true );
  if ( 'Scroll' == $image_att ) {
    $att_style="section_bg_scroll";
  }else{
    $att_style="section_bg_fixed";
  }

 $team_loop="";
  if(get_theme_mod('vw_appoinment_pro_our_team_slider_loop',true)=='1')
  {
    $team_loop="true";
  }else{
    $team_loop="false";
  }

?>
<section id="our-team" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($att_style); ?>">
  <div class="container">
    <div class="row">
      <div class="team-head col-lg-8 col-md-8">
        <?php if(get_theme_mod('vw_appoinment_pro_our_team_small_heading')!=''){ ?>
          <p>
            <?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_team_small_heading')); ?>
          </p>
        <?php } if(get_theme_mod('vw_appoinment_pro_our_team_main_heading')!=''){ ?>
          <h3>
            <?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_team_main_heading')); ?>
          </h3>
        <?php } ?>
      </div>
      <div class="col-lg-4 col-md-4 team-button">
         <?php if(get_theme_mod('vw_appoinment_pro_our_team_button_text')!=''){ ?>
          <a href="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_team_button_url')); ?>" class="team-button">
            <?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_team_button_text')); ?>
          </a>
        <?php } ?>
      </div>
    </div>
    <div class="team-tabs">
      <div class="owl-carousel">
        <?php 
        $count=get_theme_mod('vw_appoinment_pro_our_team_number');
        $i=1;
        $args = array(
          'post_type' => 'team',
          'post_status' => 'publish',
          'posts_per_page' => $count,
          'order'   => 'ASC'
        );  
        $query = new WP_Query($args); 
        if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post();
        ?> 
          <div class="team-box wow fadeInDown delay-700" data-wow-duration="0.5s" >
            <div class="team-img">
              <?php the_post_thumbnail() ?>
              <div class="overlay">
              <?php if(get_post_meta($post->ID,'meta-team-phone',true)) { ?>
                <p class="team-call">
                  <i class="fas fa-phone"></i>
                  <?php echo esc_html(get_post_meta($post->ID,'meta-team-phone',true)); ?>
                </p>
              <?php } if(get_post_meta($post->ID,'meta-team-email',true)) { ?>
                <p class="team-email">
                   <i class="far fa-envelope"></i>
                  <?php echo esc_html(get_post_meta($post->ID,'meta-team-email',true)); ?>
                </p>
              <?php } ?>
            </div>
            </div>
            <div class="team-content">
              <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <?php if(get_post_meta($post->ID,'meta-designation',true)) { ?>
                <span>
                  <?php echo esc_html(get_post_meta($post->ID,'meta-designation',true)); ?>
                </span>
              <?php } ?>
            </div>
            <div class="social-profiles">
              <?php if(get_post_meta($post->ID,'meta-tfacebookurl',true)) { ?>
                <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-tfacebookurl',true)); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
               <?php }
              if(get_post_meta($post->ID,'meta-ttwitterurl',true)) { ?>
                <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-ttwitterurl',true)); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
              <?php }
              if(get_post_meta($post->ID,'meta-tlinkdenurl',true)) { ?>
                <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-tlinkdenurl',true)); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
              <?php } 
                  if(get_post_meta($post->ID,'meta-tinstagram',true)!= ''){ ?>
                <a href="<?php echo esc_html(get_post_meta($post->ID,'meta-tinstagram',true)); ?>">
                    <i class="fab fa-instagram align-middle" aria-hidden="true"></i>
                </a>
              <?php } if(get_post_meta($post->ID,'meta-pinterest',true)!= ''){ ?>
                <a href="<?php echo esc_html(get_post_meta($post->ID,'meta-pinterest',true)); ?>">
                    <i class="fab fa-pinterest-p align-middle " aria-hidden="true"></i>
                </a>
              <?php } ?>
            </div>     
          </div>
        <?php $i++; endwhile; endif; ?>
      </div>
    </div>
   
  </div>
  <span id="team-loop"><?php echo esc_html($team_loop); ?></span>
</section>