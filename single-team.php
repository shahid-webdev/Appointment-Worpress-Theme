<?php
/**
 * The Template for displaying all single teachers.
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
    <div id="vw-single-team">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-7 col-sm-12 col-lg-8 col-xs-12">
                    <div class="vw-single-team-info mb-0 pt-3"> 
                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                        <?php if(get_post_meta($post->ID,'meta-designation',true)) { ?>
                            <p class="pt-3">
                                <i class="fas fa-user"></i>
                                <?php echo esc_html(get_post_meta($post->ID,'meta-designation',true)); ?></p>
                        <?php } ?>
                        <?php if(get_post_meta($post->ID,'meta-team-email',true)) { ?>
                            <p class="email">
                                <i class="far fa-envelope"></i>
                                <?php echo esc_html(get_post_meta($post->ID,'meta-team-email',true)); ?>
                            </p>
                        <?php } if(get_post_meta($post->ID,'meta-team-phone',true)) { ?>
                            <p class="phone">
                                <i class="fas fa-phone"></i>
                                <?php echo esc_html(get_post_meta($post->ID,'meta-team-phone',true)); ?>
                            </p>
                        <?php } ?>
                        <div class="social-profiles py-3">
                            <?php if(get_post_meta($post->ID,'meta-tfacebookurl',true)) { ?>
                                <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-tfacebookurl',true)); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                             <?php }
                            if(get_post_meta($post->ID,'meta-ttwitterurl',true)) { ?>
                                <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-ttwitterurl',true)); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                            <?php }
                            if(get_post_meta($post->ID,'meta-tlinkdenurl',true)) { ?>
                                 <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-tlinkdenurl',true)); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <?php } 
                                if(get_post_meta($post->ID,'meta-tinstagram',true)!= ''){ ?>
                                <a href="<?php echo esc_html(get_post_meta($post->ID,'meta-tinstagram',true)); ?>">
                                    <i class="fab fa-instagram align-middle" aria-hidden="true"></i>
                                </a>
                            <?php } if(get_post_meta($post->ID,'meta-pinterest',true)!= ''){ ?>
                                <a href="<?php echo esc_html(get_post_meta($post->ID,'meta-pinterest',true)); ?>">
                                    <i class="fab fa-pinterest-p align-middle" aria-hidden="true"></i>
                                </a>
                            <?php } ?>
                        </div>
                    <div class="single-page-content"><?php the_content();?></div>
                    </div>
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
                <div class="col-md-5 col-sm-12 col-lg-4 col-xs-12" id="sidebar">
                  <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            <?php endwhile; // end of the loop. ?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php get_footer(); ?>