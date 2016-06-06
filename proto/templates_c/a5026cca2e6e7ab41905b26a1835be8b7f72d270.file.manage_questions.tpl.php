<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 07:12:36
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/admin/manage_questions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17117282525751b5bf7e54e9-53469417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5026cca2e6e7ab41905b26a1835be8b7f72d270' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/admin/manage_questions.tpl',
      1 => 1465189953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17117282525751b5bf7e54e9-53469417',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5751b5bfa3f035_56535147',
  'variables' => 
  array (
    'categorylist' => 0,
    'category' => 0,
    'questions' => 0,
    'question' => 0,
    'answers' => 0,
    'answer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5751b5bfa3f035_56535147')) {function content_5751b5bfa3f035_56535147($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<h1>Manage Questions</h1>
	<div class="box">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-lg-offset-4 col-md-offset-4">
				<div class="form-group">
					<label for="category">Category</label>
					<select id="category" class="form-control">
					<?php if (!$_smarty_tpl->tpl_vars['categorylist']->value) {?>
						<option value=''>No categories...</option>
					<?php } else { ?>
					<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorylist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
						<option value='<?php echo $_smarty_tpl->tpl_vars['category']->value['categoryid'];?>
'><?php echo $_smarty_tpl->tpl_vars['category']->value['type'];?>
</option>
					<?php } ?>
					<?php }?>
					</select>
				</div>
			</div>
		</div>
		<div id="questions">
		<?php if ($_smarty_tpl->tpl_vars['questions']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
				<div id="<?php echo $_smarty_tpl->tpl_vars['question']->value['questionid'];?>
" class="input-group question">
					<div class="my-panel">
						<div class="my-panel-header">
							<span><?php echo $_smarty_tpl->tpl_vars['question']->value['questionid'];?>
:<?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>
</span>
						</div>
						<div class="my-panel-body">
							<ul id="answers">
							<?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['answers']->value[$_smarty_tpl->tpl_vars['question']->value['questionid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value) {
$_smarty_tpl->tpl_vars['answer']->_loop = true;
?>
								<li><?php echo $_smarty_tpl->tpl_vars['answer']->value['answer'];?>
</li>
							<?php } ?>
							</ul>
						</div>
					</div>
					<span class="input-group-addon remove"><span class="glyphicon glyphicon-remove"></span></span>
				</div>
			<?php } ?>
		<?php } else { ?>
			<div class="input-group question">
				<div> No questions to display </div>
			</div>
		<?php }?>
		</div>
		<nav id="center">
			<ul class="pagination">
			</ul>
		</nav>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
