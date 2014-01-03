<?php /* Smarty version Smarty-3.1.13, created on 2014-01-03 13:42:18
         compiled from "/var/www/tintin/templates/standard/adduserform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143690925252c6b02a5f93a6-87546007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c67b735cf8449934a9f9393b7022775c43c0046b' => 
    array (
      0 => '/var/www/tintin/templates/standard/adduserform.tpl',
      1 => 1377125160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143690925252c6b02a5f93a6-87546007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'projects' => 0,
    'roles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52c6b02a63d3f7_84612987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c6b02a63d3f7_84612987')) {function content_52c6b02a63d3f7_84612987($_smarty_tpl) {?><div class="block_in_wrapper">
	<form novalidate class="main" method="post" action="admin.php?action=adduser" onsubmit="return validateCompleteForm(this);">
		<fieldset>

			<div class="row">
				<label for="name"><?php echo $_smarty_tpl->getConfigVariable('name');?>
:</label>
				<input type="text" name="name" id="name" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('name');?>
" />
			</div>
			<div class="row">
				<label for="company"><?php echo $_smarty_tpl->getConfigVariable('company');?>
:</label>
				<input type="text" name="company" id="company" realname="<?php echo $_smarty_tpl->getConfigVariable('company');?>
" />
			</div>
			<div class="row">
				<label for="email"><?php echo $_smarty_tpl->getConfigVariable('email');?>
:</label>
				<input type="text" name="email" id="email" realname="<?php echo $_smarty_tpl->getConfigVariable('email');?>
" />
			</div>
			<div class="row">
				<label for="pass"><?php echo $_smarty_tpl->getConfigVariable('password');?>
:</label>
				<input type="text" name="pass" id="pass" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('password');?>
" />
			</div>
			<div class = "row">
				<label id = "rate"><?php echo $_smarty_tpl->getConfigVariable('rate');?>
:</label>
				<input type = "text" name = "rate" id = "rate" />
			</div>

			<?php if ($_smarty_tpl->tpl_vars['projects']->value){?> 
				<div class="clear_both_b"></div>

				<div class="row">
					<label><?php echo $_smarty_tpl->getConfigVariable('projects');?>
:</label>
					<div style="float:left;">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['project'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['project']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['name'] = 'project';
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['projects']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['project']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['project']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['project']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['project']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['project']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['project']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['total']);
?>
							<div class="row">
								<input type="checkbox" class="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
" name="assignto[]" id="<?php echo $_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
" /><label for="<?php echo $_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
" style="width:210px;"><?php echo $_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['name'];?>
</label>
							</div>
						<?php endfor; endif; ?>
					</div>
				</div>

				<div class="clear_both_b"></div>
			<?php }?>

			<div class="row">
				<label><?php echo $_smarty_tpl->getConfigVariable('role');?>
:</label>
				<select name = "role" realname = "<?php echo $_smarty_tpl->getConfigVariable('role');?>
" required="1" exclude = "-1" id = "roleselect">
					<option value="-1" selected="selected"><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['role'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['role']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['name'] = 'role';
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['roles']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['role']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['role']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['role']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['role']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['role']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['role']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['total']);
?>
						<option value = "<?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['ID'];?>
" id="role<?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['name'];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>

			<div class="clear_both_b"></div>

			<div class="row">
				<label>&nbsp;</label>
				<div class="butn">
					<button type="submit"><?php echo $_smarty_tpl->getConfigVariable('addbutton');?>
</button>
				</div>
				<a href = "javascript:blindtoggle('form_member');" class="butn_link"><span><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</span></a>
			</div>

		</fieldset>
	</form>
</div> <?php }} ?>