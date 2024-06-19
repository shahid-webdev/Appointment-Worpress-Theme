/**
 * Exoplanet Custom JS
 *
 * @package Exoplanet
 *
 * Distributed under the MIT license - http://opensource.org/licenses/MIT
 */
 jQuery(function($){
    jQuery('.search-icon > i').click(function(){
        jQuery(".serach_outer").slideDown(700);  
    });

    jQuery('.closepop i').click(function(){
        jQuery(".serach_outer").slideUp(700);
    });
});
 jQuery(function() {
  //----- OPEN
  jQuery('[data-popup-open]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-open');
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

    e.preventDefault();
  });

  //----- CLOSE
  jQuery('[data-popup-close]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-close');
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

    e.preventDefault();
  });
});
jQuery(function($){
  document.getElementById("open_nav").addEventListener("click", open);
        function open() {
            document.getElementById("sidebar1").style.width = menu_width + "px";
            document.getElementById("sidebar1").style.display = "block";
            document.getElementById("sidebar1").style.transition = "transform 0.5s";
            document.getElementById("sidebar1").style.visibility = "visible";
            document.getElementById("sidebar1").style.position = "fixed";
            document.getElementById("menu_overlay").style.display = "block";
    }
    document.getElementById("close_nav").addEventListener("click", close);
        function close() {
             document.getElementById("sidebar1").style.width = "0";
            document.getElementById("sidebar1").style.display = "none";
            document.getElementById("menu_overlay").style.display = "none";
    }
});
jQuery(document).ready(function(){
    jQuery('#menu_overlay').click(function(){
        document.getElementById("menu_overlay").style.display = "none";
        document.getElementById("sidebar1").style.display = "none";
        return false;
    });
});
var menu_width="";
jQuery('document').ready(function(){
    var feature_loop="";
    var record_loop="";
    var team_loop="";
    var portfolio_loop="";
    var products_loop="";
    var testi_loop="";
    var blog_loop="";
    var partner_loop="";

    if(jQuery("#feature-loop").text()=='true')
    {
      feature_loop=true;
    }else{
      feature_loop=false;
    }
    if(jQuery("#team-loop").text()=='true')
    {
      team_loop=true;
    }else{
      team_loop=false;
    }
    
    if(jQuery("#testimonial-loop").text()=='true')
    {
      testi_loop=true;
    }else{
      testi_loop=false;
    }

    if(jQuery("#blog-loop").text()=='true')
    {
      blog_loop=true;
    }else{
      blog_loop=false;
    }

    if(jQuery("#partners-loop").text()=='true')
    {
      partner_loop=true;
    }else{
      partner_loop=false;
    }

    if(jQuery("#records-loop").text()=='true')
    {
      record_loop=true;
    }else{
      record_loop=false;
    }

      var owl = jQuery('#our-features .owl-carousel');
      owl.owlCarousel({
      margin: 25,
      nav:false,
      autoplay : false,
      lazyLoad: true,
      autoplayTimeout: 5000,
      loop: feature_loop,
      dots: true,
      autoplayHoverPause:true,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        500: {
          items: 1
        },
        600: {
          items: 2
        },
        767: {
          items: 3
        },
        1000: {
          items: 4
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });
    var owl = jQuery('#our-team .owl-carousel');
      owl.owlCarousel({
      margin: 20,
      nav:false,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 5000,
      loop: team_loop,
      stagePadding: 10,
      dots: true,
      autoplayHoverPause:true,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        450: {
          items: 2
        },
        600: {
          items: 2
        },
        700: {
          items: 3
        },
        900: {
          items: 3
        },
        1000: {
          items: 4
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });
      var owl = jQuery('#our-partners .owl-carousel');
      owl.owlCarousel({
      margin: 20,
      nav:false,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 5000,
      loop: partner_loop,
      dots: false,
      autoplayHoverPause:true,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        500: {
          items: 2
        },
        600: {
          items: 2
        },
        700: {
          items: 3
        },
        900: {
          items: 5
        },
        1000: {
          items: 6
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });
   
    

    var owl = jQuery('#testimonial .owl-carousel');
      owl.owlCarousel({
      margin: 20,
      nav:false,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 5000,
      loop: testi_loop,
      dots: true,
      autoplayHoverPause:true,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        500: {
          items: 1
        },
        600: {
          items: 1
        },
        700: {
          items: 1
        },
        900: {
          items: 1
        },
        1000: {
          items: 1
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });

    var owl = jQuery('#our-blog .owl-carousel');
      owl.owlCarousel({
      margin: 25,
      nav: false,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 5000,
      loop: blog_loop,
      dots: true,
      autoplayHoverPause:true,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        576: {
          items: 2
        },
        650: {
          items: 2
        },
        768: {
          items: 2
        },
        1000: {
          items: 4
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    }); 
    var owl = jQuery('#our-records .owl-carousel');
      owl.owlCarousel({
      margin: 20,
      nav:false,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 5000,
      loop: record_loop,
      dots: true,
      autoplayHoverPause:true,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        320: {
          items: 1
        },
        400: {
          items: 2
        },
        600: {
          items: 2
        },
        800: {
          items: 3
        },
        900: {
          items: 3
        },
        1000: {
          items: 4
        },
        1100: {
          items: 4
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });



    new WOW().init();

});
var interval=null;

  jQuery('document').ready(function(){   
  jQuery('#our-records').appear();

  jQuery('#portfolio .work-tabs ul li a').click(function(){
  
  jQuery('#portfolio .work-tabs ul li a').removeClass('active');
  });

   jQuery('#myBtn').click(function()
  {
    jQuery("#myNewModal").css("display","block");
  });
  jQuery('.close-one').click(function()
  {
    jQuery("#myNewModal").css("display","none");
  });

   // Accordian
  jQuery(".collapse").on('show.bs.collapse', function(){
    jQuery(this).parent().find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
   
  }).on('hide.bs.collapse', function(){
    jQuery(this).parent().find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
   
  });



  // ------ Counter -------
  var count_no="yes";
  jQuery('#our-records').on('appear',function(){
    if(count_no=="yes")
    {
      count_no="no";
      jQuery('.count_no').each(function () {
        jQuery(this).prop('Counter',0).animate({
            Counter: jQuery(this).text()
        }, {
            duration: 8000,
            easing: 'swing',
            step: function (now) {
               jQuery(this).text(Math.ceil(now));
            }
        });
      });
    }
  });     


  // ------------ Scroll Top ---------------

  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
      jQuery('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
      jQuery('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
  });
  jQuery('#return-to-top').click(function() {      // When arrow is clicked
    jQuery('body,html').animate({
      scrollTop : 0                       // Scroll to top of body
    }, 2000);
  });

  // ------------ Sticky Navbar -------------------

  var stickyon=jQuery('#sticky-onoff').text().trim();
  var a1=stickyon.length;
  window.onscroll = function() {
    if(a1==3)
    { 
      myScrollNav();
    }
  }

  var navbar = document.getElementById("vw-sticky-menu");
  var sticky = jQuery( navbar ).offset().top;
  function myScrollNav() {
    if (window.pageYOffset > sticky) {
      //alert(window.pageYOffset);
      navbar.classList.add("sticky");
      navbar.classList.add("stickynavbar");
    } else {
      navbar.classList.remove("sticky");
      navbar.classList.remove("stickynavbar");
    }
  }
  menu_width=parseInt(jQuery("#menu-width").text().trim());

  // --------- Cart Icon ----------
  jQuery('#newsletter .newsletter-shortcode input[type="submit"]').addClass('hvr-shutter-in-horizontal');
  jQuery('.services-short').parent('.middle-content').addClass('services_shortcode_page');
  jQuery('.our-portfolio-shortcode').parent('.middle-content').addClass('project_shortcode_page');
});

// ------------ Video Popup ----------
jQuery(document).ready(function() {
  jQuery('.search-toggle').on('click', function(e) {
  var selector = jQuery('.serach-page');

  jQuery(selector).toggleClass('show').find('.search-field').focus();
  jQuery(this).toggleClass('active');
}); 

  });

 jQuery('document').ready(function(){
   jQuery('button#priceBtn').click(function(my) {
     var totat_events = jQuery('button#priceBtn').attr("aria-pressed");

     if(jQuery('button#priceBtn').attr("aria-pressed") == "true") {
      jQuery("#pricingtab1").css("display", "block");
      jQuery("#pricingtab2").css("display", "none");
     } else {
      jQuery("#pricingtab1").css("display", "none");
      jQuery("#pricingtab2").css("display", "block");

     }
   })
});

/*
  
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  
*/ 
jQuery('document').ready(function(){ jQuery('#testimonial .team-tabs .nav-item a').click(function() { jQuery('#testimonial .team-tabs .nav-item a').removeClass('active'); }); jQuery('#testimonial .menus-dec ul li a').click(function() { jQuery('#testimonial .menus-dec ul li a').removeClass('active'); }); });

function showDiv(sr) {
   var x = document.getElementById('blog-share-icon-'+sr);
 console.log(x.style.display);
    if (x.style.display === "") {
      x.style.display = "block";
    }
   else if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

 jQuery('document').ready(function(){

 (function ($){
    $.fn.bekeyProgressbar = function(options){

        options = $.extend({
          animate     : true,
          animateText : true
        }, options);

        var $this = $(this);
      
        var $progressBar = $this;
        var $progressCount = $progressBar.find('.ProgressBar-percentage--count');
        var $circle = $progressBar.find('.ProgressBar-circle');
        var percentageProgress = $progressBar.attr('data-progress');
        var percentageRemaining = (100 - percentageProgress);
        var percentageText = $progressCount.parent().attr('data-progress');
      
        //Calcule la circonférence du cercle
        var radius = $circle.attr('r');
        var diameter = radius * 2;
        var circumference = Math.round(Math.PI * diameter);

        //Calcule le pourcentage d'avancement
        var percentage =  circumference * percentageRemaining / 100;

        $circle.css({
          'stroke-dasharray' : circumference,
          'stroke-dashoffset' : percentage
        })
        
        //Animation de la barre de progression
        if(options.animate === true){
          $circle.css({
            'stroke-dashoffset' : circumference
          }).animate({
            'stroke-dashoffset' : percentage
          }, 6000 )
        }
        
        //Animation du texte (pourcentage)
        if(options.animateText == true){
 
          $({ Counter: 0 }).animate(
            { Counter: percentageText },
            { duration: 6000,
             step: function () {
               $progressCount.text( Math.ceil(this.Counter) + '%');
             }
            });

        }else{
          $progressCount.text( percentageText + '%');
        }
      
    };

})(jQuery);
var count_no="yes";
  jQuery('#progress_tips').on('appear',function(){
    if(count_no=="yes")
    {
      count_no="no";
   jQuery('.ProgressBar--animateAll').each(function(ind,elm){
         jQuery(elm).bekeyProgressbar();
      });
   }
   }); 
jQuery('#progress_tips').appear();
    jQuery(window).load(function() {
    jQuery("#preloader_status").fadeOut();
    jQuery("#custom_preloader").delay(1000).fadeOut("slow");
  })
});

