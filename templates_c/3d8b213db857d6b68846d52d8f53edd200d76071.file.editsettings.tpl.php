<?php /* Smarty version Smarty-3.1.13, created on 2014-01-03 13:42:19
         compiled from "/var/www/tintin/templates/standard/editsettings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24180379952c6b02bcb3234-00728169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d8b213db857d6b68846d52d8f53edd200d76071' => 
    array (
      0 => '/var/www/tintin/templates/standard/editsettings.tpl',
      1 => 1377125160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24180379952c6b02bcb3234-00728169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52c6b02bcf0936_48601665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c6b02bcf0936_48601665')) {function content_52c6b02bcf0936_48601665($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax"), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('settingstab'=>"active"), 0);?>

<div id="content-left">
<div id="content-left-in">
<div class="neutral">
	<div class="infowin_left" style = "display:none;" id = "systemmsg">
		<?php if ($_smarty_tpl->tpl_vars['mode']->value=="edited"){?>
		<span class="info_in_yellow"><img src="templates/standard/images/symbols/system-settings.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('settingsedited');?>
</span>
        <?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="imported"){?>
        <span class="info_in_green"><img src="templates/standard/images/symbols/basecamp.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('importsuccess');?>
</span>

		<?php }?>

		</div>

	
	<script type = "text/javascript">
	systemMsg('systemmsg');
	 </script>
	
<h1><?php echo $_smarty_tpl->getConfigVariable('administration');?>
<span>/ <?php echo $_smarty_tpl->getConfigVariable('systemadministration');?>
</span></h1>

			<div class="headline">
				<a href="javascript:void(0);" id="block_system_toggle" class="win_block" onclick = "toggleBlock('block_system');"></a>
				<h2>
					<img src="./templates/standard/images/symbols/system-settings.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('systemadministration');?>
</a>
				</h2>
			</div>

			<div id="block_system" class="block">
				<?php echo $_smarty_tpl->getSubTemplate ("settings_system.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



				<div class="tablemenue"></div>
			</div> 

<div class="content-spacer"></div>

			<div class="headline">
				<a href="javascript:void(0);" id="block_import_toggle" class="win_block" onclick = "toggleBlock('block_import');"></a>
				<h2>
					<img src="./templates/standard/images/symbols/basecamp.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('import');?>
</a>
				</h2>
			</div>

			<div id="block_import" class="block">
				<div class="block_in_wrapper">
					<form novalidate class="main" method="post" action="manageimport.php?action=basecamp" enctype="multipart/form-data" onsubmit="return validateCompleteForm(this);">
					<fieldset>

					<div class="row">
						<label for="file"><?php echo $_smarty_tpl->getConfigVariable('file');?>
:</label>
						<div class="fileinput" >
								<input type="file" class="file" name="importfile" id="importfile"  realname="<?php echo $_smarty_tpl->getConfigVariable('file');?>
" size="19" onchange = "file.value = this.value;" />
								<table class = "faux" cellpadding="0" cellspacing="0" border="0" style="padding:0;margin:0;border:none;">
									<tr>
									<td><input type="text" class="text-file" name = "userfile1" id="file" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('file');?>
"></td>
									<td class="choose"><button class="inner" onclick="return false;"><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</button></td>
									</tr>
								</table>
						</div>
					</div>

					<div class="row-butn-bottom">
						<label>&nbsp;</label>
						<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('send');?>
</button>
					</div>


					</fieldset>
					</form>
				</div>

				<div class="tablemenue"></div>
			</div> 

<div class="content-spacer"></div>

			<div class="headline">
				<a href="javascript:void(0);" id="block_email_toggle" class="win_block" onclick = "toggleBlock('block_email');"></a>
				<h2>
					<img src="./templates/standard/images/symbols/msgs.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('email');?>
</a>
				</h2>
			</div>

			<div id="block_email" class="block">
				<?php echo $_smarty_tpl->getSubTemplate ("settings_email.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



				<div class="tablemenue"></div>
			</div> 

<div class="content-spacer"></div>

</div> 
</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>