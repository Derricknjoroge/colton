 (function ($) {
	"use strict";
	// --------------------------------------------------
	// revolution slider
	// --------------------------------------------------
	 
	 
	function revolutionSliderActiver () {
			if($('.main-slider .tp-banner').length){

		jQuery('.main-slider .tp-banner').show().revolution({
		  delay:10000,
		  startwidth:1200,
		  startheight:725,
		  hideThumbs:600,
	
		  thumbWidth:80,
		  thumbHeight:50,
		  thumbAmount:5,
	
		  navigationType:"bullet",
		  navigationArrows:"0",
		  navigationStyle:"preview4",
	
		  touchenabled:"on",
		  onHoverStop:"off",
	
		  swipe_velocity: 0.7,
		  swipe_min_touches: 1,
		  swipe_max_touches: 1,
		  drag_block_vertical: false,
	
		  parallax:"mouse",
		  parallaxBgFreeze:"on",
		  parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
	
		  keyboardNavigation:"off",
	
		  navigationHAlign:"center",
		  navigationVAlign:"bottom",
		  navigationHOffset:0,
		  navigationVOffset:20,
	
		  soloArrowLeftHalign:"left",
		  soloArrowLeftValign:"center",
		  soloArrowLeftHOffset:20,
		  soloArrowLeftVOffset:0,
	
		  soloArrowRightHalign:"right",
		  soloArrowRightValign:"center",
		  soloArrowRightHOffset:20,
		  soloArrowRightVOffset:0,
	
		  shadow:0,
		  fullWidth:"on",
		  fullScreen:"off",
	
		  spinner:"spinner4",
	
		  stopLoop:"off",
		  stopAfterLoops:-1,
		  stopAtSlide:-1,
	
		  shuffle:"off",
	
		  autoHeight:"off",
		  forceFullWidth:"on",
	
		  hideThumbsOnMobile:"on",
		  hideNavDelayOnMobile:1500,
		  hideBulletsOnMobile:"on",
		  hideArrowsOnMobile:"on",
		  hideThumbsUnderResolution:0,
	
		  hideSliderAtLimit:0,
		  hideCaptionAtLimit:0,
		  hideAllCaptionAtLilmit:0,
		  startWithSlide:0,
		  videoJsPath:"",
		  fullScreenOffsetContainer: ""
	  });

	}}
	
	 
	 // Set Sticky Header
	  var $sticky = $('.sticky');
	  $(window).scroll(function(){
		var scroll = $(window).scrollTop();
		if (scroll >= 100) $sticky.addClass('fixed');
		else $sticky.removeClass('fixed');
	  });
 
	
	/* ///////////////////////////////////////////////////////////////////// 
	  // 3 - Sidebar menu Controls
	  /////////////////////////////////////////////////////////////////////*/

	  $("#menu-close").on('click', function(e) {
		  e.preventDefault();
		  $("#sidebar-wrapper").toggleClass("active");
	  });

	  // Opens the sidebar menu
	  $("#menu-toggle").on('click', function(e) {
		  e.preventDefault();
		  $("#sidebar-wrapper").toggleClass("active");
	  });
 
  /* ///////////////////////////////////////////////////////////////////// 
  // 4 - Scrolls to the selected menu item on the page
  /////////////////////////////////////////////////////////////////////*/

	  $(function() {
		  $('a[href*=#]:not([href=#])').on('click', function() {
			  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

				  var target = $(this.hash);
				  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				  if (target.length) {
					  $('html,body').stop().animate({
						  scrollTop: target.offset().top - 75
					  }, 1000);
					  return false;
				  }
			  }
		  });
	  });
	// Menu scoll 
	function SmoothMenuScroll () { 
		var anchor = $('.scrollToLink');		
		if(anchor.length){
			anchor.children('a').bind('click', function (event) {
				 
				var target = $(this);
				var anchorHeight= target.height();
				$('html,body').stop().animate({
						  scrollTop: target.offset().top - 75
					  }, 1000);
					  return false; 
			});
		}
	}
	
	//vertical slider 
	function horizenl(){
		$('.bxslider').bxSlider({
	  mode: 'vertical',
	  slideMargin: 5
	});
	
	}
	// Main slider
	
	  $('#slider_part').carousel({
		pause: true,
		interval: 1000000,
		
	  });
	//
	$("#owl-demo-horzental").owlCarousel({
            Horizontal: true, // not working this
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3],
            itemsTablet: [2400,4], //2 items between 600 and 0
            itemsMobile :[1200,4]           
        }); 
		
	// Google Map
	function gMap () {
		if ($('.google-map').length) {
            var map;
            map = new GMaps({
                div: '.google-map',
                scrollwheel: false,
                lat: -37.812802,
                lng: 144.956981
            });
            map.addMarker({
                lat: -37.812802,
                lng: 144.956981,
                title: 'Envato HeadQuarter'
            });  
		};
	} 
	// Sticky header 
	function stickyHeader () {
		if ($('.stricky').length) {
			var strickyScrollPos = '50';
			if($(window).scrollTop() > strickyScrollPos) {
				$('.stricky').addClass('stricky-fixed'); 
			}
			else if($(window).scrollTop() <= strickyScrollPos) {
				$('.stricky').removeClass('stricky-fixed'); 
			}
		};
	}
	// recent product carusal
		 $("#owl-demo").owlCarousel({
	 
		  autoPlay: true, //Set AutoPlay to 3 seconds 
		  navigation : false, 
		  items :3,
		  itemsDesktop : [1199,3],
		  itemsDesktopSmall : [979,3],
		  itemsTablet: [786,3], 
		  itemsTablet: [767,2],  
		  smallmobiel: [480,1], 
		  smallmobiel: [320,1], 
		  
	  });
	 // recent product carusal
		 $("#owl-demo-two").owlCarousel({
		 navigation : true, // Show next and prev buttons
	  // navigationText: ["prev","next"], 
		 navigationText: [
			  "<i class='fa fa-angle-left'></i>",
			  "<i class='fa fa-angle-right'></i>"
			  ],
		  slideSpeed : 300,
		  paginationSpeed : 400,
		  autoPlay: true,  
		  pagination: false,
		  items : 1,
		  itemsDesktop:[1199,1],  
		  itemsDesktopSmall:[979,1],  //As above.
		  itemsTablet:[768,1],    //As above.
		  // itemsTablet:[640,2],   
		  itemsMobile:[479,1],    //As above
		  goToFirst: true,    //Slide to first item if autoPlay reach end
		  goToFirstSpeed:1000  
			  
	  });
	  
	   //recent product carusal
		 $("#owl-demo-brand").owlCarousel({
	 
		  autoPlay: true, //Set AutoPlay to 3 seconds 
		  navigation : false,
		  navigationText : ["prev","next"],
		   pagination: false,
		  items :5,
		  itemsDesktop : [1199,4],
		  itemsDesktopSmall : [979,3], 
		  itemsTablet: [767,2], 
		  widemobiel: [480,1], 
		  smallmobiel: [320,1], 
		  
		  
	  });
	   //recent product carusal
		 $("#owl-demo-brand-two").owlCarousel({
	 
		  autoPlay: true, //Set AutoPlay to 3 seconds 
		  navigation : false,
		  navigationText : ["prev","next"],
		  pagination: false,
		  items :5,
		  itemsDesktop : [1199,4],
		  itemsDesktopSmall : [979,3], 
		  itemsTablet: [767,2], 
		  widemobiel: [480,1], 
		  smallmobiel: [320,1], 
		  
	  });
	//Contact Form Validation
	function contactFormValidation () {
		if($('.contact-form').length){
			$('.contact-form').validate({ // initialize the plugin
				rules: {
					name: {
						required: true
					},
					email: {
						required: true,
						email: true
					},
					message: {
						required: true
					},
					subject: {
						required: true
					}
				},
				submitHandler: function (form) { 
					// sending value with ajax request
					$.post($(form).attr('action'), $(form).serialize(), function (response) {
						$(form).parent('div').append(response);
						$(form).find('input[type="text"]').val('');
						$(form).find('input[type="email"]').val('');
						$(form).find('textarea').val('');
					});
					return false;
				}
			});
		}
	}
	 // Gallery masonary style
	function galleryMasonaryLayout () {
		if ($('.masonary-gallery').length) {
			$('.masonary-gallery').isotope({
				layoutMode:'masonry'
			});
		}
	}
	// Adding hover effect to gallery 
	function galleryHover () {
		// hover effect for masonary gallery
		if ($('.masonary-gallery').length) {
			$('.masonary-gallery .content-wrap').each(function () {
				$(this).addClass('hvr-shutter-in-vertical');
			});
		};
		// hover effect for normal gallery
		if ($('.normal-gallery').length) {
			$('.normal-gallery .content-wrap').each(function () {
				$(this).addClass('hvr-rectangle-out');
				$(this).parent().parent().addClass('mix');
			});
		};
			
	} 
	
	 // gallery fancybox activator 
    function GalleryFancyboxActivator () {
    	var galleryFcb = $('.fancybox');
    	if(galleryFcb.length){
    		galleryFcb.fancybox();
    	}
    }
	// gallery filter activation
    function GalleryFilter () {

    	if ($('#image-gallery-mix').length) {
    		$('.gallery-filter').find('li').each(function () {
    			$(this).addClass('filter');
    		});
    		$('#image-gallery-mix').mixItUp();
    	};
    	if($('.gallery-filter.masonary').length){
			$('.gallery-filter.masonary span').on('click', function(){
				var selector = $(this).parent().attr('data-filter');
				$('.gallery-filter.masonary span').parent().removeClass('active');
				$(this).parent().addClass('active');
				$('#image-gallery-isotope').isotope({ filter: selector });
				return false;
			});
    	}
    } 
	
	function timeline(){
		var container = document.querySelector('.time_line_area');
		var msnry = new Masonry(container, {
			itemSelector: '.single_time_line',
			columnWidth:150,
			 
		});
	}
	
	// 16. handlePreloader
	function preloaderbox() {
		if($('.preloaderbox').length){
			$('.preloaderbox').fadeOut();
		}
	}
	
	function CounterNumberChanger () {
		var timer = $('.timer');
		if(timer.length) {
			timer.appear(function () {
				timer.countTo();
			})
		}

	}
	// Dom Ready Function
	$(document).on('ready', function () {
		// add your functions 
		galleryMasonaryLayout();  
		horizenl(); 
		gMap(); 
		revolutionSliderActiver();  
		timeline(); 
		GalleryFancyboxActivator();
		galleryHover();
		GalleryFilter();
		contactFormValidation();
	});
	$(window).on('load', function () {
		SmoothMenuScroll();
		preloaderbox();
		CounterNumberChanger(); 
	});
	$(window).on('scroll', function () { 
		stickyHeader();
	});
})(jQuery);