{include file='common/header.tpl'}

<div id="form-box">
	<div class="well">
	<ul id="tabs">
		<li class="tab-link current" data-tab="tab-1"><span>Log In</span></li>
		<li class="tab-link" data-tab="tab-2"><span>Sign Up</span></li>
	</ul>
	<div class="tab-content current" id="tab-1">
		<form role="form">
			<div class="form-group">
				<div class="input-group">
					<input id="username" class="form-control" type="text" placeholder="Username">
					<span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<input id="password" class="form-control" type="password" placeholder="Password">
					<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
				</div>
			</div>
			<div id="login">
				<input class="btn btn-default" type="submit" value="Log In">
			</div>
		</form>
	</div>
	<div class="tab-content" id="tab-2">
		<form role="form">
			<div class="form-group">
				<div class="input-group">
					<input id="username2" class="form-control" type="text" placeholder="Username">
					<span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<input id="name" class="form-control" type="text" placeholder="Name">
					<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<input id="email" class="form-control" type="text" placeholder="Email">
					<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<input id="password2" class="form-control" type="password" placeholder="Password">
					<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
				</div>
			</div>
			<div class="form-group">
				<div class="radio-inline">
					<label><input id="student" type="radio" name="usertype" value="Student">Student</label>
				</div>
				<div class="radio-inline">
					<label><input id="professor" type="radio" name="usertype" value="Professor">Professor</label>
				</div>
			</div>
			<div id="signup">
				<input class="btn btn-default" type="submit" value="Sign Up">
			</div>
		</form>
	</div>
</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}