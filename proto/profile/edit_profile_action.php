<?php
	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	$currentUsername = $_SESSION['username'];

	try{
		switch ($_GET['update']) {
			case 'name':
				$username = $_POST['name'];

				if ($username === "") {
					$_SESSION['error_messages'][]  = 'it is not possible to have a empty user name.';
					header('Location: ' . $_SERVER['HTTP_REFERER']);// volta para a pagina anterior  
					exit;
				}

				if (existsUser($username)) {
					$_SESSION['error_messages'][]  = 'username already taken.';					
					header('Location: ' . $_SERVER['HTTP_REFERER']);  
				}else{
					updateUserName($currentUsername,$username);

					$_SESSION['username'] = $username;
					$_SESSION['success_messages'][] = 'username updated successfully';
				}
			  break;

			case 'email':
				$email = $_POST['email'];

				// email needs to be validated

				updateUserEmail($currentUsername,$email);

				$_SESSION['success_messages'][] = 'email updated successfully';
			  break;
			case 'password':
				$password = $_POST['password'];
				$re_password = $_POST['re-password'];
				
				// need to validade password strenght maybe somthing in login to and SHA256 tooooo !!!!!!!!!!

				if($password === $re_password){
					updatePassword($currentUsername,$password);
				}
				$_SESSION['success_messages'][] = 'password updated successfully';
			  break;

			case 'description':
			 	$description = $_POST['description'];

			 	updateDescription($currentUsername,htmlspecialchars($description));
			 	$_SESSION['success_messages'][] = 'description updated successfully';
			 	break;
			case 'picture':
				$picture = $_POST['upload_img'];

				// still need the update picture part

				echo '<p>'.$picture.'</p>';
			 	break;


			default:
			  break;
		}

		/*
			link for the profile page NEEDS to be changed
		*/
		header('Location: ' . $_SERVER['HTTP_REFERER']);  
    }catch (PDOException $Exception){
	 	$_SESSION['error_messages'][]  = 'Error occured while updating.';
	  	header('Location: ' . $_SERVER['HTTP_REFERER']); 
	}
?>