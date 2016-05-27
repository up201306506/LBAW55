{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div id="wrapper">
	<h1>Search results for "{$search_term}"</h1>
	<div class="row">
		<div class="col-sm-5">
			<div class="well">
				<h3>Users</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Account Type</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-sm-5">
			<div class="well">
				<h3>Classes</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Class</th>
							<th>Manager</th>
							<th>Accessibility</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-sm-2">
			<div class="panel panel-default">
				<div class="panel-heading text-center">Filters</div>
				<div class="panel-body">
					<span>Filter by:</span>
					<div class="checkbox">
						<label><input type="checkbox" />Professors</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" />Students</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" />Classes</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}