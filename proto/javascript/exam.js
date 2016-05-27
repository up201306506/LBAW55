$(document).ready(function() {
	$(".flag").click(function() {
		if ($(this).prev().attr("class") == "panel panel-default") {
			$(this).prev().removeClass("panel panel-default").addClass("panel panel-warning");
		} else {
			$(this).prev().removeClass("panel panel-warning").addClass("panel panel-default");
		}
	});
});