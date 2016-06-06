{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1>Statistics</h1>
	<div class="box">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Exam</th>
					<th>Minimum</th>
					<th>Maximum</th>
					<th>Average</th>
					<th>Approved Percentage</th>
				</tr>
			</thead>
			<tbody>
		{foreach $classes as $class}
			{foreach $exams[$class.classid] as $exam}
				{if $exam.gradespublished}
				<tr>
					<td>{$exam.examidentification}</td>
					<td>{$exam.min_grade}</td>
					<td>{$exam.max_grade}</td>
					<td>{$exam.average}</td>
					<td>{$exam.approved_percentage}</td>
				</tr>
				{/if}
			{/foreach}
		{/foreach}
			</tbody>
		</table>
		<div id="export-choice">
			<label id="main-label" for="export">Export as:</label>
			<div class="form-group radio-group">
				<label class="radio-inline">
					<input type="radio" name="filetype" value="xml" checked="checked" />XML
				</label>
				<label class="radio-inline">
					<input type="radio" name="filetype" value="csv"/>CSV
				</label>
			</div>
			<button id="export" type="button" class="btn btn-primary">Export</button>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}