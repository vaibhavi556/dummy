//stellarnav
jQuery(document).ready(function ($) {
	jQuery('.stellarnav').stellarNav({
		theme: 'dark',
		breakpoint: 1023,
		position: 'right',
		phoneBtn: '',
		locationBtn: ''
	});
});
//============= slick slider =============

//Main Banner Start
$('.slider').slick({
	draggable: true,
	arrows: false,
	dots: true,
	fade: true,
	autoplay: true,
	autoplaySpeed: 5000,
	speed: 1000,
	infinite: true,
	cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
	touchThreshold: 100
});

$('.Testimonial').slick({
	draggable: true,
	arrows: false,
	dots: true,
	autoplay: true,
	autoplaySpeed: 5000,
	speed: 1000,
	infinite: true,
});

//sticky Header //
$(window).scroll(function () {
	var scroll = $(window).scrollTop();

	if (scroll >= 700) {
		$(".site-header").addClass("sticky");
	} else {
		$(".site-header").removeClass("sticky");
	}
});

$('.continue').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});
$('.back').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});

