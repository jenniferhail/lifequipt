console.log('This is the scripts.js file.');

var $ = require('jquery');
var AOS = require('aos');
// var styleguide = require('./modules/style-guide.js');
var accordions = require('./modules/accordions.js');
var anchors = require('./modules/anchors.js');
var count = require('./modules/count.js');
var slider = require('./modules/slider.js');
var gradient = require('./modules/gradients.js');

// Make sure that you init the styleguide first.
AOS.init();
// styleguide.init();
accordions.init();
anchors.init();
count.init();
slider.init();
gradient.init();

var lottie = require('lottie-web');

// Fix for getting AOS to work in IE
function msieversion() {
	var ua = window.navigator.userAgent;
	var msie = ua.indexOf('MSIE ');

    // If Internet Explorer, return version number
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        $('[data-aos^=fade][data-aos^=fade]').css('opacity', '1');
    }
}

$(document).ready(function() {
	msieversion()
});

// document.addEventListener('aos:in:logomark', ({ detail }) => {
//     console.log('animated logomark in', detail);
//     lottie.play('logomark');
// });