<?php

	if (!empty($_POST['filetype']) && !empty($_POST['content'])) {
		$filetype = $_POST['filetype'];
		$content = $_POST['content'];

		header("Content-Type: text/$filetype;");
		header("Content-Disposition: attachment; filename=stats.$filetype");
		echo $content;
	}

?>