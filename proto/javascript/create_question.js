$(document).ready(function() {
	$("#add_answer").click(function() {
		var answer = "<div class=\"form-group answer\"><label for=\"answer\">Answer#" + ($(".answer").length + 1) + ":</label><textarea id=\"answer\" class=\"form-control\" rows=\"5\"></textarea></div>";
		$(".answer").last().after(answer);
	});
});