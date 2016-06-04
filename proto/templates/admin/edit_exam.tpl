{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1>Edit Exam</h1>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div class="box">
				<form method="post" role="edit-date">
					<div class="form-group">
						<label for="date">Date:</label>
						<input id="date" class="form-control" type="text" placeholder="DD/MM/YYYY" required="required" value="{$exam.date}">
					</div>
					<input class="btn btn-primary" type="submit" value="Submit New Date">
				</form>
			</div>
			<div class="box">
				<form method="post" role="edit-duration">
					<div class="form-group">
						<label for="duration">Duration:</label>
						<input id="duration" class="form-control" type="text" placeholder="HH:MM" required="required" value="{$exam.duration}">
					</div>
					<input class="btn btn-primary" type="submit" value="Submit New Duration">
				</form>
			</div>
		{if $exam.password}
			<div class="box">
				<form method="post" role="edit-password">
					<div class="form-group">
						<label for="new-password">New Password:</label>
						<input id="new-password" class="form-control" type="password" required="required">
					</div>
					<div class="form-group">
						<label for="new-re-password">Confirm Password:</label>
						<input id="new-re-password" class="form-control" type="password" required="required">
					</div>
					<input class="btn btn-primary" type="submit" value="Submit New Password">
				</form>
			</div>
		{else}
			<div class="box">
				<form method="post" role="add-password">
					<div class="form-group">
						<label for="add-password">Add Password:</label>
						<input id="add-password" class="form-control" type="password" required="required">
					</div>
					<div class="form-group">
						<label for="add-re-password">Confirm Password:</label>
						<input id="add-re-password" class="form-control" type="password" required="required">
					</div>
					<input class="btn btn-primary" type="submit" value="Submit New Password">
				</form>
			</div>
		{/if}
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div class="box">
				<form method="post" role="edit-information">
					<div class="form-group">
						<label for="information">Add Password:</label>
						<textarea id="information" class="form-control" required="required" rows="4">{$exam.information}</textarea>
					</div>
					<input class="btn btn-primary" type="submit" value="Submit New Information">
				</form>
			</div>
			<div class="box">
				<form method="post" role="edit-correct-value">
					<div class="form-group">
						<label for="correct-value">Correct Answer Value:</label>
						<input id="correct-value" type="text" class="form-control" required="required">
					</div>
					<input class="btn btn-primary" type="submit" value="Submit New Value">
				</form>
			</div>
			<div class="box">
				<form method="post" role="edit-incorrect-value">
					<div class="form-group">
						<label for="incorrect-value">Incorrect Answer Value:</label>
						<input id="incorrect-value" type="text" class="form-control" required="required">
					</div>
					<input class="btn btn-primary" type="submit" value="Submit New Value">
				</form>
			</div>
		</div>
	</div>
	<div class="box">
		TODO: where you have the choice to remove a question from the exam
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}