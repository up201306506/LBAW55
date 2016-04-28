{include file='common/header.tpl'}

	<h1 class="title">eldooM</h1>
	<div class="container-parent">
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6">
				<ul class="tabs">
					<li class="tab-link current" data-tab="tab-1">Log In</li>
					<li class="tab-link" data-tab="tab-2">Sign Up</li>
				</ul>
				<div class="tab-content current" id="tab-1">
					<div id="login-form">
						<form class="form-horizontal" action="profile/profile.php" method="post" role="form">
							<div class="form-group">
								<input id="username" class="form-control" type="text" placeholder="USERNAME"></input>
							</div>
							<div class="form-group">
								<input id="password" class="form-control" type="password" placeholder="PASSWORD"></input>
							</div>
							<div class="form-group">
								<input class="btn btn-default" type="submit" value="Log In"></input>
							</div>
						</form>
					</div>
				</div>
				<div class="tab-content" id="tab-2">
					<div id="signup-form">
						<form class="form-horizontal" action="profile/profile.php" method="post" role="form">
							<div class="form-group">
								<input id="username" class="form-control" type="text" placeholder="USERNAME"></input>
							</div>
							<div class="form-group">
								<input id="email" class="form-control" type="text" placeholder="EMAIL"></input>
							</div>
							<div class="form-group">
								<input id="password" class="form-control" type="password" placeholder="PASSWORD"></input>
							</div>
							<div class="form-group radio-group">
								<label class="radio-inline"><input type="radio" name="optradio"/>Professor</label>
								<label class="radio-inline"><input type="radio" name="optradio"/>Student</label>
							</div>
							<div class="form-group">
								<input class="btn btn-default" type="submit" value="Sign Up"></input>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

{include file='javascript_plugins/bootstrap.tpl'}
{include file='javascript_plugins/footer.tpl'}