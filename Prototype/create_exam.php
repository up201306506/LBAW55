<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Create Exam</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="create_exam.css">
	<link rel="stylesheet" type="text/css" href="navbar.css">

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
		<h1>New Exam</h1>
		<form action="#" method="post" role="form">
			<div class="col-sm-12 exam-info-box">
				<div class="col-sm-4 first-column">
					<div class="form-group">
						<label for="class">Class:</label>
						<select id="class" class="form-control">
							<option>LBAW</option>
							<option>COMP</option>
							<option>PPIN</option>
							<option>SDIS</option>
							<option>IART</option>
						</select>
					</div>
					<div class="form-group">
						<label for="date">Date:</label>
						<div id="date">
							<select class="day">
								<option>1</option>
								<option>2</option>
								<option>...</option>
								<option>31</option>
							</select>
							<b><span>/</span></b>
							<select class="month">
								<option>January</option>
								<option>February</option>
								<option>...</option>
								<option>December</option>
							</select>
							<b><span>/</span></b>
							<select class="year">
								<option>2016</option>
								<option>2017</option>
								<option>...</option>
								<option>3000</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="hour">Hour:</label>
						<div id="hour">
							<select class="hours">
								<option>00</option>
								<option>01</option>
								<option>...</option>
								<option>23</option>
							</select>
							<b><span>:</span></b>
							<select class="minutes">
								<option>00</option>
								<option>01</option>
								<option>...</option>
								<option>59</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="duration">Duration:</label>
						<div id="duration">
							<select class="hours">
								<option>00</option>
								<option>01</option>
								<option>...</option>
								<option>23</option>
							</select>
							<b><span>:</span></b>
							<select class="minutes">
								<option>00</option>
								<option>01</option>
								<option>...</option>
								<option>59</option>
							</select>
						</div>
					</div>
				</div> <!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="form-group">
						<label for="information">Information:</label>
						<textarea id="information" class="form-control" rows="6"></textarea>
					</div>
					<div class="form-group">
						<label for="professors">Responsible Professors:</label>
						<ul id="professors" class="list-group">
							<li class="list-group-item">
								<img src="user_img.png" alt="User's Profile Image" width="35" height="35">
								Professor In Charge
							</li>
						</ul>
						<button id="add_professor" class="btn btn-primary" type="button">Add Professor</button>
					</div>
				</div> <!-- col-sm-8 -->
			</div> <!-- exam-info-box -->
			<div class="col-sm-12 exam-questions-box">
				<div class="form-group col-sm-offset-4 col-sm-4">
					<label for="category">Category:</label>
					<select id="category" class="form-control">
						<option>Math</option>
						<option>History</option>
						<option>Science</option>
						<option>Other</option>
					</select>
				</div>
				<div class="panel panel-default col-sm-offset-1 col-sm-10">
					<div class="panel-body">
						<div class="panel panel-default question-block">
							<div class="panel-heading">Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
							<div class="panel-body">
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
							</div>
						</div>
						<div class="panel panel-default question-block">
							<div class="panel-heading">Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
							<div class="panel-body">
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
							</div>
						</div>
						<div class="panel panel-default question-block">
							<div class="panel-heading">Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
							<div class="panel-body">
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
							</div>
						</div>
						<div class="panel panel-default question-block">
							<div class="panel-heading">Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
							<div class="panel-body">
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
							</div>
						</div>
						<div class="panel panel-default question-block">
							<div class="panel-heading">Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
							<div class="panel-body">
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
								<span class="answer">Some default panel content here. Nulla vitae elit libero, a pharetra augue.</span>
							</div>
						</div>
					</div>
				</div>
				<ul class="pagination">
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
				</ul>
			</div> <!-- exam-questions-box -->
		</form>
	</div> <!-- container -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="jquery-1.12.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>