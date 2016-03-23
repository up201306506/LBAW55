<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Create Question</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="create_question.css">
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
		<div class="col-sm-offset-3 col-sm-6">
			<div class="new-question-box">
				<form action="#" method="post" role="form">
					<div class="category">
						<div class="form-group">
							<label for="category">Category:</label>
							<select id="category" class="form-control">
								<option value="math">Math</option>
								<option value="history">History</option>
								<option value="science">Science</option>
								<option value="other">Other</option>
							</select>
						</div>
					</div>
					<div class="question">
						<div class="form-group">
							<label for="question">Question:</label>
							<textarea id="question" class="form-control" rows="10"></textarea>
							<input id="upload_img" type="file" accept="image/*"></input>
						</div>
					</div>
					<div class="answers">
						<div class="answer-block">
							<div class="form-group">
								<label for="answer">Answer#1:</label>
								<textarea id="answer" class="form-control" rows="5"></textarea>
							</div>
						</div>
						<div class="answer-block">
							<div class="form-group">
								<label for="answer">Answer#2:</label>
								<textarea id="answer" class="form-control" rows="5"></textarea>
							</div>
						</div>
					</div>
					<div class="buttons">
						<button id="add_answer" class="btn btn-primary" type="button">Add Answer</button>
						<input id="finish" class="btn btn-success" type="submit" value="Finish"></input>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="jquery-1.12.1.min.js"></script>
	<!-- Include corresponding .js file -->
	<script src="create_question.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>