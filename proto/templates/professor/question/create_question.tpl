{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-3 col-md-offset-2">
			<h1>New Question</h1>
			<div class="box">
				<form role="create-question">
					<div class="category">
						<div class="form-group">
							<label for="category">Category:</label>
							<select id="category" class="form-control">
							{foreach $categories as $cat}
								<option id="{$cat.categoryid}" value="{$cat.type}">{$cat.type}</option>
							{/foreach}
							</select>
						</div>
					</div>
					<div class="question">
						<div class="form-group">
							<label for="question">Question:</label>
							<textarea id="question" class="form-control" rows="10" required="required"></textarea>
							<input id="upload_img" type="file" accept="image/*"></input>
						</div>
					</div>
					<div class="answers">
						<div class="answer-block">
							<div class="form-group">
								<label for="answer-1">Answer #1:</label>
								<textarea id="answer-1" class="form-control answer" rows="5" required="required"></textarea>
							</div>
						</div>
						<div class="answer-block">
							<div class="form-group">
								<label for="answer-2">Answer #2:</label>
								<textarea id="answer-2" class="form-control answer" rows="5" required="required"></textarea>
							</div>
						</div>
					</div>
					<div class="buttons">
						<button id="add_answer" class="btn btn-primary" type="button">Add Answer</button>
						<input id="finish" class="btn btn-success" type="submit" value="Submit Question"></input>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}