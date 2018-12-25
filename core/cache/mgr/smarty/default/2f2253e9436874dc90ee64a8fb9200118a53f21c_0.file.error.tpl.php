<?php
/* Smarty version 3.1.33, created on 2018-12-17 20:46:24
  from 'D:\ProgF\xampp1\htdocs\modx\manager\templates\default\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c17fd10280d22_03880986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f2253e9436874dc90ee64a8fb9200118a53f21c' => 
    array (
      0 => 'D:\\ProgF\\xampp1\\htdocs\\modx\\manager\\templates\\default\\error.tpl',
      1 => 1543308730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c17fd10280d22_03880986 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modx_error">
    <h2><i class="icon icon-exclamation-triangle"></i> An error occurred...</h2>

    <div class="error_container<?php if (count($_smarty_tpl->tpl_vars['_e']->value['errors']) > 0) {?> multiple<?php }?>">
        <p><?php echo $_smarty_tpl->tpl_vars['_e']->value['message'];?>
</p>

        <?php if (count($_smarty_tpl->tpl_vars['_e']->value['errors']) > 0) {?>
        <p>&nbsp;</p>
        <p><strong>Errors:</strong></p>
        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_e']->value['errors'], 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
            <li><i class="icon icon-angle-right"></i> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <?php }?>
    </div>
</div><?php }
}
