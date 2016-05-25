{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1 id="hum" class="col-sm-offset-3 col-sm-6">Edit Profile</h1>
	<div id="edit-box" class="col-sm-offset-3 col-sm-6">
		<div id="edit-name-box">
			<form action="edit_profile_action.php?update=name" method="post" role="form">
				<div class="form-group">
					<label for="name">Name:</label>
					<input id="name" name="name" class="form-control" type="text"></input>
				</div>
				<input id="edit-name" class="btn btn-primary" type="submit" value="Submit new Name"></input>
			</form> <!-- Edit name -->
		</div>
		<div id="edit-email-box">
			<form action="edit_profile_action.php?update=email" method="post" role="form">
				<div class="form-group">
					<label for="email">Email:</label>
					<input id="email" name="email" class="form-control" type="text"></input>
				</div>
				<input id="edit-email" class="btn btn-primary" type="submit" value="Submit new Email"></input>
			</form> <!-- Edit email -->
		</div>
		<div id="edit-password-box">
			<form action="edit_profile_action.php?update=password" method="post" role="form">
				<div class="form-group">
					<label for="password">Password:</label>
					<input id="password" name="password" class="form-control" type="password"></input>
				</div>
				<div class="form-group">
					<label for="re-password">Confirm Password:</label>
					<input id="re-password" name="re-password" class="form-control" type="password"></input>
				</div>
				<input id="edit-password" class="btn btn-primary" type="submit" value="Submit new Password"></input>
			</form> <!-- Edit password -->
		</div>
		<div id="edit-description-box">
			<form action="edit_profile_action.php?update=description" method="post" role="form">
				<div class="form-group">
					<label for="description">Description:</label>
					<textarea id="description" name="description" class="form-control text" rows="6"></textarea>
				</div>
				<input id="edit-description" class="btn btn-primary" type="submit" value="Submit new Description"></input>
			</form> <!-- Edit description -->
		</div>
		<div id="edit-profile-pic-box">
			<form action="edit_profile_action.php?update=picture" method="post" role="form">
				<div class="form-group">
					<label for="upload_img">Profile Picture:</label>
					<input id="upload_img" name="upload_img" type="file" accept="image/*"></input>
				</div>
				<input id="edit-profile-pic" class="btn btn-primary" type="submit" value="Submit new Profile Picture"></input>
			</form> <!-- Edit profile picture -->
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}