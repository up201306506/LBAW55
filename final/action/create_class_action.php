<?php

	include_once('../config/init.php');
	include_once('../database/user_functions.php');

	$classid;

	if (!empty($_POST['classname']) && !empty($_POST['description'])) {
		if (!empty($_POST['password']) && !empty($_POST['re_password'])) {
			if ($_POST['password'] === $_POST['re_password']) {
				$classid = insertNewClassWithPass($_SESSION['userid'], $_POST['classname'], $_POST['password'], $_POST['description'], date('Y-m-d'));
			}
		} else {
			$classid = insertNewClassWithoutPass($_SESSION['userid'], $_POST['classname'], $_POST['description'], date('Y-m-d'));
		}
	}

	if (!empty($_POST['professors'])) {
		$ids = explode(",", $_POST['professors']);
		foreach ($ids as $id) {
			insertProfessorInClass($classid, $id);
		}
	}

?>