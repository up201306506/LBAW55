<?php /* Smarty version Smarty-3.1.15, created on 2016-06-03 00:48:45
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/question/create_question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2075567543574ff873207915-30799027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd04390ec906b8dd3aa21c0479f110ddf3b31a3c0' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/question/create_question.tpl',
      1 => 1464907723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2075567543574ff873207915-30799027',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574ff873368102_81028117',
  'variables' => 
  array (
    'categories' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574ff873368102_81028117')) {function content_574ff873368102_81028117($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-lg-offset-2 col-md-offset-2">
			<h1>New Question</h1>
			<div class="box">
				<form role="create-question">
					<div class="category">
						<div class="form-group">
							<label for="category">Category:</label>
							<select id="category" class="form-control">
							<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['categoryid'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['type'];?>
</option>
							<?php } ?>
							</select>
						</div>
					</div>
					<div class="question">
						<div class="form-group">
							<label for="question">Question:</label>
							<textarea id="question" class="form-control" rows="10" required="required"></textarea>
						</div>
					</div>
					<div class="answers">
						<div class="form-group answer-block">
							<label for="answer-1">Answer #1:</label>
							<div class="input-group">
								<textarea id="answer-1" class="form-control answer" rows="5" required="required"></textarea>
								<span class="input-group-addon">
									<input type="radio" name="correct" value="1">
									<span class="glyphicon glyphicon-ok"></span>
								</span>
							</div>
						</div>
						<div class="form-group answer-block">
							<label for="answer-2">Answer #2:</label>
							<div class="input-group">
								<textarea id="answer-2" class="form-control answer" rows="5" required="required"></textarea>
								<span class="input-group-addon">
									<input type="radio" name="correct" value="2">
									<span class="glyphicon glyphicon-ok"></span>
								</span>
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
