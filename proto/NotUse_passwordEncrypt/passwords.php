<?php

	header('Location: ../login_signup.php');
	
	function updateDataBaseUserPopulation() {
	    global $conn;
	    $stmt = $conn->prepare("SELECT * FROM users");
	    $stmt->execute();
	    $allUsers = $stmt->fetchAll();

	    foreach ($allUsers as $key => $user) {
	    	$stmt = $conn->prepare('UPDATE users SET password = ? WHERE username = ?');
			$stmt->execute(array(hash('sha256', $user['password']),$user['username']));	    
		}
	}


	$conn = new PDO('pgsql:host=dbm;dbname=lbaw1555', 'lbaw1555', 'VK15D1P4');
  	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  	$conn->exec('SET SCHEMA \'eldoom\''); 	

  	updateDataBaseUserPopulation();

  	echo '<p>all data base passwords encripted with sha256<\p>'
?>