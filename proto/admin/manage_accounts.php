<?php

	/*This summons the database and smarty initializer */
	include_once('../config/init.php');

	/*Other PHP actions should go here*/
	$smarty->assign('pagename', 'Manage Users');

	$smarty->assign('bootstrap', "../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../css/profile.css");
	$smarty->assign('cssnavbar', "../css/navbar.css");

	$smarty->assign('script_boot', "../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../javascript/jquery-1.12.1.min.js");
	$smarty->assign('script', "../javascript/profile.js");
	$smarty->assign('wrapper', "../javascript/wrapper.js");
	
	/*Session variables*/
	$smarty->assign('session_username', $_SESSION['username']);
	$smarty->assign('session_name', $_SESSION['name']);
	$smarty->assign('usertype', $_SESSION['accounttypevar']);
	$smarty->assign('session_email', $_SESSION['email']);
	$smarty->assign('description', $_SESSION['description']);
	
	/*This summons the smarty template*/
	$smarty->display('admin/manage_accounts.tpl');

?>