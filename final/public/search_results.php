<?php

	/*This summons the database and smarty initializer */
	include_once('../config/init.php');
	include_once('../database/user_functions.php');
	include_once('../action/session_check.php');

	if ($user_type == 'Administrator') {
		header('Location: ' . $BASE_URL . 'profile/profile.php');
	}

	/*Other PHP actions should go here*/
	$pagename = 'Search Results';
	$smarty->assign('pagename', $pagename);

	$smarty->assign('bootstrap', "../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../css/search_results.css");
	$smarty->assign('cssnavbar', "../css/navbar.css");

	$smarty->assign('script_boot', "../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../javascript/jquery-1.12.1.min.js");
	$smarty->assign('script', "../javascript/jqueryButton.js");

	/*Session variables*/
	$smarty->assign('session_username', getUsername($_SESSION['userid']));
	
	/*Search term*/
	$smarty->assign('search_term', $_GET['search-term']);

	/* results from search */
	$allSearchUsers = searchUserBar($_GET['search-term'],true,true);
 	$allSearchClasses = seachClass($_GET['search-term']);
 
 	$smarty->assign('searched_users', $allSearchUsers);
 	$smarty->assign('searched_classes', $allSearchClasses);
	
	/*This summons the smarty template*/
	$smarty->display('public/search_results.tpl');

?>