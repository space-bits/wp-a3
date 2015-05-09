// Use document ready to load the script once the page has finish loading
//Modified Laurence's example code slightly to better accomodate crrent project
$(document).ready(function() {
	$('.more-info').click(function(event) {
		$(this).parents('.movie').find('.screenings').slideToggle('slow');
		event.preventDefault();
	});
});
