{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1>Manage Questions</h1>
	<div class="box">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-lg-offset-4 col-md-offset-4">
				<div class="form-group">
					<label for="category">Category</label>
					<select id="category" class="form-control">
					{if !$categorylist}
						<option value=''>No categories...</option>
					{else}
					{foreach $categorylist as $category}
						<option value='{$category.categoryid}'>{$category.type}</option>
					{/foreach}
					{/if}
					</select>
				</div>
			</div>
		</div>
		<div id="questions">
		{foreach $questions as $question}
			<div id="{$question.questionid}" class="input-group question">
				<div class="my-panel">
					<div class="my-panel-header">
						<span>{$question.questionid}:{$question.question}</span>
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