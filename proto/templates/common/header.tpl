<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>{$pagename}</title>

	{if !empty($jquery)}
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{$jquery}"></script>
	{/if}


	<!-- Bootstrap -->
	{if !empty($bootstrap)}
	<link rel="stylesheet" type="text/css" href="{$bootstrap}">
	{/if}
	{if !empty($csspage)}
	<link rel="stylesheet" type="text/css" href="{$csspage}">
	{/if}
	{if !empty($cssnavbar)}
	<link rel="stylesheet" type="text/css" href="{$cssnavbar}">
	{/if}

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

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

