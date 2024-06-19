<div class="container">
<div class="menubar">
  
    <div class="row menubar-box"> 
      <div class="col-lg-3 col-md-6 col-sm-9 col-8  pr-0">
        <div class="header-logo">
          <?php 
          if( has_custom_logo() ){  vw_appoinment_pro_the_custom_logo();  } ?>
          <div class="logo-text">
            <?php if( get_theme_mod('vw_appoinment_pro_display_title', true) != ''){ ?>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a>
            <?php }
              if( get_theme_mod('vw_appoinment_pro_display_tagline', true) != ''){ 
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                  <p><?php echo esc_html($description); ?></p>
            <?php endif; } ?>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-9 col-sm-3 col-4">
        <div class="innermenubox" id="vw-sticky-menu">
          <div class="menu-box">
              <div class="headerbar">
                  <div role="button" on="tap:sidebar1.toggle" tabindex="0" class="hamburger" id="open_nav"><i class="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_res_open_menu_icon')); ?>"></i></div>
              </div>
              <div class="main-header">
                  <div class="side-navigation">
                      <?php 
                      wp_nav_menu( array( 
                        'theme_location' => 'primary',
                        'menu_class'     => 'primary-menu',
                      ) ); 
                    ?>
                  </div>
              </div>
              <amp-sidebar id="sidebar1" layout="nodisplay" side="left">
                  <div role="button" aria-label="close sidebar" on="tap:sidebar1.toggle" tabindex="0" class="close-sidebar pr-3" id="close_nav"><i class="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_res_close_menus_icon')); ?>"></i></div>
                  <div class="side-navigation">
                      <?php 
                      wp_nav_menu( array( 
                          'theme_location' => 'primary',
                          'menu_class'     => 'primary-menu',
                      ) ); 
                    ?>
                  </div>
              </amp-sidebar>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>