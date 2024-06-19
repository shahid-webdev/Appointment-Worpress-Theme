<?php
/**
 * Template part for displaying topbar
 *
 * @package vw-appointment-pro
 */

  $section_hide = get_theme_mod( 'vw_appoinment_pro_topbar_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  if( get_theme_mod('vw_appoinment_pro_topbar_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_topbar_bgcolor','')).';';
  }elseif( get_theme_mod('vw_appoinment_pro_topbar_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_appoinment_pro_topbar_bgimage')).'\')';
  }else{
    $about_backg='';
  }

?>
<section id="topbar" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12 topbar-address">
        <ul>
          <li class="contact-det-box wow fadeInDownBig, moveLeft300px" data-wow-duration="1s" style="visibility: visible; -webkit-animation-delay: 1s; -moz-animation-delay: 1s; animation-delay: 1s;">
              <a href="tel:"><i class="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_contact_details_phone_icon','fas fa-phone')); ?>"></i>
              <span><?php echo esc_html(get_theme_mod('vw_appoinment_pro_contact_details_phone_text')); ?></span></a>
          
          </li>
          <li class="topbar-email wow fadeInDownBig, moveLeft300px" data-wow-duration="1s" style="visibility: visible; -webkit-animation-delay: 1s; -moz-animation-delay: 1s; animation-delay: 1s;">
              <a href="mailto:"><i class="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_topbar_email_icon','fas fa-envelope-open')); ?>"></i>
              <span>
                <?php echo esc_html(get_theme_mod('vw_appoinment_pro_topbar_email_text')); ?>
              </span></a>
          </li>
        </ul>
      </div>
      <div class="col-lg-6 col-md-6 col-12 topbar-social row">
        <div class="col-lg-11 col-md-11 col-sm-12 col-12 pl-0 header-social-icon wow fadeInDownBig, moveLeft300px" data-wow-duration="1s" style="visibility: visible; -webkit-animation-delay: 1s; -moz-animation-delay: 1s; animation-delay: 1s;">
          <div class="social-icon box text-right">
            <?php if ( defined( 'VWSMP_VERSION' ) ) { ?>
              <?php if(get_theme_mod('vw_appoinment_pro_social_icons_shortcode')!=''){ ?>
                <?php echo do_shortcode(get_theme_mod('vw_appoinment_pro_social_icons_shortcode')); ?>
              <?php } else{ ?>
                  <span class="post-type-msg text-center"><?php echo esc_html('Add social meadia plugin shortcode to display social icons','vw-appointment-pro')?></span>
                <?php }?>
            <?php } else{ ?>
                <span class="post-type-msg text-center"><?php echo esc_html_e('Install VW Social Media plugin and add social media details to enable this section','vw-appointment-pro')?></span>
            <?php } ?>
          </div>
        </div>
        <?php if(get_theme_mod('vw_appoinment_pro_header_search_toggle',true)=='1'){ ?>
            <div class="col-lg-1 col-md-1 col-sm-12 col-12 p-0 header-search">
              <span class="search-icon">
                <i class="fas fa-search"></i>
              </span>
                <div class="serach_outer">
                    <div class="closepop"><i class="fa fa-times" aria-hidden="true"></i></div>
                    <div class="serach_inner search_popup">
                      <form role="search" method="get" class="search-form serach-page" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                          <label>
                              <input type="search" class="search-field" placeholder="<?php if (get_theme_mod('vw_appoinment_pro_header_search_placeholder_text')!==''){?><?php echo esc_html(get_theme_mod('vw_appoinment_pro_header_search_placeholder_text','placeholder'));}?>" value="<?php echo esc_attr(the_search_query()); ?>" name="s">
                          </label>
                          <button type="submit" class="search-submit">
                            <i class="fas fa-search"></i>
                          </button>
                      </form>
                    </div>
                </div>
            </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>