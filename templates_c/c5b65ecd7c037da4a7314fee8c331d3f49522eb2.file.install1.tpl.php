<?php /* Smarty version Smarty-3.1.13, created on 2014-01-03 13:27:07
         compiled from "./templates/standard/install1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164454476452c6ac9b9459e7-19253121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5b65ecd7c037da4a7314fee8c331d3f49522eb2' => 
    array (
      0 => './templates/standard/install1.tpl',
      1 => 1377125160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164454476452c6ac9b9459e7-19253121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phpver' => 0,
    'configfile' => 0,
    'filesdir' => 0,
    'templatesdir' => 0,
    'is_mbstring_enabled' => 0,
    'locale' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52c6ac9ba773d0_45488043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c6ac9ba773d0_45488043')) {function content_52c6ac9ba773d0_45488043($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value),'showheader'=>"no"), 0);?>


			<div class="install" style="text-align:center;padding:5% 0;">
				<div style="text-align:left;width:500px;margin:0 auto;padding:25px 25px 15px 25px;background:white;border:1px solid;">

				<h1><?php echo $_smarty_tpl->getConfigVariable('installcollabtive');?>
</h1>

				<div style="border-bottom:1px dashed;padding:16px 0 16px 0;">
					<form class="main" method = "get" action = "install.php">
						<fieldset>
							<div class="row"><label for = "language" style="width:210px;"><?php echo $_smarty_tpl->getConfigVariable('installerlanguage');?>
</label>
								<select name = "locale" id = "language" onchange = "document.forms[0].submit();">
									<option value = ""><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
									<option value = "ar"><?php echo $_smarty_tpl->getConfigVariable('ar');?>
</option>
									<option value = "da"><?php echo $_smarty_tpl->getConfigVariable('da');?>
</option>
									<option value = "de"><?php echo $_smarty_tpl->getConfigVariable('de');?>
</option>
									<option value = "en"><?php echo $_smarty_tpl->getConfigVariable('en');?>
</option>
									<option value = "es"><?php echo $_smarty_tpl->getConfigVariable('es');?>
</option>
									<option value = "fi"><?php echo $_smarty_tpl->getConfigVariable('fi');?>
</option>
									<option value = "fr"><?php echo $_smarty_tpl->getConfigVariable('fr');?>
</option>
									<option value = "hu"><?php echo $_smarty_tpl->getConfigVariable('hu');?>
</option>
									<option value = "it"><?php echo $_smarty_tpl->getConfigVariable('it');?>
</option>
									<option value = "nl"><?php echo $_smarty_tpl->getConfigVariable('nl');?>
</option>
									<option value = "pl"><?php echo $_smarty_tpl->getConfigVariable('pl');?>
</option>
									<option value = "sr"><?php echo $_smarty_tpl->getConfigVariable('sr');?>
</option>
								</select>
							</div>
						</fieldset>
					</form>
				</div>

				<div style="border-bottom:1px dashed;padding:16px 0 20px 0;">
					<h2>1. <?php echo $_smarty_tpl->getConfigVariable('installerconditions');?>
</h2>

					<div class="row" style="padding-bottom:12px;">
						<i><?php echo $_smarty_tpl->getConfigVariable('installerchecksconditions');?>
</i>
					</div>

					<table cellpadding="0" cellspacing="0" style="font-style:italic;line-height: 23px">
						<tr>
							<td style="width:260px;"><strong><?php echo $_smarty_tpl->getConfigVariable('condition');?>
:</strong></td>
							<td><strong><?php echo $_smarty_tpl->getConfigVariable('status');?>
:</strong></td>
						</tr>
						<tr valign="top">
							<td>PHP 5.2</td>
							<?php if ($_smarty_tpl->tpl_vars['phpver']->value>=5.2){?>
							<td><span style = "color:green;font-weight:bold;"><img src="./templates/standard/images/butn-ok.png" alt="OK"></span></td>
							<?php }else{ ?>
							<td><span style = "color:red;font-weight:bold;"><img src="./templates/standard/images/butn-notok.png" alt="Not OK"><br />(PHP <?php echo $_smarty_tpl->tpl_vars['phpver']->value;?>
 - <?php echo $_smarty_tpl->getConfigVariable('phpversion');?>
)</span></td>
							<?php }?>
						</tr>
						<tr valign="top">
							<td>config.php <?php echo $_smarty_tpl->getConfigVariable('iswritable');?>
</td>
							<?php if ($_smarty_tpl->tpl_vars['configfile']->value==1){?>
							<td><span style = "color:green;font-weight:bold;"><img src="./templates/standard/images/butn-ok.png" alt="OK"></span></td>
							<?php }else{ ?>
							<td><span style = "color:red;font-weight:bold;"><img src="./templates/standard/images/butn-notok.png" alt="Not OK"><br /><?php echo $_smarty_tpl->getConfigVariable('makefilewritable');?>
</span></td>
							<?php }?>
						</tr>
						<tr valign="top">
							<td>files <?php echo $_smarty_tpl->getConfigVariable('iswritable');?>
</td>
							<?php if ($_smarty_tpl->tpl_vars['filesdir']->value==1){?>
							<td><span style = "color:green;font-weight:bold;"><img src="./templates/standard/images/butn-ok.png" alt="OK"></span></td>
							<?php }else{ ?>
							<td><span style = "color:red;font-weight:bold;"><img src="./templates/standard/images/butn-notok.png" alt="Not OK"><br /><?php echo $_smarty_tpl->getConfigVariable('makedirwritable');?>
</span></td>
							<?php }?>
						</tr>
						<tr valign="top">
							<td>templates_c <?php echo $_smarty_tpl->getConfigVariable('iswritable');?>
</td>
							<?php if ($_smarty_tpl->tpl_vars['templatesdir']->value==1){?>
							<td><span style = "color:green;font-weight:bold;"><img src="./templates/standard/images/butn-ok.png" alt="OK"></span></td>
							<?php }else{ ?>
							<td><span style = "color:red;font-weight:bold;"><img src="./templates/standard/images/butn-notok.png" alt="Not OK"><br /><?php echo $_smarty_tpl->getConfigVariable('makedirwritable');?>
</span></td>
							<?php }?>
						</tr>
						<tr valign="top">
							<td><?php echo $_smarty_tpl->getConfigVariable('mb_string_enabled');?>
</td>
							<?php if ($_smarty_tpl->tpl_vars['is_mbstring_enabled']->value){?>
							<td><span style = "color:green;font-weight:bold;"><img src="./templates/standard/images/butn-ok.png" alt="OK"></span></td>
							<?php }else{ ?>
							<td><span style = "color:red;font-weight:bold;"><img src="./templates/standard/images/butn-notok.png" alt="Not OK"><br /><?php echo $_smarty_tpl->getConfigVariable('enable_mb_string');?>
</span></td>
							<?php }?>
						</tr>
					</table>
				</div>

				<?php if ($_smarty_tpl->tpl_vars['configfile']->value>=666&&$_smarty_tpl->tpl_vars['phpver']->value>=5.1&&$_smarty_tpl->tpl_vars['templatesdir']->value==1&&$_smarty_tpl->tpl_vars['filesdir']->value==1&&$_smarty_tpl->tpl_vars['is_mbstring_enabled']->value){?>
					<div style="padding:16px 0 12px 0;">

						<h2>2. <?php echo $_smarty_tpl->getConfigVariable('db');?>
</h2>
						<div class="row" style="padding-bottom:12px;"><i><?php echo $_smarty_tpl->getConfigVariable('insertdbaccessdata');?>
</i></div>

						<form class="main" method = "post" action = "install.php?action=step2&locale=<?php echo $_smarty_tpl->tpl_vars['locale']->value;?>
">
							<fieldset>
								<div class="row">
									<label for = "db_host" style="width:210px;"><?php echo $_smarty_tpl->getConfigVariable('dbhost');?>
:</label><input type = "text" name = "db_host" id = "db_host" value = "localhost"/>
								</div>
								<div class="row">
									<label for = "db_name" style="width:210px;"><?php echo $_smarty_tpl->getConfigVariable('dbname');?>
:</label><input type = "text" name = "db_name" id = "db_name" />
								</div>
								<div class="row">
									<label for = "db_user" style="width:210px;"><?php echo $_smarty_tpl->getConfigVariable('dbuser');?>
:</label><input type = "text" name = "db_user" id = "db_user" />
								</div>
								<div class="row">
									<label for = "db_pass" style="width:210px;"><?php echo $_smarty_tpl->getConfigVariable('dbpass');?>
:</label><input type = "password" name = "db_pass" id = "db_pass" />
								</div>
								<div style="border-bottom:1px dashed;height:16px;display:block;clear:both;margin-bottom:16px;"></div>
								<div class="row" style="padding-bottom:12px;">
									<i><?php echo $_smarty_tpl->getConfigVariable('clickcontinue');?>
</i>
								</div>
								<div class="row-butn-bottom">
									<label style="width:210px;">&nbsp;</label>
									<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('continue');?>
</button>
								</div>
							</fieldset>
						</form>
					</div>
				<?php }else{ ?>
					<br /><span style = "color: red;font-weight:bold;"><?php echo $_smarty_tpl->getConfigVariable('correctfaults');?>
</span>
				<?php }?>

				<div class="content-spacer"></div>

			</div>
		</div> 
	</body>
</html>
<?php }} ?>