/**
 * Scroll events
 */

// Dependencies
const inView = require('../vendor/in-view.min.js')

/**
 * [setWaypoints] setWaypoints for color panels on titles on desktop
 */
function setWaypoints (mediaQuery) {
  if (mediaQuery.matches) {
    // Trigger panel on view
    inView('.highlight__project')
      .on('enter', el => {
        if (!el.done) {
          el.classList.add('visible')
        }
      })
      .on('exit', el => {
        el.done = true
      })
  }
}

module.exports = setWaypoints