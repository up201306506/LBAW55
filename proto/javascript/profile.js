$(document).ready(function() {
	$(".day-cell").css("width", $(".calendar-row").width() / 7);
	$(".empty-cell").css({
		width: $(".calendar-row").width() / 7,
		height: $(".day-cell").height()
	});
	$(".calendar-cell").css("width", $(".calendar-row").width() / 7);
	$(".options-block").css("width", $("#calendar-options").width() / 3);
	$("#calendar").css("height", ($(".calendar-cell").height() * $(".calendar-row").length) + $(".options-block").height() + 32);

	$(window).resize(function() {
		$(".day-cell").css("width", $(".calendar-row").width() / 7);
		$(".empty-cell").css({
		    width: $(".calendar-row").width() / 7,
		    height: $(".day-cell").height()
	    });
		$(".calendar-cell").css("width", $(".calendar-row").width() / 7);
		$(".options-block").css("width", $("#calendar-options").width() / 3);
	});
});