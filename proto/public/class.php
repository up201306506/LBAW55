<?php

	/*This summons the database and smarty initializer */
	include_once('../config/init.php');
	include_once('../database/user_functions.php');
	include_once('../action/session_check.php');
	include_once('../database/class_functions.php');
	
	/* Check if Class is Private and if User Belongs*/
	$this_class = getClassById($_GET['id']);
	$this_class_private = !empty($this_class['password']);
	if($user_type == 'Student')
		$this_class_belong = checkStudentBelongsClass($_SESSION['userid'], $_GET['id']);
	elseif ($user_type == 'Professor')
		$this_class_belong = checkProfessBelongsClass($_SESSION['userid'], $_GET['id']);
	else
		$this_class_belong = true;
	
	if ($this_class_private && !$this_class_belong){
		if($user_type == 'Student')
			header('Location: ../public/enroll_class.php?id=' . $_GET['id']);
		if($user_type == 'Professor')
			header('Location:' . $_SERVER['HTTP_REFERER']);
		exit;
	}

	$smarty->assign('this_class_belong', $this_class_belong);
	
	/*Session variables*/
	$smarty->assign('session_username', getUsername($_SESSION['userid']));
	$smarty->assign('usertype', getAccountType($_SESSION['userid']));

	/*Other variables*/
	$manager = getManagerOfClass($this_class['directorid'])['name'];
	$smarty->assign('class', $this_class);
	$smarty->assign('manager', $manager);

	/*Participants*/
	$participants = array_merge(getClassProfessors($_GET['id']), getClassStudents($_GET['id']));
	$smarty->assign('participants', $participants);
	$smarty->assign('exams', getExamsOfClass($_GET['id']));

	/*Calendar*/
	$smarty->assign('month', date('F'));
	$smarty->assign('days', date('t'));
	$smarty->assign('interval', abs(date('N') - date('j')));
	
	
	/*Other PHP actions should go here*/
	$smarty->assign('pagename', 'Class');
	$smarty->assign('bootstrap', "../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../css/class.css");
	$smarty->assign('cssnavbar', "../css/navbar.css");
	$smarty->assign('script_boot', "../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../javascript/jquery-1.12.1.min.js");
	$smarty->assign('script', "../javascript/class.js");

	/*This summons the smarty template*/
	$smarty->display('public/class.tpl');

?>