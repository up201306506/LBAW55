<?php
	
	$error;

	if (isset($_POST['submit'])) {
		if (!empty($_POST['password'])) {
			$class = correctClassPassword($_POST['password'], $_GET['id']);
			if (!empty($class)) {
				insertNewUserClass($_SESSION['userid'], $_GET['id']);
				header('Location: ' . $BASE_URL . 'public/class.php?id=' . $_GET['id']);
			} else {
				$error = 'Wrong Password!';
			}
		} else {
			$class = getClassById($_GET['id']);
			if (empty($class['password'])){
				insertNewUserClass($_SESSION['userid'], $_GET['id']);
				header('Location: ' . $BASE_URL . 'public/class.php?id=' . $_GET['id']);
			} else {
				$error = 'Something went wrong!';
			}
		}
	}

?>