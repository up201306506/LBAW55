<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	if (!empty($_POST['ban'])) {
		if ($_POST['ban'] === "true") {
			banUser($_POST['id']);
		} else if ($_POST['ban'] === "false") {
			unbanUser($_POST['id']);
		}
	}

?>