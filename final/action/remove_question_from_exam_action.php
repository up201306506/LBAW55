<?php

	include_once('../config/init.php');
	include_once('../database/exam_functions.php');

	if (isset($_POST['remove'])) {
		if ($_POST['remove'] == "true") {
			removeQuestionFromExam($_POST['examid'], $_POST['questionid']);
			header('Location: ' . $BASE_URL . 'admin/manage_exams.php');
		}
	}

?>