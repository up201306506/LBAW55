<?php

	include_once('../config/init.php');
	include_once('../database/exam_functions.php');

	if (!empty($_POST['questionid'])) {
		deleteQuestion($_POST['questionid']);
	}

?>