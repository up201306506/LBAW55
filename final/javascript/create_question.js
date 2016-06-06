$(document).ready(function() {
	$("#add_answer").click(function() {
		var answer = "<div class=\"form-group answer-block\">" +
						"<label for=\"answer-" + ($(".answer-block").length + 1) + "\">Answer #" + ($(".answer-block").length + 1) + ":</label>" +
						"<div class=\"input-group\">" +
							"<textarea id=\"answer-" + ($(".answer-block").length + 1) + "\" class=\"form-control answer\" rows=\"5\" required=\"required\"></textarea>" +
							"<span class=\"input-group-addon\">" +
								"<input type=\"radio\" name=\"correct\" value=\"" + ($(".answer-block").length + 1) + "\">" +
								"<span class=\"glyphicon glyphicon-ok\"></span>" +
							"</span>" +
						"</div>" +
					"</div>";

		$(".answer-block").last().after(answer);
	});

	$("#finish").click(function() {
		var answers = "";

		$(".answer").each(function() {
			if (answers == "") {
				answers += $(this).val();
			} else {
				answers += "|:|" + $(this).val();
			}
		});
		
		var corr = $("input[type=\"radio\"]:checked", "form").val();
		console.log(corr);
		$.post("../../action/create_question_action.php", { categoryid: $("#category").val(), question: $("#question").val(), answers: answers, correct: (corr - 1) }, function(data) {
			console.log(data);
			// window.location = "../../profile/profile.php";
		});
	});
});