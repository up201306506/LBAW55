{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1>Search results for "{$search_term}"</h1>
	<div class="row">
		<div class="col-lg-5 col-md-5 col-sm-12">
			<div class="box">
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
		<div class="col-lg-5 col-md-5 col-sm-12">
			<div class="box">
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
		<div class="col-lg-2 col-md-2 col-sm-12">
			<div class="my-panel">
				<div class="my-panel-header text-center">Filters</div>
				<div class="my-panel-body">
					<span>Filter by:</span>
					<div class="checkbox">
						<label><input type="checkbox" />Professors</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" />Students</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}