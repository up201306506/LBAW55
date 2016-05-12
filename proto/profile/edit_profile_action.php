<?php
	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	//$oldUsername = $_SESSION['username'];
	$oldUsername = 'potter';

	if ($oldUsername === "") {
		$_SESSION['error_messages'][]  = 'it is not possible to have a empty user name.';
		echo "<script>alert('".'1'."');</script>";
		header('Location: ' . $_SERVER['HTTP_REFERER']);  
		exit;
	}
	try{
		switch ($_GET['update']) {
			case 'name':
				$username = $_POST['name'];
				if (existsUser($username)) {
					$_SESSION['error_messages'][]  = 'username already taken.';
					echo '<p>potter</p>';
					header('Location: ' . $_SERVER['HTTP_REFERER']);  
				}else{
					updateUserName($oldUsername,$username);
				}

			  break;

			case 'email':
				$email = $_POST['email'];
				echo '<p>'.$email.'</p>';
			  break;
			case 'password':
				$password = $_POST['password'];
				$re_password = $_POST['re-password'];
				
				echo '<p>'.$password.'</p><br>';
				echo '<p>'.$re_password.'</p>';

			  break;

			case 'description':
			 	$description = $_POST['description'];

			 	echo '<p>ola :)</p>';

			 	echo '<p>'.htmlspecialchars($description).'</p>';
			 	break;
			case 'picture':
				$picture = $_POST['upload_img'];

				echo '<p>'.$picture.'</p>';
			 	break;


			default:
			  break;
		}
    }catch (PDOException $Exception){
	 	$_SESSION['error_messages'][] = 'Register Failed';// send message by the error code (need to be changed)
	    $_SESSION['form_values'] = $_POST;
	  	header('Location: ' . $_SERVER['HTTP_REFERER']);  
	}
?>