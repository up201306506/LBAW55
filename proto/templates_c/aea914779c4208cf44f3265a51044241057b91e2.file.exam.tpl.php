<?php /* Smarty version Smarty-3.1.15, created on 2016-05-27 23:43:06
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/student/exam/exam.tpl" */ ?>
<?php /*%%SmartyHeaderCode:607418025748bf6a809855-78874112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aea914779c4208cf44f3265a51044241057b91e2' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/student/exam/exam.tpl',
      1 => 1464385132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '607418025748bf6a809855-78874112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'session_username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5748bf6a8defd6_23302520',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5748bf6a8defd6_23302520')) {function content_5748bf6a8defd6_23302520($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="wrapper">
	<h1>Exam</h1>
	<div class="row">
		<div class="col-sm-3">
			<div class="well">
				<img id="user-img" class="img-circle img-responsive" src="../../css/res/user_img.png" width="200" height="200">
				<div id="username">
					<span class="glyphicon glyphicon-credit-card"></span>
					<span> <?php echo $_smarty_tpl->tpl_vars['session_username']->value;?>
</span>
				</div>
				<div id="start">
					<span class="glyphicon glyphicon-play"></span>
					<span> HH:MM:SS</span>
				</div>
				<div id="finish">
					<span class="glyphicon glyphicon-time"></span>
					<span> HH:MM:SS</span>
				</div>
				<button id="done" class="btn btn-warning">Done</button>
			</div>
		</div> <!-- col-sm-3 -->
		<div class="col-sm-9">
			<div class="well">
				<h3>Information</h3>
				<span>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</span>
			</div>
			<div class="row question">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</span>
					</div>
					<div class="panel-body">
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
			</div>
			<div class="row question">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</span>
					</div>
					<div class="panel-body">
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
			</div>
			<div class="row question">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</span>
					</div>
					<div class="panel-body">
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
			</div>
			<div class="row question">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</span>
					</div>
					<div class="panel-body">
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
			</div>
			<div class="row question">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</span>
					</div>
					<div class="panel-body">
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
			</div>
			<ul class="pagination">
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
			</ul>
		</div> <!-- col-sm-9 -->
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
