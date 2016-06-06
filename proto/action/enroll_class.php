<?php
	
	$error;	
	include_once('../config/init.php');	
	include_once('../database/user_functions.php');
	
	
	$class = getClassById($_GET['id']);
	echo "aqui <br>";
	if (empty($class['password'])){
		insertNewUserClass($_SESSION['userid'], $_GET['id']);
		header('Location: ' . $BASE_URL . 'public/class.php?id=' . $_GET['id']);
	} else {
		$error = 'Something went wrong!';
	}


?>