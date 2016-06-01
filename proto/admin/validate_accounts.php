<?php

	/*This summons the database and smarty initializer */
	include_once('../config/init.php');
	include_once('../database/user_functions.php');
	include_once('../database/professor_validtion.php');
	
	/*Other PHP actions should go here*/
	$smarty->assign('pagename', 'Validate Accounts');

	$smarty->assign('bootstrap', "../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../css/validate_accounts.css");
	$smarty->assign('cssnavbar', "../css/navbar.css");

	$smarty->assign('script_boot', "../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../javascript/jquery-1.12.1.min.js");
	$smarty->assign('script', "../javascript/validate_accounts.js");
	
	/*Session variables*/
	$smarty->assign('session_username', getUsername($_SESSION['userid']));
	
	/*Get the list of professors*/
	$professor_list = getUnvalidatedProfessors();
	$smarty->assign('professor_list' , $professor_list);
	
	/*This summons the smarty template*/
	$smarty->display('admin/validate_accounts.tpl');

?>