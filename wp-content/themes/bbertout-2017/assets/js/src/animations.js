/**
 * Animations
 */

// Dependencies
var $ = require('jquery');


// Hovering entering link
$('.home-access__link').hover(function() {
	$('.global-wrapper').addClass('preparing');
}, function() {
	$('.global-wrapper').removeClass('preparing');
});

// Entering on site
$('.home-access__link').on('click', function() {
	$('.global-wrapper').addClass('prepared');
	$('.waves__parallax').addClass('disappear');
	setTimeout(function(){
		$('.waves__wrapper, .home-access, .stars').remove();
		$('.global-wrapper').addClass('loaded');
		loadMainContent();
	}, 1400);
});


function loadMainContent() {
	$('#main-content').fadeIn();
}