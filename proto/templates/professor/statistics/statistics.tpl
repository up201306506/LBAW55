{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1>Statistics</h1>
	<div class="box">
		<h3></h3>
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
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
		<div id="export-choice">
			<label id="main-label" for="export">Export as:</label>
			<div id="export" class="form-group radio-group">
				<label class="radio-inline">
					<input type="radio" name="file-type" value="pdf" checked/>PDF
				</label>
				<label class="radio-inline">
					<input type="radio" name="file-type" value="xml" />XML
				</label>
				<label class="radio-inline">
					<input type="radio" name="file-type" value="csv" />CSV
				</label>
			</div>
			<button id="export-button" class="btn btn-primary">Export</button>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}