(function($) {
	$(document).ready(function() {
		"use strict";
		
	// DROPDOWN TOGGLE 
    $('.site-navigation .inner ul li a').on('click', function (e) {
      $(this).parent().children('.site-navigation .inner ul li ul').toggle();
      return true;
    });
		
		
	// DATA BACKGROUND IMAGE
			var pageSection = $(".bg-image");
			pageSection.each(function(indx){
				if ($(this).attr("data-background")){
					$(this).css("background-image", "url(" + $(this).data("background") + ")");
				}
			});
		
		
		// HAMBURGER MENU
		$('.hamburger').on('click', function(e) {
			if ($(".site-navigation").hasClass("active")) {
				$(".hamburger").toggleClass("open");
				$("body").toggleClass("overflow");
				$(".site-navigation").removeClass("active");
				$(".site-navigation").css("transition-delay", "0.9s");
				$(".site-navigation .inner").css("transition-delay", "0s");
				$(".site-navigation .bottom").css("transition-delay", "0.1s");
				$(".site-navigation .layers span:nth-child(1)").css("transition-delay", "0.35s");
				$(".site-navigation .layers span:nth-child(2)").css("transition-delay", "0.50s");
				$(".site-navigation .layers span:nth-child(3)").css("transition-delay", "0.65s");
			} else
			{
				$(".site-nagivation").addClass('active');
				$(".hamburger").toggleClass("open");
				$("body").toggleClass("overflow");
				$(".site-navigation").toggleClass("active");
				$(".site-navigation").css("transition-delay", "0s");
				$(".site-navigation .inner").css("transition-delay", "0.65s");
				$(".site-navigation .bottom").css("transition-delay", "0.80s");
				
			}
			$(this).toggleClass("active");
		});
		
		
		
		
		// PAGE TRANSITION
			$('body a').on('click', function(e) {
				var target = $(this).attr('target');
				var fancybox = $(this).data('fancybox');
				var url = this.getAttribute("href"); 
				if ( target != '_blank' && typeof fancybox == 'undefined' && url.indexOf('#') < 0  ){
					e.preventDefault(); 
						var url = this.getAttribute("href"); 
						if( url.indexOf('#') != -1 ) {
							var hash = url.substring(url.indexOf('#'));

					if( $('body ' + hash ).length != 0 ){
					$('.page-transition').removeClass("active");

					}
					}
					else {
					$('.page-transition').toggleClass("active");
					setTimeout(function(){
					window.location = url;
					},1300); }}
			});



	// SWITHER
			$('.switcher .holder').on('click', function(e) {
			$(this).toggleClass("switch");
			$('.pricing-block').toggleClass("change");
			});

	


	// PARALLAX
			$.stellar({
				horizontalScrolling: false,
				verticalOffset: 0,
				responsive:true
			});
		
		
		
		
	// CONTACT FORM INPUT LABEL
			function checkForInput(element) {
			  const $label = $(element).siblings('span');
			  if ($(element).val().length > 0) {
				$label.addClass('label-up');
			  } else {
				$label.removeClass('label-up');
			  }
			}

			// The lines below are executed on page load
			$('input, textarea').each(function() {
			  checkForInput(this);
			});

			// The lines below (inside) are executed on change & keyup
			$('input, textarea').on('change keyup', function() {
			  checkForInput(this);  
			});
		
		


		
		});
	// END DOCUMENT READY


	var swiper = new Swiper('.carousel-slider', {
		  slidesPerView: 'auto',
		  spaceBetween: 5,
				centeredSlides: true,
				loop: true,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
				},
		  pagination: {
			el: '.swiper-pagination',
			clickable: true,
		  },
		   autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
		});
	
	
	var swipers = new Swiper('.testimonials-slider', {
		  slidesPerView: 'auto',
		  spaceBetween: 5,
				centeredSlides: true,
				loop: true,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
				},
		  pagination: {
			el: '.swiper-pagination',
			clickable: true,
		  },
		  autoplay: {
        delay: 1000,
        disableOnInteraction: false,
      },
		});
	
	
	
	var swiper = new Swiper('.simple-slider', {
      slidesPerView: 1,
      spaceBetween: 0,
			centeredSlides: true,
			loop: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
			}
    });
// couter slider****************************************************************************************

// (function ($) {
// 	$.fn.countTo = function (options) {
// 		options = options || {};
		
// 		return $(this).each(function () {
// 			// set options for current element
// 			var settings = $.extend({}, $.fn.countTo.defaults, {
// 				from:            $(this).data('from'),
// 				to:              $(this).data('to'),
// 				speed:           $(this).data('speed'),
// 				refreshInterval: $(this).data('refresh-interval'),
// 				decimals:        $(this).data('decimals')
// 			}, options);
			
// 			// how many times to update the value, and how much to increment the value on each update
// 			var loops = Math.ceil(settings.speed / settings.refreshInterval),
// 				increment = (settings.to - settings.from) / loops;
			
// 			// references & variables that will change with each update
// 			var self = this,
// 				$self = $(this),
// 				loopCount = 0,
// 				value = settings.from,
// 				data = $self.data('countTo') || {};
			
// 			$self.data('countTo', data);
			
