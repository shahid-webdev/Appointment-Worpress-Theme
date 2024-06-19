<?php 
	
/**
 * Template part for displaying Our Blogs 
 *
 * @package vw-appointment-pro
 */

  $section_hide = get_theme_mod( 'vw_appoinment_pro_our_blog_enabledisable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  if( get_theme_mod('vw_appoinment_pro_our_blog_bg_color','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_our_blog_bg_color','')).';';
  }elseif( get_theme_mod('vw_appoinment_pro_our_blog_bg_image','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_appoinment_pro_our_blog_bg_image')).'\')';
  }else{
    $about_backg= '';
  }

  $att_style="";
	$image_att = get_theme_mod( 'vw_appoinment_pro_our_blog_bg_image_attachment',true );
	if ( 'Scroll' == $image_att ) {
	    $att_style="section_bg_scroll";
	}else{
	    $att_style="section_bg_fixed";
	}

  $blog_excerpt="";
  if(get_theme_mod('vw_appoinment_pro_our_blog_excerpt_no',true)!=''){
    $blog_excerpt=get_theme_mod('vw_appoinment_pro_our_blog_excerpt_no',26);
  }
?>

<section id="our-blogs" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($att_style); ?>">
  <div class="container">
    <div class="blog-header row pb-3">
      <div class="blog-head col-lg-8 col-md-8">
        <?php if(get_theme_mod('vw_appoinment_pro_our_blog_small_heading')!=''){ ?>
          <p>
            <?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_blog_small_heading')); ?>
          </p>
        <?php } if(get_theme_mod('vw_appoinment_pro_our_blog_main_heading')!=''){ ?>
          <h3>
            <?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_blog_main_heading')); ?>
          </h3>
        <?php } ?>
      </div>
      <div class="col-lg-4 col-md-4 blog-but">
        <?php if(get_theme_mod('vw_appoinment_pro_our_blog_button_text')!=''){ ?>
          <a href="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_blog_button_url')); ?>" class="team-button">
            <?php echo esc_html(get_theme_mod('vw_appoinment_pro_our_blog_button_text')); ?>
          </a>
        <?php } ?>
      </div>      
    </div>
    <div class="blog-box row">
      <?php
      $i=0;
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => get_theme_mod('vw_appoinment_pro_our_blog_number')
      );  
      $query = new WP_Query($args); 
      if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post();
      ?>
        <div class="col-lg-6 col-md-6 col-sm-12 blob-box wow fadeInDown delay-1000" data-wow-duration="1s" style="visibility: visible; -webkit-animation-delay: 1s; -moz-animation-delay: 1s; animation-delay: 1s;">
          <div class="row blog-infobx">
            <div class="col-lg-5 col-md-5 col-sm-6 blog-img">
              <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_blog_image_alt_text'.$i)); ?>">
              <div class="blog-det">
                <?php if ( get_theme_mod('vw_appoinment_pro_post_general_settings_post_date',true) == "1" ) { ?>
                  <?php the_time('d M'); ?>
                <?php } ?>
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-6 blog-text">
              <div class="box-content">
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <div class="blog-info">
                  <?php $excerpt = get_the_excerpt(); echo esc_html(vw_appoinment_pro_string_limit_words($excerpt,12)); ?>
                </div> 
                <div class="blog-meta">
                  <?php if ( get_theme_mod('vw_appoinment_pro_post_general_settings_post_author',true) == "1" ) { ?>
                    <span class="blog-author">
                      <i class="fas fa-user"></i>
                      <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>
                    </span>
                  <?php } if ( get_theme_mod('vw_appoinment_pro_post_general_settings_post_comments',true) == "1" ) { ?>
                    <span class="blog-comments"> 
                      <i class="fas fa-comments"></i>
                      <?php comments_number( '0 Comment', 'Comment 1', 'Comments % ' ); ?>
                    </span>
                  <?php } ?>
                </div>                
              </div>
            </div>
          </div>
        </div>
      <?php $i++; endwhile; endif; ?>
    </div>
  </div>
</section>