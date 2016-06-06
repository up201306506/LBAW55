{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1>Manage Accounts</h1>
	<div class="box">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Username</th>
					<th>Email</th>
					<th>Account Type</th>
					<th>State</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="users">
			{if !$userlist}
				<tr>
					<td>The loneliest website ever! You're all alone here, admin.</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			{else}
				{foreach $userlist as $user}
				<tr id="{$user.userid}">
					<td>{$user.username}</td>
					<td>{$user.name}</td>
					<td>{$user.email}</td>
					<td>{$user.accounttypevar}</td>
					<td>{$user.isactive}</td>
					<td>
					{if $user.isactive eq 'Active'}
						<button class="btn btn-danger ban">Ban</button>
					{else}
						<button class="btn btn-success unban">Unban</button>
					{/if}
					</td>
				</tr>
				{/foreach}
			{/if}
			</tbody>
		</table>
		<nav id="center">
			<ul class="pagination">
			</ul>
		</nav>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}