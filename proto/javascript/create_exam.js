$(document).ready(function() {
	$(".question-button").click(function() {
		$(this).html("<span class=\"glyphicon glyphicon-minus\"></span>");
		$("#" + $(this).attr("panel-button")).removeClass("panel-default").addClass("panel-success");
	});
});