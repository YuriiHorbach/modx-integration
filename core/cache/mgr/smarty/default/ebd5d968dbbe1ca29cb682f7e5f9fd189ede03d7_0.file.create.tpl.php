<?php /* Smarty version 3.1.27, created on 2018-12-18 21:08:59
         compiled from "D:\ProgF\xampp1\htdocs\modx\manager\templates\default\element\chunk\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:281375c1953db153247_98105644%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebd5d968dbbe1ca29cb682f7e5f9fd189ede03d7' => 
    array (
      0 => 'D:\\ProgF\\xampp1\\htdocs\\modx\\manager\\templates\\default\\element\\chunk\\create.tpl',
      1 => 1545062555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281375c1953db153247_98105644',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c1953db153244_62282185',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c1953db153244_62282185')) {
function content_5c1953db153244_62282185 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '281375c1953db153247_98105644';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>