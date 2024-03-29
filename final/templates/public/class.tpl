{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1>{$class.classname}</h1>
	<div class="row">
		<div id="first" class="col-lg-3 col-md-4 col-sm-12">
			<div id="class-info" class="box">
				<h3>Information</h3>
				<span>Created by: {$manager}</span>
				<span>Date: {$class.creationdate}</span>
			{if $usertype eq 'Professor'}
			{if $this_class_belong}
				<div id="center-edit">
					<a class="btn btn-primary" href="{$BASE_URL}professor/class/edit_class_participants.php?id={$class.classid}">Edit Participants</a>
				</div>
			{/if}
			{else}
			{if !$this_class_belong}
				<div id="center-edit">
					<a class="btn btn-primary" href="{$BASE_URL}action/enroll_class.php?id={$class.classid}">Enroll Class</a>
				</div>
			{/if}
			{/if}
			</div>
			<div class="box">
				<h3>Description</h3>
				<span>{$class.description}</span>
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
			<div id="participants" class="box">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Account Type</th>
						</tr>
					</thead>
					<tbody>
					{foreach $participants as $participant}
						<tr>
							<td><a href="{$BASE_URL|cat:'public/profile.php?id='|cat:$participant.userid}">{$participant.name}</a></td>
							<td>{$participant.accounttypevar}</td>
						</tr>
					{/foreach}
					</tbody>
				</table>
			</div>
			<div id="center">
				<button id="shide" class="btn btn-default">Show Participants</button>
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
						<li><a href="{$BASE_URL|cat:'admin/validate_accounts.php'}"><span class="glyphicon glyphicon-th-list"></span>Validate Professor Accounts</a></li>
						<li><a href="{$BASE_URL|cat:'admin/manage_database.php'}"><span class="glyphicon glyphicon-folder-close"></span>Manage Database</a></li>
					{elseif $usertype eq 'Professor'}
						<li><a href="{$BASE_URL|cat:'professor/category/create_category.php'}"><span class="glyphicon glyphicon-bookmark"></span>Create Category</a></li>
						<li><a href="{$BASE_URL|cat:'professor/class/create_class.php'}"><span class="glyphicon glyphicon-education"></span>Create Class</a></li>
						<li><a href="{$BASE_URL|cat:'professor/exam/create_exam.php'}"><span class="glyphicon glyphicon-file"></span>Create Exam</a></li>
						<li><a href="{$BASE_URL|cat:'professor/question/create_question.php'}"><span class="glyphicon glyphicon-pencil"></span>Create Question</a></li>
						<li><a href="{$BASE_URL|cat:'professor/stats/stats.php'}"><span class="glyphicon glyphicon-stats"></span>Statistics</a></li>
						<li><a href="{$BASE_URL|cat:'public/review_grades.php?id='|cat:$class.classid}"><span class="glyphicon glyphicon-list"></span>Review Grades</a></li>
						<li><a href="{$BASE_URL|cat:'public/find_classes.php'}"><span class="glyphicon glyphicon-search"></span>Find Classes</a></li>
					{else}
						<li><a href="{$BASE_URL|cat:'public/review_grades.php?id='|cat:$class.classid}"><span class="glyphicon glyphicon-list-alt"></span>Review Grades</a></li>
						<li><a href="{$BASE_URL|cat:'public/find_classes.php'}"><span class="glyphicon glyphicon-search"></span>Find Classes</a></li>
					{/if}
				</ul>
			</div>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}