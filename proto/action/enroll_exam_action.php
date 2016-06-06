<?php

	$error;

	if (isset($_POST['enroll'])) {
		if (!empty($_POST['password'])) {
			if (correctExamPassword($_POST['password'], $_GET['id'])) {
				$_SESSION['allow'] = 'true';
				header('Location: ' . $BASE_URL . 'student/exam/exam.php?id=' . $_GET['id']);
			} else {
				$error = 'Wrong password!';
			}
		}
	}

?>