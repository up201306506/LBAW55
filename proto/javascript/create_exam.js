$(document).ready(function() {
	$(".question-button").click(function() {
		if ($(this).html() == '<span class="glyphicon glyphicon-plus"></span>') {
			console.log("LEL WUT");
		}
		// $(this).html("<span class=\"glyphicon glyphicon-minus\"></span>");
		// $("#" + $(this).attr("panel-button")).removeClass("panel-default").addClass("panel-success");
	});
});