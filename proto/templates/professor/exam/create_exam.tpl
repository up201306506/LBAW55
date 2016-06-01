{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1>New Exam</h1>
	<div class="box">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="form-group">
					<label for="class">Class:</label>
					<select id="class" class="form-control">
						<option>Class #1</option>
						<option>Class #2</option>
						<option>Class #3</option>
						<option>Class #4</option>
						<option>Class #5</option>
					</select>
				</div>
				<div class="form-group">
					<label for="date">Date:</label>
					<input id="date" class="form-control" type="text" placeholder="DD/MM/YYYY" required="required">
				</div>
				<div class="form-group">
					<label for="hour">Hour:</label>
					<input id="hour" class="form-control" type="text" placeholder="HH:MM" required="required">
				</div>
				<div class="form-group">
					<label for="duration">Duration:</label>
					<input id="duration" class="form-control" type="text" placeholder="HH:MM" required="required">
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12">
				<div id="pass" class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="password">Password (Optional):</label>
							<input id="password" class="form-control" type="password">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="re-password">Confirm Password:</label>
							<input id="re-password" class="form-control" type="password">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="information">Information:</label>
					<textarea id="information" class="form-control" rows="6" required="required"></textarea>
				</div>
				<div class="form-group">
					<label for="professors">Responsible Professors:</label>
					<ul id="professors" class="list-group">
						<li class="list-group-item">
							<img src="../../css/res/user_img.png" alt="User's Profile Image" width="35" height="35">
							<span>{$session_username}</span>
						</li>
					</ul>
					<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#professor-modal">Add Professor</button>
					<div id="professor-modal" class="modal fade" role="list professors">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">List of Professors</h4>
								</div>
								<div class="modal-body">
									<ul class="list-group">
										<li class="list-group-item">
											<img src="../../css/res/user_img.png" alt="User's Profile Image" width="35" height="35">
											<span>Professor #1</span>
											<button class="btn btn-default">
												<span class="glyphicon glyphicon-plus"></span>
											</button>
										</li>
										<li class="list-group-item">
											<img src="../../css/res/user_img.png" alt="User's Profile Image" width="35" height="35">
											<span>Professor #2</span>
											<button class="btn btn-default">
												<span class="glyphicon glyphicon-plus"></span>
											</button>
										</li>
										<li class="list-group-item">
											<img src="../../css/res/user_img.png" alt="User's Profile Image" width="35" height="35">
											<span>Professor #3</span>
											<button class="btn btn-default">
												<span class="glyphicon glyphicon-plus"></span>
											</button>
										</li>
										<li class="list-group-item">
											<img src="../../css/res/user_img.png" alt="User's Profile Image" width="35" height="35">
											<span>Professor #4</span>
											<button class="btn btn-default">
												<span class="glyphicon glyphicon-plus"></span>
											</button>
										</li>
									</ul>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="box">
		<h3>Questions</h3>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-8 col-lg-offset-4 col-md-offset-4 col-sm-offset-2">
				<div class="form-group">
					<label for="category">Category:</label>
					<select id="category" class="form-control">
						<option>Category #1</option>
						<option>Category #2</option>
						<option>Category #3</option>
						<option>Category #4</option>
						<option>Category #5</option>
					</select>
				</div>
			</div>
		</div>
		<div class="input-group question">
			<div class="my-panel">
				<div class="my-panel-header">
					<span>This is a question</span>
				</div>
				<div class="my-panel-body">
					<ul>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
					</ul>
				</div>
			</div>
			<span class="input-group-addon"><span class="glyphicon glyphicon-plus"></span></span>
		</div>
		<div class="input-group question">
			<div class="my-panel">
				<div class="my-panel-header">
					<span>This is a question</span>
				</div>
				<div class="my-panel-body">
					<ul>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
					</ul>
				</div>
			</div>
			<span class="input-group-addon"><span class="glyphicon glyphicon-plus"></span></span>
		</div>
		<div class="input-group question">
			<div class="my-panel">
				<div class="my-panel-header">
					<span>This is a question</span>
				</div>
				<div class="my-panel-body">
					<ul>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
					</ul>
				</div>
			</div>
			<span class="input-group-addon"><span class="glyphicon glyphicon-plus"></span></span>
		</div>
		<div class="input-group question">
			<div class="my-panel">
				<div class="my-panel-header">
					<span>This is a question</span>
				</div>
				<div class="my-panel-body">
					<ul>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
					</ul>
				</div>
			</div>
			<span class="input-group-addon"><span class="glyphicon glyphicon-plus"></span></span>
		</div>
		<div class="input-group question">
			<div class="my-panel">
				<div class="my-panel-header">
					<span>This is a question</span>
				</div>
				<div class="my-panel-body">
					<ul>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
					</ul>
				</div>
			</div>
			<span class="input-group-addon"><span class="glyphicon glyphicon-plus"></span></span>
		</div>
		<div id="options" class="row">
			<ul class="pagination">
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
			</ul>
			<input id="submit" class="btn btn-primary" type="submit" value="Next">
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}