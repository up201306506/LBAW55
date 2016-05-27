$(document).ready(function() {
	$("#month li").css("width", Math.floor($("#month").width() / 3));
	$("#weekdays li").css("width", Math.floor($("#weekdays").width() / 7));
	$("#days li").css("width", Math.floor($("#days").width() / 7));

	$(window).resize(function() {
		$("#month li").css("width", Math.floor($("#month").width() / 3));
		$("#weekdays li").css("width", Math.floor($("#weekdays").width() / 7));
		$("#days li").css("width", Math.floor($("#days").width() / 7));
	});
});