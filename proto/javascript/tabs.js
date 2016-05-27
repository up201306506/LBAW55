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
});