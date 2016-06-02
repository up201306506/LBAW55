<?php

	/*This summons the database and smarty initializer */
	include_once('../config/init.php');
	include_once('../database/user_functions.php');

	/*Other PHP actions should go here*/
	$smarty->assign('pagename', 'Class');

	$smarty->assign('bootstrap', "../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../css/class.css");
	$smarty->assign('cssnavbar', "../css/navbar.css");

	$smarty->assign('script_boot', "../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../javascript/jquery-1.12.1.min.js");
	$smarty->assign('script', "../javascript/class.js");
	
	/*Session variables*/
	$smarty->assign('session_username', getUsername($_SESSION['userid']));
	$smarty->assign('usertype', getAccountType($_SESSION['userid']));

	/*Other variables*/
	$manager = getManagerOfClass(getClassById($_GET['id'])['directorid'])['name'];
	$smarty->assign('class', getClassById($_GET['id']));
	$smarty->assign('manager', $manager);

	$participants = array_merge(getClassProfessors($_GET['id']), getClassStudents($_GET['id']));
	$smarty->assign('participants', $participants);
	$smarty->assign('exams', getExamsOfClass($_GET['id']));

	/*This summons the smarty template*/
	$smarty->display('public/class.tpl');

?>