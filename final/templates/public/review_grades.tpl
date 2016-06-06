{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-lg-offset-2 col-md-offset-2">
			<h1>Review Grades</h1>
		{if $usertype eq 'Student'}
			<div class="box">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Date</th>
							<th>Final Grade</th>
						</tr>
					</thead>
					<tbody>
					{foreach $exams as $exam}
						<tr>
							<td>{$exam.examidentification}</td>
							<td>{$exam.date}</td>
						{if $grades[$exam.examid]['finalgrade']}
							<td>{$grades[$exam.examid]['finalgrade']}</td>
						{else}
							<td>Not Yet Published</td>
						{/if}
						</tr>
					{/foreach}
					</tbody>
				</table>
			</div>
		{else}
			{foreach $exams as $exam}
			<div class="box">
				<h3>{$exam.examidentification}</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Final Grade</th>
						</tr>
					</thead>
					<tbody>
					{foreach $students as $student}
						<tr>
							<td>{$student.name}</td>
							<td>{$grades[$student['userid']]['finalgrade']}</td>
						</tr>
					{/foreach}
					</tbody>
				</table>
			</div>
			{/foreach}
		{/if}
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}