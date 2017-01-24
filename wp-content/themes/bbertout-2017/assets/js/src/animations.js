/**
 * Animations
 */

// Dependencies
var jQuery = require('jquery');


jQuery('.home-access__link').hover(function() {
	jQuery('.global-wrapper').addClass('preparing');
}, function() {
	jQuery('.global-wrapper').removeClass('preparing');
});

jQuery('.home-access__link').on('click', function() {
	jQuery('.global-wrapper').addClass('prepared');
});