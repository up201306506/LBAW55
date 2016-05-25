$(document).ready(function() {
	$(".question-button").click(function() {
		var innerHtml = $(this).html();
		console.log(innerHtml);
		if (innerHtml === "<span class=\"glyphicon glyphicon-plus\"></span>") {
			console.log(innerHtml);
		}
		// $(this).html("<span class=\"glyphicon glyphicon-minus\"></span>");
		// $("#" + $(this).attr("panel-button")).removeClass("panel-default").addClass("panel-success");
	});
});