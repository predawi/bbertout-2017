/**
 * Superfish for submenu most of the time in header
 */

// Dependencies
var jQuery = require('jquery');


/**
 * Menu Mobile
 */
// Mobile to tablet portrait Only JS
if (matchMedia('(max-width: 1023px)').matches) {
	//console.log("under 1023px");
	// Mega Menu Mobile
	// Open main-menu
	jQuery(".button__menu-open").on("click", function(e){
		e.preventDefault();
		jQuery(".menu__mobile").addClass("opened");
		jQuery("html, body").addClass("menu-mobile--active");
	});
	// Close menu
	jQuery(".button__menu-close").on("click", function(e){
		e.preventDefault();
		jQuery(".menu__mobile").removeClass("opened");
		jQuery("html, body").removeClass("menu-mobile--active");
	});

}

//Tablet Landscape to Desktop only JS
if (matchMedia('(min-width: 1024px) and (orientation:landscape)').matches) {
	//console.log("over 1024px");
	//restore mobile menu in desktop
	jQuery(".menu__mobile").removeClass("opened");
	jQuery("html, body").removeClass("menu-mobile--active");
}


jQuery('.menu a').on('click', function(e){

	// Reset nav and blocs
	jQuery('.menu a').removeClass('active');
	jQuery('.base-section').hide();

	// Get ID + show target
	jQuery(this).addClass('active');
	var target = jQuery(this).attr('href');
	jQuery(target).fadeIn();

	e.preventDefault();
});
