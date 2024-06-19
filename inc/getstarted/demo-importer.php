<div class="theme-offer">
	<?php
		//POST and update the customizer and other related data of VW Appointment Pro
      if(isset($_POST['submit'])){

         $data_array=[];
          $matchTheme=array(
            'vw-appointment-pro' => 'appointment-booking'
          );
          $newTheme = wp_get_theme();
            $themename = $newTheme->get_stylesheet();
            global $wpdb;
            if(isset($matchTheme[$themename])){
          $old_theme = $matchTheme[$themename];
            $checkWord = 'theme_mods_'.$themename;
            $mqr = "SELECT * FROM wp_options where option_name='$checkWord'";
            $result = $wpdb->get_row($mqr);
            if($result){
              $optionValue = $result->option_value;
              $data_array=unserialize($optionValue);
            }
          }

          $theme_mods_match_id = [
            'vw_appoinment_pro_topbar_email_text' => ['default'=> 'appointment5831@gmail.com'],
            'vw_appoinment_pro_contact_details_phone_text' => ['default'=> ' +1 800 833 9780 '],
          ];

       //POST and update the customizer and other related data of VW Cafe Pro
      $home_id=''; $vw_blog_id=''; $page_id=''; $contact_id='';

        // Create a front page and assigned the template
        
        $home_content = '';

        $home_title = 'Home';
        $home = array(
             'post_type' => 'page',
             'post_title' => $home_title,
             'post_content'  => $home_content,
             'post_status' => 'publish',
             'post_author' => 1,
             'post_slug' => 'home'
         );
        $home_id = wp_insert_post($home);
         
         //Set the home page template
         add_post_meta( $home_id, '_wp_page_template', 'page-template/home-page.php' );

         //Set the static front page
         $home = get_page_by_title( 'Home' );
         update_option( 'page_on_front', $home->ID );
         update_option( 'show_on_front', 'page' );

        
          // Create a blog page and assigned the template
          $vwblog_title = 'Blog';
          $blog = array(
             'post_type' => 'page',
             'post_title' => $vwblog_title,
             'post_status' => 'publish',
             'post_author' => 1,
             'post_slug' => 'blog'
          );
          $vw_blog_id = wp_insert_post($blog);
         

         //Set the blog page template
         add_post_meta( $vw_blog_id, '_wp_page_template', 'page-template/blog-fullwidth-extend.php' );

         // Create a Page 
          $page_title = 'Page ';
          $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel, et argentum simul reddere parentibus meis, debitum eo - aliam putant quinque aut sex annos - ut certus quid faciam. Quod suus Faciam, cum magna mutatio. Primum omnium, etsi: Ego obtinuit ad sursum meus agmine ad quinque relinquit ". Et respexit super ad terror horologium, in pectore et ';

          $vwpage = array(
          'post_type' => 'page',
          'post_title' => $page_title,
          'post_content'  => $content,
          'post_status' => 'publish',
          'post_author' => 1,
          'post_slug' => 'page'
          );
          $page_id = wp_insert_post($vwpage);
         
          // Create a contact page and assigned the template
          $contact_title = 'Contact';
          $contact = array(
          'post_type' => 'page',
          'post_title' => $contact_title,
          'post_status' => 'publish',
          'post_author' => 1,
          'post_slug' => 'contact'
          );
         $contact_id = wp_insert_post($contact);
        
         //Set the blog with right sidebar template
         add_post_meta( $contact_id, '_wp_page_template', 'page-template/contact.php' );

         // -------------- Section Ordering ---------------

         set_theme_mod( 'vw_appoinment_pro_section_ordering_settings_repeater','features,about-us,appointment,our-services,gallery,our-team,video,records,why-choose-us,testimonials,our-blogs,content-area' );
         //-----------------Topbar--------------------------------        
         foreach ($theme_mods_match_id as $kname => $idn) {
          if(!isset($data_array[$kname])){
            set_theme_mod($kname,$idn['default']);
          }
        }
        set_theme_mod( 'vw_appoinment_pro_social_icons_shortcode', '[vwsmp-social-media color="#fff" hover_color="#fff" bg_color="transparent" bg_hover_color= "transparent" font_size="14" border_radius="0" left_margin="5" right_margin="5" top_margin="0" bottom_margin="0" height="15" width="15"]' );
         //-----------------header--------------------------------
        set_theme_mod( 'vw_appoinment_pro_res_open_menu_icon', 'fas fa-align-right' );
        set_theme_mod( 'vw_appoinment_pro_res_close_menus_icon', 'fas fa-times' );
        set_theme_mod( 'vw_appoinment_pro_logo_custom_text', 'APPOINTMENT' );

        set_theme_mod( 'vw_appoinment_pro_slide_number', 3 );
        for($i=1; $i<=3; $i++) {
          set_theme_mod( 'vw_appoinment_pro_slide_image'.$i, get_template_directory_uri().'/assets/images/slider/slider.png' );
          set_theme_mod( 'vw_appointment_pro_slide_right_image'.$i, get_template_directory_uri().'/assets/images/slider/rightslide.png' );
          set_theme_mod( 'vw_appoinment_pro_slide_small_heading'.$i, 'BATTER LIFE NEEDS BATTER CARE' );
           if(!isset($data_array['vw_appoinment_pro_slide_main_heading'.$i])){
            set_theme_mod( 'vw_appoinment_pro_slide_main_heading'.$i, 'HEALTH IS THE ROOT OF ALL HAPPINESS' );
            }
            if(!isset($data_array['vw_appoinment_pro_slide_text'.$i])){
          set_theme_mod( 'vw_appoinment_pro_slide_text'.$i, 'Aliquam malesuada bibendum arcu vitae elementum semper illis manducans curabitur vitae ven.' );
            }
             set_theme_mod( 'vw_appoinment_pro_slide_btntext1'.$i, 'VIEW DETAILS' );
            if(!isset($data_array['vw_appoinment_pro_slide_btnurl1'.$i])){
              set_theme_mod( 'vw_appoinment_pro_slide_btnurl1'.$i, '#' );
            }
          set_theme_mod( 'vw_appoinment_pro_slide_btntext2'.$i, 'APPOINTMENT NOW' );
        }
        set_theme_mod( 'vw_appoinment_pro_slide_delay', 10000 );

         // ----------- Our features ------------
        set_theme_mod( 'vw_appoinment_pro_our_features_number', 4);
        $features_title=array('BEST EQUIPMENT','24/7 READY','SKILLED DOCTORS','SUCCESS RATE');
        $boxbgColor=array('#71c1d3','#fa885c','#1cc7a4','#ff6c78');
        $iconbgColor=array('#37a1b9','#eb7142','#16af90','#f4515e');
        $iconhoverColor=array('#ffffff','#ffffff','#ffffff','#ffffff');
        $iconhoverbgColor=array('#37a1b9','#eb7142','#16af90','#f4515e');
        for($i=1;$i<=4;$i++)
        {
          set_theme_mod( 'vw_appoinment_pro_our_features_title'.$i,$features_title[$i-1] );
          set_theme_mod( 'vw_appoinment_pro_our_features_box_bg_color'.$i,$boxbgColor[$i-1] );
          set_theme_mod( 'vw_appoinment_pro_our_features_icon_bg_color'.$i,$iconbgColor[$i-1] );
          set_theme_mod( 'vw_appoinment_pro_our_features_hover_icon_color'.$i,$iconhoverColor[$i-1] );
          set_theme_mod( 'vw_appoinment_pro_our_features_hover_icon_bgcolor'.$i,$iconhoverbgColor[$i-1] );
          set_theme_mod( 'vw_appoinment_pro_our_features_icon'.$i, get_template_directory_uri().'/assets/images/features/features'.$i.'.png' );
          set_theme_mod( 'vw_appoinment_pro_our_features_box_icon'.$i, 'fas fa-chevron-right' );
        }
        // ----------- About Us -----------

        set_theme_mod( 'vw_appoinment_pro_about_section_image',get_template_directory_uri().'/assets/images/about/about-img.png' );
        set_theme_mod('vw_appoinment_pro_about_us_small_heading','ABOUT US');
        set_theme_mod('vw_appoinment_pro_about_us_heading','WELCOME TO THE HEALTH CARE');
        set_theme_mod('vw_appoinment_pro_about_us_text','Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ego vadam ad diversorum peregrinorum in mane ientaculum.Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita.');
        set_theme_mod('vw_appoinment_pro_about_us_btntext','VIEW MORE ABOUT US');
        set_theme_mod('vw_appoinment_pro_about_us_btnurl','#');
         // ----------- Home Contact ----------
        set_theme_mod( 'vw_appoinment_pro_an_appointment_heading', 'MAKE AN APPOINTMENT' );
        set_theme_mod( 'vw_appoinment_pro_an_appointment_contact_shortcode', '[ea_bootstrap scroll_off="true" layout_cols="2"]' );
        // ------------- Our Services -----------

        set_theme_mod('vw_appoinment_pro_our_services_small_heading','SERVICES');
        set_theme_mod( 'vw_appoinment_pro_our_services_main_heading', 'OUR WORKING AREA');
        set_theme_mod( 'vw_appoinment_pro_our_services_button_text', 'VIEW ALL SERVICES');
        set_theme_mod( 'vw_appoinment_pro_working_area_title', 'CARDIOLOGY DEP');
        set_theme_mod( 'vw_appoinment_pro_working_area_text', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli , quotiens ego vadam ad contractus.');
        set_theme_mod( 'vw_appoinment_pro_working_area_box_number', 6 );
        $area_title=array('Stress Management','Medical Consulting','Anxiety','Relationship','Prepare For Surgery','See Our Locations');
        for($i=1;$i<=6;$i++){
          set_theme_mod( 'vw_appoinment_pro_working_area_box_title'.$i,$area_title[$i-1]);
        }
        set_theme_mod( 'vw_appoinment_pro_working_area_box_button_text','APPOINTMENT NOW');
        set_theme_mod( 'vw_appoinment_pro_our_services_number', 6 );
        $ServiceColor=array(' #71c1d3','#fa885c','#1cc7a4','#ff6c78','#ba83e0','#7c89eb');
        for($i=1;$i<=6;$i++){

          set_theme_mod( 'vw_appoinment_pro_our_service_box_bg_color'.$i,$ServiceColor[$i-1]);

          $vwtitle = 'Services'.$i;
          $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio';

          // Create post object
          $my_post = array(
           'post_title'    => wp_strip_all_tags( $vwtitle ),
           'post_content'  => $content,
           'post_status'   => 'publish',
           'post_type'     => 'services',   
          );

           // Insert the post into the database
          $vwpost_id = wp_insert_post( $my_post );
          $image_url = get_template_directory_uri().'/assets/images/services/service'.$i.'.png';

          $image_name= 'case'.$i.'.png';
          $upload_dir       = wp_upload_dir(); 
          // Set upload folder
          $image_data       = file_get_contents($image_url); 
          // Get image data
          $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); 
          // Generate unique name
          $filename= basename( $unique_file_name ); 
          // Create image file name
          // Check folder permission and define file location
          if( wp_mkdir_p( $upload_dir['path'] ) ) {
             $file = $upload_dir['path'] . '/' . $filename;
          } else {
             $file = $upload_dir['basedir'] . '/' . $filename;
          }
          // Create the image  file on the server
          file_put_contents( $file, $image_data );
          // Check image file type
          $wp_filetype = wp_check_filetype( $filename, null );
          // Set attachment data
          $attachment = array(
           'post_mime_type' => $wp_filetype['type'],
           'post_title'     => sanitize_file_name( $filename ),
           'post_content'   => '',
           'post_type'     => 'services',
           'post_status'    => 'inherit'
          );

          // Create the attachment
          $attach_id = wp_insert_attachment( $attachment, $file, $vwpost_id );
          // Include image.php
          require_once(ABSPATH . 'wp-admin/includes/image.php');
          // Define attachment metadata
          $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
          // Assign metadata to attachment
           wp_update_attachment_metadata( $attach_id, $attach_data );
          // And finally assign featured image to post
          set_post_thumbnail( $vwpost_id, $attach_id );

          set_theme_mod('vw_appoinment_pro_our_services_button_title','More Info');
        }
        // ----------- Gallery Section --------
        set_theme_mod( 'vw_appoinment_pro_gallery_small_heading', 'WORK PHOTO' );
        set_theme_mod( 'vw_appoinment_pro_gallery_main_heading', 'APPOINTMENT GALLERY' );
        set_theme_mod( 'vw_appoinment_pro_gallery_shortcode', 'Add Shortcode Here' );
         // ------------ Our Team --------------
        set_theme_mod( 'vw_appoinment_pro_our_team_small_heading', 'OUR TEAM' );
        set_theme_mod( 'vw_appoinment_pro_our_team_main_heading', 'STAFF MEMBER' ); 
        set_theme_mod( 'vw_appoinment_pro_our_team_button_text', 'VIEW ALL TEAM' );
        set_theme_mod( 'vw_appoinment_pro_our_team_button_url', '#' );
        set_theme_mod( 'vw_appoinment_pro_our_team_number', 4);
        for($i=1;$i<=4;$i++)
        {
          
          $vwtitle = 'NAME TITLE'.$i;
          $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio';

          // Create post object
          $my_post = array(
           'post_title'    => wp_strip_all_tags( $vwtitle ),
           'post_content'  => $content,
           'post_status'   => 'publish',
           'post_type'     => 'team',   
          );

          // Insert the post into the database
          $vwpost_id = wp_insert_post( $my_post );

          update_post_meta( $vwpost_id,'meta-designation','Eco-Founder');
          update_post_meta( $vwpost_id,'meta-team-phone','+1234567890');
          update_post_meta( $vwpost_id,'meta-team-email','example@gmail.com');
          update_post_meta( $vwpost_id,'meta-tfacebookurl','https://www.facebook.com');
          update_post_meta( $vwpost_id,'meta-tlinkdenurl','https://www.linkedin.com');
          update_post_meta( $vwpost_id,'meta-ttwitterurl','https://www.twitter.com');
          update_post_meta( $vwpost_id,'meta-tinstagram','https://www.instagram.com');
          $image_url = get_template_directory_uri().'/assets/images/team/team'.$i.'.png';
          $image_name= 'team'.$i.'.png';
          $upload_dir = wp_upload_dir(); 
          // Set upload folder
          $image_data = file_get_contents($image_url); 
          // Get image data
          $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); 
          // Generate unique name
          $filename= basename( $unique_file_name ); 
          // Create image file name
          // Check folder permission and define file location
          if( wp_mkdir_p( $upload_dir['path'] ) ) {
             $file = $upload_dir['path'] . '/' . $filename;
          } else {
             $file = $upload_dir['basedir'] . '/' . $filename;
          }
          // Create the image  file on the server
          file_put_contents( $file, $image_data );
          // Check image file type
          $wp_filetype = wp_check_filetype( $filename, null );
          // Set attachment data
          $attachment = array(
           'post_mime_type' => $wp_filetype['type'],
           'post_title'     => sanitize_file_name( $filename ),
           'post_content'   => '',
           'post_type'     => 'team',
           'post_status'    => 'inherit'
          );

          // Create the attachment
          $attach_id = wp_insert_attachment( $attachment, $file, $vwpost_id );
          // Include image.php
          require_once(ABSPATH . 'wp-admin/includes/image.php');
          // Define attachment metadata
          $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
          // Assign metadata to attachment
           wp_update_attachment_metadata( $attach_id, $attach_data );
          // And finally assign featured image to post
          set_post_thumbnail( $vwpost_id, $attach_id );
        }
          // ---------- Video Section -----------
        set_theme_mod( 'vw_appoinment_pro_video_sec_bg_image',get_template_directory_uri().'/assets/images/video_secbg.png' );
        set_theme_mod( 'vw_appoinment_pro_video_icon_circle_bgcolor', '#ff6c78' );
        set_theme_mod( 'vw_appoinment_pro_video_sec_video_hour_text', '24' );
        set_theme_mod( 'vw_appoinment_pro_video_sec_video_phone_text', '+800-123-4567' );
        set_theme_mod('vw_appoinment_pro_video_sec_video_heading','NEEDS AN EMERGENCY HELP ? CALL US !');
        set_theme_mod( 'vw_appoinment_pro_video_sec_video_play_icon', 'fas fa-play' );
        set_theme_mod( 'vw_appoinment_pro_video_sec_video_url', 'https://www.youtube.com/embed/ZzMM_H4Guaw' );
       // --------- Our Records ----------

        set_theme_mod( 'vw_appoinment_pro_our_records_number', 4);
        $record_no=array('1203','09','11','52');
        $record_title1=array('Happy Client','Our Branches','Awards','Team Member');
        $record_box=array('#71c1d3','#fa885c','#1cc7a4','#ff6c78');
        $record_icon=array('#37a1b9','#eb7142','#16af90','#f4515e');
        for($i=1;$i<=4;$i++)
        {
          set_theme_mod( 'vw_appoinment_pro_our_records_no'.$i, $record_no[$i-1] ); 
          set_theme_mod( 'vw_appoinment_pro_our_records_box_bg_color'.$i, $record_box[$i-1] ); 
          set_theme_mod( 'vw_appoinment_pro_our_records_iconbg_color'.$i, $record_icon[$i-1] ); 
          set_theme_mod( 'vw_appoinment_pro_our_records_icon'.$i, get_template_directory_uri().'/assets/images/records/record'.$i.'.png');
          set_theme_mod( 'vw_appoinment_pro_our_records_title_one'.$i, $record_title1[$i-1] );
        }
         // ----------- Why Choose Us -----------

        set_theme_mod( 'vw_appoinment_pro_why_choose_us_right_sec_image',get_template_directory_uri().'/assets/images/why-choose-us/why-choose-us.png' );
        set_theme_mod('vw_appoinment_pro_why_choose_us_image_alt_text','why choose image');
        set_theme_mod('vw_appoinment_pro_why_choose_us_main_heading','WHY CHOOSE US');
        set_theme_mod('vw_appoinment_pro_why_choose_us_text','Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita nam exempli gratia.');
        set_theme_mod('vw_appoinment_pro_why_choose_us_text_two','Quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi.');
        $why_choose_title=array('24 HOUR SERVICES','ONLINE HELP','ONLINE PAYMENT');
        set_theme_mod('vw_appoinment_pro_why_choose_us_box_number',3);
        
        for($i=1;$i<=3;$i++)
          {
            set_theme_mod( 'vw_appoinment_pro_why_choose_us_feature_icon'.$i,get_template_directory_uri().'/assets/images/why-choose-us/why-choose'.$i.'.png' );
            set_theme_mod( 'vw_appoinment_pro_why_choose_us_feature_title'.$i,$why_choose_title[$i-1]);
          }
           // -------------- Testimonial -----------
        set_theme_mod( 'vw_appoinment_pro_testimonial_bgimage', get_template_directory_uri().'/assets/images/testimonial/client-bg.png');     
        set_theme_mod( 'vw_appoinment_pro_our_testimonial_image', get_template_directory_uri().'/assets/images/testimonial/secimgtest.png');     
        set_theme_mod( 'vw_appoinment_pro_testimonial_number', 3 );
        $client_name=array('JONATHAN SMITH','SON FOUNDER','SUN WHATSAN');
        $client_desig=array('Co-Founder','PHP Developer','Front End Developer');
        for($i=1;$i<=3;$i++)
        {
          
          $vwtitle = $client_name[$i-1];
          $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus.';

          // Create post object
          $my_post = array(
           'post_title'    => wp_strip_all_tags( $vwtitle ),
           'post_content'  => $content,
           'post_status'   => 'publish',
           'post_type'     => 'testimonials',   
          );

          // Insert the post into the database
          $vwpost_id = wp_insert_post( $my_post );

          update_post_meta( $vwpost_id,'vw_appoinment_pro_posttype_testimonial_desigstory', $client_desig[$i-1]);
          
          $image_url = get_template_directory_uri().'/assets/images/testimonial/client'.$i.'.png';

          $image_name= 'client'.$i.'.png';
          $upload_dir = wp_upload_dir(); 
          // Set upload folder
          $image_data = file_get_contents($image_url); 
          // Get image data
          $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); 
          // Generate unique name
          $filename= basename( $unique_file_name ); 
          // Create image file name
          // Check folder permission and define file location
          if( wp_mkdir_p( $upload_dir['path'] ) ) {
             $file = $upload_dir['path'] . '/' . $filename;
          } else {
             $file = $upload_dir['basedir'] . '/' . $filename;
          }
          // Create the image  file on the server
          file_put_contents( $file, $image_data );
          // Check image file type
          $wp_filetype = wp_check_filetype( $filename, null );
          // Set attachment data
          $attachment = array(
           'post_mime_type' => $wp_filetype['type'],
           'post_title'     => sanitize_file_name( $filename ),
           'post_content'   => '',
           'post_type'     => 'testimonials',
           'post_status'    => 'inherit'
          );

          // Create the attachment
          $attach_id = wp_insert_attachment( $attachment, $file, $vwpost_id );
          // Include image.php
          require_once(ABSPATH . 'wp-admin/includes/image.php');
          // Define attachment metadata
          $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
          // Assign metadata to attachment
           wp_update_attachment_metadata( $attach_id, $attach_data );
          // And finally assign featured image to post
          set_post_thumbnail( $vwpost_id, $attach_id );
          set_theme_mod( 'vw_appoinment_pro_our_testimonial_heading_icon','fas fa-quote-left');
        }
        // ----------- Our Blog ------------

        set_theme_mod( 'vw_appoinment_pro_our_blog_small_heading', 'OUR BLOG' );
        set_theme_mod( 'vw_appoinment_pro_our_blog_main_heading', 'RECENT POST' ); 
        set_theme_mod( 'vw_appoinment_pro_our_blog_number', 4 );
        set_theme_mod( 'vw_appoinment_pro_our_blog_button_text', 'VIEW ALL BLOG' );
        for($i=1;$i<=4;$i++){
          $vwtitle = 'BLOG TITLE'.$i;
          $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi.';

          // Create post object
          $my_post = array(
           'post_title'    => wp_strip_all_tags( $vwtitle ),
           'post_content'  => $content,
           'post_status'   => 'publish',
           'post_type'     => 'post',   
          );

          // Insert the post into the database
          $vwpost_id = wp_insert_post( $my_post );
          $image_url = get_template_directory_uri().'/assets/images/blogs/news'.$i.'.png';
          $image_name= 'news'.$i.'.png';
          $upload_dir       = wp_upload_dir(); 
          // Set upload folder
          $image_data       = file_get_contents($image_url); 
          // Get image data
          $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); 
          // Generate unique name
          $filename= basename( $unique_file_name ); 
          // Create image file name
          // Check folder permission and define file location
          if( wp_mkdir_p( $upload_dir['path'] ) ) {
             $file = $upload_dir['path'] . '/' . $filename;
          } else {
             $file = $upload_dir['basedir'] . '/' . $filename;
          }
          // Create the image  file on the server
          file_put_contents( $file, $image_data );
          // Check image file type
          $wp_filetype = wp_check_filetype( $filename, null );
          // Set attachment data
          $attachment = array(
           'post_mime_type' => $wp_filetype['type'],
           'post_title'     => sanitize_file_name( $filename ),
           'post_content'   => '',
           'post_type'     => 'post',
           'post_status'    => 'inherit'
          );

          // Create the attachment
          $attach_id = wp_insert_attachment( $attachment, $file, $vwpost_id );
          // Include image.php
          require_once(ABSPATH . 'wp-admin/includes/image.php');
          // Define attachment metadata
          $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
          // Assign metadata to attachment
           wp_update_attachment_metadata( $attach_id, $attach_data );
          // And finally assign featured image to post
          set_post_thumbnail( $vwpost_id, $attach_id );
        }
        // ---------- Our Partners ---------

        set_theme_mod( 'vw_appoinment_pro_our_partners_number', 6 );
        for($i=1;$i<=6;$i++){
          set_theme_mod( 'vw_appoinment_pro_our_partners_image'.$i,get_template_directory_uri().'/assets/images/partners/partners'.$i.'.png' );
        }
        // ----------  Contact Page  ------------

        set_theme_mod( 'vw_appoinment_pro_contactpage_form_title', 'Say Hello' ); 
        set_theme_mod( 'vw_appoinment_pro_contactpage_form_text', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus' );
        //Longitude
         set_theme_mod( 'vw_appoinment_pro_address_longitude', '-80.053361' ); 
        //Latitude
         set_theme_mod( 'vw_appoinment_pro_address_latitude', '26.704241' ); 
        //Email Title text
         set_theme_mod( 'vw_appoinment_pro_contactpage_email_title', 'Email ' ); 
        //Email ID
         set_theme_mod( 'vw_appoinment_pro_contactpage_email_one', 'abcxuz@gmail.com' ); 
        set_theme_mod( 'vw_appoinment_pro_contactpage_email_two', 'abcxuz@gmail.com' ); 
        //Address Title text
         set_theme_mod( 'vw_appoinment_pro_address_title', 'Address' ); 
        //Address
         set_theme_mod( 'vw_appoinment_pro_address', '123 6th eight avenue FL 32904 , 455 Martinson, Los Angeles' ); 
        //Phone Title text
         set_theme_mod( 'vw_appoinment_pro_contactpage_phone_title', 'Phone' ); 
        //Phone No.
        set_theme_mod( 'vw_appoinment_pro_contactpage_phone_one', '123-456-7890' );
         set_theme_mod( 'vw_appoinment_pro_contactpage_phone_two', '123-456-7890' );
      
        //footer text
         set_theme_mod( 'vw_appoinment_pro_footer_copy_year', '© Copyright 2019 ' ); 
         set_theme_mod( 'vw_appoinment_pro_footer_copy_themename', ' Appointment Wordpress Theme. ' ); 
         set_theme_mod( 'vw_appoinment_pro_footer_social_icons_shortcode', '[vwsmp-social-media color="#636363" hover_color="#636363" bg_color="transparent" bg_hover_color= "transparent" font_size="14" border_radius="0" left_margin="7" right_margin="12" top_margin="0" bottom_margin="0" height="15" width="15"]' );
         //404 page text
        set_theme_mod( 'vw_appoinment_pro_404_page_title', '404 Not Found' ); 
        set_theme_mod( 'vw_appoinment_pro_404_page_content', 'Looks like you have taken a wrong turn &hellip; Dont worry &hellip; it happens to the best of us.' ); 
        set_theme_mod( 'vw_appoinment_pro_404_page_button_text', 'Back to Home Page' ); 
        //post setting
        set_theme_mod( 'vw_appoinment_pro_related_posts_title', 'Related Posts' );
        set_theme_mod( 'vw_appoinment_pro_related_post_count', 3 );
        set_theme_mod( 'vw_appoinment_pro_blog_category_prev_title', 'Previous' );
        set_theme_mod( 'vw_appoinment_pro_blog_category_next_title', 'Next' );
      }
    ?>
    <ul>
		<li>
			<hr>
			<span class="dashicons dashicons-format-aside"></span><?php echo esc_html('Click on the below content to get demo content installed.','vw-appointment-pro'); ?>
			<br><small><b><?php echo esc_html('Please take backup if your website is already live with data.This importer will fill the VW Appointment Pro new customizer values.','vw-appointment-pro'); ?></b></small>
			<br><br>
	        <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=vw_storefront_pro_guide" method="POST" onsubmit="return validate(this);">
	            <input type="submit" name="submit" value="<?php echo esc_html('Run Importer','vw-appointment-pro'); ?>" class="button button-primary button-large">
	        </form>
			<script type="text/javascript">
				function validate(valid) {
    				 if(confirm("Do you really want to do this?")){
					    document.forms[0].submit();
					}
				    else {
					    return false;
				    }
				}
			</script>
			<hr>
		</li>
	</ul>
</div>