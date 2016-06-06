$(document).ready(function() {
	$(".row").css("margin-top", ($(".container").height() - $(".row").height()) / 2);

	$("#tabs li").click(function() {
		var tab_id = $(this).attr("data-tab");

		$("#tabs li").removeClass("current");
		$(".tab-content").removeClass("current");

		$(this).parent().addClass("current");
		$("#" + tab_id).addClass("current");

		$(".row").css("margin-top", ($(".container").height() - $(".row").height()) / 2);
	});
});