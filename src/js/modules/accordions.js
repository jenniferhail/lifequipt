var $ = require('jquery');

module.exports = {
	init: function () {

		// var getClosest = function (elem, selector) {
		// 	// Element.matches() polyfill
		// 	if (!Element.prototype.matches) {
		// 		Element.prototype.matches =
		// 			Element.prototype.matchesSelector ||
		// 			Element.prototype.mozMatchesSelector ||
		// 			Element.prototype.msMatchesSelector ||
		// 			Element.prototype.oMatchesSelector ||
		// 			Element.prototype.webkitMatchesSelector ||
		// 			function(s) {
		// 				var matches = (this.document || this.ownerDocument).querySelectorAll(s),
		// 					i = matches.length;
		// 				while (--i >= 0 && matches.item(i) !== this) {}
		// 				return i > -1;
		// 			};
		// 	}
		// 	// Get the closest matching element
		// 	for ( ; elem && elem !== document; elem = elem.parentNode ) {
		// 		if ( elem.matches( selector ) ) return elem;
		// 	}
		// 	return null;
		// }

		$('.accordion .acc-item .content').hide();
		$('.accordion .title').on('click', function (ele) {
			$(this).closest('.acc-item').find('.content').slideToggle('3000', function () {	
			});
			$('html,body').animate({
				scrollTop: $(this).closest('.acc-item').offset().top
			}, 500);
		});
		
	}
}