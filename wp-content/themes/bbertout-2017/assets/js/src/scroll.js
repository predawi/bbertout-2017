/**
 * Scroll events
 */

// Dependencies
var Waypoint = require('../vendor/waypoint')

/**
 * [activateMagnetism] Activate magnetic scroll on desktop
 */
function setWaypoints (mediaQuery) {
  if (mediaQuery.matches) {
    // Trigger img on view
    var maskedImg = document.getElementsByClassName('highlight__project')

    for (var i = 0; i < maskedImg.length; i++) {
      Waypoint({
        element: maskedImg[i],
        handler: function () {
          this.element.classList.add('visible')

          // Declare some vars
          var err, palette
          var dataImg = this.element.getAttribute('data-img')

          // Extract colors
          var v = new Vibrant('../assets/img/' + dataImg + '.jpg')
          v.getPalette((err, palette)).then((palette) => {
            // Set vibrant color on elements
            this.element.querySelector('.highlight__project__panel').style = 'background:' + palette.Vibrant.getHex()
          })
        },
        offset: 500
      })
    }
  }
}

module.exports = setWaypoints