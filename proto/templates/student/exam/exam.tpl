{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div id="{$userid}" class="container">
	<h1 id="{$exam.examid}">{$exam.examidentification}</h1>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-sm-12">
			<div class="box">
				<img id="user-img" class="img-circle img-responsive" src="{if $use_image}{$img_url}{else}{$BASE_URL|cat:'css/res/user_img/default.png'}{/if}" width="200" height="200">
				<div id="username">
					<span class="glyphicon glyphicon-credit-card"></span>
					<span>{$session_username}</span>
				</div>
				<div id="finish">
					<span class="glyphicon glyphicon-time"></span>
					<span id=examduration>{$exam.duration}</span> minutes<br>
					<span id=timeleft hidden>{$exam_timeleft}</span>
					<div id="clockdiv"{if !$exam_ongoing} hidden{/if}></div>
				</div>
				{if $exam_ongoing}	
				<div id="center">
					<button id="end_exam" class="btn btn-warning">Done</button>
				</div>
				{/if}
				{if $usertype eq 'Professor'}
					{if $exam_is_finished}
						{if !$exam.gradespublished}
						<div id="center">
							<button id="publish" class="btn btn-warning">Publish Grades</button>
						</div>
						{else}
						<div id="center">
							<button id="publish" class="btn btn-warning disabled">Publish Grades</button>
						</div>
						{/if}
					{/if}
				{/if}
			</div>
		</div>
		<div class="col-lg-9 col-md-8 col-sm-12">
			<div class="box">
				<h3>Information</h3>
				<span>{$exam.information}</span>
			</div>
			<div id="questions">
				{if $exam_ongoing}
					{if $questions}
						{foreach $questions as $question}
						<div id="{$question.questionid}" class="my-panel">
							<div class="my-panel-header">
								<span>
									{$question.question}
								</span>
							</div>
							<div class="my-panel-body">
								<form role="answers">
									{foreach $answers[$question.questionid] as $answer}
										<div class="radio">
											<label>
												<input value="{$answer.questionanswerid}" type="radio" name="optradio"/>{$answer.answer}
											</label>
										</div>
									{/foreach}
								</form>
							</div>
						</div>
						{/foreach}
					{else}
						<div class="input-group question">
							<div> No questions to display </div>
						</div>
					{/if}
				{/if}
				{if $usertype eq 'Professor'}
					{if $questions}
						{foreach $questions as $question}
						<div id="{$question.questionid}" class="my-panel">
							<div class="my-panel-header">
								<span>
									{$question.question}
								</span>
							</div>
							<div class="my-panel-body">
								<ul>
							{foreach $answers[$question.questionid] as $answer}
									<li>{$answer.answer}</li>
							{/foreach}
								</ul>
							</div>
						</div>
						{/foreach}
					{else}
						<div class="input-group question">
							<div> No questions to display </div>
						</div>
					{/if}
				{/if}
			</div>
			<ul class="pagination">
			</ul>
		</div>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}