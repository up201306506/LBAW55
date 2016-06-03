<?php /* Smarty version Smarty-3.1.15, created on 2016-06-02 17:34:06
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/student/exam/exam.tpl" */ ?>
<?php /*%%SmartyHeaderCode:830771527574ff39f15c779-20925958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aea914779c4208cf44f3265a51044241057b91e2' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/student/exam/exam.tpl',
      1 => 1464858366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '830771527574ff39f15c779-20925958',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574ff39f268e11_25148576',
  'variables' => 
  array (
    'exam' => 0,
    'session_username' => 0,
    'questions' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574ff39f268e11_25148576')) {function content_574ff39f268e11_25148576($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<h1><?php echo $_smarty_tpl->tpl_vars['exam']->value['examidentification'];?>
</h1>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-sm-12">
			<div class="box">
				<img id="user-img" class="img-circle img-responsive" src="../../css/res/user_img.png" width="200" height="200">
				<div id="username">
					<span class="glyphicon glyphicon-credit-card"></span>
					<span> <?php echo $_smarty_tpl->tpl_vars['session_username']->value;?>
</span>
				</div>
				<div id="finish">
					<span class="glyphicon glyphicon-time"></span>
					<span> <?php echo $_smarty_tpl->tpl_vars['exam']->value['duration'];?>
</span>
				</div>
				<div id="center">
					<button class="btn btn-warning">Done</button>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-md-8 col-sm-12">
			<div class="box">
				<h3>Information</h3>
				<span><?php echo $_smarty_tpl->tpl_vars['exam']->value['information'];?>
</span>
			</div>
			<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
			
			<?php } ?>
			<div class="input-group">
				<div class="my-panel">
					<div class="my-panel-header">
						<span>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</span>
					</div>
					<div class="my-panel-body">
						<form role="answers">
							<div class="radio">
								<label><input type="radio" name="optradio"/>This is an answer</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio"/>This is an answer</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio"/>This is an answer</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio"/>This is an answer</label>
							</div>
						</form>
					</div>
				</div>
				<span class="input-group-addon flag"><span class="glyphicon glyphicon-flag"></span></span>
			</div>
			<div class="input-group">
				<div class="my-panel">
					<div class="my-panel-header">
						<span>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</span>
					</div>
					<div class="my-panel-body">
						<form role="answers">
							<div class="radio">
								<label><input type="radio" name="optradio"/>This is an answer</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio"/>This is an answer</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio"/>This is an answer</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio"/>This is an answer</label>
							</div>
						</form>
					</div>
				</div>
				<span class="input-group-addon flag"><span class="glyphicon glyphicon-flag"></span></span>
			</div>
			<div class="input-group">
				<div class="my-panel">
					<div class="my-panel-header">
						<span>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</span>
					</div>
					<div class="my-panel-body">
						<form role="answers">
							<div class="radio">
								<label><input type="radio" name="optradio"/>This is an answer</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio"/>This is an answer</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio"/>This is an answer</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio"/>This is an answer</label>
							</div>
						</form>
					</div>
				</div>
				<span class="input-group-addon flag"><span class="glyphicon glyphicon-flag"></span></span>
			</div>
			<div class="input-group">
				<div class="my-panel">
					<div class="my-panel-header">
						<span>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</span>
					</div>
					<div class="my-panel-body">
						<form role="answers">
							<div class="radio">
								<label><input type="radio" name="optradio"/>This is an answer</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio"/>This is an answer</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio"/>This is an answer</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio"/>This is an answer</label>
							</div>
						</form>
					</div>
				</div>
				<span class="input-group-addon flag"><span class="glyphicon glyphicon-flag"></span></span>
			</div>
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

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
