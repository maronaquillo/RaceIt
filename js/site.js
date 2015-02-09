jQuery(document).ready(function($){
	$('.search-event-drop-link').click( function(e){
		$('.searchdropdown').fadeToggle('1000');
		return false;
	});

	var viewportWidth = $(window).width();
	$('.topMenu .hover').click(function(event) {
		if (viewportWidth <= 803 ) {
			$(this).siblings('ul').slideToggle('1000');
			return false;
		}		
	});

	var topMenu = $('.topMenu');
	$('.toggleMenu').click(function(event) {
		topMenu.slideToggle('slow');
		return false;
	});



});