{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1>{$exam.examidentification}</h1>
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
					<div id="clockdiv"></div>
				</div>
				<div id="center">
					<button class="btn btn-warning">Done</button>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-md-8 col-sm-12">
			<div class="box">
				<h3>Information</h3>
				<span>{$exam.information}</span>
			</div>
			{if $questions}
			{foreach $questions as $question}
			<div class="input-group">
				<div class="my-panel">
					<div class="my-panel-header">
						<span>
							{$question.question}
						</span>
					</div>
					<div class="my-panel-body">
						<form role="answers">
							{foreach $answers[$question.questionid] as $answer}
								<div class="radio">
									<label><input type="radio" name="optradio"/>{$answer.answer}</label>
								</div>
							{/foreach}
						</form>
					</div>
				</div>
				<span class="input-group-addon flag"><span class="glyphicon glyphicon-flag"></span></span>
			</div>
			{/foreach}
			{else}
			<div class="input-group question">
				<div> No questions to display </div>
			</div>
			{/if}
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

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}