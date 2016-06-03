<?php

	include_once('../config/init.php');
	include_once('../database/user_functions.php');

	if (!empty($_POST['password'])) {
		$class = correctClassPassword($_POST['password']);
		if (!empty($class)) {
			insertNewUserClass($_SESSION['userid'], $class['classid']);
			header('Location: ' . $BASE_URL . 'public/class.php?id=' . $class['classid']);
		} else {
			header('Location: ' . $BASE_URL . 'profile/profile.php');
		}
	}

?>