<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	if (!empty($_POST['categoryid']) && !empty($_POST['question']) && !empty($_POST['answers']) && !empty($_POST['correct'])) {
		$questionid = insertNewQuestion($_POST['question'], $_POST['categoryid']);
		echo $questionid;

		$answers = explode("|:|", $_POST['answers']);
		for ($i = 0; $i < count($answers); $i++) {
			if ($i == $_POST['correct']) {
				$answerid = insertNewAnswer($answers[$i], 'true');
				insertAnswerAvailable($questionid, $answerid);
			} else {
				$answerid = insertNewAnswer($answers[$i], 'false');
				insertAnswerAvailable($questionid, $answerid);
			}
		}
	}

?>