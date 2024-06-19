<?php
$content_type = get_theme_mod( 'vw_appoinment_pro_post_content_blog','Excerpt Content');
$excerpt_length="";
if($content_type=="Excerpt Content"){
  $excerpt_length=get_theme_mod( 'vw_appoinment_pro_excerpt_length',29);
}
$theme_lay = get_theme_mod( 'vw_appoinment_pro_blog_option','two_col');
if($theme_lay == 'two_col'){ ?>
  <div id="single_post" class="col-lg-6 col-md-6 col-sm-12"> 
    <div class="postbox wow slideInUp delay-1000 animated p-4 mb-4" data-wow-duration="2s">
      <div class="postpic">
        <div class="post_pic_inner">
          <?php if (has_post_thumbnail()){ ?>
          <?php if (get_theme_mod("vw_appoinment_pro_blog_featured_image_enable",true)=='1'){?>
            <?php the_post_thumbnail(); ?>
          <?php } ?>
          <?php } ?>
        </div>
      </div>
      <div class="postbox-content">
        <?php 
        $post_title=get_the_title();
        if($post_title!="" || $post_title!=null){ ?>
          <h4 class="posttitle"><a href="<?php the_permalink(); ?>" class="pt-2"><?php the_title(); ?></a></h4>
        <?php }else{ ?>
          <a href="<?php the_permalink(); ?>"><?php echo esc_html_e('Read More','vw-appointment-pro'); ?></a>
        <?php } ?>
        <div class="mb-3 post-text">
          <?php if($content_type=="Excerpt Content"){  ?>
            <p><?php $excerpt = get_the_excerpt(); esc_html_e(vw_appoinment_pro_string_limit_words($excerpt,$excerpt_length)); ?>
              <span>
                <?php echo esc_html(get_theme_mod('vw_appoinment_pro_button_excerpt_suffix','[...]')); ?>
              </span>
            </p>
          <?php } if($content_type=="Full Content"){  ?>
            <?php the_content(); ?>
          <?php } ?></div>
        <?php if ( get_theme_mod('vw_appoinment_pro_post_general_settings_post_date',true) == "1" ) { ?>
          <span class="entry-date mr-3">
            <i class="far fa-calendar-alt"></i>
              <?php echo esc_html( get_the_date() ); ?>
          </span>
          <?php } if ( get_theme_mod('vw_appoinment_pro_post_general_settings_post_author',true) == "1" ) { ?>
            <span class="mr-3"><i class="fas fa-user"></i> <?php the_author() ?></span>
          <?php }if ( get_theme_mod('vw_appoinment_pro_post_general_settings_post_comments',true) == "1" ){ ?>
          <span><i class="fas fa-comments"></i> <?php echo comments_number( __('no comments','vw-appointment-pro'), __('no comments','vw-appointment-pro'), __('% comments','vw-appointment-pro') ); ?></span>
        <?php } ?>
      </div>
    </div>
  </div>
<?php } if($theme_lay == 'one_col'){ ?>
  <div id="single_post" class="col-lg-12 col-md-12 col-sm-12"> 
    <div class="postbox wow slideInUp delay-1000 animated p-4 mb-4" data-wow-duration="2s">
      <div class="postpic">
        <div class="post_pic_inner">
          <?php if (has_post_thumbnail()){ ?>
            <?php the_post_thumbnail(); ?>
          <?php } ?>
        </div>
      </div>
      <div class="postbox-content">
        <?php 
        $post_title=get_the_title();
        if($post_title!="" || $post_title!=null){ ?>
          <h4 class="posttitle"><a href="<?php the_permalink(); ?>" class="pt-2"><?php the_title(); ?></a></h4>
        <?php }else{ ?>
          <a href="<?php the_permalink(); ?>"><?php echo esc_html_e('Read More','vw-appointment-pro'); ?></a>
        <?php } ?>
        <div class="mb-3 post-text"><?php if($content_type=="Excerpt Content"){  ?>
            <p><?php $excerpt = get_the_excerpt(); esc_html_e(vw_appoinment_pro_string_limit_words($excerpt,$excerpt_length)); ?>
              <span>
                <?php echo esc_html(get_theme_mod('vw_appoinment_pro_button_excerpt_suffix','[...]')); ?>
              </span>
            </p>
          <?php } if($content_type=="Full Content"){  ?>
            <?php the_content(); ?>
          <?php } ?>
        </div>
        <?php if ( get_theme_mod('vw_appoinment_pro_post_general_settings_post_date',true) == "1" ) { ?>
          <span class="entry-date mr-3">
            <i class="far fa-calendar-alt"></i>
              <?php echo esc_html( get_the_date() ); ?>
          </span>
          <?php } if ( get_theme_mod('vw_appoinment_pro_post_general_settings_post_author',true) == "1" ) { ?>
            <span class="mr-3"><i class="fas fa-user"></i> <?php the_author() ?></span>
          <?php }if ( get_theme_mod('vw_appoinment_pro_post_general_settings_post_comments',true) == "1" ){ ?>
          <span><i class="fas fa-comments"></i> <?php echo comments_number( __('no comments','vw-appointment-pro'), __('no comments','vw-appointment-pro'), __('% comments','vw-appointment-pro') ); ?></span>
        <?php } ?>
      </div>
    </div>
  </div>
<?php } ?>