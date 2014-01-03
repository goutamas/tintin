<?php /* Smarty version Smarty-3.1.13, created on 2014-01-03 13:27:55
         compiled from "/var/www/tintin/templates/standard/tabsmenue-desk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165773466252c6accbd6fa34-73582872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e9867a65ab7a58a710f6545dba81cadf5cca740' => 
    array (
      0 => '/var/www/tintin/templates/standard/tabsmenue-desk.tpl',
      1 => 1377125162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165773466252c6accbd6fa34-73582872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'desktab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52c6accbd79036_82322495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c6accbd79036_82322495')) {function content_52c6accbd79036_82322495($_smarty_tpl) {?><div class="tabswrapper">

<ul class="tabs">
		<li class="desk"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['desktab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="index.php"><span><?php echo $_smarty_tpl->getConfigVariable('desktop');?>
</span></a></li>
	</ul>
</div><?php }} ?>