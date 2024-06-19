<?php
/**
 * The template for displaying Search Results pages.
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

get_header(); ?>

<div class="container pt-5 mt-5">
	<div class="middle-align">
		<?php if ( defined( 'VW_TITLE_BANNER_IMAGE_VERSION' ) ){
			echo do_shortcode( '[vw-title-banner]' );
		}else { ?>
			<h1 class="entry-title" style="<?php echo esc_attr($page_title_style); ?>"><?php printf( __( 'Results For: %s', 'vw-appointment-pro' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			<?php if ( get_theme_mod('vw_appoinment_pro_site_breadcrumb_enable', true) == "1" ) { ?> 
		        <div class="container bradcrumbs py-3">
		            <?php vw_appoinment_pro_the_breadcrumb(); ?>
		        </div>
			<?php }?>
		<?php } ?>
		<?php if (defined('VWBC_VERSION')){
        	echo do_shortcode( '[vw-breadcrumb]' );
    	} ?>
		<div class="row">
			<div class="col-lg-8 col-sm-6 col-md-12">
				<div class="row search-result">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post();
							get_template_part('template-parts/post/post-content');
						endwhile; ?>
						<div class="navigation" id="search-page-nav">
							<?php // Previous/next page navigation.
							  the_posts_pagination( array(
								  'prev_text'          => __( 'Previous page', 'vw-appointment-pro' ),
								  'next_text'          => __( 'Next page', 'vw-appointment-pro' ),
								  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-appointment-pro' ) . ' </span>',
							  )); ?>
						</div>
					<?php else : ?>
						<?php get_template_part( 'no-results', 'search' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-6" id="sidebar">
				<?php dynamic_sidebar('sidebar-1'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>