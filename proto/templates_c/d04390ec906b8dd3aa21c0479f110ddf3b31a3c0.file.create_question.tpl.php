<?php /* Smarty version Smarty-3.1.15, created on 2016-05-27 23:42:00
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/question/create_question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9224128715748bf288a7bc9-42204768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd04390ec906b8dd3aa21c0479f110ddf3b31a3c0' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/question/create_question.tpl',
      1 => 1464385099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9224128715748bf288a7bc9-42204768',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5748bf28958ff2_58615654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5748bf28958ff2_58615654')) {function content_5748bf28958ff2_58615654($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="wrapper">
	<div class="row">
		<div class="col-sm-offset-3 col-sm-6">
			<h1>New Question</h1>
			<div class="well">
				<form action="#" method="post" role="form">
					<div class="category">
						<div class="form-group">
							<label for="category">Category:</label>
							<select id="category" class="form-control">
								<option value="math">Math</option>
								<option value="history">History</option>
								<option value="science">Science</option>
								<option value="other">Other</option>
							</select>
						</div>
					</div>
					<div class="question">
						<div class="form-group">
							<label for="question">Question:</label>
							<textarea id="question" class="form-control" rows="10"></textarea>
							<input id="upload_img" type="file" accept="image/*"></input>
						</div>
					</div>
					<div class="answers">
						<div class="answer-block">
							<div class="form-group">
								<label for="answer">Answer #1:</label>
								<textarea id="answer" class="form-control" rows="5"></textarea>
							</div>
						</div>
						<div class="answer-block">
							<div class="form-group">
								<label for="answer">Answer #2:</label>
								<textarea id="answer" class="form-control" rows="5"></textarea>
							</div>
						</div>
					</div>
					<div class="buttons">
						<button id="add_answer" class="btn btn-primary" type="button">Add Answer</button>
						<input id="finish" class="btn btn-success" type="submit" value="Submit Question"></input>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
