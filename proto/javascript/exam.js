$(document).ready(function() {
	$(".flag").click(function() {
		if ($(this).prev().attr("class") == "panel panel-default") {
			$(this).prev().removeClass("panel panel-default").addClass("panel panel-warning");
		} else {
			$(this).prev().removeClass("panel panel-warning").addClass("panel panel-default");
		}
	});
	
	$("#end_exam").click(function() {
		
		/*
		$.post("../action/change_user_answer.php", 
					{
					newanswer: //----, 
					userid: //----, 
					examid: //----, 
					questionid: //----
					}, function(data) {
							console.log(data);
			});
			*/
	});
	
	
		
	function startTimer(duration, display) {
		var timer = duration, minutes, seconds;
		var once = true;
		setInterval(function () {
			if (once){
				minutes = parseInt(timer / 60, 10);
				seconds = parseInt(timer % 60, 10);

				minutes = minutes < 10 ? "0" + minutes : minutes;
				seconds = seconds < 10 ? "0" + seconds : seconds;

				display.text(minutes + ":" + seconds);

				if (--timer < 0) {
					
					timer = 0;
					/*
						ACTIONS FOR WHEN THE CLOCK REACHES ZERO SHOULD GO HERE
					*/
				}
			}
		}, 1000);
	}

	jQuery(function ($) {
		var display = $('#clockdiv');
		startTimer($(timeleft).text(), display);
	});


});