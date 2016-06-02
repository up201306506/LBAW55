<?php

	include_once('../config/init.php');
	include_once('../database/user_functions.php');
	
	if(!isset($_SESSION['userid']))
	{
		header('Location: ../login_signup.php');
	}
	
	$user_type = getUserbyID($_SESSION['userid'])['accounttypevar'];
	$smarty->assign('user_type', "user_type");

?>