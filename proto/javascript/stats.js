$(document).ready(function() {
	$("#export").click(function() {
		if ($("tbody tr").length > 0) {
			var content = "";
			var filetype = $("input[name=\"filetype\"]:checked").val();

			if (filetype == "xml") {
				content = "<stats>\n";
				$("tbody tr").each(function() {
					$(this).children().each(function(index) {
						switch (index) {
						case 0:
							content += "\t<exam>\n" + "\t\t<identification>" + $(this).html() + "</identification>\n";
							break;
						case 1:
							content += "\t\t<minimum>" + $(this).html() + "</minimum>\n";
							break;
						case 2:
							content += "\t\t<maximum>" + $(this).html() + "</maximum>\n";
							break;
						case 3:
							content += "\t\t<average>" + $(this).html() + "</average>\n";
							break;
						case 4:
							content += "\t\t<approvedpercentage>" + $(this).html() + "</approvedpercentage>\n" + "\t</exam>\n";
							break;
						}
					});
				});
				content += "</stats>";
			} else if (filetype == "csv") {
				$("tbody tr").each(function() {
					$(this).children().each(function(index) {
						if (index != 4) {
							content += $(this).html() + ",";
						} else {
							content += $(this).html() + "\n";
						}
					});
				});
			}

			uriContent = "data:application/octet-stream;charset=utf-8," + encodeURIComponent(content);
			window.open(uriContent, 'myDocument');
		} else {
			alert("There is no information to export!");
		}
	});
});