<?php

	include_once('../database/user_functions.php');
	include_once('../database/exam_functions.php');

	$error;

	if (isset($_POST['edit-date'])) {
		if (!empty($_POST['date'])) {
			updateExamDate($_GET['id'], $_POST['date']);
			header('Location: ' . $BASE_URL . 'admin/manage_exams.php');
		} else {
			$error = 'New date can\'t be empty!';
		}
	} else if (isset($_POST['edit-duration'])) {
		if (!empty($_POST['duration'])) {
			updateExamDuration($_GET['id'], $_POST['duration']);
			header('Location: ' . $BASE_URL . 'admin/manage_exams.php');
		} else {
			$error = 'New duration can\'t be empty!';
		}
	} else if (isset($_POST['edit-new-password'])) {
		if (!empty($_POST['new-password']) && !empty($_POST['new-re-password'])) {
			if ($_POST['new-password'] === $_POST['new-re-password']) {
				updateExamPassword($_GET['id'], $_POST['new-password']);
				header('Location: ' . $BASE_URL . 'admin/manage_exams.php');
			} else {
				$error = 'Your confirmation password is different!';
			}
		} else {
			$error = 'New password can\'t be empty!';
		}
	} else if (isset($_POST['edit-add-password'])) {
		if (!empty($_POST['add-password']) && !empty($_POST['add-re-password'])) {
			if ($_POST['add-password'] === $_POST['add-re-password']) {
				updateExamPassword($_GET['id'], $_POST['add-password']);
				header('Location: ' . $BASE_URL . 'admin/manage_exams.php');
			} else {
				$error = 'Your confirmation password is different!';
			}
		} else {
			$error = 'You can\'t add an empty password!';
		}
	} else if (isset($_POST['edit-information'])) {
		if (!empty($_POST['information'])) {
			updateExamInformation($_GET['id'], $_POST['information']);
			header('Location: ' . $BASE_URL . 'admin/manage_exams.php');
		} else {
			$error = 'New information can\'t be empty!';
		}
	} else if (isset($_POST['edit-local'])) {
		if (!empty($_POST['local'])) {
			updateExamLocal($_GET['id'], $_POST['local']);
			header('Location: ' . $BASE_URL . 'admin/manage_exams.php');
		} else {
			$error = 'New local can\'t be empty!';
		}
	} else if (isset($_POST['remove'])) {
		if ($_POST['remove'] == "true") {
			echo $_POST['examid'] . "; " . $_POST['questionid'];
			// removeQuestionFromExam($_POST['examid'], $_POST['questionid']);
			// header('Location: ' . $BASE_URL . 'admin/manage_exams.php');
		}
	}

?>