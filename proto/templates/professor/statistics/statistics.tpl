{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<div class="row">
		<div class="col-lg-10 col-md-10 col-sm-12 col-lg-offset-1 col-md-offset-1">
			<h1>Statistics</h1>
			<div class="box">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Class</th>
							<th>Minimum</th>
							<th>Maximum</th>
							<th>Average</th>
							<th>Approved Percentage</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
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
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}