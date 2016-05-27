<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">ElDoom</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav">
				<li><a href="#">Home</a></li>
				<li>
					<form class="navbar-form" action="{$BASE_URL|cat:'public/search_results.php'}" method="get" role="search">
						<div class="input-group">
							<input name="search_term" type="text" class="form-control" placeholder="Search"></input>
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
							</div>
						</div>
					</form>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Options <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{$BASE_URL|cat:'profile/profile.php'}"><span class="glyphicon glyphicon-user"></span> {$session_username}</a></li>
						<li><a href="{$BASE_URL|cat:'profile/edit_profile.php'}"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
						<li><a href="{$BASE_URL|cat:'action/logout_request.php'}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div> <!-- container-fluid -->
</nav> <!-- navbar -->