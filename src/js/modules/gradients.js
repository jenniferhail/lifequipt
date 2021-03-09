module.exports = {
	init: function () {
		// Add event listener
        document.addEventListener('mousemove', parallax);
        var orange = document.querySelector('.bg-orange .curve-wrap');
        var purple = document.querySelector('.bg-purple');
        // Magic happens here
        function parallax(e) {
            var _w = window.innerWidth/2;
            var _h = window.innerHeight/2;
            var _mouseX = e.clientX;
            var _mouseY = e.clientY;

            var _depthx = 50 - (_mouseX - _w) * 0.03;

            var _depthy = 50 - (_mouseY - _h) * 0.03;

            var _depth = _depthx + ' ' + _depthy;

            if (orange) {
                orange.style.backgroundPosition = _depth;
            }
            if (purple) {
                purple.style.backgroundPosition = _depth;
            }
        }
	}
}