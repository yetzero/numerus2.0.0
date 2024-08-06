
jQuery(document).ready(function ($) {
	//console.log('%c<<< Start carousel js >>>', 'background: #fff3cd; color: #664d03; padding: 2px 5px;');
	'use strict';

	//jQuery.event.special.touchstart = { setup: function( _, ns, handle ){ if ( ns.includes("noPreventDefault") ) { this.addEventListener("touchstart", handle, { //passive: false }); } else { this.addEventListener("touchstart", handle, { passive: true }); } } };

	jQuery.event.special.touchstart = {
  setup: function( _, ns, handle ){
    this.addEventListener("touchstart", handle, { passive: true });
  }
};


	/*
	* @Function Carousel Clientes
	**/
	  $('#clientes').owlCarousel({
		center: false,
		autoWidth: false,
		autoplay: true,
		autoplayTimeout: 2000,
		 loop: true,
		 margin: 10,
		 nav: false,
		 dots: true,
		 navText: ['<i class="bi bi-chevron-left"></i>', '<i class="bi bi-chevron-right"></i>'],
		 responsive: {
			 0: {
				 items: 1
			 },
			 480: {
				 items: 1
			 },
			 768: {
				 items: 4
			 },
			 1000: {
				 items: 4
			 }
		 }
	}); 
	/*
	* @Function Carousel Informes
	**/
 	$('#informes').owlCarousel({
		center: false,
		autoWidth: false,
		autoplay: true,
		autoplayTimeout: 5000,
		 loop: true,
		 margin: 30,
		 nav: true,
		 dots: true,
		 navText: ['<i class="bi bi-arrow-left-circle custom-icon"></i>', '<i class="bi bi-arrow-right-circle custom-icon"></i>'],
		 responsive: {
			 0: {
				 items: 1
			 },
			 480: {
				 items: 1
			 },
			 768: {
				 items: 1
			 },
			 1000: {
				 items: 1
			 }
		 }
});
/*
	* @Function Carousel Equipo
	**/
 $('#team').owlCarousel({
		center: false,
		autoWidth: false,
		autoplay: false, 
		autoplayTimeout: 2000,
		responsiveClass:true,
		merge:true,
		loop: false,
		margin: 15,
		nav: true,
		dots: false,//ti-arrow-circle-right bi bi-arrow-right-circle
		navText: ['<i class="bi bi-arrow-left-circle icono-left"></i>', '<i class="bi bi-arrow-right-circle icono-right"></i>'],
		responsive: {
			 0: {
				 items: 1,
				 margin: 0,
				 mergeFit: false,
				 center: true
			 },
			 480: {
				 items: 1,
				  margin: 0,
					mergeFit:true,
					center: true
			 },
			 768: {
				 items: 4
			 },
			 1000: {
				 items: 4
			 }
		 }
	});  

	//Prueba de team
	$('#equipo-2').owlCarousel({		
  	center: false,
		autoWidth: false,
		autoplay: false,
		autoplayTimeout: 2000,
		 loop: false,
		 margin: 20,
		 nav: true,
		 dots: false,
		 navText: ['<i class="bi bi-arrow-left-circle icono-left"></i>', '<i class="bi bi-arrow-right-circle icono-right"></i>'],
		 responsive: {
			 0: {
				 items: 1
			 },
			 480: {
				 items: 1
			 },
			 768: {
				 items: 4
			 },
			 1000: {
				 items: 4
			 }
		 }
	});  
});// End jQuery