<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.15, created on 2016-06-01 18:51:28
=======
<?php /* Smarty version Smarty-3.1.15, created on 2016-06-02 01:51:32
>>>>>>> master
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/question/create_question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9224128715748bf288a7bc9-42204768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd04390ec906b8dd3aa21c0479f110ddf3b31a3c0' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/question/create_question.tpl',
<<<<<<< HEAD
      1 => 1464781728,
=======
      1 => 1464825088,
>>>>>>> master
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9224128715748bf288a7bc9-42204768',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5748bf28958ff2_58615654',
  'variables' => 
  array (
<<<<<<< HEAD
    'BASE_URL' => 0,
=======
    'categories' => 0,
    'cat' => 0,
>>>>>>> master
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5748bf28958ff2_58615654')) {function content_5748bf28958ff2_58615654($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-3 col-md-offset-2">
			<h1>New Question</h1>
			<div class="box">
<<<<<<< HEAD
				<form action="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('action/create_question_action.php');?>
" method="post" role="form">
=======
				<form role="create-question">
>>>>>>> master
					<div class="category">
						<div class="form-group">
							<label for="category">Category:</label>
							<select id="category" class="form-control">
							<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
								<option id="<?php echo $_smarty_tpl->tpl_vars['cat']->value['categoryid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['type'];?>
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
							<input id="upload_img" type="file" accept="image/*"></input>
						</div>
					</div>
					<div class="answers">
						<div class="answer-block">
							<div class="form-group">
								<label for="answer-1">Answer #1:</label>
								<textarea id="answer-1" class="form-control answer" rows="5" required="required"></textarea>
							</div>
						</div>
						<div class="answer-block">
							<div class="form-group">
								<label for="answer-2">Answer #2:</label>
								<textarea id="answer-2" class="form-control answer" rows="5" required="required"></textarea>
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
