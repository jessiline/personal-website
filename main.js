AOS.init({
	duration: 800,
	easing: 'ease',
	once: true,
	offset: -100
});

jQuery(function($) {
   'use strict';
   loader();
   siteMenuClone();
   mobileToggleClick();
   onePageNavigation();
   siteIstotope();
   scrollWindow();
   stickyFillPlugin();
   animateReveal();

});

var siteIstotope = function() {
   var $container = $('#posts').isotope({
   itemSelector : '.item',
   isFitWidth: true
 });

 $container.isotope({ filter: '*' });

 $container.imagesLoaded()
 .progress( function() {
   $container.isotope('layout');
 })
 .done(function() {
	 $('.gsap-reveal-img').each(function() {
		   var html = $(this).html();
		   $(this).html('<div class="reveal-wrap"><span class="cover"></span><div class="reveal-content">'+html+'</div></div>');
	   });

	 var controller = new ScrollMagic.Controller();

	 var revealImg = $('.gsap-reveal-img');

	 if ( revealImg.length ) {
		 var i = 0;
		   revealImg.each(function() {

			   var cover = $(this).find('.cover'),
				   revealContent = $(this).find('.reveal-content'),
				   img = $(this).find('.reveal-content img');
			   var tl2 = new TimelineMax();

				setTimeout(function() {
					tl2.set(img, {  scale: '2.0', autoAlpha: 1, })
					.to(cover, 1, { marginLeft: '0', ease:Expo.easeInOut, onComplete() {
						tl2.set(revealContent, { autoAlpha: 1 });
						tl2.to(cover, 1, { marginLeft: '102%', ease:Expo.easeInOut });
						tl2.to(img, 2, { scale: '1.0', ease:Expo.easeOut }, '-=1.5');
					} } )
				}, i * 700);

			   var scene = new ScrollMagic.Scene({
				   triggerElement: this,
				   duration: "0%",
				   reverse: false,
				   offset: "-300%",
			   })
			   .setTween(tl2)
			   .addTo(controller);

			   i++;
		   });
	   }
 	})

}

var loader = function() {
   setTimeout(function() {
	   TweenMax.to('.site-loader-wrap', 1, { marginTop: 50, autoAlpha: 0, ease: Power4.easeInOut });
 }, 10);
 $(".site-loader-wrap").delay(200).fadeOut("slow");
   $("#unslate_co--overlayer").delay(200).fadeOut("slow");	
}

var siteMenuClone = function() {

   setTimeout(function() {
	   $('.js-clone-nav').each(function() {
		   var $this = $(this);
		   $this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-inner');
	   });
	}, 1000);

   $('body').on('click', '.arrow-collapse', function(e) {
   var $this = $(this);
   if ( $this.closest('li').find('.collapse').hasClass('show') ) {
	 $this.removeClass('active');
   } else {
	 $this.addClass('active');
   }
   e.preventDefault();  
   
 });

}; 


// scroll
var scrollWindow = function() {
   var lastScrollTop = 0;
   $(window).scroll(function(event){
	   var $w = $(this),
			   st = $w.scrollTop(),
			   navbar = $('.unslate_co--site-nav');
			   // sd = $('.js-scroll-wrap');

	   if (st > 150) {
		   if ( !navbar.hasClass('scrolled') ) {
			   navbar.addClass('scrolled');	
		   }
	   } 
	   if (st < 150) {
		   if ( navbar.hasClass('scrolled') ) {
			   navbar.removeClass('scrolled sleep');
		   }
	   } 
	   if ( st > 350 ) {
		   if ( !navbar.hasClass('awake') ) {
			   navbar.addClass('awake');	
		   } 

		   // hide / show on scroll
		   if (st > lastScrollTop){
		 // downscroll code
		 navbar.removeClass('awake');	
		 navbar.addClass('sleep');	
		  } else {
		 // upscroll code
		 navbar.addClass('awake');	
		  }
		  lastScrollTop = st;

	   }
	   if ( st < 350 ) {
		   if ( navbar.hasClass('awake') ) {
			   navbar.removeClass('awake');
			   navbar.addClass('sleep');
		   }
	   }
   });
};


var mobileToggleClick = function() {
   $('.js-menu-toggle').click(function(e) {

	   e.preventDefault();

	   if ( $('body').hasClass('offcanvas') ) {
		   $('body').removeClass('offcanvas');
	   } else {
		   $('body').addClass('offcanvas');	
		   $('.js-menu-toggle').addClass('active');
	   }
	});
};



//navigation
var onePageNavigation = function() {
 var navToggler = $('.site-menu-toggle');
	$("body").on("click", ".unslate_co--site-nav .site-nav-ul li a[href^='#'], .smoothscroll[href^='#'], .unslate_co--site-mobile-menu .site-nav-wrap li a[href^='#']", function(e) {
   
   e.preventDefault();

   var $body = $('body');
   if ( $body.hasClass('offcanvas')  ) {
	   $body.removeClass('offcanvas');
	   $('body').find('.js-burger-toggle-menu').removeClass('open');
   }

   var hash = this.hash;
   
	 $('html, body').animate({
	   scrollTop: $(hash).offset().top
	 }, 1000, 'easeInOutExpo');

 });

};

var stickyFillPlugin = function() {
   var elements = document.querySelectorAll('.unslate_co--sticky');
   Stickyfill.add(elements);
};
