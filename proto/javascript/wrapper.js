$(document).ready(function() {
	if ($(window).width() < 768) {
		$("#wrapper").css("width", $(window).width());
	} else {
		$("#wrapper").css("width", 1170);
	}

	$(window).resize(function() {
		if ($(window).width() < 768) {
			$("#wrapper").css("width", $(window).width());
		} else {
			$("#wrapper").css("width", 1170);
		}
	});
});