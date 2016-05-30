{include file='common/header.tpl'}

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-3 col-md-offset-2">
			<div class="box">
				<ul id="tabs">
					<li class="tab-link current" data-tab="tab-1">Log In</li>
					<li class="tab-link" data-tab="tab-2">Sign Up</li>
				</ul>
				<div class="tab-content current" id="tab-1">
					<form action="{$BASE_URL|cat:'action/login_request.php'}" method="post" role="form">
						<div class="form-group">
							<div class="input-group">
								<input name="username" class="form-control" type="text" placeholder="Username">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-credit-card"></span>
								</span>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input name="password" class="form-control" type="password" placeholder="Password">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
							</div>
						</div>
						<div>
							<input class="btn btn-primary" type="submit" value="Log In">
						</div>
					</form>
				</div>
				<div class="tab-content" id="tab-2">
					<form action="{$BASE_URL|cat:'action/create_user.php'}" method="post" role="form">
						<div class="form-group">
							<div class="input-group">
								<input name="username" class="form-control" type="text" placeholder="Username">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-credit-card"></span>
								</span>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input name="name" class="form-control" type="text" placeholder="Name">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input name="email" class="form-control" type="text" placeholder="Email">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-envelope"></span>
								</span>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input name="password" class="form-control" type="password" placeholder="Password">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
							</div>
						</div>
						<div id="radios" class="form-group">
							<div class="radio-inline">
								<label><input type="radio" name="usertype" value="Student">Student</label>
							</div>
							<div class="radio-inline">
								<label><input type="radio" name="usertype" value="Professor">Professor</label>
							</div>
						</div>
						<div>
							<input class="btn btn-primary" type="submit" value="Sign Up">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}