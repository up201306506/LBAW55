{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1>Pending Accounts</h1>
	<div class="box">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Username</th>
					<th>Email</th>
					<th>Validate</th>
				</tr>
			</thead>
			<tbody>
				{foreach $professor_list as $professor}
					<tr>
						<td>{$professor.name}</td>
						<td>{$professor.username}</td>
						<td>{$professor.email}</td>
						<td>
							<button class="btn btn-success ok-option">
								<span class="glyphicon glyphicon-ok"></span>
							</button>
							<button class="btn btn-danger remove-option">
								<span class="glyphicon glyphicon-remove"></span>
							</button>
							<button class="btn btn-default undo-option">Undo</button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}