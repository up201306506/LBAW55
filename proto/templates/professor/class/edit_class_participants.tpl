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
					<tbody>
					{foreach $participants as $participant}
						<tr id="{$participant.userid}">
							<td>{$participant.name}</td>
							<td>
								<button class="btn btn-danger ban">Ban</button>
								<button class="btn btn-default undo">Undo</button>
							</td>
						</tr>
					{/foreach}
						<tr>
							<td></td>
							<td>
								<button id="done" class="btn btn-primary">Done</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}