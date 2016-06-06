<?php

	/*This summons the database and smarty initializer */
	include_once('../config/init.php');
	include_once('../action/edit_exam_action.php');
	include_once('../action/session_check.php');

	if ($user_type != 'Administrator') {
		header('Location: ' . $BASE_URL . 'profile/profile.php');
	}
	
	/*Other PHP actions should go here*/
	$smarty->assign('pagename', 'Edit Exam');

	$smarty->assign('bootstrap', "../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../css/edit_exam.css");
	$smarty->assign('cssnavbar', "../css/navbar.css");

	$smarty->assign('script_boot', "../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../javascript/jquery-1.12.1.min.js");
	$smarty->assign('script', "../javascript/edit_exam.js");
	
	/*Session variables*/
	$smarty->assign('session_username', getUsername($_SESSION['userid']));

	/*Exam*/
	$smarty->assign('error', $error);
	$smarty->assign('exam', getExamById($_GET['id']));

	$questions = getExamQuestions($_GET['id']);

	$answers = [];
	foreach ($questions as $question) {
		$answers[$question['questionid']] = getAnswers($question['questionid']);
	}
	
	$smarty->assign('questions', $questions);
	$smarty->assign('answers', $answers);

	/*This summons the smarty template*/
	$smarty->display('admin/edit_exam.tpl');

?>