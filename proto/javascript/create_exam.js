$(document).ready(function() {
	$(".add-button").click(function() {
		$(this).removeClass("add-button").addClass("remove-button");
		$("#" + $(this).attr("panel-button")).removeClass("panel-default").addClass("panel-success");
	});

	$(".remove-button").click(function() {
		$(this).removeClass("remove-button").addClass("add-button");
		$("#" + $(this).attr("panel-button")).removeClass("panel-success").addClass("panel-default");
	});
});