<?php
/**
 * Template Name: Contact
*/
$page_title_style="";
if(get_theme_mod('vw_appoinment_pro_page_title_content_option')=='Center'){
    $page_title_style='text-align:center;';
}else if(get_theme_mod('vw_appoinment_pro_page_title_content_option')=='Left')
{
    $page_title_style='text-align:left;';
}else if(get_theme_mod('vw_appoinment_pro_page_title_content_option')=='Right')
{
    $page_title_style='text-align:right;';
}else{
    $page_title_style='';
}
get_header();
if ( defined( 'VW_TITLE_BANNER_IMAGE_VERSION' ) ){
	echo do_shortcode( '[vw-title-banner]' );
}
else{
	echo '<div class="container pt-5 mt-5"><h1 style="'.$page_title_style.'">' .get_the_title(). '</h1></div>';?>
	<?php if ( get_theme_mod('vw_appoinment_pro_site_breadcrumb_enable', true) == "1" ) { ?> 
        <div class="container bradcrumbs py-3">
            <?php vw_appoinment_pro_the_breadcrumb(); ?>
        </div>
    <?php }?>
<?php }?>
<?php do_action('vw_appoinment_pro_before_contact_title'); ?>
<div class="contact-box">
	<div class="container">
		<?php if (defined('VWBC_VERSION')){
	        echo do_shortcode( '[vw-breadcrumb]' );
	    } ?>
		<div class="contact-color-bg">
			<div class="contact-page-details pb-4">
				<div class="row contact-info-box">
					<?php if ( get_theme_mod('vw_appoinment_pro_address') != "" ) { ?>
						<div class="col-lg-4 col-sm-6 col-md-4 contact-address my-1">
							<div class="vw-minima-contact-box p-4">
								<?php if(get_theme_mod('vw_appoinment_pro_contact_page_section_address_icon',true) != ''){ ?>
									<i class="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_contact_page_section_address_icon','fas fa-map-marker-alt')); ?>"></i>
								<?php } ?>
								<?php if ( get_theme_mod('vw_appoinment_pro_address_title') != "" ) { ?>
									<span class="py-1"><?php echo esc_html(get_theme_mod('vw_appoinment_pro_address_title')); ?></span>
								<?php } ?>
								<p><?php echo(get_theme_mod('vw_appoinment_pro_address')); ?></p>
							</div>
						</div>
					<?php }?>
					<?php if ( get_theme_mod('vw_appoinment_pro_contactpage_email_one') != "" || get_theme_mod('vw_appoinment_pro_contactpage_email_two') != "") { ?>
						<div class="col-lg-4 col-md-4 col-sm-6 contact-email my-1">
							<div class="vw-minima-contact-box p-4">
								<?php if(get_theme_mod('vw_appoinment_pro_contact_page_section_email_icon',true) != ''){ ?>
									<i class="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_contact_page_section_email_icon','far fa-envelope-open')); ?>"></i>
								<?php } ?>
								<?php if(get_theme_mod('vw_appoinment_pro_contactpage_email_title') != ''){ ?>
									<span class="w-100 py-1"><?php echo esc_html(get_theme_mod('vw_appoinment_pro_contactpage_email_title')); ?></span>
								<?php } ?>
								<p class="m-0"><?php echo esc_html(get_theme_mod('vw_appoinment_pro_contactpage_email_one')); ?></p>
								<p class="m-0"><?php echo esc_html(get_theme_mod('vw_appoinment_pro_contactpage_email_two')); ?></p>
							</div>
						</div>
					<?php }?>
					<?php if ( get_theme_mod('vw_appoinment_pro_contactpage_phone_one') != "" || get_theme_mod('vw_appoinment_pro_contactpage_phone_two') != "" ) { ?>
						<div class="col-lg-4 col-md-4 contact-phone my-1">
							<div class="vw-minima-contact-box p-4">
								<?php if(get_theme_mod('vw_appoinment_pro_contact_page_section_phone_icon',true) != ''){ ?>
									<i class="<?php echo esc_html(get_theme_mod('vw_appoinment_pro_contact_page_section_phone_icon','fas fa-phone')); ?>"></i>
								<?php } ?>
								<?php if(get_theme_mod('vw_appoinment_pro_contactpage_phone_title') != ''){ ?>
				 					<span class="py-1"><?php echo esc_html(get_theme_mod('vw_appoinment_pro_contactpage_phone_title')); ?></span>
				 				<?php } ?>
				 				<p class="m-0"><?php echo esc_html(get_theme_mod('vw_appoinment_pro_contactpage_phone_one')); ?></p>
				 				<p class="m-0"><?php echo esc_html(get_theme_mod('vw_appoinment_pro_contactpage_phone_two')); ?></p>
				 			</div>
				 		</div>
		 			<?php }?>
		 		</div>
		 		<div class="contact-head pb-3">
					<?php if(get_theme_mod('vw_appoinment_pro_contactpage_form_title',true) != ''){ ?>
						<h2 class="pb-2">
							<?php echo esc_html(get_theme_mod('vw_appoinment_pro_contactpage_form_title')); ?>
						</h2>
					<?php } if(get_theme_mod('vw_appoinment_pro_contactpage_form_text',true) != ''){ ?>
						<p>
							<?php echo(get_theme_mod('vw_appoinment_pro_contactpage_form_text')); ?>
						</p>
					<?php } ?>
				</div>
		 		<div class="contac_form">
					<?php while ( have_posts() ) : the_post(); ?>
			        	<?php the_content(); ?>
			    	<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div>
	</div>	
	<?php do_action('vw_appoinment_pro_before_map'); ?>
		<div class="google-map p-0 mb-4" id="map">
			<?php if ( get_theme_mod('vw_appoinment_pro_address_latitude',true) != "" && get_theme_mod('vw_appoinment_pro_address_longitude',true) != "" ) {?>
			  	<embed width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_attr(get_theme_mod('vw_appoinment_pro_address_latitude')); ?>,<?php echo esc_attr(get_theme_mod('vw_appoinment_pro_address_longitude')); ?>&hl=es;z=14&amp;output=embed"></embed>
			<?php } ?>
		</div>
	<?php do_action('vw_appoinment_pro_after_map'); ?>
</div>
<?php do_action('vw_appoinment_pro_before_footer'); ?>
<?php get_footer(); ?>