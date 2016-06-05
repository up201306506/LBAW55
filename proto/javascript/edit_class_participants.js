$(document).ready(function() {
	$(".ban").click(function() {
		if ($(this).parent().parent().attr("class") != "danger") {
			$(this).parent().parent().addClass("danger");
		}
	});

	$(".undo").click(function() {
		if ($(this).parent().parent().attr("class") == "danger") {
			$(this).parent().parent().removeClass("danger");
		}
	});

	$("#done").click(function() {
		var users = "";

		$(".danger").each(function() {
			if (users == "") {
				users += $(this).attr("id");
			} else {
				users += "," + $(this).attr("id");
			}
		});

		$.post("../../action/edit_class_participants_action.php", { classid: $("h1").attr("id"), users: users }, function() {
			window.location = "../../public/class.php?id=" + $("h1").attr("id");
		});
	});
});