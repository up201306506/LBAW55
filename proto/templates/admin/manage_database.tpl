{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 col-sm-12 col-lg-offset-2 col-md-offset-1">
			<ul id="links">
				<li><a href="#users">Users</a></li>
				<li><a href="#exams">Exams</a></li>
				<li><a href="#questions">Questions</a></li>
			</ul>
		</div>
		<div id="users" class="col-lg-12 col-md-12 col-sm-12">
			<h3>Users</h3>
			<div class="box">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-lg-offset-4 col-md-offset-4">
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search User"></input>
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Username</th>
							<th>Email</th>
							<th>Account Type</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					{if !$userlist}
						<tr>
							<td>The loneliest website ever! You're all alone here, admin.</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					{else}
						{foreach $userlist as $user}
							<tr>
								<td>{$user.username}</td>
								<td>{$user.name}</td>
								<td>{$user.email}</td>
								<td>{$user.accountvartype}</td>
								<td>
									<button class="btn btn-danger">Ban</button>
								</td>
							</tr>
						{/foreach}
					{/if}
					</tbody>
				</table>
				<div id="center">
					<ul class="pagination">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="exams" class="col-lg-12 col-md-12 col-sm-12">
			<h3>Exams</h3>
			<div class="box">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-lg-offset-4 col-md-offset-4">
						<div class="form-group">
							<label for="class">Class</label>
							<select id="class" class="form-control">
								<option>Class #1</option>
								<option>Class #2</option>
								<option>Class #3</option>
								<option>Class #4</option>
							</select>
						</div>
					</div>
				</div>
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
					<tbody>
						<tr>
							<td>Exam</td>
							<td>Date</td>
							<td>Manager</td>
							<td>Accessibility</td>
							<td>Done/Ongoing/Not Done</td>
							<td>
								<button class="btn btn-primary">Edit</button>
							</td>
						</tr>
					</tbody>
				</table>
				<div id="center">
					<ul class="pagination">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="questions" class="col-lg-12 col-md-12 col-sm-12">
			<h3>Questions</h3>
			<div class="box">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-lg-offset-4 col-md-offset-4">
						<div class="form-group">
							<label for="category">Category</label>
							<select id="category" class="form-control">
								<option>Category #1</option>
								<option>Category #2</option>
								<option>Category #3</option>
								<option>Category #4</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="question">Search by question:</label>
							<textarea id="question" class="form-control" rows="5"></textarea>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="answer">Search by answer:</label>
							<textarea id="answer" class="form-control" rows="5"></textarea>
						</div>
					</div>
				</div>
				<div class="input-group question">
					<div class="my-panel">
						<div class="my-panel-header">
							<span>This is a question</span>
						</div>
						<div class="my-panel-body">
							<ul id="answers">
								<li><span>This is an answer</span></li>
								<li><span>This is an answer</span></li>
								<li><span>This is an answer</span></li>
								<li><span>This is an answer</span></li>
							</ul>
						</div>
					</div>
					<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
				</div>
				<div id="center">
					<ul class="pagination">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
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