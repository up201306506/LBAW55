{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<div class="row">
		<div class="col-lg-10 col-md-10 col-sm-12 col-lg-offset-1 col-md-offset-1">
			<h1>Edit Class</h1>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="box">
								<form role="edit-name">
									<div class="form-group">
										<label for="name">Name:</label>
										<input id="name" class="form-control" type="text" name="name">
									</div>
									<input class="btn btn-primary" type="submit" name="edit-name" value="Submit New Name">
								</form>
							</div>
							<div class="box">
								<form role="edit-password">
									<div class="form-group">
										<label for="password">Password:</label>
										<input id="password" class="form-control" type="text" name="password">
									</div>
									<div class="form-group">
										<label for="re-password">Confirm Password:</label>
										<input id="re-password" class="form-control" type="text" name="re-password">
									</div>
									<input class="btn btn-primary" type="submit" name="edit-password" value="Submit New Password">
								</form>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="box">
								<form role="edit-description">
									<div class="form-group">
										<label for="description">Description:</label>
										<textarea id="description" name="description" class="form-control" rows="13"></textarea>
									</div>
									<input class="btn btn-primary" type="submit" name="edit-description" value="Submit New Description">
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="box">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Name</th>
									<th>Account Type</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							{foreach $participants as $participant}
								<tr>
									<td>{$participant.name}</td>
									<td>{$participant.usertype}</td>
									<td>
										<button class="btn btn-danger" type="button">Ban</button>
										<button class="btn btn-default" type="button">Undo</button>
									</td>
								</tr>
							{/foreach}
								<tr>
									<td></td>
									<td></td>
									<td>
										<button class="btn btn-primary" type="button">Done</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}