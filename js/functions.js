jQuery(document).ready(function($) {
	$(function() {
	$('.post').matchHeight({
			byRow: true,
			property: 'height',
			target: null,
			remove: false
	});
	$('.blog .row .col-md-4 .post .post-cont p').matchHeight({
		byRow: true,
		property: 'height',
		target: null,
		remove: false
	});
	$('.blog .row .col-md-4 .post .img').matchHeight({
		byRow: true,
		property: 'min-height',
		target: null,
		remove: false
	});
	});

	$(document).ready(function(){
		// $(".owl-carousel").owlCarousel();
		$('.owl-carousel').owlCarousel({
			loop:true,
			margin:10,
			responsiveClass:true,
			center:true,
			responsive:{
					0:{
							items:1,
							nav:true
					},
					600:{
							items:3,
							nav:false
					},
					1000:{
							items:5,
							nav:true,
							loop:false
					}
			},
			navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			nav: true
	})
	});


	$(document).ready(function() {
		$('header nav li').addClass('nav-item');
		$('header nav li a').addClass('nav-link');
		console.log("added class");
	});


});
