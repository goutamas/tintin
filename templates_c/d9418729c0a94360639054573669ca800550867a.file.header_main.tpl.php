<?php /* Smarty version Smarty-3.1.13, created on 2014-01-03 13:27:55
         compiled from "/var/www/tintin/templates/standard/header_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100894145952c6accbcf5b21-55976242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9418729c0a94360639054573669ca800550867a' => 
    array (
      0 => '/var/www/tintin/templates/standard/header_main.tpl',
      1 => 1377125160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100894145952c6accbcf5b21-55976242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'loggedin' => 0,
    'mainclasses' => 0,
    'usergender' => 0,
    'userid' => 0,
    'userpermissions' => 0,
    'classes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52c6accbd3f702_59845446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c6accbd3f702_59845446')) {function content_52c6accbd3f702_59845446($_smarty_tpl) {?><div id="sitebody">

	<div id="header-wrapper">
		<div id="header">
			<div class="header-in">

				<div class="left">
					<div class="logo">
						<h1>
							<a href="index.php" title="<?php echo $_smarty_tpl->getConfigVariable('desktop');?>
"><img src="./templates/standard/images/logo-b.png" alt="" /></a>
							<span class="title"><?php echo $_smarty_tpl->tpl_vars['settings']->value['name'];?>
<span class="subtitle"><?php if ($_smarty_tpl->tpl_vars['settings']->value['subtitle']){?>/ <?php echo $_smarty_tpl->tpl_vars['settings']->value['subtitle'];?>
 <?php }?></span></span>
						</h1>
					</div>

				</div> 

				<div class="right">
					<?php if ($_smarty_tpl->tpl_vars['loggedin']->value==1){?>
						<ul id="mainmenue">
							<li class="desktop"><a class = "<?php echo $_smarty_tpl->tpl_vars['mainclasses']->value['desktop'];?>
" href="index.php"><span><?php echo $_smarty_tpl->getConfigVariable('desktop');?>
</span></a></li>

							<?php if ($_smarty_tpl->tpl_vars['usergender']->value=="f"){?>
							<li class="profil-female"><a class = "<?php echo $_smarty_tpl->tpl_vars['mainclasses']->value['profil'];?>
" href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"><span><?php echo $_smarty_tpl->getConfigVariable('myaccount');?>
</span></a></li>
							<?php }else{ ?>
							<li class="profil-male"><a class = "<?php echo $_smarty_tpl->tpl_vars['mainclasses']->value['profil'];?>
" href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"><span><?php echo $_smarty_tpl->getConfigVariable('myaccount');?>
</span></a></li>
							<?php }?>

							 <?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['admin']['add']){?>
							<li class="admin"><a class = "<?php echo $_smarty_tpl->tpl_vars['mainclasses']->value['admin'];?>
" href="admin.php?action=projects"><span><?php echo $_smarty_tpl->getConfigVariable('administration');?>
</span><span class="submenarrow"></span></a>
								<div class="submen">
									<ul>
										<li class="project-settings"><a class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['classes']->value['overview'])===null||$tmp==='' ? '' : $tmp);?>
" href="admin.php?action=projects"><span><?php echo $_smarty_tpl->getConfigVariable('projectadministration');?>
</span></a></li>
										<!--<li class="customer-settings"><a class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['classes']->value['customer'])===null||$tmp==='' ? '' : $tmp);?>
" href="admin.php?action=customers"><span><?php echo $_smarty_tpl->getConfigVariable('customeradministration');?>
</span></a></li>-->
										<li class="user-settings"><a class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['classes']->value['users'])===null||$tmp==='' ? '' : $tmp);?>
" href="admin.php?action=users"><span><?php echo $_smarty_tpl->getConfigVariable('useradministration');?>
</span></a></li>
										<li class="system-settings"><a class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['classes']->value['system'])===null||$tmp==='' ? '' : $tmp);?>
" href="admin.php?action=system"><span><?php echo $_smarty_tpl->getConfigVariable('systemadministration');?>
</span></a></li>
									</ul>
								</div>
							</li>
							<?php }?>


							<li class="logout"><a href="manageuser.php?action=logout"><span><?php echo $_smarty_tpl->getConfigVariable('logout');?>
</span></a></li>
						</ul>
					<?php }?>
				</div> <!-- Right End -->



			</div> <!-- Header-In End -->
		</div> <!-- Header End -->
	</div> <!-- Header-Wrapper End -->


	<div id="contentwrapper">
<?php }} ?>