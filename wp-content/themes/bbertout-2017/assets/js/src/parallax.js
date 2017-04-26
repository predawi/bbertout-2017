/**
 * Parallax js
 */

// Dependencies
var $ = require('jquery');
var parallax = require('../vendor/jquery.parallax');


//-- Stars
generateStars();
function generateStars() {
	var star, xPos, yPos, starType = ['star','star','star','nova','nova','supernova'], starNumber = 0, axisY = [1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,3,3,3,3,3,3,4,4,4,4,4,5,5,5,5,6,6,6,7,7,7,8,8,9,10];

	starInterval = setInterval(function(){
		// Increment timer
		starNumber = starNumber + 1;
		// Define X and Y pos
		xPos = Math.floor(Math.random() * 1000) / 10;
		yPos = (axisY[Math.floor(Math.random()*axisY.length)]) * (Math.floor(Math.random() * 10) + 1);
		// Construct star and append it with random class
		star = '<span class="'+ starType[Math.floor(Math.random()*starType.length)]+'" style="left:'+xPos+'%; top:'+yPos+'%;"></span>';
		$('.stars').append(star);

		// Test if star number is reached
		if(starNumber == 200) {
			clearInterval(starInterval);
			return;
		}
	},30);
	}

//-- Waves
var scene = document.getElementById('waves__parallax');
var parallax = new Parallax(scene);