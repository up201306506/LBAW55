<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');
	
	
	 if (!$_POST['username'] || !$_POST['password'] || !$_POST['name'] || !$_POST['email'] || !$_POST['opUsertype']) {
	    $_SESSION['error_messages'][] = 'Fill all input fields';
	    $_SESSION['form_values'] = $_POST;
	    header('Location: ' . $_SERVER['HTTP_REFERER']);
	    exit;
	  }

	  $username = $_POST['username'];
	  $password = $_POST['password'];
	  $name = $_POST['name'];
	  $email = $_POST['email'];
	  $usertype = $_POST['opUsertype'];
	  
	  $isactive = 'Active';
	  if($usertype === 'Professor')
		  $isactive = 'Pending';

	  try
	  {

		$user = insertNewUser($username, $email, $password, $usertype, $name, $isactive);

		$_SESSION['success_messages'][] = 'Register successful';
		
		if($user['isactive'] === 'Active'){
			$_SESSION['username'] = $user['username'];
			$_SESSION['accounttypevar'] = $_POST['accounttypevar'];
			$_SESSION['description'] =  $user['description'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['name'] =  $user['name'];

			header('Location: '. $BASE_URL .'profile/profile.php');	
		}else{
			$_SESSION['error_messages'][] = 'User account is pending!';
		}		
	  }
	  catch (PDOException $Exception)
	  {
		$_SESSION['error_messages'][] = 'Register Failed';
	    $_SESSION['form_values'] = $_POST;
	  }

	  header('Location: ' . $_SERVER['HTTP_REFERER']);  

?>