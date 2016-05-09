<?php

	/*This summons the database and smarty initializer */
	include_once('../config/init.php');

	/*Other PHP actions should go here*/
    $pagename = 'Profile';
    $smarty->assign('pagename', $pagename);

	$bootstrap = "../css/Bootstrap/css/bootstrap.min.css";
    $smarty->assign('$bootstrap', $bootstrap);
    $csspage = "../css/profile.css";
    $smarty->assign('$csspage', $csspage);
    $cssnavbar = "../css/navbar.css";
    $smarty->assign('$cssnavbar', $cssnavbar);
	
	$session_username = $_SESSION['username'];
	$smarty->assign('session_username', $session_username);
	$session_name = $_SESSION['name'];
	$smarty->assign('session_name', $session_name);
	$session_email = $_SESSION['email'];
	$smarty->assign('session_email', $session_email);
	
	
	/*This summons the smarty template*/
	$smarty->display('profile/profile.tpl');
?>
