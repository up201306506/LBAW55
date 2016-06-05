{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1 id="{$exam.examid}">Edit Exam</h1>
	<div class="row">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3">
			{if $error}
				<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<strong>Warning!</strong> {$error}
				</div>
			{/if}
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div class="box">
				<form method="post" role="edit-date">
					<div class="form-group">
						<label for="date">Date:</label>
						<input id="date" name="date" class="form-control" type="text" placeholder="YYYY-MM-DD" required="required" value="{$exam.date}">
					</div>
					<input name="edit-date" class="btn btn-primary" type="submit" value="Submit New Date">
				</form>
			</div>
			<div class="box">
				<form method="post" role="edit-duration">
					<div class="form-group">
						<label for="duration">Duration:</label>
						<input id="duration" name="duration" class="form-control" type="text" placeholder="HH:MM" required="required" value="{$exam.duration}">
					</div>
					<input name="edit-duration" class="btn btn-primary" type="submit" value="Submit New Duration">
				</form>
			</div>
		{if $exam.password}
			<div class="box">
				<form method="post" role="edit-password">
					<div class="form-group">
						<label for="new-password">New Password:</label>
						<input id="new-password" name="new-password" class="form-control" type="password" required="required">
					</div>
					<div class="form-group">
						<label for="new-re-password">Confirm Password:</label>
						<input id="new-re-password" name="new-re-password" class="form-control" type="password" required="required">
					</div>
					<input name="edit-new-password" class="btn btn-primary" type="submit" value="Submit New Password">
				</form>
			</div>
		{else}
			<div class="box">
				<form method="post" role="add-password">
					<div class="form-group">
						<label for="add-password">Add Password:</label>
						<input id="add-password" name="add-password" class="form-control" type="password" required="required">
					</div>
					<div class="form-group">
						<label for="add-re-password">Confirm Password:</label>
						<input id="add-re-password" name="add-re-password" class="form-control" type="password" required="required">
					</div>
					<input name="edit-add-password" class="btn btn-primary" type="submit" value="Submit New Password">
				</form>
			</div>
		{/if}
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div class="box">
				<form method="post" role="edit-information">
					<div class="form-group">
						<label for="information">Information:</label>
						<textarea id="information" name="information" class="form-control" required="required" rows="13">{$exam.information}</textarea>
					</div>
					<input name="edit-information" class="btn btn-primary" type="submit" value="Submit New Information">
				</form>
			</div>
			<div class="box">
				<form method="post" role="edit-local">
					<div class="form-group">
						<label for="local">Local:</label>
						<input id="local" type="text" name="local" class="form-control" required="required" value="{$exam.local}">
					</div>
					<input name="edit-local" class="btn btn-primary" type="submit" value="Submit New Local">
				</form>
			</div>
		</div>
	</div>
	<div class="box">
		<div id="questions">
		{foreach $questions as $question}
			<div id="{$question.questionid}" class="input-group">
				<div class="my-panel">
					<div class="my-panel-header">
						<span>{$question.question}</span>
					</div>
					<div class="my-panel-body">
					{foreach $answers[$question.questionid] as $answer}
						<span>{$answer.answer}</span>
					{/foreach}
					</div>
				</div>
				<span class="input-group-addon minus"><span class="glyphicon glyphicon-minus"></span></span>
			</div>
		{/foreach}
		</div>
		<div id="center">
			<ul class="pagination">
			</ul>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}