var answer = "<div class=\"form-group\"><label for=\"answer\">Answer#:</label><textarea id=\"answer\" class=\"form-control\" rows=\"5\"></textarea></div>";

$(document).ready(function() {
	$("#add_answer").click(function() {
		console.log($(".answer").length);
		$(".answer").last().after(answer);
	});
});