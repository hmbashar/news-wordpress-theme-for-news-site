(function($){
	$(window).load(function() {
		$('#slider').nivoSlider();
	});
	jQuery("nav").naver({
		animated: true
	});	
	
	$('.marquee').marquee({
		//speed in milliseconds of the marquee
		duration: 10000,
		//'left' or 'right'
		direction: 'left',
	});
	
})(jQuery);