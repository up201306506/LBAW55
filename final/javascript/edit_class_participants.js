$(document).ready(function() {
	var listElement = $('#users');
	var perPage = 15; 
	var numItems = listElement.children().size();
	var numPages = Math.ceil(numItems/perPage);

	$('.pagination').data("curr",0);

	var curr = 0;
	while(numPages > curr){
		$('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo('.pagination');
		curr++;
	}

	$('.pagination .page_link:first').addClass('active');

	listElement.children().css('display', 'none');
	listElement.children().slice(0, perPage).css('display', 'block');
	removeStyle();

	function removeStyle() {
		$('tr').each(function() {
			if ($(this).attr("style") == "display: block;") {
				$(this).removeAttr("style");
			}
		});
	}

	$('.pagination li a').click(function(){
		var clickedPage = $(this).html().valueOf() - 1;
		goTo(clickedPage,perPage);
	});

	function previous(){
		var goToPage = parseInt($('.pagination').data("curr")) - 1;
		if($('.active').prev('.page_link').length==true){
			goTo(goToPage);
		}
	}

	function next(){
		goToPage = parseInt($('.pagination').data("curr")) + 1;
		if($('.active_page').next('.page_link').length==true){
			goTo(goToPage);
		}
	}

	function goTo(page){
		var startAt = page * perPage,
		endOn = startAt + perPage;

		listElement.children().css('display','none').slice(startAt, endOn).css('display','block');
		$('.pagination').attr("curr",page);
		removeStyle();
	}

	$(".add").click(function() {
		$.post("../../action/edit_class_participants_action.php", { action: "add", classid: $("h1").attr("id"), userid: $(this).parent().parent().attr("id") }, function() {
			window.location = "edit_class_participants.php?id=" + $("h1").attr("id");
		});
	});

	$(".ban").click(function() {
		$.post("../../action/edit_class_participants_action.php", { action: "ban", classid: $("h1").attr("id"), userid: $(this).parent().parent().attr("id") }, function() {
			window.location = "edit_class_participants.php?id=" + $("h1").attr("id");
		});
	});
});