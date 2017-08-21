new WOW().init();
$(function() {
	$('.bxslider').bxSlider({
		controls:false,
		auto:true,
		pause:5500
	});
})
$(window).on('load', function() {
	$('#status').fadeOut();
	$('#preloader').delay(350).fadeOut('slow');
	$('body').delay(350).css({'overflow':'visible'});
});