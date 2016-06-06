<?php

	/*This summons the database and smarty initializer */
	include_once('../../config/init.php');
	include_once('../../database/user_functions.php');
	include_once('../../action/session_check.php');
	include_once('../../database/class_functions.php');
	include_once('../../database/exam_functions.php');

	if ($user_type != 'Professor') {
		header('Location: ' . $BASE_URL . 'profile/profile.php');
	}

	/*Other PHP actions should go here*/
	$smarty->assign('pagename', 'Create Exam');

	$smarty->assign('bootstrap', "../../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../../css/create_exam.css");
	$smarty->assign('cssnavbar', "../../css/navbar.css");

	$smarty->assign('script_boot', "../../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../../javascript/jquery-1.12.1.min.js");
	$smarty->assign('script', "../../javascript/create_exam.js");
	
	/*Session variables*/
	$smarty->assign('session_username', getUsername($_SESSION['userid']));

	/*Other variables*/
	$classes_owned = getClassByOwnerID($_SESSION['userid']);
	$classes_managed = getClassByManagerID($_SESSION['userid']);
	$classes = array_merge($classes_owned, $classes_managed);

	$questions = getAllQuestions();

	$answers = [];
	foreach ($questions as $question) {
		$answers[$question['questionid']] = getAnswers($question['questionid']);
	}

	$smarty->assign('questions', $questions);
	$smarty->assign('answers', $answers);
	$smarty->assign('classes', $classes);
	
	/*This summons the smarty template*/
	$smarty->display('professor/exam/create_exam.tpl');

?>