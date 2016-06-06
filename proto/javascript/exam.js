$(document).ready(function() {
	$(".flag").click(function() {
		if ($(this).prev().attr("class") == "panel panel-default") {
			$(this).prev().removeClass("panel panel-default").addClass("panel panel-warning");
		} else {
			$(this).prev().removeClass("panel panel-warning").addClass("panel panel-default");
		}
	});
	
	
	function startTimer(duration, display) {
		var timer = duration, minutes, seconds;
		setInterval(function () {
			
			hours = parseInt(timer / 3600, 10);;
			minutes = parseInt(timer / 60, 10);
			seconds = parseInt(timer % 60, 10);

			
			hours = hours < 10 ? "0" + hours : hours;
			minutes = minutes < 10 ? "0" + minutes : minutes;
			seconds = seconds < 10 ? "0" + seconds : seconds;

			display.text(hours + ":" + minutes + ":" + seconds);

			if (--timer < 0) {
				timer = duration;
			}
		}, 1000);
	}

	jQuery(function ($) {
		var display = $('#clockdiv');
		startTimer($(timeleft).text(), display);
	});


});