<?php

	include_once('../config/init.php');
	include_once('../database/exam_functions.php');

	if (!empty($_POST['identification']) && !empty($_POST['classid']) && !empty($_POST['date']) && !empty($_POST['hour']) && !empty($_POST['duration']) && !empty($_POST['local']) && !empty($_POST['information']) && !empty($_POST['correct']) && !empty($_POST['incorrect']) && !empty($_POST['questions'])) {

		if (!empty($_POST['password']) && !empty($_POST['re_password'])) {
			if ($_POST['password'] === $_POST['re_password']) {
				$examid = insertNewExamWithPassword($_POST['identification'], $_POST['classid'], $_POST['date'], $_POST['hour'], $_POST['duration'], $_POST['local'], $_POST['information'], $_POST['password']);

				$i = 0;
				$ids = explode(",", $_POST['questions']);
				foreach ($ids as $id) {
					insertQuestionInExam($examid, $id, $_POST['correct'], $_POST['incorrect'], $i);
					$i++;
				}

				echo "success";
			} else {
				echo "diff-pass";
			}
		} else {
			$examid = insertNewExamWithoutPassword($_POST['identification'], $_POST['classid'], $_POST['date'], $_POST['hour'], $_POST['duration'], $_POST['local'], $_POST['information']);
			
			$i = 0;
			$ids = explode(",", $_POST['questions']);
			foreach ($ids as $id) {
				insertQuestionInExam($examid, $id, $_POST['correct'], $_POST['incorrect'], $i);
				$i++;
			}

			echo "success";
		}
	} else {
		echo "empty-field";
	}

?>