$(document).ready(function() {
	if ($(".container").width() <= 970 && $(".container").width() > 750) {
		var events = $("#events").detach();
		var calendar = $("#calendar").detach();
		var options = $("#options").detach();
		$("#first").append(events);
		$("#first").append(calendar);
		$("#first").append(options);
	} else {
		var events = $("#events").detach();
		var calendar = $("#calendar").detach();
		var options = $("#options").detach();
		$("#third").append(events);
		$("#third").append(calendar);
		$("#third").append(options);
	}

	$("#month li").css("width", Math.floor($("#month").width() / 3));
	$("#weekdays li").css("width", Math.floor($("#weekdays").width() / 7));
	$("#days li").css("width", Math.floor($("#days").width() / 7));

	$(window).resize(function() {
		if ($(".container").width() <= 970 && $(".container").width() > 750) {
			var events = $("#events").detach();
			var calendar = $("#calendar").detach();
			var options = $("#options").detach();
			$("#first").append(events);
			$("#first").append(calendar);
			$("#first").append(options);
		} else {
			var events = $("#events").detach();
			var calendar = $("#calendar").detach();
			var options = $("#options").detach();
			$("#third").append(events);
			$("#third").append(calendar);
			$("#third").append(options);
		}
		
		$("#month li").css("width", Math.floor($("#month").width() / 3));
		$("#weekdays li").css("width", Math.floor($("#weekdays").width() / 7));
		$("#days li").css("width", Math.floor($("#days").width() / 7));
	});

	$("#shide").click(function() {
		if ($("#shide").text() == "Show Participants") {
			$("#participants").css("display", "block");
			$("#shide").text("Hide Participants");
		} else {
			$("#participants").css("display", "none");
			$("#shide").text("Show Participants");
		}
	});
});