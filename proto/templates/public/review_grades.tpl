{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

{if $usertype eq 'Student'}
	<style type="text/css">
		.table {
			margin-bottom: 0;
		}
	</style>
{/if}

<div class="container">
	<h1>Review Grades</h1>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="box">
				<h3>Class #1</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Date</th>
							<th>Graded By</th>
							<th>Final Grade</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
				{if $usertype eq 'Professor'}
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
				{/if}
			</div>
			<div class="box">
				<h3>Class #2</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Date</th>
							<th>Graded By</th>
							<th>Final Grade</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
				{if $usertype eq 'Professor'}
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
				{/if}
			</div>
			<div class="box">
				<h3>Class #3</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Date</th>
							<th>Graded By</th>
							<th>Final Grade</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
				{if $usertype eq 'Professor'}
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
				{/if}
			</div>
			<div class="box">
				<h3>Class #4</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Date</th>
							<th>Graded By</th>
							<th>Final Grade</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
				{if $usertype eq 'Professor'}
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
				{/if}
			</div>
			<div class="box">
				<h3>Class #5</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Date</th>
							<th>Graded By</th>
							<th>Final Grade</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
				{if $usertype eq 'Professor'}
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
				{/if}
			</div>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}