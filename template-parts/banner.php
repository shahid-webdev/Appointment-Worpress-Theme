<?php 
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

while ( have_posts() ) : the_post(); 
	if ( ! is_singular() ) {
		return;
	}
	global $post;
	$img = get_post_meta($post->ID, 'vw_title_banner_image_wp_custom_attachment', true);
	$display = '';
	$display_title_bbanner = '';
	$vw_title_banner_image_title_on_off = get_post_meta($post->ID, 'vw_title_banner_image_title_on_off', true);
	if($vw_title_banner_image_title_on_off == 'on') $display = 'style=display:none;';

	$vw_title_banner_image_title_below_on_off = get_post_meta($post->ID, 'vw_title_banner_image_title_below_on_off', true);
	if($vw_title_banner_image_title_below_on_off != 'on') $display_title_bbanner = 'style=display:none;';

	if( $img != '' ){ ?>
		<div class="title-box mb-3">
			<div class="container" <?php echo esc_attr($display); ?>>
				<div class="above_title mt-7">
					<h1 style="<?php echo esc_attr($page_title_style); ?>"><?php the_title();?></h1>
				</div>
				<?php if ( get_theme_mod('vw_appoinment_pro_site_breadcrumb_enable', true) == "1" ) { ?> 
			        <div class="bradcrumbs">
			            <?php vw_appoinment_pro_the_breadcrumb(); ?>
			        </div>
			    <?php } ?>
			</div>
			<img src="<?php echo esc_url($img); ?>" >
		</div>
		<div class="container" <?php echo esc_attr($display_title_bbanner); ?>>
			<h1 style="<?php echo esc_attr($page_title_style); ?>"><?php the_title();?></h1>
			<?php if ( get_theme_mod('vw_appoinment_pro_site_breadcrumb_enable', true) == "1" ) { ?> 
		        <div class="bradcrumbs">
		            <?php vw_appoinment_pro_the_breadcrumb(); ?>
		        </div>
		    <?php } ?>
		</div>
	<?php }else{ ?>
		<div class="container">
			<h1 class="template-title" style="<?php echo esc_attr($page_title_style); ?>"><?php the_title();?></h1>
			<?php if ( get_theme_mod('vw_appoinment_pro_site_breadcrumb_enable', true) == "1" ) { ?> 
		        <div class="bradcrumbs">
		            <?php vw_appoinment_pro_the_breadcrumb(); ?>
		        </div>
		    <?php } ?>
		</div>
	<?php } ?>
<?php endwhile; // end of the loop. ?>