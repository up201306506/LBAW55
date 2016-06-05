<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	if (!empty($_POST['action'])) {
		if ($_POST['action'] == "add") {
			if (!empty($_POST['classid']) && !empty($_POST['userid'])) {
				insertNewUserClass($_POST['userid'], $_POST['classid']);
			}
		} else if ($_POST['action'] == "ban") {
			if (!empty($_POST['classid']) && !empty($_POST['userid'])) {
				banUserFromClass($_POST['classid'], $_POST['userid']);
			}
		}
	}

?>