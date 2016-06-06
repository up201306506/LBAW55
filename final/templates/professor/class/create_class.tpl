{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
			<h1>New Class</h1>
			<div class="box">
				<form role="form">
					<div class="form-group">
						<label for="classname">Name of the Class:</label>
						<input id="classname" class="form-control" type="text" required="required"></input>
					</div>
					<div class="form-group">
						<label for="password">Password (Optional):</label>
						<input id="password" class="form-control" type="password"></input>
					</div>
					<div class="form-group">
						<label for="re-password">Confirm Password:</label>
						<input id="re-password" class="form-control" type="password"></input>
					</div>
					<div class="form-group">
						<label for="description">Description:</label>
						<textarea id="description" class="form-control" rows="6" required="required"></textarea>
					</div>
					<input id="done" class="btn btn-primary" type="submit" value="Done"></input>
				</form>
			</div>
			{if $error}
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<strong>Warning!</strong> {$error}
			</div>
			{/if}
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<h1>Add Professors</h1>
			<div class="box">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="users">
					{foreach $professors as $professor}
						<tr id="{$professor.userid}">
							<td>{$professor.name}</td>
							<td>
								<button type="button" class="btn btn-success add">Add</button>
								<button type="button" class="btn btn-default undo">Undo</button>
							</td>
						</tr>
					{/foreach}
					</tbody>
				</table>
				<div id="center">
					<ul class="pagination">
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}