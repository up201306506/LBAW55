$(document).ready(function() {
	$("#add_answer").click(function() {
		var question_block = "<div class=\"answer-block\"><div class=\"form-group\"><label for=\"answer\">Answer #" + ($(".answer-block").length + 1) + ":</label><textarea id=\"answer\" name=\"answer-" + ($(".answer-block").length + 1) + "\" class=\"form-control\" rows=\"5\"></textarea></div></div>";
		$(".answer-block").last().after(question_block);
	});
});