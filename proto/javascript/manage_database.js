$(document).ready(function() {
	$("#links li a").css("width", $("#links").width() / 3);

	$(window).resize(function() {
		$("#links li a").css("width", $("#links").width() / 3);
	});
});