var $ = require('jquery');
var CountUp = require('countup');

module.exports = {
	init: function () {
        console.log('Count up is loaded');

        document.addEventListener('aos:in:counter-1', function() {   
            var counter1Num = $('#counter_1').data('count');
            var counter1Start = counter1Num - 30;
            var counter1Speed = $('#counter_1').data('speed');
            var counter1 = new CountUp('counter_1', counter1Start, counter1Num, 0, counter1Speed);    

            if (!counter1.error) {
                counter1.start();
            } else {
                console.error(counter1.error);
            }
        });

        document.addEventListener('aos:in:counter-2', function() {
            var counter2Num = $('#counter_2').data('count');
            var counter2Start = counter2Num - 30;
            var counter2Speed = $('#counter_2').data('speed');
            var counter2 = new CountUp('counter_2', counter2Start, counter2Num, 0, counter2Speed);
         
            if (!counter2.error) {
                counter2.start();
            } else {
                console.error(counter2.error);
            }
        });

        document.addEventListener('aos:in:counter-3', function() {
            var counter3Num = $('#counter_3').data('count');
            var counter3Start = counter3Num - 30;
            var counter3Speed = $('#counter_3').data('speed');
            var counter3 = new CountUp('counter_3', counter3Start, counter3Num, 0, counter3Speed);
       
            if (!counter3.error) {
                counter3.start();
            } else {
                console.error(counter3.error);
            }
        });

        document.addEventListener('aos:in:counter-4', function() {
            var counter4Num = $('#counter_4').data('count');
            var counter4Start = counter4Num - 30; 
            var counter4Speed = $('#counter_4').data('speed');
            var counter4 = new CountUp('counter_4', counter4Start, counter4Num, 0, counter4Speed);
       
            if (!counter4.error) {
                counter4.start();
            } else {
                console.error(counter4.error);
            }
        });
        
	}
}