<?php

/**
 * Template to show the content of Copyright Content
 *
 * @package vw-appointment-pro
 */ 

$about_section = get_theme_mod( 'vw_appoinment_pro_footer_section_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('vw_appoinment_pro_footer_section_bg_color','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_footer_section_bg_color','')).';';
}elseif( get_theme_mod('vw_appoinment_pro_footer_section_bg_image','') ){
$about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_appoinment_pro_footer_section_bg_image')).'\')';
}else{
$about_backg= '';
}

?>
<div class="copyright" style="<?php echo esc_attr($about_backg); ?>">
	<div class="container py-3">
		<div class="row">
			<div class="col-lg-8 col-md-8 copyright-text text-left">
				<?php $theme_lay = get_theme_mod( 'vw_appoinment_pro_footer_copy_text_alignment','Left');
	 				if($theme_lay == 'Left'){ ?>
                    <p class="left mb-0">
						<span class="copyright_year"><?php echo esc_html( get_theme_mod( 'vw_appoinment_pro_footer_copy_year' ) ); ?></span>
                    	<span class="copyright_themename"><?php echo esc_html( get_theme_mod( 'vw_appoinment_pro_footer_copy_themename' ) ); ?></span>
                    	<span class="copyright_lasttxt"><?php echo esc_html( get_theme_mod( 'vw_appoinment_pro_footer_copy' ) ); ?></span>
						<?php if( get_theme_mod( 'vw_appoinment_pro_hide_show_credit_link',true) != '') { ?>
							<span class="credit_link"><?php echo esc_html( vw_appoinment_pro_credit_link() ); ?></span>
						<?php }?>
					</p>
                <?php }else if($theme_lay == 'Center'){ ?>
                    <p class="center mb-0">
                    	<span class="copyright_year"><?php echo esc_html( get_theme_mod( 'vw_appoinment_pro_footer_copy_year' ) ); ?></span>
                    	<span class="copyright_themename"><?php echo esc_html( get_theme_mod( 'vw_appoinment_pro_footer_copy_themename' ) ); ?></span>
                    	<span class="copyright_lasttxt"><?php echo esc_html( get_theme_mod( 'vw_appoinment_pro_footer_copy' ) ); ?></span>
						<?php if( get_theme_mod( 'vw_appoinment_pro_hide_show_credit_link',true) != '') { ?>
							<span class="credit_link"><?php echo esc_html( vw_appoinment_pro_credit_link() ); ?></span>
						<?php }?>
					</p>
                <?php }else{ ?>
                    <p class="right mb-0">
						<span class="copyright_year"><?php echo esc_html( get_theme_mod( 'vw_appoinment_pro_footer_copy_year' ) ); ?></span>
                    	<span class="copyright_themename"><?php echo esc_html( get_theme_mod( 'vw_appoinment_pro_footer_copy_themename' ) ); ?></span>
                    	<span class="copyright_lasttxt"><?php echo esc_html( get_theme_mod( 'vw_appoinment_pro_footer_copy' ) ); ?></span>
						<?php if( get_theme_mod( 'vw_appoinment_pro_hide_show_credit_link',true) != '') { ?>
							<span class="credit_link"><?php echo esc_html( vw_appoinment_pro_credit_link() ); ?></span>
						<?php }?>
					</p>
            	<?php }?>
			</div>
			<div class="col-lg-4 col-md-4">
				 <div class="social-icon box text-right">
		            <?php if ( defined( 'VWSMP_VERSION' ) ) { ?>
		              <?php if(get_theme_mod('vw_appoinment_pro_footer_social_icons_shortcode')!=''){ ?>
		                <?php echo do_shortcode(get_theme_mod('vw_appoinment_pro_footer_social_icons_shortcode')); ?>
		              <?php } else{ ?>
		                  <span class="post-type-msg text-center"><?php echo esc_html('Add social meadia plugin shortcode to display social icons','vw-appointment-pro')?></span>
		                <?php }?>
		            <?php } else{ ?>
		                <span class="post-type-msg text-center"><?php echo esc_html_e('Install VW Social Media plugin and add social media details to enable this section','vw-appointment-pro')?></span>
		            <?php } ?>
		          </div>
			</div>
			<?php if( get_theme_mod( 'vw_appoinment_pro_hide_show_scroll',true) != '') { ?>
				<?php $theme_lay = get_theme_mod( 'vw_appoinment_pro_scroll_top_alignment','Right');
	 				if($theme_lay == 'Left'){ ?>
                    <a href="javascript:" id="return-to-top" class="left"><i class="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_scroll_to_top_icon','fas fa-angle-up')); ?> py-1 pl-3 pr-3"></i><span class="screen-reader-text"><?php esc_html_e('Return To Top','vw-appointment-pro')?></span></a>
                <?php }else if($theme_lay == 'Center'){ ?>
                    <a href="javascript:" id="return-to-top" class="center"><i class="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_scroll_to_top_icon','fas fa-angle-up')); ?> py-1 pl-3 pr-3"></i><span class="screen-reader-text"><?php esc_html_e('Return To Top','vw-appointment-pro')?></span></a>
                <?php }else{ ?>
                    <a href="javascript:" id="return-to-top" class="right"><i class="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_scroll_to_top_icon','fas fa-angle-up')); ?> py-1 px-2"></i><span class="screen-reader-text"><?php esc_html_e('Return To Top','vw-appointment-pro')?></span></a>
            	<?php }?>
			<?php } ?>
		</div>
	</div>
</div>