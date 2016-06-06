{include file='common/header.tpl'}

<nav class="navbar navbar-fixed-top">
	<div class="container-fluid">
		<a id="brand-name" href="#">ElDoom</a>
		<ul id="options">
			<li><a href="login_signup.php"><span class="glyphicon glyphicon-log-in"></span>Log In</a></li>
			<li><a href="login_signup.php"><span class="glyphicon glyphicon-edit"></span>Sign Up</a></li>
		</ul>
	</div>
</nav>
<div id="page-img"></div>
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="box">
				<img class="img-circle img-responsive" src="{$BASE_URL|cat:'css/res/light-bulb-icon.png'}">
				<h3>Easy to Use</h3>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="box">
				<img class="img-circle img-responsive" src="{$BASE_URL|cat:'css/res/light-bulb-icon.png'}">
				<h3>Efficient Exam Management</h3>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="box">
				<img class="img-circle img-responsive" src="{$BASE_URL|cat:'css/res/light-bulb-icon.png'}">
				<h3>Best Way to Organize your Learning Groups</h3>
			</div>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}