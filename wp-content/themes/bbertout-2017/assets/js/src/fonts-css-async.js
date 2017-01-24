// Dependencies
var loadCSS = require('../vendor/loadCSS').loadCSS;
var FontFaceObserver = require('../vendor/fontfaceobserver');


// load webfonts asyncusing LoasCSS filament group lib
loadCSS("https://fonts.googleapis.com/css?family=Eczar");

// detect loading of fonts using fontfaceobserver lib
var eczar = new FontFaceObserver("Eczar", {
	weight: 400
});

eczar.load().then(function () {
	document.documentElement.className += " fonts-loaded";
});

if (typeof Promise === 'function') { // < IE9
	Promise.all([
		eczar.load(),
	]).then(function() {
		document.documentElement.className += " fonts-loaded";
	});
}else{
	document.documentElement.className += " fonts-loaded";
}