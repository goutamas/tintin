<?php /* Smarty version Smarty-3.1.13, created on 2014-01-03 13:27:45
         compiled from "./templates/standard/install3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162026392752c6acc1568ff6-46353781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30680ff481ecb1d69c4f6a4b7e9ffadfb4789fa3' => 
    array (
      0 => './templates/standard/install3.tpl',
      1 => 1377125160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162026392752c6acc1568ff6-46353781',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52c6acc15822e5_27663909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c6acc15822e5_27663909')) {function content_52c6acc15822e5_27663909($_smarty_tpl) {?>				<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"install",'showheader'=>"no"), 0);?>

				
				<div class="install" style="text-align:center; padding:5% 0;">
					<div style="text-align:left;width:500px;margin:0 auto;padding:25px 25px 0px 25px;background:white;border:1px solid;">
						<h1>Installation Status</h1>
					<div style="padding:16px 0 20px 0;">
					
					<h2><?php echo $_smarty_tpl->getConfigVariable('installsuccess');?>
</h2>
					Congratulations! Collabtive is now running on your server.<br /><br />
					As a next step, you could extend the functionality of your installation with plugins.<br />
					They enable you to easily adapt Collabtive to your workflow.
				</div>
				<div class="row-butn-bottom">
					<button onclick="window.open('http://www.collabtive.o-dyn.de/plugins.php')" onfocus="this.blur();">Learn more about Plugins</button>
				</div>

				<div class="row-butn-bottom">
					<button onclick="location.href='index.php'" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('close');?>
</button>
				</div>
				
				<div class="content-spacer"></div>
			</div>
		</div> 
	</body>
</html>
<?php }} ?>