<?php

	$error;

	if (isset($_POST['done'])) {
		if (!empty($_POST['classname']) && !empty($_POST['description'])) {
			if (!empty($_POST['password']) && !empty($_POST['re-password'])) {
				if ($_POST['password'] === $_POST['re-password']) {
					insertNewClassWithPass($_SESSION['userid'], $_POST['classname'], $_POST['password'], $_POST['description'], date('Y-m-d'));
					header('Location: ../../profile/profile.php');
				} else {
					$error = 'Your confirmation password is different!';
				}
			} else {
				insertNewClassWithoutPass($_SESSION['userid'], $_POST['classname'], $_POST['description'], date('Y-m-d'));
				header('Location: ../../profile/profile.php');
			}
		} else {
			$error = 'The class must have, at least, a name!';
		}
	}

?>