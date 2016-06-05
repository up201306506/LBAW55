$(document).ready(function() {
	$(".plus").click(function() {
		console.log($(this).parent().attr("class"));
	});
});