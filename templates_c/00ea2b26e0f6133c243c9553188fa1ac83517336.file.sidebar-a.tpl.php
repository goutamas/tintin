<?php /* Smarty version Smarty-3.1.13, created on 2014-01-03 13:27:55
         compiled from "/var/www/tintin/templates/standard/sidebar-a.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112848954252c6accbde6c28-40112213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00ea2b26e0f6133c243c9553188fa1ac83517336' => 
    array (
      0 => '/var/www/tintin/templates/standard/sidebar-a.tpl',
      1 => 1377125162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112848954252c6accbde6c28-40112213',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showcloud' => 0,
    'cloud' => 0,
    'openProjects' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52c6accbe22b57_37153283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c6accbe22b57_37153283')) {function content_52c6accbe22b57_37153283($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/tintin/include/plugins/modifier.truncate.php';
?><div id="content-right">


	
	<div class="content-right-in">
			<h2><a id = "searchtoggle" class="win-up" href="javascript:blindtoggle('search');toggleClass('searchtoggle','win-up','win-down');"><?php echo $_smarty_tpl->getConfigVariable('search');?>
</a></h2>

			<form id = "search" method = "get" action = "managesearch.php"  onsubmit="return validateStandard(this,'input_error');">
			<fieldset>
				<div class = "row">
					<input type="text" class = "text" id="query" name="query" />
				</div>

				<div id="choices"></div>
				<input type = "hidden" name = "action" value = "search" />

				<div id="indicator1" style="display:none;"><img src="templates/standard/images/symbols/indicator_arrows.gif" alt="<?php echo $_smarty_tpl->getConfigVariable('searching');?>
" /></div>

				<button type="submit" title="<?php echo $_smarty_tpl->getConfigVariable('gosearch');?>
"></button>
			</fieldset>

			</form>
	</div>
	


	
	


	
	<?php if ((($tmp = @$_smarty_tpl->tpl_vars['showcloud']->value)===null||$tmp==='' ? '' : $tmp)=="1"){?>
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['cloud']->value)===null||$tmp==='' ? '' : $tmp)!=''){?>
		<div class="content-right-in">
			<h2><a id="tagcloudtoggle" class="win-up" href="javascript:blindtoggle('tagcloud');toggleClass('tagcloudtoggle','win-up','win-down');"><?php echo $_smarty_tpl->getConfigVariable('tags');?>
</a></h2>
			<div id = "tagcloud" class="cloud">
				<?php echo $_smarty_tpl->tpl_vars['cloud']->value;?>

			</div>
		</div>
		<?php }?>
	<?php }?>
	

	
	<?php if ($_smarty_tpl->tpl_vars['openProjects']->value[0]['ID']>0){?>
		<div class="content-right-in">
			<h2><a id="quickfindertoggle" class="win-up" href="javascript:blindtoggle('quickfinder');toggleClass('quickfindertoggle','win-up','win-down');"><?php echo $_smarty_tpl->getConfigVariable('myprojects');?>
</a></h2>
			<div id = "quickfinder">
				<form>
					<select style="background-color:#CCC;width:100%;" onchange="window.location='manageproject.php?action=showproject&id='+this.value;">
						<option><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['drop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['drop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['name'] = 'drop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['openProjects']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['drop']['total']);
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['openProjects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['drop']['index']]['ID'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['openProjects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['drop']['index']]['name'],40,"...",true);?>
</option>
						<?php endfor; endif; ?>
					</select>
				</form>
			</div>
		</div>
	<?php }?>

	
	<div class="content-right-in">
			<h2><a id="onlinelisttoggle" class="win-up" href="javascript:blindtoggle('onlinelist');toggleClass('onlinelisttoggle','win-up','win-down');"><?php echo $_smarty_tpl->getConfigVariable('usersonline');?>
</a></h2>

			<div id="onlinelist">
				<?php echo (($tmp = @$_smarty_tpl->tpl_vars['cloud']->value)===null||$tmp==='' ? '' : $tmp);?>

			</div>
	</div>


		
			  <script type = "text/javascript">
			  new Ajax.Autocompleter('query', 'choices', 'managesearch.php?action=ajaxsearch', {paramName:'query',minChars: 2,indicator: 'indicator1'});
				 var on = new Ajax.PeriodicalUpdater("onlinelist","manageuser.php?action=onlinelist",{method:'get',evalScripts:true,frequency:35,decay:1.5});


			</script>
		

</div><?php }} ?>