$(document).ready(function() {
	var WIDTH = 500;

	if($(window).width() < 768) {
		$("#form-box").width($(window).width());
	} else {
		$("#form-box").width(WIDTH);
	}

	$(window).resize(function() {
		if($(window).width() < 768) {
			$("#form-box").width($(window).width());
		} else {
			$("#form-box").width(WIDTH);
		}
	});

	$("#tabs li span").click(function() {
		var tab_id = $(this).parent().attr("data-tab");

		$("#tabs li").removeClass("current");
		$(".tab-content").removeClass("current");

		$(this).parent().addClass("current");
		$("#" + tab_id).addClass("current");
	});

	$("#login input").click(function() {
		$.post("action/login_request.php", { username: $("#username").val(), password: $("#password").val() }, function(result) {
			if (result === "success") {
				window.location = "profile/profile.php";
			} else if (result === "pending") {
				alert("still pending");
			} else if (result === "wrongCredentials") {
				alert("wrong credentials");
			} else if (result === "fillInputFields") {
				alert("fill input fields");
			}
		});
	});

	$("#signup input").click(function() {
		var usertype;
		if ($("#student").is(":checked")) {
			usertype = "Student";
		} else if ($("#professor").is(":checked")) {
			usertype = "Professor";
		}

		$.post("action/create_user.php", { username: $("#username2").val(), password: $("#password2").val(), name: $("#name").val(), email: $("#email").val(), usertype: usertype }, function(result) {
			if (result === "success") {
				window.location = "profile/profile.php";
			} else if (result === "pending") {
				alert("still pending");
			} else if (result === "failToRegister") {
				alert("failed to register");
			} else if (result === "fillInputFields") {
				alert("fill input fields");
			}
		});
	});
});




























