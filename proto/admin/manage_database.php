<?php

	/*This summons the database and smarty initializer */
	include_once('../config/init.php');
	include_once('../database/user_functions.php');
	include_once('../database/exam_functions.php');
	include_once('../database/class_functions.php');
	
	/*Other PHP actions should go here*/
	
	//Users
	$userlist = getAllUsers();
	$length = count($userlist);
	$user_pages_needed = $length / 15;
	if($length%15 != 0)
		$user_pages_needed = $user_pages_needed + 1;
	$userlist = array_slice($userlist, 0, 15);
	$smarty->assign('userlist', $userlist);
	$smarty->assign('user_pages_needed', $user_pages_needed);
	
	//Exams
	$examlist = getAllExams();
	$length = count($examlist);
	$exam_pages_needed = $length / 15;
	if($length%15 != 0)
		$exam_pages_needed = $exam_pages_needed + 1;
	$examlist = array_slice($examlist, 0, 15);
	$smarty->assign('examlist', $examlist);
	$smarty->assign('exam_pages_needed', $exam_pages_needed);
	
	$exam_owners = [];
	foreach ($examlist as $exam){
		$temp = getExamsClassID($exam[examid]);
		$temp = getClassOwnerID($temp[classid]);
		$exam_owners[$exam[examid]] =getUserbyID($temp[directorid])[name];
	}
	$smarty->assign('exam_owners', $exam_owners);
	
	//Questions
	$categorylist = getAllCategories();
	$smarty->assign('categorylist', $categorylist);
	
	
	$smarty->assign('pagename', 'Manage Database');
	$smarty->assign('bootstrap', "../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../css/manage_database.css");
	$smarty->assign('cssnavbar', "../css/navbar.css");
	$smarty->assign('script_boot', "../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../javascript/jquery-1.12.1.min.js");
	$smarty->assign('script', "../javascript/manage_database.js");
	
	/*Session variables*/
	$smarty->assign('session_username', getUsername($_SESSION['userid']));
	/*This summons the smarty template*/
	$smarty->display('admin/manage_database.tpl');
	
?>