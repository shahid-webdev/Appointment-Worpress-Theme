<?php


$about_section = get_theme_mod( 'vw_appoinment_pro_footer_widgets_enable' );
if ( 'Disable' == $about_section ) {
  return;
}

if( get_theme_mod('vw_appoinment_pro_footer_widget_bgcolor','') ) {
	$about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_appoinment_pro_footer_widget_bgcolor','')).';';
}elseif( get_theme_mod('vw_appoinment_pro_footer_widget_section_bg_image','') ){
	$about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_appoinment_pro_footer_widget_section_bg_image')).'\');';
}else{
	$about_backg='';
}

$att_style="";
$image_att = get_theme_mod( 'vw_appoinment_pro_footer_widget_section_bg_image_attachment',true );
if ( 'Scroll' == $image_att ) {
    $att_style="section_bg_scroll";
}else{
    $att_style="section_bg_fixed";
}

?>
	<div id="footer" style="<?php echo esc_attr($about_backg);?>" class="<?php echo esc_attr($att_style); ?> pt-5 pb-4">
		<div id="footer_box">
			<div class="container footer-cols">

				<?php get_template_part('template-parts/home/section-partners'); ?>

				<?php
				$count = 0;
				if ( is_active_sidebar('footer-1') != '' ) {
					$count++;
				}
				if ( is_active_sidebar('footer-2') != '' ) {
					$count++;
				}
				if ( is_active_sidebar('footer-3') != '' ) {
					$count++;
				}
				if ( $count == 1 ) {
					$colmd1 = 'col-lg-12 col-sm-6';
					$colmd2 = 'col-lg-12 col-sm-6';
				} elseif ( $count == 2 ) {
					$colmd1 = 'col-lg-4 col-sm-6';
					$colmd2 = 'col-lg-8 col-sm-6';
				} else{
					$colmd1 = 'col-lg-3 col-md-3 col-sm-6';
					$colmd2 = 'col-lg-6 col-md-6 col-sm-6';
				} 
				
          		?>
				<?php
				
				if ( is_active_sidebar('footer-1') != '' || is_active_sidebar('footer-2') != '' || is_active_sidebar('footer-3') != ''){
				 ?>
					<div class="row footer-details">
						<div class="<?php if ( is_active_sidebar('footer-1') == '' ) { echo 'footer_hide'; } else { echo esc_html( $colmd1 ); } ?> footer1">
							<?php dynamic_sidebar( 'footer-1' ); ?>
						</div>
						<div class="text-center px-4 <?php if ( is_active_sidebar('footer-2') == '' ) { echo 'footer_hide'; } else { echo esc_html( $colmd2 ); } ?> footer2">
							<?php dynamic_sidebar( 'footer-2' ); ?>
						</div>
						<div class="<?php if ( is_active_sidebar('footer-3') == '' ) { echo 'footer_hide'; } else { echo esc_html( $colmd1 ); } ?> footer3 pl-4">
							<?php dynamic_sidebar( 'footer-3' ); ?>
						</div>
					</div>
				<?php } ?>
			</div><!-- .container -->
		</div><!-- #footer_box -->
	</div>