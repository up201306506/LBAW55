<?php /* Smarty version Smarty-3.1.15, created on 2016-06-05 19:30:27
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/exam/create_exam.tpl" */ ?>
<?php /*%%SmartyHeaderCode:670833142575461b3c68d45-39691758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc22be6c8fd594efe3e3d0dc8cf9ebbff52d9236' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/exam/create_exam.tpl',
      1 => 1465078252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '670833142575461b3c68d45-39691758',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_575461b3d93108_30754134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575461b3d93108_30754134')) {function content_575461b3d93108_30754134($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<h1>New Exam</h1>
	<div class="box">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="form-group">
					<label for="class">Class:</label>
					<select id="class" class="form-control">
						<option>Class #1</option>
						<option>Class #2</option>
						<option>Class #3</option>
						<option>Class #4</option>
						<option>Class #5</option>
					</select>
				</div>
				<div class="form-group">
					<label for="date">Date:</label>
					<input id="date" class="form-control" type="text" placeholder="DD/MM/YYYY" required="required">
				</div>
				<div class="form-group">
					<label for="duration">Duration:</label>
					<input id="duration" class="form-control" type="text" placeholder="HH:MM" required="required">
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12">
				<div id="pass" class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="password">Password (Optional):</label>
							<input id="password" class="form-control" type="password">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="re-password">Confirm Password:</label>
							<input id="re-password" class="form-control" type="password">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="information">Information:</label>
					<textarea id="information" class="form-control" rows="6" required="required"></textarea>
				</div>
			</div>
		</div>
	</div>
	<div class="box">
		<h3>Questions</h3>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-8 col-lg-offset-4 col-md-offset-4 col-sm-offset-2">
				<div class="form-group">
					<label for="category">Category:</label>
					<select id="category" class="form-control">
						<option>Category #1</option>
						<option>Category #2</option>
						<option>Category #3</option>
						<option>Category #4</option>
						<option>Category #5</option>
					</select>
				</div>
			</div>
		</div>
		<div class="input-group question">
			<div class="my-panel panel-success">
				<div class="my-panel-header">
					<span>This is a question</span>
				</div>
				<div class="my-panel-body">
					<ul>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
					</ul>
				</div>
			</div>
			<span class="input-group-addon"><span class="glyphicon glyphicon-plus plus"></span></span>
		</div>
		<div class="input-group question">
			<div class="my-panel">
				<div class="my-panel-header">
					<span>This is a question</span>
				</div>
				<div class="my-panel-body">
					<ul>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
					</ul>
				</div>
			</div>
			<span class="input-group-addon"><span class="glyphicon glyphicon-plus plus"></span></span>
		</div>
		<div class="input-group question">
			<div class="my-panel">
				<div class="my-panel-header">
					<span>This is a question</span>
				</div>
				<div class="my-panel-body">
					<ul>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
					</ul>
				</div>
			</div>
			<span class="input-group-addon"><span class="glyphicon glyphicon-plus plus"></span></span>
		</div>
		<div class="input-group question">
			<div class="my-panel">
				<div class="my-panel-header">
					<span>This is a question</span>
				</div>
				<div class="my-panel-body">
					<ul>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
					</ul>
				</div>
			</div>
			<span class="input-group-addon"><span class="glyphicon glyphicon-plus plus"></span></span>
		</div>
		<div class="input-group question">
			<div class="my-panel">
				<div class="my-panel-header">
					<span>This is a question</span>
				</div>
				<div class="my-panel-body">
					<ul>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
						<li><span>This is an answer</span></li>
					</ul>
				</div>
			</div>
			<span class="input-group-addon"><span class="glyphicon glyphicon-plus plus"></span></span>
		</div>
		<div id="options" class="row">
			<ul class="pagination">
				
			</ul>
			<input id="submit" class="btn btn-primary" type="submit" value="Next">
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
