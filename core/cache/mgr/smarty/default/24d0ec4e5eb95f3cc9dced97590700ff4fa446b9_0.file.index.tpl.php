<?php /* Smarty version 3.1.27, created on 2018-12-18 19:48:01
         compiled from "D:\ProgF\xampp1\htdocs\modx\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:303195c1940e1a98999_20502008%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24d0ec4e5eb95f3cc9dced97590700ff4fa446b9' => 
    array (
      0 => 'D:\\ProgF\\xampp1\\htdocs\\modx\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1545062562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303195c1940e1a98999_20502008',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c1940e1b6b8c9_08912848',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c1940e1b6b8c9_08912848')) {
function content_5c1940e1b6b8c9_08912848 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '303195c1940e1a98999_20502008';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>