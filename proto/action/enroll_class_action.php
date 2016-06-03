<?php

	include_once('../config/init.php');
	include_once('../database/user_functions.php');
	include_once('../database/class_functions.php');
	include_once('../action/session_check.php');

	if (!empty($_POST['password'])) {
		$class = correctClassPassword($_POST['password'], $_GET['id']);
		if (!empty($class)) {
			insertNewUserClass($_SESSION['userid'], $class['classid']);
			header('Location: ' . $BASE_URL . 'public/class.php?id=' . $class['classid']);
			exit;
		} else {
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
		}
	} else
	{
		$class = getClassById($_GET['id']);
		if (empty($class['password'])){
			insertNewUserClass($_SESSION['userid'], $class['classid']);
			header('Location: ' . $BASE_URL . 'public/class.php?id=' . $class['classid']);
			exit;
		} else {
			header('Location: ' . $BASE_URL);
			exit;
		}
	}
?>