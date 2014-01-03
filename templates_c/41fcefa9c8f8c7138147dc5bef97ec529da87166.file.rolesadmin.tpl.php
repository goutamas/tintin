<?php /* Smarty version Smarty-3.1.13, created on 2014-01-03 13:42:18
         compiled from "/var/www/tintin/templates/standard/rolesadmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214691196352c6b02a644731-76705221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41fcefa9c8f8c7138147dc5bef97ec529da87166' => 
    array (
      0 => '/var/www/tintin/templates/standard/rolesadmin.tpl',
      1 => 1377125160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214691196352c6b02a644731-76705221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'roles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52c6b02a7816d0_91493635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c6b02a7816d0_91493635')) {function content_52c6b02a7816d0_91493635($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/tintin/include/plugins/modifier.truncate.php';
?>	<div class="headline">

				<a href="javascript:void(0);" id="acc-roles_toggle" class="win_block" onclick = "toggleBlock('acc-roles');"></a>


					<div class="wintools">
						<a id = "addrolelink" class="add" href="javascript:blindtoggle('form_addmyroles');" id="add_myroles" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_myroles','butn_link_active','butn_link');toggleClass('sm_myrolls','smooth','nosmooth');"><span><?php echo $_smarty_tpl->getConfigVariable('addrole');?>
</span></a>
					</div>

				<h2>
					<img src="./templates/standard/images/symbols/userlist.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('roles');?>

				</h2>
			</div>

			<div class="block" id="acc-roles">

			
				<div id = "form_addmyroles" class="addmenue" style = "display:none;">
				<?php echo $_smarty_tpl->getSubTemplate ("addroles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('myroles'=>"1"), 0);?>

				</div>

				<table cellpadding="0" cellspacing="0" border="0">

					<thead>
						<tr>
							<th class="a"></th>
							<th class="b"><?php echo $_smarty_tpl->getConfigVariable('name');?>
</th>
							<th class="c"></th>
							<th class="tools"></th>
						</tr>
					</thead>

					<tfoot>
						<tr>
							<td colspan="5"></td>
						</tr>
					</tfoot>

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

					
					<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['role']['index']%2==0){?>
					<tbody class="color-a" id="role_<?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['ID'];?>
">
					<?php }else{ ?>
					<tbody class="color-b" id="role_<?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['ID'];?>
">
					<?php }?>
						<tr>
							<td></td>
							<td>
								<div class="toggle-in">
								<span class="acc-toggle" onclick="accord_roles.activate($$('#acc-roles .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['role']['index'];?>
]);toggleAccordeon('acc-roles',this);"></span>
									<a href="javascript:accord_roles.activate($$('#acc-roles .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['role']['index'];?>
]);toggleAccordeon('acc-roles',this);">
										<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['name'],30,"...",true);?>

									</a>
								</div>
							</td>
							<td></td>
							<td class="tools">
							<!--	<a class="tool_edit" href="manageproject.php?action=editform&amp;id=<?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
" ></a>-->
								<a class="tool_del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'role_<?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['ID'];?>
\',\'manageroles.php?action=delrole&amp;id=<?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['ID'];?>
\')');"  title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a>
							</td>
						</tr>

					<tr class="acc">
					<td></td>
							<td colspan="4">
								<div class="accordion_toggle"></div>
								<div class="accordion_content">
                                    	<form class="main" method="post" action="manageroles.php?action=editrole&id=<?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['ID'];?>
" onsubmit="return validateCompleteForm(this);" >
	<fieldset>
		<div class="clear_both_b"></div>
		<div class = "row">
        <label for = "rolename"><?php echo $_smarty_tpl->getConfigVariable('name');?>
:</label>
        <input type = "text" name = "rolename" id = "rolename" value = "<?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['name'];?>
" />
        </div>

        <div class = "row"><label><?php echo $_smarty_tpl->getConfigVariable('permissions');?>
:</label>

            
            <div class = "row">
            <label></label>
            <label><?php echo $_smarty_tpl->getConfigVariable('projects');?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_projects[add]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['projects']['add']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('add');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_projects[edit]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['projects']['edit']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('edit');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_projects[del]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['projects']['del']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('delete');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_projects[close]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['projects']['close']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('close');?>

            </div>

            
            <div class = "row">
            <label></label>
            <label><?php echo $_smarty_tpl->getConfigVariable('milestones');?>
</label>
            </div>
             <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_milestones[view]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['milestones']['view']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('view');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_milestones[add]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['milestones']['add']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('add');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_milestones[edit]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['milestones']['edit']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('edit');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_milestones[del]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['milestones']['del']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('delete');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_milestones[close]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['milestones']['close']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('close');?>

            </div>

            
            <div class = "row">
            <label></label>
            <label><?php echo $_smarty_tpl->getConfigVariable('tasks');?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_tasks[view]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['tasks']['view']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('view');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_tasks[add]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['tasks']['add']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('add');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_tasks[edit]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['tasks']['edit']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('edit');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_tasks[del]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['tasks']['del']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('delete');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_tasks[close]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['tasks']['close']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('close');?>

            </div>


            
            <div class = "row">
            <label></label>
            <label><?php echo $_smarty_tpl->getConfigVariable('messages');?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_messages[view]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['messages']['view']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('view');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_messages[add]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['messages']['add']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('add');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_messages[edit]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['messages']['edit']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('edit');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_messages[del]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['messages']['del']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('delete');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_messages[close]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['messages']['close']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('answer');?>

            </div>

            
            <div class = "row">
            <label></label>
            <label><?php echo $_smarty_tpl->getConfigVariable('files');?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_files[view]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['files']['view']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('view');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_files[add]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['files']['add']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('add');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_files[edit]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['files']['edit']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('edit');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_files[del]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['files']['del']){?>checked<?php }?>   /><?php echo $_smarty_tpl->getConfigVariable('delete');?>

            </div>

            
            <div class = "row">
            <label></label>
            <label><?php echo $_smarty_tpl->getConfigVariable('timetracker');?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_timetracker[view]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['timetracker']['view']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('view');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_timetracker[read]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['timetracker']['read']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('permissionread');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_timetracker[add]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['timetracker']['add']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('add');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_timetracker[edit]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['timetracker']['edit']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('edit');?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_timetracker[del]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['timetracker']['del']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('delete');?>

            </div>

            <div class = "row">
            <label></label>
            <label><?php echo $_smarty_tpl->getConfigVariable('chat');?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_chat[add]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['chat']['add']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('chat');?>

            </div>


            <div class = "row">
            <label></label>
            <label><?php echo $_smarty_tpl->getConfigVariable('admin');?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_admin[add]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['admin']['add']){?>checked<?php }?>  /><?php echo $_smarty_tpl->getConfigVariable('administration');?>

            </div>

        </div>

	    <div class="clear_both_b"></div>

		<div class="row-butn-bottom">
    	<label>&nbsp;</label>
		<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('save');?>
</button>
		<button onclick="javascript:accord_roles.activate($$('#acc-roles .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['role']['index'];?>
]);toggleAccordeon('acc-roles',this);return false;"><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</button>
		</div>

	</fieldset>
	</form>
    </div>

							</td>
						</tr>
					</tbody>
					<?php endfor; endif; ?>

				</table>
<?php }} ?>