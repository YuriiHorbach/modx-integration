<?php /* Smarty version 3.1.27, created on 2018-12-10 13:53:31
         compiled from "D:\ProgF\xampp1\htdocs\modx\manager\templates\default\element\chunk\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:184915c0e61cb5d4f59_95873796%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebd5d968dbbe1ca29cb682f7e5f9fd189ede03d7' => 
    array (
      0 => 'D:\\ProgF\\xampp1\\htdocs\\modx\\manager\\templates\\default\\element\\chunk\\create.tpl',
      1 => 1483440292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184915c0e61cb5d4f59_95873796',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c0e61cb5db932_94355879',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c0e61cb5db932_94355879')) {
function content_5c0e61cb5db932_94355879 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '184915c0e61cb5d4f59_95873796';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>