<?php

	/*This summons the database and smarty initializer */
	include_once('../config/init.php');

	/*Other PHP actions should go here*/
    $pagename = 'Profile';
    $smarty->assign('pagename', $pagename);

	$bootstrap_location = '../css/Bootstrap/css/bootstrap.min.css';
    $smarty->assign('$bootstrap_location', $bootstrap_location);
    $css_location = '../css/profile.css';
    $smarty->assign('$css_location', $css_location);
    $css_navbar = '../css/navbar.css';
    $smarty->assign('$css_navbar', $css_navbar);
	
	$session_username = $_SESSION['username'];
	$smarty->assign('session_username', $session_username);
	$session_name = $_SESSION['name'];
	$smarty->assign('session_name', $session_name);
	$session_email = $_SESSION['email'];
	$smarty->assign('session_email', $session_email);
	
	
	/*This summons the smarty template*/
	$smarty->display('profile/profile.tpl');

?>
