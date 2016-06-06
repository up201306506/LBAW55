{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3">
			<h1>New Category</h1>
			<div class="box">
				<form method="post" role="create-category">
					<div class="form-group">
						<label for="category">Category:</label>
						<input id="category" type="text" name="category" class="form-control">
					</div>
					<div id="center">
						<input class="btn btn-primary" type="submit" name="create" value="Create">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}