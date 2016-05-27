<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	switch ($_POST['option']) {
	case "name":
		if (!empty($_POST['name'])) {
			// updateName($_POST['name'], $_SESSION['userid']);
			echo "name";
		} else {
			echo "fillInputFields";
		}
		break;
	case "email":
		if (!empty($_POST['email'])) {
			//updateEmail($_POST['email'], $_SESSION['userid']);
			echo "email";
		} else {
			echo "fillInputFields";
		}
		break;
	case "password":
		if (!empty($_POST['password']) && !empty($_POST['re_password'])) {
			if ($_POST['password'] === $_POST['re_password']) {
				//updatePassword($_POST['password'], $_SESSION['userid']);
				echo "password";
			} else {
				echo "differentPass"
			}
		} else {
			echo "fillInputFields";
		}
		break;
	case "description":
		if (!empty($_POST['description'])) {
			//updateDescription($_POST['description'], $_SESSION['userid']);
			echo "description";
		} else {
			echo "fillInputFields";
		}
		break;
	}

?>