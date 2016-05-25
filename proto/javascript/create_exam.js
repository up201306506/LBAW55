$(document).ready(function() {
	var globalHtml = $(".question-button").html();

	$(".question-button").click(function() {
		var innerHtml = $(this).html();
		if (innerHtml === globalHtml) {
			console.log("True");
		} else {
			console.log("False");
		}
		// $(this).html("<span class=\"glyphicon glyphicon-minus\"></span>");
		// $("#" + $(this).attr("panel-button")).removeClass("panel-default").addClass("panel-success");
	});
});