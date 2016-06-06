{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1>Manage Questions</h1>
	<div class="box">
		<div id="questions">
		{if $questions}
			{foreach $questions as $question}
				<div id="{$question.questionid}" class="input-group question">
					<div class="my-panel">
						<div class="my-panel-header">
							<span>{$question.question}</span>
						</div>
						<div class="my-panel-body">
							<ul id="answers">
							{foreach $answers[$question.questionid] as $answer}
								<li>{$answer.answer}</li>
							{/foreach}
							</ul>
						</div>
					</div>
					<span class="input-group-addon remove"><span class="glyphicon glyphicon-remove"></span></span>
				</div>
			{/foreach}
		{else}
			<div class="input-group question">
				<div> No questions to display </div>
			</div>
		{/if}
		</div>
		<nav id="center">
			<ul class="pagination">
			</ul>
		</nav>
	</div>
</div>

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}