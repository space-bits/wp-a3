// Use document ready to load the script once the page has finish loading
//Modified Laurence's example code slightly to better accomodate crrent project
//This script only works on the movie page
$(document).ready(function() {
	$('.login').click(function(event) {
		$(this).parents('.wrapper').find('.login-error').slideToggle('slow');
		event.preventDefault();
	});
});
