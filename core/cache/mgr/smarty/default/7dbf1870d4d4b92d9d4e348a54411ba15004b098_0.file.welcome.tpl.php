<?php /* Smarty version 3.1.27, created on 2018-12-17 21:01:00
         compiled from "D:\ProgF\xampp1\htdocs\modx\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:38535c18007ca4d717_05066189%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dbf1870d4d4b92d9d4e348a54411ba15004b098' => 
    array (
      0 => 'D:\\ProgF\\xampp1\\htdocs\\modx\\manager\\templates\\default\\welcome.tpl',
      1 => 1545062562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38535c18007ca4d717_05066189',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c18007ca4d719_94831739',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c18007ca4d719_94831739')) {
function content_5c18007ca4d719_94831739 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '38535c18007ca4d717_05066189';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>