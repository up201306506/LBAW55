{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1>Manage Exams</h1>
	<div class="box">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Exam</th>
					<th>Date</th>
					<th>Manager</th>
					<th>Accessibility</th>
					<th>State</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="exams">
			{if !$examlist}
				<tr>
					<td>No exams were found in the database.</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			{else}
				{foreach $examlist as $exam}
					<tr>
						<td>{$exam.examidentification}</td>
						<td>{$exam.date}</td>
						<td>{$exam_owners[$exam.examid]}</td>
						<td>{if $exam.password eq ''}Public{else}Private{/if}</td>
						<td>{if $exam.exampublished}Published{else}{if $exam.isongoing}Being Solved{else}Not Visible{/if}{/if}</td>
						<td>
							<button class="btn btn-primary">Edit</button>
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