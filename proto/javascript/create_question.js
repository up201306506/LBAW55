$(document).ready(function() {
	$("#add_answer").click(function() {
		var question_block = "<div class=\"answer-block\"><div class=\"form-group\"><label for=\"answer-" + ($(".answer-block").length + 1) + "\">Answer #" + ($(".answer-block").length + 1) + ":</label><textarea id=\"answer-" + ($(".answer-block").length + 1) + "\" class=\"form-control answer\" rows=\"5\" required=\"required\"></textarea></div></div>";
		$(".answer-block").last().after(question_block);
	});

	$("#finish").click(function() {
		var answers = "";

		$(".answer").each(function() {
			if (answers == "") {
				answers += $(this).val();
			} else {
				answers += "|" + $(this).val();
			}
		});

		var catId;
		var val = $("#category").val();
		$("#category option").each(function() {
			if ($(this).val() == val) {
				catId = $(this).attr("id");
			}
		});

		$.post("../../action/create_question_action.php", { categoryid: catId, question: $("#question").val(), answers: answers }, function(data) {
			alert(data);
		});
	});
});