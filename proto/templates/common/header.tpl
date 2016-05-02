<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>eldooM</title>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="javascript/jquery-1.12.1.min.js"></script>
		
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="css/Bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/{$pagename}.css">
		<link rel="stylesheet" type="text/css" href="css/navbar.css">


	</head>
	<body>
		<!-- need login confirmation like in frmk -->
		 <div id="error_messages">
	    {foreach $ERROR_MESSAGES as $error}
	      <div class="error">{$error}<a class="close" href="#">X</a></div>
	    {/foreach}
	    </div>
	    <div id="success_messages">
	    {foreach $SUCCESS_MESSAGES as $success}
	      <div class="success">{$success}<a class="close" href="#">X</a></div>
	    {/foreach}
	    </div>

