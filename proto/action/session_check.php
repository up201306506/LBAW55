<?php
	
	if(!isset($_SESSION['userid'])) {
		header('Location: '.$BASE_URL.'/login_signup.php');
	}
	
	$user_type = getUserbyID($_SESSION['userid'])['accounttypevar'];
	$smarty->assign('user_type', "user_type");

?>