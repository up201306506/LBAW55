<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 07:57:22
         compiled from "D:\Programs\wamp\www\LBAW55\proto\templates\student\exam\exam.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1909257543f3abbe2f4-95795881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba9019bfde68c4c27762222e0c27516e62b874ea' => 
    array (
      0 => 'D:\\Programs\\wamp\\www\\LBAW55\\proto\\templates\\student\\exam\\exam.tpl',
      1 => 1465196240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1909257543f3abbe2f4-95795881',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57543f3ad20ee7_16334648',
  'variables' => 
  array (
    'exam' => 0,
    'use_image' => 0,
    'img_url' => 0,
    'BASE_URL' => 0,
    'session_username' => 0,
    'exam_timeleft' => 0,
    'exam_ongoing' => 0,
    'questions' => 0,
    'question' => 0,
    'answers' => 0,
    'answer' => 0,
    'exam_is_finished' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57543f3ad20ee7_16334648')) {function content_57543f3ad20ee7_16334648($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<h1><?php echo $_smarty_tpl->tpl_vars['exam']->value['examidentification'];?>
</h1>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-sm-12">
			<div class="box">
				<img id="user-img" class="img-circle img-responsive" src="<?php if ($_smarty_tpl->tpl_vars['use_image']->value) {?><?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
<?php } else { ?><?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('css/res/user_img/default.png');?>
<?php }?>" width="200" height="200">
				<div id="username">
					<span class="glyphicon glyphicon-credit-card"></span>
					<span><?php echo $_smarty_tpl->tpl_vars['session_username']->value;?>
</span>
				</div>
				<div id="finish">
					<span class="glyphicon glyphicon-time"></span>
					<span id=examduration><?php echo $_smarty_tpl->tpl_vars['exam']->value['duration'];?>
</span> minutes<br>
					<span id=timeleft hidden><?php echo $_smarty_tpl->tpl_vars['exam_timeleft']->value;?>
</span>
					<div id="clockdiv"<?php if (!$_smarty_tpl->tpl_vars['exam_ongoing']->value) {?> hidden<?php }?>></div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['exam_ongoing']->value) {?>	
					<div id="center">
						<button id="end_exam" class="btn btn-warning">Done</button>
					</div>
				<?php }?>	
			</div>
		</div>
		<div class="col-lg-9 col-md-8 col-sm-12">
			<div class="box">
				<h3>Information</h3>
				<span><?php echo $_smarty_tpl->tpl_vars['exam']->value['information'];?>
</span>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['exam_ongoing']->value) {?>	
				<?php if ($_smarty_tpl->tpl_vars['questions']->value) {?>
					<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
					<div class="input-group">
						<div class="my-panel">
							<div class="my-panel-header">
								<span>
									<?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>

								</span>
							</div>
							<div class="my-panel-body">
								<form role="answers">
									<?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['answers']->value[$_smarty_tpl->tpl_vars['question']->value['questionid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value) {
$_smarty_tpl->tpl_vars['answer']->_loop = true;
?>
										<div class="radio">
											<label><input type="radio" name="optradio"/><?php echo $_smarty_tpl->tpl_vars['answer']->value['answer'];?>
</label>
										</div>
									<?php } ?>
								</form>
							</div>
						</div>
						<span class="input-group-addon flag"><span class="glyphicon glyphicon-flag"></span></span>
					</div>
					<?php } ?>
					<?php } else { ?>
					<div class="input-group question">
						<div> No questions to display </div>
					</div>
				<?php }?>
				<ul class="pagination">
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
				</ul>
			
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['exam_is_finished']->value) {?>
					<div class="box">
						<span>This is exam is already over. Please wait for your grades.</span>
					</div>
				<?php } else { ?>
					<div class="box">
						<span>This exam has not started yet.</span>
					</div>
				<?php }?>
			<?php }?>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
