/**
 * Miscellaneous stuffs
 */
// Dependencies
const $ = require('jquery')
const Vibrant = require('node-vibrant')

$(document).ready(function () {
  // Get dominant color
  // Declare some vars
  var err, palette
  var colorPanels = document.querySelectorAll('.highlight__project')

  colorPanels.forEach(function (element) {
    var dataImg = element.querySelector('.highlight__project__img').getAttribute('data-img')

    // Extract colors
    var v = new Vibrant('../assets/img/' + dataImg + '.jpg')
    v.getPalette((err, palette)).then((palette) => {
      // Set vibrant color on elements
      element.querySelector('.highlight__project__panel').style = 'background:' + palette.Vibrant.getHex()
    })
  })
})
