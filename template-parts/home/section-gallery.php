<?php
/**
 * Template to show the content of Gallery section
 *
 * @package vw-appointment-pro
 */ 
 $section_hide = get_theme_mod( 'vw_appoinment_pro_gallery_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  if( get_theme_mod('vw_appoinment_pro_gallery_bgcolor','') ) {
    $gellery_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_gallery_bgcolor','')).';';
  }elseif( get_theme_mod('vw_appoinment_pro_gallery_bgimage','') ){
    $gellery_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_appoinment_pro_gallery_bgimage')).'\')';
  }else{
    $gellery_backg='';
  }
?>
<section id="gellery" style="<?php echo esc_attr($gellery_backg); ?>" class="<?php echo esc_attr($att_style); ?>">
	<div class="container-fluid px-0">
		<div class="gellery-head">
	        <?php if(get_theme_mod('vw_appoinment_pro_gallery_small_heading')!=''){ ?>
	          <p>
	            <?php echo esc_html(get_theme_mod('vw_appoinment_pro_gallery_small_heading')); ?>
	          </p>
	        <?php } if(get_theme_mod('vw_appoinment_pro_gallery_main_heading')!=''){ ?>
	          <h3>
	            <?php echo esc_html(get_theme_mod('vw_appoinment_pro_gallery_main_heading')); ?>
	          </h3>
	        <?php } ?>
	    </div>
	    <div class="gallery-shortcode">
	    	<?php echo do_shortcode(get_theme_mod('vw_appoinment_pro_gallery_shortcode')); ?>
	    </div>
	</div>
    <div class="clearfix"></div>
</section>