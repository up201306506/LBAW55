<?php

	include_once('../config/init.php');
	include_once('../database/user_functions.php');

	if (!empty($_POST['userid']) && !empty($_POST['examid']) && !empty($_POST['questions']) && !empty($_POST['answers'])) {
		$questionsids = explode(",", $_POST['questions']);
		$answersids = explode(",", $_POST['answers']);

		for ($i = 0; $i < count($questionsids); $i++) {
			updateUserAnswer($_POST['examid'], $_POST['userid'], $answersids[$i], $questionsids[$i]);
		}
		updateTries($_POST['examid'], 1);

		echo "success";
	}

?>