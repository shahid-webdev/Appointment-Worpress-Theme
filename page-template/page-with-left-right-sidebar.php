<?php
/**
 * Template Name:Page with Left and Right Sidebar
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
    <div class="col-lg-3 col-md-5" id="sidebar">
      <?php dynamic_sidebar('sidebar-page-left'); ?>
    </div>
    <div class="col-lg-6 col-md-7 content_page">
      <?php while ( have_posts() ) : the_post(); ?>
         <?php the_content();?>
         <?php
         //If comments are open or we have at least one comment, load up the comment template
          if ( comments_open() || '0' != get_comments_number() )
              comments_template();
         ?>
       <?php endwhile; // end of the loop. ?>
    </div>
    <div class="col-lg-3 col-md-5" id="sidebar">
      <?php dynamic_sidebar('sidebar-2'); ?>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php get_footer(); ?>