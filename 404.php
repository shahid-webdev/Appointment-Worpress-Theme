<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package vw-appointment-pro
 */
get_header(); ?>
<div class="title-box mb-3 pt-5 mt-5">
	<div class="container">
		<h1><?php the_title();?></h1>	
		<?php if ( get_theme_mod('vw_appoinment_pro_site_breadcrumb_enable', true) == "1" ) { ?> 
		    <div class="container bradcrumbs py-3">
		        <?php vw_appoinment_pro_the_breadcrumb(); ?>
		    </div>
		<?php } ?>
	</div>
</div>
<div class="content_page">
	<div class="container">
		<div class="page-content">
			<h3><span class="heading3"><?php echo esc_html(get_theme_mod('vw_appoinment_pro_404_page_title'));?></span></h3>
			<p class="text-404"><?php echo (get_theme_mod('vw_appoinment_pro_404_page_content'));?></p>  
			<div class="read-moresec my-4">
				<div><a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right">
				<?php echo (get_theme_mod('vw_appoinment_pro_404_page_button_text'));?>
			</div>			
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php get_footer(); ?>