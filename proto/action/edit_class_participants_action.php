<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	if (!empty($_POST['classid']) && !empty($_POST['users'])) {
		$ids = explode(",", $_POST['users']);
		foreach ($ids as $id) {
			banUserFromClass($_POST['classid'], $id);
		}
	}

?>