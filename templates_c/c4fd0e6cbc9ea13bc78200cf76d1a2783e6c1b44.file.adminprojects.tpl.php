<?php /* Smarty version Smarty-3.1.13, created on 2014-01-03 13:42:15
         compiled from "/var/www/tintin/templates/standard/adminprojects.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82623988452c6b02779c6f3-72682401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4fd0e6cbc9ea13bc78200cf76d1a2783e6c1b44' => 
    array (
      0 => '/var/www/tintin/templates/standard/adminprojects.tpl',
      1 => 1377125160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82623988452c6b02779c6f3-72682401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'userpermissions' => 0,
    'opros' => 0,
    'cl_config' => 0,
    'users' => 0,
    'clopros' => 0,
    'myprojects' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52c6b027983ae8_45648856',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c6b027983ae8_45648856')) {function content_52c6b027983ae8_45648856($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/tintin/include/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax",'jsload1'=>"tinymce"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('projecttab'=>"active"), 0);?>


<div id="content-left">
	<div id="content-left-in">
		<div class="projects">

			<div class="infowin_left" style = "display:none;" id = "systemmsg">
				<?php if ($_smarty_tpl->tpl_vars['mode']->value=="assigned"){?>
					<span class="info_in_yellow"><img src="templates/standard/images/symbols/system-settings.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('settingsedited');?>
</span>
				<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="deassigned"){?>
					<span class="info_in_red"><img src="templates/standard/images/symbols/user-icon-male.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('userwasdeassigned');?>
</span>
				<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="added"){?>
					<span class="info_in_green"><img src="templates/standard/images/symbols/projects.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('projectwasadded');?>
</span>
				<?php }?>
			</div>

			
				<script type = "text/javascript">
					systemMsg('systemmsg');
				</script>
			

			<h1><?php echo $_smarty_tpl->getConfigVariable('administration');?>
<span>/ <?php echo $_smarty_tpl->getConfigVariable('projectadministration');?>
</span></h1>

			<div class="headline">
				<a href="javascript:void(0);" id="acc-projects_toggle" class="win_none" onclick = "toggleBlock('acc-projects');"></a>
					<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['add']){?>
						<div class="wintools">
							<a class="add" href="javascript:blindtoggle('form_addmyproject');" id="add_myprojects" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_myprojects','butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');"><span><?php echo $_smarty_tpl->getConfigVariable('addproject');?>
</span></a>
						</div>
					<?php }?>

					<h2>
						<img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('openprojects');?>

					</h2>
				</div>

				<div class="block" id="acc-projects"> 
					<div id = "form_addmyproject" class="addmenue" style = "display:none;">
						<?php echo $_smarty_tpl->getSubTemplate ("addproject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('myprojects'=>"1"), 0);?>

					</div>

					<div class="nosmooth" id="sm_myprojects">

						<table cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th class="a"></th>
									<th class="b"><?php echo $_smarty_tpl->getConfigVariable('project');?>
</th>
									<th class="c"><?php echo $_smarty_tpl->getConfigVariable('done');?>
</th>
									<th class="days" style="text-align:right"><?php echo $_smarty_tpl->getConfigVariable('daysleft');?>
&nbsp;&nbsp;</th>
									<th class="tools"></th>
								</tr>
							</thead>

							<tfoot>
								<tr>
									<td colspan="5"></td>
								</tr>
							</tfoot>

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['opro'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['opro']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['name'] = 'opro';
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['loop'] = is_array($_loop=(($tmp = @$_smarty_tpl->tpl_vars['opros']->value)===null||$tmp==='' ? '' : $tmp)) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['total']);
?>

								
								<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']%2==0){?>
								<tbody class="color-a" id="proj_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
">
								<?php }else{ ?>
								<tbody class="color-b" id="proj_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
">
								<?php }?>
									<tr <?php if ($_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['daysleft']<0&&$_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['daysleft']!=''){?> class="marker-late"<?php }elseif($_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['daysleft']=="0"){?> class="marker-today"<?php }?>>
										<td>
											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['del']){?>
												<a class="butn_check" href="javascript:closeElement('proj_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
','manageproject.php?action=close&amp;id=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('close');?>
"></a>
											<?php }?>
										</td>
										<td>
											<div class="toggle-in">
												<span class="acc-toggle" onclick="javascript:accord_projects.activate($$('#acc-projects .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['opro']['index'];?>
]);toggleAccordeon('acc-projects',this);"></span>
												<a href="manageproject.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['name'];?>
">
													<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['name'],30,"...",true);?>

												</a>
											</div>
										</td>
										<td>
											<div class="statusbar_b">
												<div class="complete" id = "completed" style="width:<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['done'];?>
%;"></div>
											</div>
											<span><?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['done'];?>
%</span>
										</td>
										<td style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['daysleft'];?>
&nbsp;&nbsp;</td>
										<td class="tools">
											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['edit']){?>
												<a class="tool_edit" href="javascript:void(0);" onclick = "change('manageproject.php?action=editform&amp;id=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
','form_addmyproject');toggleClass(this,'tool_edit_active','tool_edit');blindtoggle('form_addmyproject');" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['del']){?>
												<a class="tool_del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'proj_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
\',\'manageproject.php?action=del&amp;id=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
\')');"  title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a>
											<?php }?>
										</td>
									</tr>

									<tr class="acc">
										<td colspan="5">
											<div class="accordion_toggle"></div>
											<div class="accordion_content">
												<div class="acc-in">
													<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['desc'];?>

													<p class="tags-miles">
														<strong><?php echo $_smarty_tpl->getConfigVariable('user');?>
:</strong>
													</p>

													<div class="inwrapper">
														<ul>
															<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['member'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['member']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['name'] = 'member';
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total']);
?>
																<li>
																	<div class="itemwrapper" id="iw_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
">

																		<table cellpadding="0" cellspacing="0" border="0">
																			<tr>
																				<td class="leftmen" valign="top">
																					<div class="inmenue">
																						<?php if ($_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['avatar']!=''){?>
																							<a class="more" href="javascript:fadeToggle('info_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
');"></a>
																						<?php }?>
																					</div>
																				</td>
																				<td class="thumb">
																					<a href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['name'];?>
">
																						<?php if ($_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['gender']=="f"){?>
																							<img src = "./templates/standard/images/symbols/user-icon-female.png" alt="" />
																						<?php }else{ ?>
																							<img src = "./templates/standard/images/symbols/user-icon-male.png" alt="" />
																						<?php }?>
																					</a>
																				</td>
																				<td class="rightmen" valign="top">
																					<div class="inmenue">
																						<a class="del" href="manageproject.php?action=deassign&amp;user=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
&amp;redir=admin.php?action=projects" title="<?php echo $_smarty_tpl->getConfigVariable('deassignuser');?>
" onclick="fadeToggle('iw_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
');"></a>
																					<a class="edit" href="admin.php?action=editform&amp;id=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('edituser');?>
"></a>

																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td colspan="3">
																					<span class="name"><a href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['name'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['name'],15,"...",true);?>
</a></span>
																				</td>
																			<tr/>
																		</table>

																		<?php if ($_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['avatar']!=''){?>
																			<div class="moreinfo" id="info_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
" style="display:none">
																				<img src = "thumb.php?pic=files/<?php echo $_smarty_tpl->tpl_vars['cl_config']->value;?>
/avatar/<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['avatar'];?>
&amp;width=82" alt="" onclick="fadeToggle('info_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
');" />
																				<span class="name"><a href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['name'],15,"...",true);?>
</a></span>
																			</div>
																		<?php }?>
																	</div> 

																</li>
															<?php endfor; endif; ?>
														</ul>
													</div> 

													<p class="tags-miles"> 
														<strong><?php echo $_smarty_tpl->getConfigVariable('adduser');?>
:</strong>
													</p>
													<div class = "inwrapper">
														<form  class = "main" method="post" action="manageproject.php?action=assign&amp;id=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
&redir=admin.php?action=projects&mode=useradded" onsubmit="return validateCompleteForm(this);">
															<fieldset>

																<div class="row">
																	<label for="addtheuser"><?php echo $_smarty_tpl->getConfigVariable('user');?>
</label>
																	<select name = "user" id="addtheuser" >
																		<option value = ""><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
																		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['usr'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['usr']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['name'] = 'usr';
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['total']);
?>
																		<option value = "<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['usr']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['usr']['index']]['name'];?>
</option>
																		<?php endfor; endif; ?>
																	</select>
																</div>

																<div class="row-butn-bottom">
																	<label>&nbsp;</label>
																	<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('addbutton');?>
</button>
																</div>
															</fieldset>
														</form>
													</div>

												</div>
											</div>
										</td>
									</tr>
								</tbody>
							<?php endfor; endif; ?>
						</table> 

						
						<div id="doneblock" class="doneblock" style="display: none;">

							<table class="second-thead" cellpadding="0" cellspacing="0" border="0" onclick="blindtoggle('doneblock');toggleClass('donebutn','butn_link_active','butn_link');toggleClass('toggle-done','acc-toggle','acc-toggle-active');">
								<tr>
									<td class="a"></td>
									<td class="b"><span id="toggle-done" class="acc-toggle"><?php echo $_smarty_tpl->getConfigVariable('closedprojects');?>
</span></td>
									<td class="c"></td>
									<td class="days"></td>
									<td class="tools"></td>
								</tr>
							</table>


							<div class="toggleblock">

								<table cellpadding="0" cellspacing="0" border="0" id="acc-oldprojects">
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['clopro'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['name'] = 'clopro';
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['clopros']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['total']);
?>

										
										<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']%2==0){?>
										<tbody class="color-a" id="proj_<?php echo $_smarty_tpl->tpl_vars['clopros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['ID'];?>
">
										<?php }else{ ?>
										<tbody class="color-b" id="proj_<?php echo $_smarty_tpl->tpl_vars['clopros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['ID'];?>
">
										<?php }?>
											<tr>
												<td class="a"><?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['add']){?><a class="butn_checked" href="manageproject.php?action=open&amp;id=<?php echo $_smarty_tpl->tpl_vars['clopros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('open');?>
"></a><?php }?></td>
												<td class="b">
													<div class="toggle-in">
													<span class="acc-toggle" onclick="javascript:accord_oldprojects.activate($$('#acc-oldprojects .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index'];?>
]);toggleAccordeon('acc-oldprojects',this);"></span>
														<a href="manageproject.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['clopros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['clopros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['name'];?>
">
															<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['clopros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['name'],30,"...",true);?>

														</a>
													</div>
												</td>
												<td class="c">
													<div class="statusbar_b">
														<div class="complete" id = "completed" style="width:<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['done'];?>
%;"></div>
													</div>
													<span><?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['done'];?>
%</span>
												</td>
												<td class="days" style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['clopros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['daysleft'];?>
&nbsp;&nbsp;</td>
												<td class="tools">
													<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['edit']){?>
														<a class="tool_edit" href="javascript:void(0);" onclick="change('manageproject.php?action=editform&amp;id=<?php echo $_smarty_tpl->tpl_vars['clopros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['ID'];?>
','form_addmyproject');toggleClass(this,'tool_edit_active','tool_edit');blindtoggle('form_addmyproject');" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
													<?php }?>
													<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['del']){?>
														<a class="tool_del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'proj_<?php echo $_smarty_tpl->tpl_vars['clopros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['ID'];?>
\',\'manageproject.php?action=del&amp;id=<?php echo $_smarty_tpl->tpl_vars['clopros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['ID'];?>
\')');"  title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a>
													<?php }?>
												</td>
											</tr>

											<tr class="acc">
												<td colspan="5">
													<div class="accordion_toggle"></div>
													<div class="accordion_content">
														<div class="acc-in">
															<?php echo $_smarty_tpl->tpl_vars['clopros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['desc'];?>

														</div>
													</div>
												</td>
											</tr>
										</tbody>
									<?php endfor; endif; ?>
								</table>

							</div> 
						</div> 
					</div> 

					<div class="tablemenue">
						<div class="tablemenue-in">
							<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['add']){?>
								<a class="butn_link" href="javascript:blindtoggle('form_addmyproject');" id="add_butn_myprojects" onclick="toggleClass('add_myprojects','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');"><?php echo $_smarty_tpl->getConfigVariable('addproject');?>
</a>
							<?php }?>
							<a class="butn_link" href="javascript:blindtoggle('doneblock');" id="donebutn" onclick="toggleClass(this,'butn_link_active','butn_link');toggleClass('toggle-done','acc-toggle','acc-toggle-active');"><?php echo $_smarty_tpl->getConfigVariable('closedprojects');?>
</a>
						</div>
					</div>
				</div>  

			
				<script type = "text/javascript">
					var accord_projects = new accordion('acc-projects');
					var accord_oldprojects = new accordion('acc-oldprojects');
				</script>
			

			<div class="content-spacer"></div>

		</div> 
	</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>