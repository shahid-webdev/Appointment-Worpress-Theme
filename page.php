<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package vw-appointment-pro
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

$ibtana_class="";
if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
	$ibtana_class = 'ibtana-theme-page-wrap';
}
   
get_header();
if ( defined( 'VW_TITLE_BANNER_IMAGE_VERSION' ) ){
	echo do_shortcode( '[vw-title-banner]' );
}
else{
	echo '<div class="container"><h1 class="pt-5 mt-5" style="'.$page_title_style.'">' .get_the_title(). '</h1></div>';?>
	<?php if ( get_theme_mod('vw_appoinment_pro_site_breadcrumb_enable', true) == "1" ) { ?> 
        <div class="container bradcrumbs py-1 mb-3">
            <?php vw_appoinment_pro_the_breadcrumb(); ?>
        </div>
    <?php }?>
<?php }?>
<?php do_action( 'vw_appoinment_pro_after_page_header' ); ?>
<div class="outer_dpage <?php echo esc_attr($ibtana_class); ?>">
	<div class="container">
		<?php if (defined('VWBC_VERSION')){
        	echo do_shortcode( '[vw-breadcrumb]' );
    	} ?>
		<div class="middle-content pb-3">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content();
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) {
					comments_template(); }
			endwhile; // end of the loop. ?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php do_action( 'vw_appoinment_pro_before_page_footer' ); ?>

<?php get_footer(); ?>