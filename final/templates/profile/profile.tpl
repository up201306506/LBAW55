{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
{if $usertype neq 'Administrator'}
	<h1>Profile</h1>
	<div class="row">
		<div id="first" class="col-lg-3 col-md-4 col-sm-12">
			<div class="box">
				<img id="user-img" class="img-circle img-responsive" src="{if $use_image}{$img_url}{else}{$BASE_URL|cat:'css/res/user_img/default.png'}{/if}" width="200" height="200">
				<div id="username">
					<span class="glyphicon glyphicon-credit-card"></span>
					<span>{$session_username}</span>
				</div>
				<div id="name">
					<span class="glyphicon glyphicon-user"></span>
					<span>{$session_name}</span>
				</div>
				<div id="email">
					<span class="glyphicon glyphicon-envelope"></span>
					<span>{$session_email}</span>
				</div>
			</div>
			<div class="box">
				<h3>Description</h3>
				<span id="description">{$description}</span>
			</div>
		</div>
		<div class="col-lg-6 col-md-8 col-sm-12">
			<div class="box">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Date</th>
							<th>Accessibility</th>
						</tr>
					</thead>
					<tbody>
					{foreach $exams as $exam}
						<tr>
							<td><a href="{$BASE_URL|cat:'student/exam/exam.php?id='|cat:$exam.examid}">{$exam.examidentification}</a></td>
							<td>{$exam.date}</td>
						{if $exam.password}
							<td>Private</td>
						{else}
							<td>Public</td>
						{/if}
						</tr>
					{/foreach}
					</tbody>
				</table>
			</div>
			<div class="box">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Class</th>
							<th>Manager</th>
							<th>Accessibility</th>
						</tr>
					</thead>
					<tbody>
					{foreach $classes as $class}
						<tr>
							<td>
								<a href="{$BASE_URL|cat:'public/class.php?id='|cat:$class.classid}">{$class.classname}</a>
							</td>
							<td>
								<a href="{$BASE_URL|cat:'public/profile.php?id='|cat:$class.profid}">{$class.name}</a>
							</td>
						{if $class.classpass}
							<td>Private</td>
						{else}
							<td>Public</td>
						{/if}
						</tr>
					{/foreach}
					</tbody>
				</table>
			</div>
		</div>
		<div id="third" class="col-lg-3 col-md-4 col-sm-12">
			<div id="events" class="box">
				<h5>ONGOING</h5>
				<span> - Nothing to report</span>
				<h5>COMING SOON</h5>
				<span> - Nothing to report</span>
			</div>
			<div id="options" class="box">
				<ul>
					{if $usertype eq 'Administrator'}
						<li><a href="{$BASE_URL|cat:'admin/validate_accounts.php'}"><span class="glyphicon glyphicon-th-list"></span>Validate Accounts</a></li>
						<li><a href="{$BASE_URL|cat:'admin/manage_accounts.php'}"><span class="glyphicon glyphicon-book"></span>Manage Accounts</a></li>
						<li><a href="{$BASE_URL|cat:'admin/manage_exams.php'}"><span class="glyphicon glyphicon-file"></span>Manage Exams</a></li>
						<li><a href="{$BASE_URL|cat:'admin/manage_questions.php'}"><span class="glyphicon glyphicon-question-sign"></span>Manage Questions</a></li>
					{elseif $usertype eq 'Professor'}
						<li><a href="{$BASE_URL|cat:'professor/category/create_category.php'}"><span class="glyphicon glyphicon-bookmark"></span>Create Category</a></li>
						<li><a href="{$BASE_URL|cat:'professor/class/create_class.php'}"><span class="glyphicon glyphicon-education"></span>Create Class</a></li>
						<li><a href="{$BASE_URL|cat:'professor/exam/create_exam.php'}"><span class="glyphicon glyphicon-file"></span>Create Exam</a></li>
						<li><a href="{$BASE_URL|cat:'professor/question/create_question.php'}"><span class="glyphicon glyphicon-pencil"></span>Create Question</a></li>
						<li><a href="{$BASE_URL|cat:'professor/stats/stats.php'}"><span class="glyphicon glyphicon-stats"></span>Statistics</a></li>
						<li><a href="{$BASE_URL|cat:'public/find_classes.php'}"><span class="glyphicon glyphicon-search"></span>Find Classes</a></li>
					{else}
						<li><a href="{$BASE_URL|cat:'public/find_classes.php'}"><span class="glyphicon glyphicon-search"></span>Find Classes</a></li>
					{/if}
				</ul>
			</div>
		</div>
	</div>
{else}
	<div class="row">
		<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-3 col-md-offset-2">
			<h1>Profile</h1>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="box">
						<img id="user-img" class="img-circle img-responsive" src="{if $use_image}{$img_url}{else}{$BASE_URL|cat:'css/res/user_img/default.png'}{/if}" width="200" height="200">
						<div id="username">
							<span class="glyphicon glyphicon-credit-card"></span>
							<span>{$session_username}</span>
						</div>
						<div id="name">
							<span class="glyphicon glyphicon-user"></span>
							<span>{$session_name}</span>
						</div>
						<div id="email">
							<span class="glyphicon glyphicon-envelope"></span>
							<span>{$session_email}</span>
						</div>
					</div>
					<div class="box">
						<h3>Description</h3>
						<span id="description">{$description}</span>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div id="admin-options" class="box">
						<ul>
							<li><a href="{$BASE_URL|cat:'admin/validate_accounts.php'}"><span class="glyphicon glyphicon-th-list"></span>Validate Accounts</a></li>
							<li><a href="{$BASE_URL|cat:'admin/manage_accounts.php'}"><span class="glyphicon glyphicon-book"></span>Manage Accounts</a></li>
							<li><a href="{$BASE_URL|cat:'admin/manage_exams.php'}"><span class="glyphicon glyphicon-file"></span>Manage Exams</a></li>
							<li><a href="{$BASE_URL|cat:'admin/manage_questions.php'}"><span class="glyphicon glyphicon-question-sign"></span>Manage Questions</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
{/if}
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}