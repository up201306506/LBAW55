<?php

	/*This summons the database and smarty initializer */
	include_once('../config/init.php');
	include_once('../database/exam_functions.php');
	include_once('../database/user_functions.php');
	
	/*Other PHP actions should go here*/
	$smarty->assign('pagename', 'Manage Questions');

	$smarty->assign('bootstrap', "../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../css/manage_questions.css");
	$smarty->assign('cssnavbar', "../css/navbar.css");

	$smarty->assign('script_boot', "../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../javascript/jquery-1.12.1.min.js");
	$smarty->assign('script', "../javascript/manage_questions.js");
	
	/*Session variables*/
	$smarty->assign('session_username', getUsername($_SESSION['userid']));

	/*Questions*/
	$questions = getAllQuestions();
	$smarty->assign('categorylist', getAllCategories());

	$answers = [];
	foreach ($questions as $question) {
		$answers[$question['questionid']] = getAnswers($question['questionid']);
	}
	//echo print_r($answers);

	$smarty->assign('questions', $questions);
	$smarty->assign('answers', $answers);
		
	/*This summons the smarty template*/
	$smarty->display('admin/manage_questions.tpl');

?>