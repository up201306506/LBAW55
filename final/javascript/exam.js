$(document).ready(function() {
	var listElement = $('#questions');
	var perPage = 5;
	var numItems = listElement.children().size();
	var numPages = Math.ceil(numItems/perPage);

	$('.pagination').data("curr",0);

	var curr = 0;
	while(numPages > curr){
		$('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo('.pagination');
		curr++;
	}

	$('.pagination .page_link:first').addClass('active');

	listElement.children().css('display', 'none');
	listElement.children().slice(0, perPage).css('display', 'block');
	removeStyle();

	function removeStyle() {
		$('.input-group.question').each(function() {
			if ($(this).attr("style") == "display: block;") {
				$(this).removeAttr("style");
			}
		});
	}

	$('.pagination li a').click(function(){
		var clickedPage = $(this).html().valueOf() - 1;
		goTo(clickedPage,perPage);
	});

	function previous(){
		var goToPage = parseInt($('.pagination').data("curr")) - 1;
		if($('.active').prev('.page_link').length==true){
			goTo(goToPage);
		}
	}

	function next(){
		goToPage = parseInt($('.pagination').data("curr")) + 1;
		if($('.active_page').next('.page_link').length==true){
			goTo(goToPage);
		}
	}

	function goTo(page){
		var startAt = page * perPage,
		endOn = startAt + perPage;

		listElement.children().css('display','none').slice(startAt, endOn).css('display','block');
		$('.pagination').attr("curr",page);
		removeStyle();
	}

	$("input[name=\"optradio\"]").click(function() {
		var questionid = $(this).parent().parent().parent().parent().parent().attr("id");

		$.post("../../action/update_user_answer_action.php", { userid: $(".container").attr("id"), examid: $("h1").attr("id"), questionid: questionid, answerid: $(this).val() }, function(data) {});
	});
	
	$("#end_exam").click(function() {
		var questions = "";
		var answers = "";

		$(".my-panel").each(function() {
			if (questions == "") {
				questions += $(this).attr("id");
			} else {
				questions += "," + $(this).attr("id");
			}
		});

		$("input[name=\"optradio\"]:checked").each(function() {
			if (answers == "") {
				answers += $(this).val();
			} else {
				answers += "," + $(this).val();
			}
		});

		$.post("../../action/end_exam_action.php", { userid: $(".container").attr("id"), examid: $("h1").attr("id"), questions: questions, answers: answers }, function(data) {
			if (data == "success") {
				window.location = "../../profile/profile.php";
			}
		});
	});

	$("#publish").click(function() {
		$.post("../../action/publish_grades_action.php", { examid: $("h1").attr("id") }, function() {
			location.reload();
		})
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
					
					// $.post("../../action/end_exam_action.php", { userid: $(".container").attr("id"), examid: $("h1").attr("id"), questions: questions, answers: answers }, function(data) {
					// 	if (data == "success") {
					// 		window.location = "../../profile/profile.php";
					// 	}
					// });
				}
			}
		}, 1000);
	}

	jQuery(function ($) {
		var display = $('#clockdiv');
		startTimer($(timeleft).text(), display);
	});
});