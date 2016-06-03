{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-3 col-md-offset-2">
			<h1>Please insert a password</h1>
			<div class="box">
				<form action="../../action/enroll_exam_action.php?id={$examid}" method="post" role="enroll">
					<div class="form-group">
						<label for="password">Password:</label>
						<input class="form-control" type="password" name="password" required="required">
					</div>
					<div id="center">
						<input class="btn btn-primary" type="submit" value="Enroll">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}