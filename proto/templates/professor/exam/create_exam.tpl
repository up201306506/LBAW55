{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1>New Exam</h1>
	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Information</a>
				</h4>
			</div>
			<div id="collapse1" class="panel-collapse collapse in">
				<div class="panel-body">
					<div class="col-sm-4">
						<div class="form-group">
							<label for="class">Class:</label>
							<select id="class" class="form-control">
								<option>LBAW</option>
								<option>COMP</option>
								<option>PPIN</option>
								<option>SDIS</option>
								<option>IART</option>
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
					</div> <!-- col-sm-4 -->
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
									Professor In Charge
								</li>
							</ul>
							<button id="add-professor" class="btn btn-primary" type="button">Add Professor</button>
						</div>
					</div> <!-- col-sm-8 -->
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Questions</a>
				</h4>
			</div>
			<div id="collapse2" class="panel-collapse collapse">
				<div class="panel-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}