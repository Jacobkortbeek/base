$(function() {
	$('.card').matchHeight({
    byRow: true,
    property: 'height',
    target: null,
    remove: false
});
$('.card .card-body p').matchHeight({
  byRow: true,
  property: 'height',
  target: null,
  remove: false
});
$('.card-img-cont').matchHeight({
  byRow: true,
  property: 'max-height',
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
		navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
})
});

console.log("here I am");
