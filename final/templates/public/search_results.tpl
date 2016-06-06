{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1>Search results for "{$search_term}"</h1>
	<div class="row">
		<div class="col-lg-10 col-md-10 col-sm-12">
			<div class="box">
				<h3>Users</h3>
				<table id="tableUsers" class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Account Type</th>
						</tr>
					</thead>
					<tbody>
						{foreach $searched_users as $tempUser}
							 <tr>
							     <td>{$tempUser.name}</td>
							     <td class="accounttype">{$tempUser.accounttypevar}</td>
							 </tr>
						{/foreach}
					</tbody>
				</table>
			</div>
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
						{foreach $searched_classes as $tempClass}
							<tr>
							     <td>{$tempClass.classname}</td>
							     <td>{$tempClass.description}</td>{* change in fuction adding name of director *}
							     {if !$tempClass.password}  
							     	<td>open</td>
							     {else}
							     	<td>closed</td>
							     {/if}
							</tr>
						{/foreach}
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
						<label><input id="profId" type="checkbox" checked/>Professors</label>
					</div>
					<div class="checkbox">
						<label><input id="studId" type="checkbox" checked/>Students</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}