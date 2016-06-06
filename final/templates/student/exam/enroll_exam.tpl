{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-3 col-md-offset-2">
			<h1>Please insert a password</h1>
			<div class="box">
				<form method="post" role="enroll">
					<div class="form-group">
						<label for="password">Password:</label>
						<input class="form-control" type="password" name="password" required="required">
					</div>
					<div id="center">
						<input name="enroll" class="btn btn-primary" type="submit" value="Enroll">
					</div>
				</form>
			</div>
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
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}