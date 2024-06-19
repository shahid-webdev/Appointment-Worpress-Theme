<?php
/**
 * Template Name:Blog with Right Sidebar
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

<?php do_action('vw_appoinment_pro_before_blog'); ?>

<div id="blog-right-sidebar">
	<div class="container">
		<?php if (defined('VWBC_VERSION')){
	        echo do_shortcode( '[vw-breadcrumb]' );
	    } ?>
	    <div class="middle-align">
		    <div class="row">
				<div class="col-lg-8 col-md-12 content_page">
					<div class="row">
						<?php if ( have_posts() ) : ?>
					      	<?php 
					      		if(!empty($vw_paged)) {
									$vw_paged = $vw_paged;
								}elseif(get_query_var( 'paged')) {
								    $vw_paged = get_query_var('paged');
								}elseif(get_query_var( 'page')) {
								    $vw_paged = get_query_var('page');
								}else {
								    $vw_paged = 1;
								}
								$args = array(
								   'paged' => $vw_paged,
								   'category_name' => get_theme_mod('vw_appoinment_pro_category_setting')
								);
							$custom_query = new WP_Query( $args );
							while($custom_query->have_posts()) :
							   $custom_query->the_post();
							   get_template_part('template-parts/post/post-content');
							endwhile; // end of the loop.
							wp_reset_postdata(); ?>
						<?php else : ?>
							<h2><?php _e('Not Found','vw-appointment-pro'); ?></h2>
						<?php endif; ?>
					</div>
					<div class="vw-navigation my-2">
		              	<?php 
							$big = 999999999;
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => 'paged=%#%',
								'current' =>  $vw_paged,
								'total' => $custom_query->max_num_pages
							) );
						?>
		            </div>
				</div>
				<div class="col-lg-4 col-md-12" id="sidebar">
					<?php dynamic_sidebar('sidebar-1'); ?>
				</div>
		        <div class="clearfix"></div>
		    </div>
	    </div>
	</div>
</div>

<?php do_action('vw_appoinment_pro_after_blog'); ?>
<?php get_footer(); ?>