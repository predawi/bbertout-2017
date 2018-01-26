/**
 * Animations
 */

// Dependencies
const $ = require('jquery')

// Hovering entering link
$('.home-access__link').hover(function () {
  $('.global-wrapper').addClass('preparing')
}, function () {
  $('.global-wrapper').removeClass('preparing')
})

// Entering on site
$('.home-access__link').on('click', function () {
  $('.global-wrapper').addClass('prepared')
  // Remove waves
  $('.waves__parallax').addClass('disappear')
  setTimeout(function () {
    // Remove all intro blocs
    $('.waves__wrapper, .home-access, .stars').remove()
    $('.global-wrapper').addClass('loaded')
    // Load main content + new stars
    loadMainContent()
  }, 1400)
})

function loadMainContent () {
  $('#main-content').fadeIn()
  $('[href="#works"]').click()
}