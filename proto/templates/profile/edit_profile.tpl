{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div id="wrapper">
	<div class="row">
		<div class="col-sm-offset-3 col-sm-6">
			<h1>Edit Profile</h1>
			<div class="well">
				<form action="profile.php" method="post" role="form">
					<div class="form-group">
						<label for="name">Name:</label>
						<input id="name" class="form-control" type="text"></input>
					</div>
					<input id="edit-name" class="btn btn-primary" type="submit" value="Submit new Name"></input>
				</form>
			</div>
			<div class="well">
				<form action="profile.php" method="post" role="form">
					<div class="form-group">
						<label for="email">Email:</label>
						<input id="email" class="form-control" type="text"></input>
					</div>
					<input id="edit-email" class="btn btn-primary" type="submit" value="Submit new Email"></input>
				</form>
			</div>
			<div class="well">
				<form action="profile.php" method="post" role="form">
					<div class="form-group">
						<label for="password">Password:</label>
						<input id="password" class="form-control" type="password"></input>
					</div>
					<div class="form-group">
						<label for="re-password">Confirm Password:</label>
						<input id="re-password" class="form-control" type="password"></input>
					</div>
					<input id="edit-password" class="btn btn-primary" type="submit" value="Submit new Password"></input>
				</form>
			</div>
			<div class="well">
				<form action="profile.php" method="post" role="form">
					<div class="form-group">
						<label for="description">Description:</label>
						<textarea id="description" class="form-control" rows="6"></textarea>
					</div>
					<input id="edit-description" class="btn btn-primary" type="submit" value="Submit new Description"></input>
				</form>
			</div>
			<div class="well">
				<form action="profile.php" method="post" role="form">
					<div class="form-group">
						<label for="upload_img">Profile Picture:</label>
						<input id="upload_img" type="file" accept="image/*"></input>
					</div>
					<input id="edit-profile-pic" class="btn btn-primary" type="submit" value="Submit new Profile Picture"></input>
				</form>
			</div>
		</div>
	</div>
</div> <!-- wrapper -->

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/wrapper.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}