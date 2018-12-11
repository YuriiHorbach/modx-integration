<?php /* Smarty version 3.1.27, created on 2018-11-13 16:23:22
         compiled from "D:\ProgF\xampp1\htdocs\modx\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30945beaec6a8a2d59_51431132%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24d0ec4e5eb95f3cc9dced97590700ff4fa446b9' => 
    array (
      0 => 'D:\\ProgF\\xampp1\\htdocs\\modx\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1483440292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30945beaec6a8a2d59_51431132',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5beaec6a8d0b65_21941098',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5beaec6a8d0b65_21941098')) {
function content_5beaec6a8d0b65_21941098 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30945beaec6a8a2d59_51431132';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>