$(document).ready(function() {
	if ($(window).width() < 768) {
		$("#weekdays-sm").css("display", "block");
	} else {
		$("#weekdays-lg").css("display", "block");
	}

	$("#month li").css("width", Math.floor($("#month").width() / 3));
	$("#weekdays-lg li").css("width", Math.floor($("#weekdays-lg").width() / 7));
	$("#weekdays-sm li").css("width", Math.floor($("#weekdays-sm").width() / 7));
	$("#days li").css("width", Math.floor($("#days").width() / 7));
	$("#days li").css("height", $("#days li").width() + 10);

	$(window).resize(function() {
		if ($(window).width() < 768) {
			$("#weekdays-lg").css("display", "none");
			$("#weekdays-sm").css("display", "block");
		} else {
			$("#weekdays-lg").css("display", "block");
			$("#weekdays-sm").css("display", "none");
		}

		$("#month li").css("width", Math.floor($("#month").width() / 3));
		$("#weekdays-lg li").css("width", Math.floor($("#weekdays-lg").width() / 7));
		$("#weekdays-sm li").css("width", Math.floor($("#weekdays-sm").width() / 7));
		$("#days li").css("width", Math.floor($("#days").width() / 7));
		$("#days li").css("height", $("#days li").width() + 10);
	});
});