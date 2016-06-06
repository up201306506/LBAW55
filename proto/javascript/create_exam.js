$(document).ready(function() {
	var listElement = $('#questions');
	var perPage = 7;
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
		$('.input-group.question').each(function() {
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

	$(".input-group-addon").click(function() {
		if ($(this).attr("class") == "input-group-addon plus") {
			$(this).removeClass("plus").addClass("minus");
			$(this).html("<span class=\"glyphicon glyphicon-minus\"></span>");
		} else if ($(this).attr("class") == "input-group-addon minus") {
			$(this).removeClass("minus").addClass("plus");
			$(this).html("<span class=\"glyphicon glyphicon-plus\"></span>");
		}
	});

	$("#done").click(function() {
		var questions = "";

		$(".minus").each(function() {
			if (questions == "") {
				questions += $(this).parent().attr("id");
			} else {
				questions += "," + $(this).parent().attr("id");
			}
		});

		if (questions == "") {
			$(".alert").css("display", "block");
			$("#error").html(" The exam must have at least one question!");
		} else {
			$.post("../../action/create_exam_action.php", { identification: $("#identification").val(), classid: $("#class").val(), date: $("#date").val(), hour: $("#hour").val(), local: $("#local").val(), duration: duration, password: $("#password").val(), re_password: $("#re-password").val(), information: $("#information").val(), correct: $("#correct").val(), incorrect: $("#incorrect").val(), questions: questions }, function(data) {
				if (data == "diff-pass") {
					$(".alert").css("display", "block");
					$("#error").html(" Your confirmation password is different!");
				} else if (data == "empty-field") {
					$(".alert").css("display", "block");
					$("#error").html(" Please fill in all mandatory input fields!");
				} else if (data == "success") {
					window.location = "../../profile/profile.php";
				}
				alert(data);
			});
		}

		// console.log($("#identification").val() + "; " + $("#class").val() + "; " + $("#date").val() + "; " + $("#hour").val() + "; " + $("#local").val() + "; " + $("#duration").val() + "; " + $("#password").val() + "; " + $("#information").val() + "; " + $("#correct").val() + "; " + $("#incorrect").val());
	});
});