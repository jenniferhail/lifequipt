var $ = require('jquery');
var slick = require('slick-carousel');

module.exports = {
	init: function () {
        console.log('Slider is loaded');

        $('.slick').slick({
            arrows: false,
            dots: true,
            fade: false,
            infinite: false
        });
        
	}
}