$(document).ready(function() {
	// add professor
	$(".question-button").click(function() {
		var panelTarget = $(this).attr("panel-button");
		$("#" + panelTarget).removeClass("panel-default").addClass("panel-success");
	});
});