<?php /* Smarty version Smarty-3.1.13, created on 2014-01-03 13:42:18
         compiled from "/var/www/tintin/templates/standard/adminusers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174696683952c6b02a42f9d0-86094542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c12aa3745ed1dd94c549f20ad23de8cc1957a115' => 
    array (
      0 => '/var/www/tintin/templates/standard/adminusers.tpl',
      1 => 1377125160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174696683952c6b02a42f9d0-86094542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'userpermissions' => 0,
    'users' => 0,
    'userid' => 0,
    'cl_config' => 0,
    'langfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52c6b02a5ed313_85387079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c6b02a5ed313_85387079')) {function content_52c6b02a5ed313_85387079($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/tintin/include/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_paginate_prev')) include '/var/www/tintin/include/plugins/function.paginate_prev.php';
if (!is_callable('smarty_function_paginate_middle')) include '/var/www/tintin/include/plugins/function.paginate_middle.php';
if (!is_callable('smarty_function_paginate_next')) include '/var/www/tintin/include/plugins/function.paginate_next.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax"), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('usertab'=>"active"), 0);?>

<div id="content-left">
<div id="content-left-in">
<div class="user">

	<div class="infowin_left" style = "display:none;" id = "systemmsg">
		<?php if ($_smarty_tpl->tpl_vars['mode']->value=="deleted"){?>
		<span class="info_in_red"><img src="templates/standard/images/symbols/userlist.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('userwasdeleted');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="added"){?>
		<span class="info_in_green"><img src="templates/standard/images/symbols/userlist.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('userwasadded');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="roleadded"){?>
		<span class="info_in_green"><img src="templates/standard/images/symbols/userlist.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('roleadded');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="roleedited"){?>
		<span class="info_in_yellow"><img src="templates/standard/images/symbols/userlist.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('roleedited');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="edited"){?>
		<span class="info_in_yellow"><img src="templates/standard/images/symbols/userlist.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('userwasedited');?>
</span>
        <?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="de-assigned"){?>
		<span class="info_in_yellow"><img src="templates/standard/images/symbols/userlist.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('permissionswereedited');?>
</span>
		<?php }?>
	</div>
	
	<script type = "text/javascript">
	systemMsg('systemmsg');
	 </script>
	

<h1><?php echo $_smarty_tpl->getConfigVariable('administration');?>
<span>/ <?php echo $_smarty_tpl->getConfigVariable('useradministration');?>
</span></h1>

	<div class="headline">
				<a href="javascript:void(0);" id="block_files_toggle" class="win_block" onclick = "toggleBlock('block_files');"></a>

				<div class="wintools">
					<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['admin']['add']){?>
					<a class="add" href="javascript:blindtoggle('form_member');" id="addmember" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_member','butn_link_active','butn_link');toggleClass('sm_member','smooth','nosmooth');"><span><?php echo $_smarty_tpl->getConfigVariable('adduser');?>
</span></a>
					<?php }?>
				</div>

				<h2>
					<img src="./templates/standard/images/symbols/userlist.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('useradministration');?>

				</h2>

			</div>

			<div id="block_files" class="blockwrapper">
				
				<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['admin']['add']){?>
					<div id = "form_member" class="addmenue" style = "display:none;">
						<?php echo $_smarty_tpl->getSubTemplate ("adduserform.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					</div>
				<?php }?>

				<div class="nosmooth" id="sm_member">
					<div class="contenttitle">
						<div class="contenttitle_menue">
							
						</div>
						<div class="contenttitle_in">
							
						</div>
					</div>
					<div class="content_in_wrapper">
					<div class="content_in_wrapper_in">


						<div class="inwrapper">
							<ul>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
								<li>
									<div class="itemwrapper" id="iw_<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID'];?>
">

											<table cellpadding="0" cellspacing="0" border="0">
												<tr>
													<td class="leftmen" valign="top">
														<div class="inmenue">
															<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['avatar']!=''){?>
																<a class="more" href="javascript:fadeToggle('info_<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID'];?>
');"></a>
															<?php }?>
														</div>
													</td>
													<td class="thumb">
														<a href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name'];?>
">
															<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['gender']=="f"){?>
																<img src = "./templates/standard/images/symbols/user-icon-female.png" alt="" />
															<?php }else{ ?>
																<img src = "./templates/standard/images/symbols/user-icon-male.png" alt="" />
															<?php }?>
														</a>
													</td>
													<td class="rightmen" valign="top">
														<div class="inmenue">

														<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID']!=$_smarty_tpl->tpl_vars['userid']->value){?>
															<a class="edit" href="admin.php?action=editform&amp;id=<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
															<a class="del" href="javascript:confirmit('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','admin.php?action=deleteuserform&amp;id=<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a>
														<?php }else{ ?>
															<a class="edit" href="admin.php?action=editform&amp;id=<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
														<?php }?>
														</div>
													</td>
												</tr>
												<tr>
													<td colspan="3">
														<span class="name">
															<a href = "manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name'];?>
">
																<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name']!=''){?>
																	<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name'],13,"...",true);?>

																<?php }else{ ?>
																	<?php echo $_smarty_tpl->getConfigVariable('user');?>

																<?php }?>
															</a>
														</span>
													</td>
												</tr>
											</table>

											<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['avatar']!=''){?>
											<div class="moreinfo-wrapper">
												<div class="moreinfo" id="info_<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID'];?>
" style="display:none">
													<img src = "thumb.php?pic=files/<?php echo $_smarty_tpl->tpl_vars['cl_config']->value;?>
/avatar/<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['avatar'];?>
&amp;width=82" alt="" onclick="fadeToggle('info_<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID'];?>
');" />
													<span class="name"><a href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name'],15,"...",true);?>
</a></span>
												</div>
											</div>
											<?php }?>

									</div> 
								</li>
							<?php endfor; endif; ?> 

							</ul>
						</div> 



			</div> 

			</div> 


			<div class="staterow">
				<div class="staterowin">
					

				</div>
					<div class="staterowin_right"> <span ><?php echo (($tmp = @$_smarty_tpl->tpl_vars['langfile']->value['page'])===null||$tmp==='' ? '' : $tmp);?>
 <?php echo smarty_function_paginate_prev(array(),$_smarty_tpl);?>
 <?php echo smarty_function_paginate_middle(array(),$_smarty_tpl);?>
 <?php echo smarty_function_paginate_next(array(),$_smarty_tpl);?>
</span></div>
			</div>


			</div> 
			<div class="tablemenue">
					<div class="tablemenue-in">
						<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['admin']['add']){?>
						<a class="butn_link" href="javascript:blindtoggle('form_member');" id="add_butn_member" onclick="toggleClass(this,'butn_link_active','butn_link');toggleClass('addmember','add-active','add');toggleClass('sm_member','smooth','nosmooth');"><?php echo $_smarty_tpl->getConfigVariable('adduser');?>
</a>
						<?php }?>
					</div>
			</div>
			</div> 

	<div class="content-spacer"></div>


<?php echo $_smarty_tpl->getSubTemplate ("rolesadmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



				<div class="tablemenue">
					<div class="tablemenue-in">
						<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['admin']['add']){?>
						<a class="butn_link" href="javascript:blindtoggle('form_addmyroles');" id="add_butn_myprojects" onclick="toggleClass('addrolelink','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');"><?php echo $_smarty_tpl->getConfigVariable('addrole');?>
</a>
						<?php }?>


					</div>
				</div>

		</div> 


	<script type = "text/javascript">
		var accord_roles = new accordion('acc-roles');
	</script>
	

<div class="content-spacer"></div>

</div> 
</div> 

</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>