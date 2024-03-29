{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-lg-offset-2 col-md-offset-2">
			<h1>List of All Classes</h1>
			<div class="box">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Class</th>
							<th>Manager</th>
							<th>Accessibility</th>
						</tr>
					</thead>
					<tbody>
					{foreach $all_classes as $class}
						{if $class.classpass}
						<tr>
							<td>
								<a href="{$BASE_URL|cat:'public/class.php?id='|cat: $class.classid}">{$class.classname}</a>
							</td>
							<td>
								<a href="{$BASE_URL|cat:'public/profile.php?id='|cat: $class.userid}">{$class.name}</a>
							</td>
							<td>Private</td>
						</tr>
						{else}
						<tr>
							<td>
								<a href="{$BASE_URL|cat:'public/class.php?id='|cat: $class.classid}">{$class.classname}</a>
							</td>
							<td>
								<a href="{$BASE_URL|cat:'public/profile.php?id='|cat: $class.userid}">{$class.name}</a>
							</td>
							<td>Public</td>
						</tr>
						{/if}
					{/foreach}
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}