{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<div class="col-sm-offset-3 col-sm-6">
		<h1>New Question</h1>
		<form id="new-question-box" action="#" method="post" role="form">
			<div class="form-group">
				<label for="category">Category:</label>
				<select id="category" class="form-control">
					<option value="math">Math</option>
					<option value="history">History</option>
					<option value="science">Science</option>
					<option value="other">Other</option>
				</select>
			</div>
			<div class="form-group">
				<label for="question">Question:</label>
				<textarea id="question" class="form-control" rows="10"></textarea>
				<input id="upload_img" type="file" accept="image/*"></input>
			</div>
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
			<button id="add_answer" class="btn btn-primary" type="button">Add Answer</button>
			<input id="finish" class="btn btn-success" type="submit" value="Submit Question"></input>
		</form>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}