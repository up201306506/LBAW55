{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<div class="col-sm-offset-3 col-sm-6">
		<h1>New Class</h1>
		<form action="#" method="post" role="form">
			<div class="form-group">
				<label for="classname">Name of the Class:</label>
				<input id="classname" class="form-control" type="text"></input>
			</div>
			<div class="form-group">
				<label for="password">Password (Optional):</label>
				<input id="password" class="form-control" type="password"></input>
			</div>
			<div class="form-group">
				<label for="re-password">Confirm Password:</label>
				<input id="re-password" class="form-control" type="password"></input>
			</div>
			<div class="form-group">
				<label for="description">Description:</label>
				<textarea id="description" class="form-control" rows="6"></textarea>
			</div>
			<input id="submit" class="btn btn-primary" type="submit" value="Done"></input>
		</form>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}