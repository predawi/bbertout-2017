/**
 * Scroll events
 */

// Dependencies
const inView = require('../vendor/in-view.min.js')
const Vibrant = require('node-vibrant')

/**
 * [activateMagnetism] Activate magnetic scroll on desktop
 */
function setWaypoints (mediaQuery) {
  if (mediaQuery.matches) {
    // Trigger img on view
    inView('.highlight__project')
      .on('enter', el => {
        if (!el.done) {
          el.classList.add('visible')

          // Declare some vars
          var err, palette
          var dataImg = el.getAttribute('data-img')

          // Extract colors
          var v = new Vibrant('../assets/img/' + dataImg + '.jpg')
          v.getPalette((err, palette)).then((palette) => {
            // Set vibrant color on elements
            el.querySelector('.highlight__project__panel').style = 'background:' + palette.Vibrant.getHex()
          })
        }
      })
      .on('exit', el => {
        el.done = true
      })
  }
}

module.exports = setWaypoints