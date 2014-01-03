<?php /* Smarty version Smarty-3.1.13, created on 2014-01-03 13:42:15
         compiled from "/var/www/tintin/templates/standard/tabsmenue-admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107278149452c6b027997784-14562281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf67a66a2b6fee147f2b1922d79f78ee676d193a' => 
    array (
      0 => '/var/www/tintin/templates/standard/tabsmenue-admin.tpl',
      1 => 1377125162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107278149452c6b027997784-14562281',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'projecttab' => 0,
    'customertab' => 0,
    'usertab' => 0,
    'settingstab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52c6b0279b7658_97931070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c6b0279b7658_97931070')) {function content_52c6b0279b7658_97931070($_smarty_tpl) {?><div class="tabswrapper">
	<ul class="tabs">
		<li class="projects"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['projecttab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="admin.php?action=projects"><span><?php echo $_smarty_tpl->getConfigVariable('projectadministration');?>
</span></a></li>
		<!--<li class="customers"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['customertab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="admin.php?action=customers"><span><?php echo $_smarty_tpl->getConfigVariable('customeradministration');?>
</span></a></li>-->
		<li class="user"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['usertab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="admin.php?action=users"><span><?php echo $_smarty_tpl->getConfigVariable('useradministration');?>
</span></a></li>
		<li class="system-settings"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['settingstab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="admin.php?action=system"><span><?php echo $_smarty_tpl->getConfigVariable('systemadministration');?>
</span></a></li>
	</ul>
</div><?php }} ?>