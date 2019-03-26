// JavaScript Document
jQuery(document).ready(function($) {
			
	"use strict";

	$(window).on('load', function() {	
		
		//parallax scripts
         $('section.vc_parallax').each(function(){
            var opacity = $(this).data('opacity');
            var size = $(this).data('size');
            var position = $(this).data('position');
            var repeat = $(this).data('repeat');
            var attachment = $(this).data('attachment');
            var width = $(this).data('width');
            $(this).find('.vc_parallax-inner').css({
                opacity: opacity,
                backgroundSize: size,
                backgroundPosition: position,
                backgroundRepeat: repeat,
                backgroundAttachment: attachment,
                width: width
            });
        });

        	
        genemy_setup_navwidth();				
		/*----------------------------------------------------*/
		/*	Preloader
		/*----------------------------------------------------*/
		
		$("#loader").delay(100).fadeOut();
		$("#loader-wrapper").delay(100).fadeOut("fast");
				
		$(window).stellar({});

		
	});
	

	$(window).on('scroll', function() {	
		
								
		/*----------------------------------------------------*/
		/*	Navigtion Menu Scroll
		/*----------------------------------------------------*/	
		
		var b = $(window).scrollTop();
		
		if( b > 72 ){		
			$(".navbar").addClass("scroll");
		} else {
			$(".navbar").removeClass("scroll");
		}
		genemy_setup_navwidth();				

	});

	function genemy_setup_navwidth(){
		$('.navbar-nav > .nav-item').addClass('nl-simple');
		if( $(window).width() < 992 ) return false;

		var navbarWidth = $('.navbar-nav').innerWidth();
		var navItemWidth = 0;
		var count = 1;
		$('.navbar-nav > .nav-item').each(function(){
			navItemWidth += parseInt($(this).outerWidth(true));	
					
			if(navItemWidth > navbarWidth){
				$(this).addClass('nav-item-overflowed');
				var more =   count-3;						 
				//$('.navbar-nav > li:gt('+more+')').wrapAll('<li class="dropdown nav-item menu-item more" />').wrapAll('<div role="menu" class="dropdown-menu"><ul></ul></div>');
				//$('.navbar-nav > .nav-item.more').append('<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">...</a>');
				return false;

			}
			count++;
		});		
	}
	

	$('table').addClass('table');
	$('blockquote').addClass('blockquote');
	$('.sidebar-div select, .footer-widget select, .orderby').selectize({
		create: false,
	});

	$('.hero-class').each(function(){
		var section = $(this).closest('section');
		var sectionID = $(this).data('section_id');
		var sectionClass = $(this).data('class');

		if(section.hasClass('vc_section')){
			if(!section.attr('id')){
				section.attr( 'id', sectionID );
			}	

			section.addClass( sectionClass ).removeClass('wide-60');
		}else{
			$(this).closest('.vc_row').attr( 'id', sectionID );
			$(this).closest('.vc_row').addClass( sectionClass );
		}
	});

	$('.vc_row').each(function(){
    	 if($(this).children('.wpb_column').length > 1){
    	 	$(this).addClass('mul-cols');
	    	$(this).children('.wpb_column:last-child').addClass('last-column');
	    }
    });


		/*----------------------------------------------------*/
		/*	Mobile Menu Toggle
		/*----------------------------------------------------*/

		if ( $(window).width() < 769 ) {
			$('.navbar-nav li.nav-item.nl-simple').on('click', function() {				
				$('#navbarSupportedContent').css("height", "1px").removeClass("in").addClass("collapse");
				$('#navbarSupportedContent').removeClass("show");				
			});
		}


		/*----------------------------------------------------*/
		/*	Hero Fullscreen Slider
		/*----------------------------------------------------*/
		var $slides = $('#slides');
		// Pause Slider on Mouseover
		var sliderTimeout;

		$slides.superslides({
			play: 4500,
			animation: "fade",
			pagination: true,
			pause: true,
		});

		$slides.on('mouseenter', function() {
		   clearTimeout(sliderTimeout);
		   $(this).superslides('stop');
		});

		$slides.on('mouseleave', function() {
		   sliderTimeout = setTimeout(function() { $slides.superslides('start'); }, 5000);
		});


		/*----------------------------------------------------*/
		/*	Hero Text Rotator
		/*----------------------------------------------------*/
	
		$('.hero-slider').flexslider({
			animation: "fade",
			controlNav: false,
			pauseOnHover: true,
			directionNav: false,  
			slideshowSpeed: 5500,   
			animationSpeed: 1500,  
			start: function(slider){
				$('body').removeClass('loading');
			}
		});

		/*product-gallery-carousel*/
	    $('.product-gallery-carousel').owlCarousel({
	         margin: 15,
	         nav: false,
	         dots: true,
	         items: 3
	    });


		/*----------------------------------------------------*/
		/*	Hero Images Rotator
		/*----------------------------------------------------*/
	
		var owl = $('.images-holder');
			owl.owlCarousel({
				items: 3,
				loop:true,
				autoplay:true,
				dots: true,
				navBy: 1,
				autoplayTimeout: 4500,
				autoplayHoverPause: false,
				smartSpeed: 1500,
				responsive:{
					0:{
						items:1
					},
					767:{
						items:1
					},
					768:{
						items:2
					},
					991:{
						items:2
					},
					1000:{
						items:3
					}
				}
		});


		/*----------------------------------------------------*/
		/*	OnScroll Animation
		/*----------------------------------------------------*/
		
		$('.animated').appear(function() {

	        var elem = $(this);
	        var animation = elem.data('animation');

	        if ( !elem.hasClass('visible') ) {
	        	var animationDelay = elem.data('animation-delay');
	            if ( animationDelay ) {
	                setTimeout(function(){
	                    elem.addClass( animation + " visible" );
	                }, animationDelay);

	            } else {
	                elem.addClass( animation + " visible" );
	            }
	        }
						
		});


		/*----------------------------------------------------*/
		/*	Animated Scroll To Anchor
		/*----------------------------------------------------*/
		
		$('.header a[href^="#"], .page a.btn[href^="#"], .page a.internal-link[href^="#"]').on('click', function (e) {
			
			e.preventDefault();

			var target = this.hash,
				$target = jQuery(target);

			$('html, body').stop().animate({
				'scrollTop': $target.offset().top - 60 // - 200px (nav-height)
			}, 'slow', 'easeInSine', function () {
				window.location.hash = '1' + target;
			});
			
		});
		
		
		/*----------------------------------------------------*/
		/*	ScrollUp
		/*----------------------------------------------------*/
		
		$.scrollUp = function (options) {

			// Defaults
			var defaults = {
				scrollName: 'scrollUp', // Element ID
				topDistance: 600, // Distance from top before showing element (px)
				topSpeed: 800, // Speed back to top (ms)
				animation: 'fade', // Fade, slide, none
				animationInSpeed: 200, // Animation in speed (ms)
				animationOutSpeed: 200, // Animation out speed (ms)
				scrollText: '', // Text for element
				scrollImg: false, // Set true to use image
				activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
			};

			var o = $.extend({}, defaults, options),
				scrollId = '#' + o.scrollName;

			// Create element
			$('<a/>', {
				id: o.scrollName,
				href: '#top',
				title: o.scrollText
			}).appendTo('body');
			
			// If not using an image display text
			if (!o.scrollImg) {
				$(scrollId).html('<i class="fas fa-arrow-up"></i>');
			}

			// Minium CSS to make the magic happen
			$(scrollId).css({'display':'none','position': 'fixed','z-index': '2147483647'});

			// Active point overlay
			if (o.activeOverlay) {
				$("body").append("<div id='"+ o.scrollName +"-active'></div>");
				$(scrollId+"-active").css({ 'position': 'absolute', 'top': o.topDistance+'px', 'width': '100%', 'border-top': '1px dotted '+o.activeOverlay, 'z-index': '2147483647' });
			}

			// Scroll function
			$(window).on('scroll', function(){	
				switch (o.animation) {
					case "fade":
						$( ($(window).scrollTop() > o.topDistance) ? $(scrollId).fadeIn(o.animationInSpeed) : $(scrollId).fadeOut(o.animationOutSpeed) );
						break;
					case "slide":
						$( ($(window).scrollTop() > o.topDistance) ? $(scrollId).slideDown(o.animationInSpeed) : $(scrollId).slideUp(o.animationOutSpeed) );
						break;
					default:
						$( ($(window).scrollTop() > o.topDistance) ? $(scrollId).show(0) : $(scrollId).hide(0) );
				}
			});

			// To the top
			$(scrollId).on('click', function(event){
				$('html, body').animate({scrollTop:0}, o.topSpeed);
				event.preventDefault();
			});

		};
		
		$.scrollUp();


		/*----------------------------------------------------*/
		/*	Video Background
		/*----------------------------------------------------*/
		if($('.video-play').length > 0){
			$('.video-play').each(function(){
				var poster = $(this).data('poster');
				var mp4 = $(this).data('mp4');
				var webm = $(this).data('webm');
				var ogv = $(this).data('ogv');
				var id = $(this).closest('section').attr('id');
				console.log(id);
				$(this).closest('section').vidbg({
						'poster': poster,
						'mp4': mp4,
					  	'webm': webm,
					  	'ogv': ogv
				}, {
	            // Options
	            muted: true,
	            loop: true,
				overlay: true,
	            overlayColor: '#000',
	            overlayAlpha: 0.5,
	          });
			})
			
		}


		/*----------------------------------------------------*/
		/*	Portfolio Grid
		/*----------------------------------------------------*/

		$('.grid-loaded').imagesLoaded(function () {

	        // filter items on button click
	        $('.portfolio-filter').on('click', 'button', function () {
	            var filterValue = $(this).attr('data-filter');
	            $grid.isotope({
	              filter: filterValue
	            });
	        });

	        // change is-checked class on buttons
	        $('.portfolio-filter button').on('click', function () {
	            $('.portfolio-filter button').removeClass('is-checked');
	            $(this).addClass('is-checked');
	            var selector = $(this).attr('data-filter');
	            $grid.isotope({
	              filter: selector
	            });
	            return false;
	        });

	        // init Isotope
	        var $grid = $('.masonry-wrap').isotope({
	            itemSelector: '.portfolio-item',
	            percentPosition: true,
	            transitionDuration: '0.7s',
	            masonry: {
	              // use outer width of grid-sizer for columnWidth
	              columnWidth: '.portfolio-item',
	            }
	        });
	        
	    });


		/*----------------------------------------------------*/
		/*	Single Image Lightbox
		/*----------------------------------------------------*/
				
		$('.image-link').magnificPopup({
		  type: 'image'
		});


		/*----------------------------------------------------*/
		/*	Gallery Lightbox
		/*----------------------------------------------------*/
				
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			gallery: {
				enabled: true,
				navigateByImgClick: true
			}
		});


		/*----------------------------------------------------*/
		/*	Video Link #1 Lightbox
		/*----------------------------------------------------*/
		$('.video-popup1').each(function(){		
			var videoUrl = $(this).attr( 'href' );
			$(this).magnificPopup({
			    type: 'iframe',
			  	  
					iframe: {
						patterns: {
							youtube: {
				   
								index: 'youtube.com',
								src: videoUrl
					
									}
								}
							}		  		  
			});
		});


		/*----------------------------------------------------*/
		/*	Video Link #2 Lightbox
		/*----------------------------------------------------*/
		$('.video-popup2').each(function(){
			var videoUrl = $(this).attr( 'href' );
			$(this).magnificPopup({
			    type: 'iframe',		  	  
					iframe: {
						patterns: {
							youtube: {			   
								index: 'youtube.com',
								src: videoUrl				
									}
								}
							}		  		  
			});
		});


		/*----------------------------------------------------*/
		/*	Rotator OwlCarousel
		/*----------------------------------------------------*/
	
		var owl = $('.images-carousel');
			owl.owlCarousel({
				items: 1,
				loop:true,
				autoplay:true,
				nav:true,
				dots: false,
				navText: [ '<', '>' ],
				navBy: 1,
				autoplayTimeout: 6000,
				autoplayHoverPause: false,
				smartSpeed: 1500,
		});


		/*----------------------------------------------------*/
		/*	Testimonials Rotator
		/*----------------------------------------------------*/
	
		var owl = $('.reviews-holder');
			owl.owlCarousel({
				items: 3,
				loop:true,
				autoplay:true,
				navBy: 1,
				autoplayTimeout: 4500,
				autoplayHoverPause: false,
				smartSpeed: 1500,
				responsive:{
					0:{
						items:1
					},
					767:{
						items:1
					},
					768:{
						items:2
					},
					991:{
						items:2
					},
					1000:{
						items:3
					}
				}
		});


		/*----------------------------------------------------*/
		/*	Brands Logo Rotator
		/*----------------------------------------------------*/
	
		var owl = $('.brands-logo-holder');
			owl.owlCarousel({
				items: 6,
				loop:true,
				autoplay:true,
				navBy: 1,
				autoplayTimeout: 4000,
				autoplayHoverPause: false,
				smartSpeed: 1500,
				responsive:{
					0:{
						items:2
					},
					640:{
						items:3
					},
					767:{
						items:3
					},
					768:{
						items:4
					},
					991:{
						items:4
					},				
					1000:{
						items:5
					}
				}
		});


		/*----------------------------------------------------*/
		/*	Statistic Counter
		/*----------------------------------------------------*/
	
		$('.count-element').each(function () {
			$(this).appear(function() {
				$(this).prop('Counter',0).animate({
					Counter: $(this).text()
				}, {
					duration: 4000,
					easing: 'swing',
					step: function (now) {
						$(this).text(Math.ceil(now));
					}
				});
			},{accX: 0, accY: 0});
		});


		/*----------------------------------------------------*/
		/*	Animated Progress Bar
		/*----------------------------------------------------*/
		var delay = 500;
		$(".progress-bar").each(function(i){
		    $(this).delay( delay*i ).animate( { width: $(this).attr('aria-valuenow') + '%' }, delay );

		    $(this).prop('Counter',0).animate({}, {
		        duration: delay,
		        easing: 'swing',
		        step: function (now) {
		            $(this).text(Math.ceil(now)+'%');
		        }
		    });
		});


		/*----------------------------------------------------*/
		/*	Testimonials Rotator Flexslider
		/*----------------------------------------------------*/
		
		$('#reviews-1 .flexslider').flexslider({
			animation: "fade",
			controlNav: true,
			directionNav: false,  
			slideshowSpeed: 5000,   
			animationSpeed: 2000,  
			start: function(slider){
				$('body').removeClass('loading');
			}
		});	
		

		/*----------------------------------------------------*/
		/*	Bottom Quick Form
		/*----------------------------------------------------*/

		$('.bottom-form-header').parent().delay(1000).animate({bottom: '-311px'}, 1000, function(){
			$(this).find('.bottom-form-header').addClass('closed');
		}); 
		
		
		$('.bottom-form-header').on('click', function(){
			if ($(this).hasClass('closed')){
				$(this).next('.bottom-form-holder').css({display:'block'}).parent().animate({bottom: 0}, 1000, function(){
					$(this).find('.bottom-form-header').removeClass('closed');
				});
			} else {
				$(this).parent().animate({bottom: '-311px'}, 1000, function(){
					$(this).find('.bottom-form-header').addClass('closed');
				});
			}
			
			return false;
		});

		if( GENEMY.animation == 'on' ){new WOW().init();}
		

});