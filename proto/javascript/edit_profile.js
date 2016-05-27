$(document).ready(function() {
	$("#name-btn").click(function() {
		$.post("../action/edit_profile_action.php", { option: "name", name: $("#name").val() }, function(result) {
			if (result === "name") {
				window.location = "profile.php";
			} else {
				alert("fill input field");
			}
		});
	});

	$("#email-btn").click(function() {
		$.post("../action/edit_profile_action.php", { option: "email", email: $("#email").val() }, function(result) {
			if (result === "email") {
				window.location = "profile.php";
			} else {
				alert("fill input field");
			}
		});
	});

	$("#password-btn").click(function() {
		$.post("../action/edit_profile_action.php", { option: "password", password: $("#password").val(), re_password: $("#re-password").val() }, function(result) {
			if (result === "password") {
				window.location = "profile.php";
			} else {
				alert("fill input field");
			}
		});
	});

	$("#description-btn").click(function() {
		$.post("../action/edit_profile_action.php", { option: "description", description: $("#description").val() }, function(result) {
			if (result === "description") {
				window.location = "profile.php";
			} else {
				alert("fill input field");
			}
		});
	});
});