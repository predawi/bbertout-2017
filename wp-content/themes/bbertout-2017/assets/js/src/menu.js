/**
 * Superfish for submenu most of the time in header
 */

// Dependencies
const jQuery = require('jquery')
const setWaypoints = require('./scroll')

// Test media query
let mediaQuery = window.matchMedia('(min-width: 1024px)')
mediaQuery.addListener(setWaypoints)

jQuery('.menu a').on('click', function (e) {
  // Reset nav and blocs
  jQuery('.menu a').removeClass('active')
  jQuery('.base-section').hide()

  // Get ID + show target
  jQuery(this).addClass('active')
  let target = jQuery(this).attr('href')
  jQuery(target).fadeIn()

  if (target === '#works') {
    if ($('.no-touchevents').length) {
      setWaypoints(mediaQuery)
    }
  }

  e.preventDefault()
})
