<?php
/**
 * The Template for displaying all single Service.
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
<div class="container">
    <?php if (defined('VWBC_VERSION')){
        echo do_shortcode( '[vw-breadcrumb]' );
    } ?>
    <div class="row">
        <div id="service_single" class="col-lg-8 col-md-7 text-center">
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="s-services-box services-image">
                <?php if(has_post_thumbnail()){ ?>
                    <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                <?php }else{
                    if(get_post_meta($post->ID,'meta-image',true)) { 
                        $img= get_post_meta(get_the_ID(), 'meta-image',true);
                    ?>
                    <img src="<?php echo esc_url($img); ?>">
                <?php } } ?>  
            </div>
            <div class="single-page-content pt-3"><?php the_content();?></div>              
            <div class="post_pagination mt-4">
                <?php the_post_navigation( array(
                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'vw-appointment-pro' ) . '</span> ' .
                        '<span class="screen-reader-text">' . __( 'Next post:', 'vw-appointment-pro' ) . '</span> ' .
                        '<span class="post-title">%title</span>',
                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'vw-appointment-pro' ) . '</span> ' .
                        '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-appointment-pro' ) . '</span> ' .
                        '<span class="post-title">%title</span>',
                ) );?>
            </div>
        </div>    
        <div class="col-lg-4 col-md-5" id="sidebar">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </div>   
        <div class="clearfix"></div>
        <?php endwhile; // end of the loop. ?> 
    </div>    
</div>
<?php get_footer(); ?>