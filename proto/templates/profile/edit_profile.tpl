{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-3 col-md-offset-2">
			<h1>Edit Profile</h1>
			<div class="box">
				<form action="{$BASE_URL|cat:'action/edit_profile_action.php'}" method="post" role="form">
					<div class="form-group">
						<label for="name">Name:</label>
						<input id="name" name="name" class="form-control" type="text" required="required"></input>
					</div>
					<input id="edit-name" class="btn btn-primary" type="submit" value="Submit new Name"></input>
				</form>
			</div>
			<div class="box">
				<form action="{$BASE_URL|cat:'action/edit_profile_action.php'}" method="post" role="form">
					<div class="form-group">
						<label for="email">Email:</label>
						<input id="email" name="email" class="form-control" type="text" required="required"></input>
					</div>
					<input id="edit-email" class="btn btn-primary" type="submit" value="Submit new Email"></input>
				</form>
			</div>
			<div class="box">
				<form action="{$BASE_URL|cat:'action/edit_profile_action.php'}" method="post" role="form">
					<div class="form-group">
						<label for="password">Password:</label>
						<input id="password" name="password" class="form-control" type="password" required="required"></input>
					</div>
					<div class="form-group">
						<label for="re-password">Confirm Password:</label>
						<input id="re-password" name="re-password" class="form-control" type="password" required="required"></input>
					</div>
					<input id="edit-password" class="btn btn-primary" type="submit" value="Submit new Password"></input>
				</form>
			</div>
			<div class="box">
				<form action="{$BASE_URL|cat:'action/edit_profile_action.php'}" method="post" role="form">
					<div class="form-group">
						<label for="description">Description:</label>
						<textarea id="description" name="description" class="form-control" rows="6" required="required"></textarea>
					</div>
					<input id="edit-description" class="btn btn-primary" type="submit" value="Submit new Description"></input>
				</form>
			</div>
			<div class="box">
				<form action="{$BASE_URL|cat:'action/edit_profile_action.php'}" method="post" role="form">
					<div class="form-group">
						<label for="upload_img">Profile Picture:</label>
						<input id="upload_img" name="upload_img" type="file" accept="image/*" required="required"></input>
					</div>
					<input id="edit-profile-pic" class="btn btn-primary" type="submit" value="Submit new Profile Picture"></input>
				</form>
			</div>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}