// 			// if an existing interval can be found, clear it first
// 			if (data.interval) {
// 				clearInterval(data.interval);
// 			}
// 			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
// 			// initialize the element with the starting value
// 			render(value);
			
// 			function updateTimer() {
// 				value += increment;
// 				loopCount++;
				
// 				render(value);
				
// 				if (typeof(settings.onUpdate) == 'function') {
// 					settings.onUpdate.call(self, value);
// 				}
				
// 				if (loopCount >= loops) {
// 					// remove the interval
// 					$self.removeData('countTo');
// 					clearInterval(data.interval);
// 					value = settings.to;
					
// 					if (typeof(settings.onComplete) == 'function') {
// 						settings.onComplete.call(self, value);
// 					}
// 				}
// 			}
			
// 			function render(value) {
// 				var formattedValue = settings.formatter.call(self, value, settings);
// 				$self.html(formattedValue);
// 			}
// 		});
// 	};
	
// 	$.fn.countTo.defaults = {
// 		from: 0,               // the number the element should start at
// 		to: 0,                 // the number the element should end at
// 		speed: 1000,           // how long it should take to count between the target numbers
// 		refreshInterval: 100,  // how often the element should be updated
// 		decimals: 0,           // the number of decimal places to show
// 		formatter: formatter,  // handler for formatting the value before rendering
// 		onUpdate: null,        // callback method for every time the element is updated
// 		onComplete: null       // callback method for when the element finishes updating
// 	};
	
// 	function formatter(value, settings) {
// 		return value.toFixed(settings.decimals);
// 	}
// }(jQuery));

// jQuery(function ($) {
//   // custom formatting example
//   $('.count-number').data('countToOptions', {
// 	formatter: function (value, options) {
// 	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
// 	}
//   });
  
//   // start all the timers
//   $('.timer').each(count);  
  
//   function count(options) {
// 	var $this = $(this);
// 	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
// 	$this.countTo(options);
//   }
// });
    // *******************hover*********

    $(window).on('load',function(){
            
            $('.outerWrap').hover(function(){
                var aaca = $(this).children('.abb').height();
                var bbcc = aaca - 400 ;
                $(this).children('.abb').css({"transform":`translateY(-${bbcc}px)`, "transition":"all 1.5s"});
            })
            $('.outerWrap').mouseout(function(){
                $(this).children('.abb').css({"transform":"translateY(0%)", "transition":"all 0.8s"});
            })
            
        });


    // *********************
    // typing speed

    	


    // ****
	
	// paetners slider js code***************************************************************

	$(window).on('load', function(){
  // Please run it with window.onload, not with document.ready
  initSmoothScrolling('.block','smoothscroll');
});

function initSmoothScrolling(container,animation){
 /*
	* @param {String} container Class or ID of the animation container
	* @param {String} animation Name of the animation, e.g. smoothscroll
	*/
	var sliderWidth = 0;	
	var animationWidth = 0;	
	var sliderHeight = $('>div>div:first-of-type',container).outerHeight(false);

	$('>div>div', container).each(function(){				
		animationWidth += $(this).outerWidth(false);		
	});
	
	// detect number of visible slides
	var slidesVisible = $(container).width() / $('>div>div:first-of-type',container).outerWidth(false);	
	slidesVisible = Math.ceil(slidesVisible);

  // count slides to determine animation speed
	var slidesNumber = $('>div>div', container).length;
	var speed = slidesNumber*2;
	
// append the tail	
	$('>div>div',container).slice(0,slidesVisible).clone().appendTo($('>div',container));	

	// Detect the slider width with appended tail
	$('>div>div', container).each(function(){
		sliderWidth += $(this).outerWidth(false);
	});

	// set slider dimensions
	$('>div',container).css({'width':sliderWidth,'height':sliderHeight});
  
// Insert styles to html
	$("<style type='text/css'>@keyframes "+animation+" { 0% { margin-left: 0px; } 100% { margin-left: -"+animationWidth+"px; } } "+$('>div>div:first-of-type',container).selector+" { -webkit-animation: "+animation+" "+speed+"s linear infinite; -moz-animation: "+animation+" "+speed+"s linear infinite; -ms-animation: "+animation+" "+speed+"s linear infinite; -o-animation: "+animation+" "+speed+"s linear infinite; animation: "+animation+" "+speed+"s linear infinite; }</style>").appendTo("head");	

	// restart the animation (e.g. for safari & ie)	
	var cl = $(container).attr("class");
	$(container).removeClass(cl).animate({'nothing':null}, 1, function () {
		$(this).addClass(cl);
	});
}



	// ***************************************
	
	// COUNTER
			 $(document).scroll(function(){
				$('.odometer').each( function () {
					var parent_section_postion = $(this).closest('section').position();
					var parent_section_top = parent_section_postion.top;
					if ($(document).scrollTop() > parent_section_top - 300) {
						if ($(this).data('status') == 'yes') {
							$(this).html( $(this).data('count') );
							$(this).data('status', 'no')
						}
					}
				});
			});
	
	



	// WOW ANIMATION 
			wow = new WOW(
			{
				animateClass: 'animated',
				offset:       50
			}
			);
			wow.init();
	
	
	
	
	// PRELOADER
$(window).load(function() {
  $("body").addClass("page-loaded");
});
	
	
	
})(jQuery);