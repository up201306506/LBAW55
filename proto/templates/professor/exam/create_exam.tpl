{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1>New Exam</h1>
	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title text-center">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Information</a>
				</h4>
			</div>
			<div id="collapse1" class="panel-collapse collapse in">
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-4">
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
								<input id="date" class="form-control" type="text" placeholder="DD/MM/YYYY">
							</div>
							<div class="form-group">
								<label for="hour">Hour:</label>
								<input id="hour" class="form-control" type="text" placeholder="HH:MM">
							</div>
							<div class="form-group">
								<label for="duration">Duration:</label>
								<input id="duration" class="form-control" type="text" placeholder="HH:MM">
							</div>
						</div>
						<div class="col-sm-8">
							<div class="form-group">
								<label for="information">Information:</label>
								<textarea id="information" class="form-control" rows="6"></textarea>
							</div>
							<div class="form-group">
								<label for="professors">Responsible Professors:</label>
								<ul id="professors" class="list-group">
									<li class="list-group-item">
										<img src="../../css/res/user_img.png" alt="User's Profile Image" width="35" height="35">
										<span>{$session_username}</span>
									</li>
								</ul>
								<button id="add-professor" class="btn btn-primary" type="button">Add Professor</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title text-center">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Questions</a>
				</h4>
			</div>
			<div id="collapse2" class="panel-collapse collapse">
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-offset-4 col-sm-4">
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
					<div class="row question">
						<div class="col-sm-11">
							<div id="1" class="panel panel-default">
								<div class="panel-heading">
									<span>This is a question</span>
								</div>
								<div class="panel-body">
									<ul>
										<li><span>This is an answer</span></li>
										<li><span>This is an answer</span></li>
										<li><span>This is an answer</span></li>
										<li><span>This is an answer</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-1">
							<button class="btn btn-default question-button" panel-button="1">
								<span class="glyphicon glyphicon-plus"></span>
							</button>
						</div>
					</div>
					<div class="row question">
						<div class="col-sm-11">
							<div id="2" class="panel panel-default">
								<div class="panel-heading">
									<span>This is a question</span>
								</div>
								<div class="panel-body">
									<ul>
										<li><span>This is an answer</span></li>
										<li><span>This is an answer</span></li>
										<li><span>This is an answer</span></li>
										<li><span>This is an answer</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-1">
							<button class="btn btn-default question-button" panel-button="2">
								<span class="glyphicon glyphicon-plus"></span>
							</button>
						</div>
					</div>
					<div class="row question">
						<div class="col-sm-11">
							<div id="3" class="panel panel-default">
								<div class="panel-heading">
									<span>This is a question</span>
								</div>
								<div class="panel-body">
									<ul>
										<li><span>This is an answer</span></li>
										<li><span>This is an answer</span></li>
										<li><span>This is an answer</span></li>
										<li><span>This is an answer</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-1">
							<button class="btn btn-default question-button" panel-button="3">
								<span class="glyphicon glyphicon-plus"></span>
							</button>
						</div>
					</div>
					<div class="row question">
						<div class="col-sm-11">
							<div id="4" class="panel panel-default">
								<div class="panel-heading">
									<span>This is a question</span>
								</div>
								<div class="panel-body">
									<ul>
										<li><span>This is an answer</span></li>
										<li><span>This is an answer</span></li>
										<li><span>This is an answer</span></li>
										<li><span>This is an answer</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-1">
							<button class="btn btn-default question-button" panel-button="4">
								<span class="glyphicon glyphicon-plus"></span>
							</button>
						</div>
					</div>
					<div class="row">
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
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}