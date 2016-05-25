$(document).ready(function() {
	// add professor
	$(".question-button").click(function() {
		if ($(this).text() == "Add") {
			$(this).text("Remove");
			$("#" + $(this).attr("panel-button")).removeClass("panel-default").addClass("panel-success");
		} else {
			$(this).text("Add");
			$("#" + $(this).attr("panel-button")).removeClass("panel-success").addClass("panel-default");
		}
	});
});