<?php

	/*This summons the database and smarty initializer */
	include_once('../config/init.php');
	include_once('../database/user_functions.php');
	include_once('../database/class_functions.php');
	include_once('../action/session_check.php');

	/*Other PHP actions should go here*/

	$pagename = getName($_GET['id']) . "'s Profile";
	$smarty->assign('pagename', $pagename);

	$smarty->assign('bootstrap', "../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../css/profile.css");
	$smarty->assign('cssnavbar', "../css/navbar.css");

	$smarty->assign('script_boot', "../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../javascript/jquery-1.12.1.min.js");
	$smarty->assign('script', "../javascript/profile.js");
	
	/*Session variables*/
	$smarty->assign('session_username', getUsername($_SESSION['userid']));

	/*Other variables*/
	$smarty->assign('name', getName($_GET['id']));
	$smarty->assign('email', getEmail($_GET['id']));
	$smarty->assign('description', getDescription($_GET['id']));
	//$smarty->assign('classes', getClassesByUser($_GET['id']));
	
	$profile_usertype = getUserbyID($_GET['id'])['accounttypevar'];
	if($profile_usertype == "Student") {
		$smarty->assign('classes', getClassesByUser($_GET['id']));
	} else {
		$classes_owned = getClassByOwnerID($_GET['id']);
		$classes_managed = getClassByManagerID($_GET['id']);
		$classes = array_merge($classes_owned, $classes_managed);
		//echo print_r($classes,true);
		$smarty->assign('classes', $classes);
	}
	
	
	
	/*Calendar*/
	$smarty->assign('month', date('F'));
	$smarty->assign('days', date('t'));
	$smarty->assign('interval', abs(date('N') - date('j')));
	
	$img_url = $BASE_URL . "css/res/user_img/".$_GET['id'].".png";
	$use_image = file_exists($BASE_DIR . "css/res/user_img/".$_GET['id'].".png");
	$smarty->assign('img_url', $img_url);
	$smarty->assign('use_image', $use_image);
	
	
	
	
	/*This summons the smarty template*/
	$smarty->display('public/profile.tpl');

?>