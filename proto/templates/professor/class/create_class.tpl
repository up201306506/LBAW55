{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-3 col-md-offset-2">
			<h1>New Class</h1>
			<div class="box">
				<form action="../../action/create_class.php" method="post" role="form">
					<div class="form-group">
						<label for="classname">Name of the Class:</label>
						<input id="classname" name="classname" class="form-control" type="text" required="required"></input>
					</div>
					<div class="form-group">
						<label for="password">Password (Optional):</label>
						<input id="password" name="password" class="form-control" type="password"></input>
					</div>
					<div class="form-group">
						<label for="re-password">Confirm Password:</label>
						<input id="re-password" name="re-password" class="form-control" type="password"></input>
					</div>
					<div class="form-group">
						<label for="description">Description:</label>
						<textarea id="description" name="description" class="form-control" rows="6"></textarea>
					</div>
					<input id="submit" class="btn btn-primary" type="submit" value="Done"></input>
				</form>
			</div>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}