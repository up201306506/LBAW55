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
							<div id="date">
								<select class="day">
									<option>1</option>
									<option>2</option>
									<option>...</option>
									<option>31</option>
								</select>
								<b><span>/</span></b>
								<select class="month">
									<option>January</option>
									<option>February</option>
									<option>...</option>
									<option>December</option>
								</select>
								<b><span>/</span></b>
								<select class="year">
									<option>2016</option>
									<option>2017</option>
									<option>...</option>
									<option>3000</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="hour">Hour:</label>
							<div id="hour">
								<select class="hours">
									<option>00</option>
									<option>01</option>
									<option>...</option>
									<option>23</option>
								</select>
								<b><span>:</span></b>
								<select class="minutes">
									<option>00</option>
									<option>01</option>
									<option>...</option>
									<option>59</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="duration">Duration:</label>
							<div id="duration">
								<select class="hours">
									<option>00</option>
									<option>01</option>
									<option>...</option>
									<option>23</option>
								</select>
								<b><span>:</span></b>
								<select class="minutes">
									<option>00</option>
									<option>01</option>
									<option>...</option>
									<option>59</option>
								</select>
							</div>
						</div>
					</div> <!-- col-sm-4 -->
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