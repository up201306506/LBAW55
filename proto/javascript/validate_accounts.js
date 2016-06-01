$(document).ready(function() {
	$(".ok-option").click(function() {
		if ($(this).parent().parent().attr("class") == "danger") {
			$(this).parent().parent().removeClass("danger");
			$(this).parent().parent().addClass("success");
		} else {
			$(this).parent().parent().addClass("success");
		}
	});

	$(".remove-option").click(function() {
		if ($(this).parent().parent().attr("class") == "success") {
			$(this).parent().parent().removeClass("success");
			$(this).parent().parent().addClass("danger");
		} else {
			$(this).parent().parent().addClass("danger");
		}
	});

	$(".undo-option").click(function() {
		if ($(this).parent().parent().attr("class") == "success") {
			$(this).parent().parent().removeClass("success");
		} else if ($(this).parent().parent().attr("class") == "danger") {
			$(this).parent().parent().removeClass("danger");
		}
	});
	
	$("#buttondone").click(function() {
		var arr_good = "";
		var arr_bad = "";

		$(".success").each( function(){
			if (arr_good == "")
				arr_good += $(this).attr("id");
			else
				arr_good += "," + $(this).attr("id");
		});
		
		$(".danger").each( function(){
			if (arr_bad == "")
				arr_bad += $(this).attr("id");
			else
				arr_bad += "," + $(this).attr("id");
		});
		
		$.post("../action/validate_professor_action.php", { validate: arr_good, ban: arr_bad }, function() {
			window.location = '../admin/validate_accounts.php';
		});
		
	});
});