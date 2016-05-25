$(document).ready(function() {
	var plusHtml = $(".question-button").html();

	$(".question-button").click(function() {
		var innerHtml = $(this).html();
		if (innerHtml === plusHtml) {
			$(this).html("<span class=\"glyphicon glyphicon-minus\"></span>");
			$("#" + $(this).attr("panel-button")).removeClass("panel-default").addClass("panel-success");
		} else {
			$(this).html("<span class=\"glyphicon glyphicon-plus\"></span>");
			$("#" + $(this).attr("panel-button")).removeClass("panel-success").addClass("panel-default");
		}
	});
});