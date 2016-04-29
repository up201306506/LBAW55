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
	  if($usertype == 'Professor')
		  $isactive = 'Pending';
	  
	  insertNewUser($username, $email, $password, $usertype, $name, $isactive);
		$_SESSION['username'] = $username;
	    $_SESSION['success_messages'][] = 'Register successful';
		header('Location: '. $BASE_URL .'profile/profile.php');	
	  
	  
	  /*try
	  {
			
		
	  }
	  catch (PDOException $Exception)
	  {
		$_SESSION['error_messages'][] = 'Register Failed';
	    $_SESSION['form_values'] = $_POST;
	    header('Location: ' . $_SERVER['HTTP_REFERER']);
	  }*/

	  

?>