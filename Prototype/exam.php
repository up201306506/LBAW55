<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Exam</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="exam.css">
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" type="text/css" href="font.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php include 'navbar.php'; ?>
	<div class="container">
		<h1>LBAW exam</h1>
		<div class="user col-sm-3">
			<div class="user-box">
				<img class="img-responsive profile-img" src="user_img.png" alt="User's Profile Image" width="200" height="200">
				<span class="glyphicon glyphicon-user">Name</span>
				<span class="glyphicon glyphicon-credit-card">UserID</span>
				<span class="glyphicon glyphicon-play">Start: 13:35:43</span>
				<span class="glyphicon glyphicon-time">Finish: 45:05:17</span>
				<form action='profile.php' method='POST'>
					<button class="btn btn-warning btn-lg" type="submit">End Test</button>
				</form>
			</div>
		</div>
		<div class="exam col-sm-9">
			<!-- <div class="exam-info"></div> -->
			<div class="panel panel-default question-panel">
				<div class="panel-heading question">1. Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
				<div class="panel-body">
					<form role="Question">
						<div class="radio">
							<label><input type="radio" name="optradio"/>Some default panel content here. Nulla vitae elit libero, a pharetra augue.</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio"/>Some default panel content here. Nulla vitae elit libero, a pharetra augue.</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio"/>Some default panel content here. Nulla vitae elit libero, a pharetra augue.</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio"/>Some default panel content here. Nulla vitae elit libero, a pharetra augue.</label>
						</div>
					</form>
				</div>
			</div>
			<div class="panel panel-default question-panel">
				<div class="panel-heading question">2. Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
				<div class="panel-body">
					<form role="Question">
						<div class="radio">
							<label><input type="radio" name="optradio"/>Some default panel content here. Nulla vitae elit libero, a pharetra augue.</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio"/>Some default panel content here. Nulla vitae elit libero, a pharetra augue.</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio"/>Some default panel content here. Nulla vitae elit libero, a pharetra augue.</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio"/>Some default panel content here. Nulla vitae elit libero, a pharetra augue.</label>
						</div>
					</form>
				</div>
			</div>
			<div class="panel panel-default question-panel">
				<div class="panel-heading question">3. Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
				<div class="panel-body">
					<form role="Question">
						<div class="radio">
							<label><input type="radio" name="optradio"/>Some default panel content here. Nulla vitae elit libero, a pharetra augue.</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio"/>Some default panel content here. Nulla vitae elit libero, a pharetra augue.</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio"/>Some default panel content here. Nulla vitae elit libero, a pharetra augue.</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio"/>Some default panel content here. Nulla vitae elit libero, a pharetra augue.</label>
						</div>
					</form>
				</div>
			</div>
			<div class="panel panel-default question-panel">
				<div class="panel-heading question">4. Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
				<div class="panel-body">
					<form role="Question">
						<div class="radio">
							<label><input type="radio" name="optradio"/>Some default panel content here. Nulla vitae elit libero, a pharetra augue.</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio"/>Some default panel content here. Nulla vitae elit libero, a pharetra augue.</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio"/>Some default panel content here. Nulla vitae elit libero, a pharetra augue.</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio"/>Some default panel content here. Nulla vitae elit libero, a pharetra augue.</label>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="page col-sm-12">
			<ul class="pagination">
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
			</ul>
		</div>
	</div> <!-- container -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="jquery-1.12.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>