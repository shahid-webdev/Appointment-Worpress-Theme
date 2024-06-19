<?php

/**
 * The Template for displaying all single posts.
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
<?php }

$postcol1="";
$postcol2="";

if(get_theme_mod('vw_appoinment_pro_post_general_settings_post_sidebar',true)=='1')
{
	$postcol1="col-lg-8 col-md-7";
	$postcol2="col-lg-4 col-md-5";
	
}else
{
	$postcol1="col-lg-12 col-md-12";
	$postcol2="";
}

?>
<div class="container">
	<?php if (defined('VWBC_VERSION')){
        echo do_shortcode( '[vw-breadcrumb]' );
    } ?>
	<div class="row">
		<div class="content_page <?php echo esc_html($postcol1); ?>">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="content_boxes p-0">
				<?php if ( has_post_thumbnail() ) { ?>
				<?php if (get_theme_mod("vw_appoinment_pro_blog_featured_image_enable",true)=='1'){?>
					<div class="feature-box">
						<img src="<?php the_post_thumbnail_url( 'full' ); ?>">
					</div>
				<?php } ?>
				<?php } ?>
				<div class="metabox my-2 py-1">
					<?php if ( get_theme_mod('vw_appoinment_pro_post_general_settings_post_date',true) == "1" ) { ?>
					<span class="entry-date mr-2">
						<i class="far fa-calendar-alt"></i>
						<?php echo esc_html( get_the_date() ); ?>
					</span>
					<?php } ?>
					
					<?php if ( get_theme_mod('vw_appoinment_pro_post_general_settings_post_author',true) == "1" ) { ?>
					<span class="entry-author pl-2 mr-2"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
						<i class="fas fa-user"></i>
						<?php the_author(); ?></a></span>
					<?php } ?>
					
					<?php if ( get_theme_mod('vw_appoinment_pro_post_general_settings_post_comments',true) == "1" ) { ?>
					<span class="entry-comments pl-2">
						<i class="far fa-comments"></i>
						<?php comments_number( __( '0 Comments','vw-appointment-pro' ), __( '0 Comments','vw-appointment-pro' ), __( '0 % Comments','vw-appointment-pro' ) ); ?></span>
					<?php } ?>
				</div>
				<div class="single-post-content">
					<?php the_content();?>
				</div>
				<?php if ( get_theme_mod('vw_appoinment_pro_post_general_settings_post_share',true) == "1" ) { ?>
				<?php do_action('vw_appoinment_pro_before_blog_sharing'); ?>
				<div class="share_icon row mt-3"> 
                    <p class="socila_share col-md-12">
                    	<?php if(get_theme_mod('vw_appoinment_pro_post_general_settings_post_share_facebook',true)==1 || get_theme_mod('vw_appoinment_pro_post_general_settings_post_share_linkedin',true)==1 || get_theme_mod('vw_appoinment_pro_post_general_settings_post_share_twitter',true)==1){ ?>
                    		<b><?php _e('Share: ','vw-appointment-pro'); ?></b>

                    	<?php } if ( get_theme_mod('vw_appoinment_pro_post_general_settings_post_share_facebook',true) == "1" ) { ?>
                    		<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank" class="pb-2"><i class="fab fa-facebook-f p-2 mx-1" aria-hidden="true"></i></a>
                    	<?php } if ( get_theme_mod('vw_appoinment_pro_post_general_settings_post_share_linkedin',true) == "1" ) { ?>
                    		<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php the_title(); ?>" target="_blank" class="pb-2"><i class="fab fa-linkedin-in p-2 mx-1" aria-hidden="true"></i></a>
                    	<?php }if ( get_theme_mod('vw_appoinment_pro_post_general_settings_post_share_twitter',true) == "1" ) { ?>
                    		<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php echo the_title(); ?>" target="_blank" class="pb-2"><i class="fab fa-twitter p-2 mx-1" aria-hidden="true"></i></a>
                    	<?php } ?>
                	</p>
                	<?php if ( get_theme_mod('vw_appoinment_pro_post_general_settings_post_tags',true) == "1" ) { ?>
	                    <p class="post_tag">
	                    	<?php
	                        if( $tags = get_the_tags() ) { ?>
	                            <span class="meta-sep"><?php esc_html_e('Tags :','vw-appointment-pro'); ?></span>
	                            <?php foreach( $tags as $vw_tag ) {
	                              $sep = ( $vw_tag === end( $tags ) ) ? '' : ' ';
	                              echo '<a href="' . esc_url(get_term_link( $vw_tag, $vw_tag->taxonomy )) . '">#' . esc_html($vw_tag->name) . '</a>' . esc_html($sep);
	                            }
		                    } ?>
		                </p>
		            <?php } ?>
                </div>
                <?php } ?>
                <?php if(get_theme_mod('vw_appoinment_pro_post_general_settings_post_category',true)=="1"){ ?>
	                <div class="post_ctg font-weight-bold"><span class="mr-2"><?php _e('Categories: ','vw-appointment-pro'); ?></span><?php the_category();?></div>
					<?php } ?>
				<!-- author section -->
				<div class="authordetails py-3">
					<div class="authordescription">
						<?php 
						$author_details="";
						$user_posts=get_author_posts_url( get_the_author_meta( 'ID' ) );
						global $post;
						$content ='';
                        // Detect if it is a single post with a post author
						if ( is_single() && isset( $post->post_author ) ) {
                                            // Get author's display name 
							$display_name = get_the_author_meta( 'display_name', $post->post_author );  
                                            // Get author's biographical information or description
							$user_description = get_the_author_meta( 'user_description', $post->post_author );
							if ( ! empty( $user_description ) )
								$author_details .= '<p class="author_links pl-5 mb-1"><a href="'. $user_posts .'"> ' . esc_html($display_name) . '</a>';
                                            // Author avatar and bio
							$author_details .= '<div class="clear"></div><div class="row"><div class="col-md-2 col-lg-2 author_details">' . get_avatar( get_the_author_meta('user_email') , 90 ).'</div><div class="col-md-10 col-lg-10 b-content">' . nl2br( $user_description ). '</div>';
							
							$author_details .= '</div>';
							
                                            // Pass all this info to post content  
							$content = $content . '<footer class="author_bio_section" >' . $author_details . '</footer>';
						}
						echo $content;
						?>
					</div>
					<ul class ="social-profile">
						<?php 
						$tumbler_url = get_the_author_meta( 'tumbler_url' );
						if ( $tumbler_url && $tumbler_url != '' ) {
							echo '<li class="tumbler">
							<a href="' . esc_url($tumbler_url) . '" target="_blank"><i class="fab fa-tumblr"></i></a></li>';
						}
						$pinterest_profile = get_the_author_meta( 'pinterest_profile' );
						if ( $pinterest_profile && $pinterest_profile != '' ) {
							echo '<li class="google">
							<a href="' . esc_url($pinterest_profile) . '" rel="author" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>';
						}
						$twitter_profile = get_the_author_meta( 'twitter_profile' );
						if ( $twitter_profile && $twitter_profile != '' ) {
							echo '<li class="twitter">
							<a href="' . esc_url($twitter_profile) . '" target="_blank"> <i class="fab fa-twitter"></i></a></li>';
						}
						$facebook_profile = get_the_author_meta( 'facebook_profile' );
						if ( $facebook_profile && $facebook_profile != '' ) {
							echo '<li class="facebook">
							<a href="' . esc_url($facebook_profile) . '" target="_blank"> <i class="fab fa-facebook-f"></i></a></li>';
						}
						?>
					</ul>
				</div>
				<?php // If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) {
					comments_template();
				} ?>
				<?php if(get_theme_mod('vw_appoinment_pro_related_posts',true)==1){ ?>
				<div class="related-post-wrapper">
                <?php if(get_theme_mod('vw_appoinment_pro_related_posts_title')!=''){ ?>
                    <h3>
                        <?php echo esc_html(get_theme_mod('vw_appoinment_pro_related_posts_title')); ?>
                    </h3>
                <?php } ?>
                <div class="row">
                    <?php
                      $current_post_title=get_the_ID();
                      $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => get_theme_mod('vw_appoinment_pro_related_post_count')
                      );  
                      $query = new WP_Query($args); 
                      if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post();

                       if(get_the_ID()!=$current_post_title){

                    ?>
                        <div class="col-lg-4 col-md-4 related-post-wrap mb-4">
                            <?php
                            if(has_post_thumbnail()){
                              the_post_thumbnail(); 
                            }
                            ?>
                            <a href="<?php the_permalink(); ?>" class="post-page-title pt-2"><?php the_title(); ?></a>
                            <div class="post-single-text"><?php $excerpt = get_the_excerpt(); echo esc_html(vw_appoinment_pro_string_limit_words($excerpt,15)); ?></div>
                        </div>
                    <?php } endwhile; endif; ?>
                </div>
            </div>
            <?php } ?>
			<div class="clearfix"></div>
			<?php the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __(get_theme_mod('vw_appoinment_pro_blog_category_prev_title'), 'vw-appointment-pro' ) .'</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'vw-appointment-pro' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">'. __(get_theme_mod('vw_appoinment_pro_blog_category_next_title'), 'vw-appointment-pro' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'vw-appointment-pro' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			endwhile; // end of the loop. ?>
			</div>
		</div>
		<?php if(get_theme_mod('vw_appoinment_pro_post_general_settings_post_sidebar',true)=='1'){ ?>
			<div class="<?php echo esc_html($postcol2); ?>" id="sidebar">
	          <?php dynamic_sidebar('sidebar-1'); ?>
	        </div>
	    <?php } ?>
		<div class="clearfix"></div>
	</div>
</div>
<?php get_footer(); ?>