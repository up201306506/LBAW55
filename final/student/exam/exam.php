<?php

	date_default_timezone_set('Europe/Lisbon');

	/*This summons the database and smarty initializer */
	include_once('../../config/init.php');
	include_once('../../database/user_functions.php');
	include_once('../../database/class_functions.php');
	include_once('../../database/exam_functions.php');
	include_once('../../action/session_check.php');

	if ($user_type == 'Administrator') {
		header('Location: ' . $BASE_URL . 'profile/profile.php');
	}

	/*Other PHP actions should go here*/
	$exam = getExamById($_GET['id']);

	if ($_SESSION['userid'] == "Student" && $exam['tries'] > 0) {
		header('Location: ' . $BASE_URL . 'student/exam/exam_error.php?error=You have already completed this test!');
	}

	if ($_SESSION['userid'] == "Student" && $exam['password']) {
		if ($_SESSION['allow'] != 'true') {
			header('Location: enroll_exam.php?id=' . $_GET['id']);
		}
	}

	$smarty->assign('pagename', $exam['examidentification']);
	$smarty->assign('bootstrap', "../../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../../css/exam.css");
	$smarty->assign('cssnavbar', "../../css/navbar.css");
	$smarty->assign('script_boot', "../../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../../javascript/jquery-1.12.1.min.js");
	$smarty->assign('script', "../../javascript/exam.js");
	
	/*Session variables*/
	$smarty->assign('userid', $_SESSION['userid']);
	$smarty->assign('session_username', getUsername($_SESSION['userid']));
	$smarty->assign('usertype', getAccountType($_SESSION['userid']));
	
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
	$exam_timeleft = 0;
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

	if ($usertype == "Student" && !$exam_ongoing) {
		if ($exam_is_finished) {
			header('Location: ' . $BASE_URL . 'student/exam/exam_error.php?error=This is exam is already over!');
		} else {
			header('Location: ' . $BASE_URL . 'student/exam/exam_error.php?error=This exam has not started yet!');
		}
	}

	$smarty->assign('exam_start_date',$exam_start_date);
	$smarty->assign('exam_ongoing', $exam_ongoing);
	$smarty->assign('exam_is_finished', $exam_is_finished);
	$smarty->assign('exam_timeleft', $exam_timeleft);
	
	//Get exam questions
	$questions = getExamQuestions($_GET['id']);
	$answers = [];
	foreach ($questions as $question) {
		$answers[$question['questionid']] = getAnswers($question['questionid']);
	}
	$smarty->assign('questions', $questions);
	$smarty->assign('answers', $answers);
		
	//If a user is permited in the exam and the exam is ongoing, his exam ecution should be tracked in the database
	if($user_type == "Student" && $exam_ongoing){

		//Generate Grades table
		$user_grade_data =  getGrade($_SESSION['userid'], $_GET['id']);
		if (!isset($user_grade_data)){
			insertGrade($_SESSION['userid'], $_GET['id']);
			$user_grade_data =  getGrade($_SESSION['userid'], $_GET['id']);
		}	
		
		//Generate Answers Table
		foreach ($questions as $question) {
			$tempvar = false;
			$tempvar = getUserAnswer($_SESSION['userid'], $_GET['id'],$question['questionid']);
			if (!$tempvar)
				insertUserAnswer($_SESSION['userid'], $_GET['id'],$question['questionid']);
		}
		
	}
	
	//User image
	$img_url = $BASE_URL . "css/res/user_img/".$_SESSION['userid'].".png";
	$use_image = file_exists($BASE_DIR . "css/res/user_img/".$_SESSION['userid'].".png");
	$smarty->assign('img_url', $img_url);
	$smarty->assign('use_image', $use_image);	
	
	/*This summons the smarty template*/
	$smarty->display('student/exam/exam.tpl');

?>