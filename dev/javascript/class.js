$(document).ready(function() {
	$("#shide").click(function() {
		if ($("#shide").text() === "Show Participants") {
			$("#participants").show("slow");
			$("#shide").text("Hide Participants");
		} else {
			$("#participants").hide("slow");
			$("#shide").text("Show Participants");
		}
	});
});