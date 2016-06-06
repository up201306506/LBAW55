{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-lg-offset-2 col-md-offset-2">
			<h1 id="{$classid}">Edit Participants</h1>
			<div class="box">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="users">
					{foreach $allstudents as $student}
						<tr id="{$student.userid}">
							<td>{$student.name}</td>
						{if $studentspermission[$student['userid']] eq 'true'}
							<td>
								<button class="btn btn-danger ban">Ban</button>
							</td>
						{else}
							<td>
								<button class="btn btn-success add">Add</button>
							</td>
						{/if}
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