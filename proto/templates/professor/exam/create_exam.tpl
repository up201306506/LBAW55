{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1>New Exam</h1>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3">
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<strong>Warning!</strong><span id="error"></span>
			</div>
		</div>
	</div>
	<div class="box">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="form-group">
					<label for="class">Class:</label>
					<select id="class" class="form-control">
					{foreach $classes as $class}
						<option value="{$class.classid}">{$class.classname}</option>
					{/foreach}
					</select>
				</div>
				<div class="form-group">
					<label for="identification">Identification:</label>
					<input id="identification" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="date">Date:</label>
					<input id="date" class="form-control" type="text" placeholder="YYYY-MM-DD">
				</div>
				<div class="form-group">
					<label for="hour">Begining Time:</label>
					<input id="hour" class="form-control" type="text" placeholder="HH:MM">
				</div>
				<div class="form-group">
					<label for="duration">Duration:</label>
					<input id="duration" class="form-control" type="text" placeholder="MM">
				</div>
				<div class="form-group">
					<label for="local">Local:</label>
					<input id="local" class="form-control" type="text">
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12">
				<div id="pass" class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="password">Password (Optional):</label>
							<input id="password" class="form-control" type="password">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="re-password">Confirm Password:</label>
							<input id="re-password" class="form-control" type="password">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="information">Information:</label>
					<textarea id="information" class="form-control" rows="12" required="required"></textarea>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="correct">Correct Answer Value:</label>
							<input id="correct" class="form-control" type="text">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="incorrect">Incorrect Answer Value:</label>
							<input id="incorrect" class="form-control" type="text">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="box">
		<h3>Questions</h3>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-8 col-lg-offset-4 col-md-offset-4 col-sm-offset-2">
				<div class="form-group">
					<label for="category">Category:</label>
					<select id="category" class="form-control">
					{foreach $categories as $category}
						<option value="{$category.categoryid}">{$category.type}</option>
					{/foreach}
					</select>
				</div>
			</div>
		</div>
		<div id="questions">
		{foreach $questions as $question}
			<div id="{$question.questionid}" class="input-group question">
				<div class="my-panel">
					<div class="my-panel-header">
						<span>{$question.question}</span>
					</div>
					<div class="my-panel-body">
						<ul>
						{foreach $answers[$question.questionid] as $answer}
							<li><span>{$answer.answer}</span></li>
						{/foreach}
						</ul>
					</div>
				</div>
				<span class="input-group-addon plus"><span class="glyphicon glyphicon-plus"></span></span>
			</div>
		{/foreach}
		</div>
		<ul class="pagination">
		</ul>
		<button id="done" type="button" class="btn btn-primary">Done</button>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}