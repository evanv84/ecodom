$(window).load(function() {
	$('.contacts').css('display', 'flex');;
});

$(document).ready(function() {

	
	// Intro
	var introTween = new TimelineMax();

	introTween
			.fromTo('.offer', 1, {autoAlpha: 0, x: -30}, {autoAlpha: 1, x: 0, ease: Power1.easeInOut})
			.fromTo('.video', 0.7, {autoAlpha: 0, x: 30}, {autoAlpha: 1, x: 0, ease: Power1.easeInOut}, "-=0.2");


});