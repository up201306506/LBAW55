<?php

	if(!isset($_GET['page'])){
		header('Location:'.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'] . "&page=1");
		die;
	}

	/*This summons the database and smarty initializer */
	include_once('../../config/init.php');
	include_once('../../database/user_functions.php');
	include_once('../../database/class_functions.php');
	include_once('../../database/exam_functions.php');
	include_once('../../action/session_check.php');

	/*Other PHP actions should go here*/
	$exam = getExamById($_GET['id']);
	$smarty->assign('pagename', $exam['examidentification']);
	$smarty->assign('bootstrap', "../../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../../css/exam.css");
	$smarty->assign('cssnavbar', "../../css/navbar.css");
	$smarty->assign('script_boot', "../../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../../javascript/jquery-1.12.1.min.js");
	$smarty->assign('script', "../../javascript/exam.js");
	
	/*Session variables*/
	$smarty->assign('session_username', getUsername($_SESSION['userid']));
	
	/*Other variables*/
	$smarty->assign('exam', $exam);
	
	//Check if exam is private
	$exam_private = isset($exam['password']);
	$smarty->assign('exam_private', $exam_private);
	
	//Check if exam is on-going
	$today = date("Y-m-d H:i:s");
	$exam_start_date = date("Y-m-d H:i:s", strtotime($exam['date'] . " " . $exam['beginningtime']));
	$exam_finish_date = date("Y-m-d H:i:s", strtotime($exam['date'] . " " . $exam['beginningtime'] .'+'.$exam['duration'].' minutes'));
	//echo $today . "<br>";
	//echo $exam_start_date . "<br>";
	//echo $exam_finish_date . "<br>";
	if ($today > $exam_finish_date) {
		//echo "Exam is now finished";
		$exam_ongoing = false;
		$exam_is_finished = true;
	} elseif ($today > $exam_start_date) {
		//echo "Exam is on-going";
		$exam_ongoing = true;
		$exam_is_finished = false;
		$exam_timeleft = strtotime($exam_finish_date) - strtotime($today);
		//echo $exam_timeleft;
	} else {
		//echo "Exam has not started";
		$exam_ongoing = false;
		$exam_is_finished = false;
	}
	
	//Get exam questions
	$questions = getExamQuestions($_GET['id']);
	$answers = [];
	foreach ($questions as $question) {
		$answers[$question['questionid']] = getAnswers($question['questionid']);
	}
	$smarty->assign('questions', $questions);
	$smarty->assign('answers', $answers);
		
	
	//User image
	$img_url = $BASE_URL . "css/res/user_img/".$_SESSION['userid'].".png";
	$use_image = file_exists($BASE_DIR . "css/res/user_img/".$_SESSION['userid'].".png");
	$smarty->assign('img_url', $img_url);
	$smarty->assign('use_image', $use_image);	
	
	/*This summons the smarty template*/
	$smarty->display('student/exam/exam.tpl');

?>