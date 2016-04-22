var question_block = "<div class=\"answer-block\"><div class=\"form-group\"><label for=\"answer\">Answer#:</label><textarea id=\"answer\" class=\"form-control\" rows=\"5\"></textarea></div></div>";

$(document).ready(function() {
	$("#add_answer").click(function() {
		$(".answer-block").last().after(question_block);
	});
});