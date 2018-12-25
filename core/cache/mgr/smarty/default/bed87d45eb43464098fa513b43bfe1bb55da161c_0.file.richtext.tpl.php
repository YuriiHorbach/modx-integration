<?php /* Smarty version 3.1.27, created on 2018-12-25 09:52:38
         compiled from "D:\ProgF\xampp1\htdocs\modx\manager\templates\default\element\tv\renders\input\richtext.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:216105c21efd61e1aa1_62703267%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bed87d45eb43464098fa513b43bfe1bb55da161c' => 
    array (
      0 => 'D:\\ProgF\\xampp1\\htdocs\\modx\\manager\\templates\\default\\element\\tv\\renders\\input\\richtext.tpl',
      1 => 1545062555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216105c21efd61e1aa1_62703267',
  'variables' => 
  array (
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c21efd6255631_83524335',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c21efd6255631_83524335')) {
function content_5c21efd6255631_83524335 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '216105c21efd61e1aa1_62703267';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
});
<?php echo '</script'; ?>
><?php }
}
?>