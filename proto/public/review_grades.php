<?php

	/*This summons the database and smarty initializer */
	include_once('../config/init.php');
	include_once('../database/user_functions.php');
	include_once('../database/class_functions.php');

	/*Other PHP actions should go here*/
	$smarty->assign('pagename', 'Review Grades');

	$smarty->assign('bootstrap', "../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../css/review_grades.css");
	$smarty->assign('cssnavbar', "../css/navbar.css");

	$smarty->assign('script_boot', "../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../javascript/jquery-1.12.1.min.js");
	
	/*Session variables*/
	$usertype = getAccountType($_SESSION['userid']);
	$smarty->assign('session_username', getUsername($_SESSION['userid']));
	$smarty->assign('usertype', $usertype);

	if ($usertype == 'Student') {
		$exams = getExamsOfClassAll($_GET['id']);

		$grades = [];
		foreach ($exams as $exam) {
			$grades[$exam['examid']] = getGrade($_SESSION['userid'], $exam['examid']);
		}

		$smarty->assign('exams', $exams);
		$smarty->assign('grades', $grades);
	} else if ($usertype == 'Professor') {
		$exams = getExamsOfClassAll($_GET['id']);
		$students = getClassStudents($_GET['id']);

		$grades = [];
		foreach ($exams as $exam) {
			foreach ($students as $student) {
				$grades[$student['userid']] = getGrade($student['userid'], $exam['examid']);
			}
		}

		$smarty->assign('exams', $exams);
		$smarty->assign('students', $students);
		$smarty->assign('grades', $grades);
	}
	
	/*This summons the smarty template*/
	$smarty->display('public/review_grades.tpl');

?>