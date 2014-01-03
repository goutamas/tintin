<?php /* Smarty version Smarty-3.1.13, created on 2014-01-03 13:27:53
         compiled from "/var/www/tintin/templates/standard/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194873617952c6acc95bf620-48540355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a0067938e25c9aebb14ecae4367855ef96ded3b' => 
    array (
      0 => '/var/www/tintin/templates/standard/header.tpl',
      1 => 1377125160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194873617952c6acc95bf620-48540355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'settings' => 0,
    'stage' => 0,
    'loggedin' => 0,
    'project' => 0,
    'userid' => 0,
    'jsload' => 0,
    'jsload2' => 0,
    'jsload3' => 0,
    'jsload1' => 0,
    'locale' => 0,
    'showheader' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52c6acc9625e18_70445692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c6acc9625e18_70445692')) {function content_52c6acc9625e18_70445692($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('lng.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("strings", 'global'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 @ <?php echo $_smarty_tpl->tpl_vars['settings']->value['name'];?>
</title>
<link rel="shortcut icon" href="templates/standard/images/favicon.ico" type="image/x-icon" />
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['stage']->value)===null||$tmp==='' ? '' : $tmp)!="project"&&(($tmp = @$_smarty_tpl->tpl_vars['loggedin']->value)===null||$tmp==='' ? '' : $tmp)){?>
<link rel="search" type="application/opensearchdescription+xml" title="<?php echo $_smarty_tpl->tpl_vars['settings']->value['name'];?>
 <?php echo $_smarty_tpl->getConfigVariable('search');?>
" href="manageajax.php?action=addfx-all" />
<?php }elseif((($tmp = @$_smarty_tpl->tpl_vars['stage']->value)===null||$tmp==='' ? '' : $tmp)=="project"&&$_smarty_tpl->tpl_vars['loggedin']->value){?>
<link rel="search" type="application/opensearchdescription+xml" title="<?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
 <?php echo $_smarty_tpl->getConfigVariable('search');?>
" href="manageajax.php?action=addfx-project&amp;project=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['loggedin']->value){?>
<link rel="alternate" type="application/rss+xml" title="<?php echo $_smarty_tpl->getConfigVariable('mymessages');?>
" href="managerss.php?action=mymsgs-rss&amp;user=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" />
<link rel="alternate" type="application/rss+xml" title="<?php echo $_smarty_tpl->getConfigVariable('mytasks');?>
" href="managerss.php?action=rss-tasks&amp;user=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" />
<?php }?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['jsload']->value)===null||$tmp==='' ? '' : $tmp)=="ajax"){?>


<script type = "text/javascript">
//endcolor for close element flashing
closeEndcolor = '#377814';
//endcolor for delete element flashing
deleteEndcolor = '#c62424';
</script>
<script type = "text/javascript" src = "include/js/prototype.php" ></script>
<script type = "text/javascript" src = "include/js/ajax.php" ></script>
<script type = "text/javascript" src="include/js/jsval.php"></script>
<script type="text/javascript" src="include/js/chat.js"></script>
     <script type = "text/javascript">
        function _jsVal_Language() {
            this.err_enter = "<?php echo $_smarty_tpl->getConfigVariable('wrongfield');?>
";
            this.err_form = "<?php echo $_smarty_tpl->getConfigVariable('wrongfields');?>
";
            this.err_select = "<?php echo $_smarty_tpl->getConfigVariable('wrongselect');?>
";
        }
</script>

<script type="text/javascript" src="include/js/mycalendar.js"></script>

<?php }?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['jsload2']->value)===null||$tmp==='' ? '' : $tmp)=="chat"){?>

<script type="text/javascript">
window.onunload = quitchat;

</script>

<?php }?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['jsload3']->value)===null||$tmp==='' ? '' : $tmp)=="lightbox"){?>
<link rel="stylesheet" href="templates/standard/css/lytebox.css" type="text/css"  />
<script type="text/javascript" src="include/js/lytebox.php"></script>
<?php }?>
<link rel="stylesheet" type="text/css" href="templates/standard/css/style_main.css"/>


<?php if ((($tmp = @$_smarty_tpl->tpl_vars['jsload1']->value)===null||$tmp==='' ? '' : $tmp)=="tinymce"){?>

<script type="text/javascript" src="include/js/tiny_mce/tiny_mce.js"></script>

<script type="text/javascript">
//	theme_advanced_statusbar_location : "bottom",
tinyMCE.init({
	mode : "textareas",
	theme : "advanced",
	language: "<?php echo $_smarty_tpl->tpl_vars['locale']->value;?>
",
	width: "400px",
	height: "250px",
	plugins : "inlinepopups,style,advimage,advlink,xhtmlxtras,safari,template",
	theme_advanced_buttons1 : "bold,italic,underline,|,fontsizeselect,forecolor,|,bullist,numlist,|,link,unlink,image",
	theme_advanced_buttons2 : "",
	theme_advanced_buttons3 : "",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_path : false,
	extended_valid_elements : "a[name|href|target|title],img[class|src|border=0|alt|title|hspace|vspace|width|height|align|name],font[face|size|color|style],span[class|align|style]",
    theme_advanced_statusbar_location: "bottom",
    theme_advanced_resizing : true,
	theme_advanced_resizing_use_cookie : false,
	theme_advanced_resizing_min_width : "400px",
	theme_advanced_resizing_max_width : "600px",
	theme_advanced_resize_horizontal : false,
	force_br_newlines : true,
	cleanup: true,
	cleanup_on_startup: true,
	force_p_newlines : false,
	convert_newlines_to_brs : false,
	forced_root_block : false,
	external_image_list_url: 'manageajax.php?action=jsonfiles&id=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['project']->value['ID'])===null||$tmp==='' ? '' : $tmp);?>
'

});

</script>

<?php }?>
</head>
<body >

<!--<div id = "jslog" style = "color:red;position:absolute;top:60%;right:5%;width:300px;border:1px solid;background-color:grey;"></div>-->

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['showheader']->value)===null||$tmp==='' ? '' : $tmp)!="no"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("header_main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php }} ?>