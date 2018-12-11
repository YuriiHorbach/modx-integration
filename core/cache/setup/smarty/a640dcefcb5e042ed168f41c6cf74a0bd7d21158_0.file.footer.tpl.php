<?php /* Smarty version 3.1.27, created on 2018-11-13 16:16:04
         compiled from "D:\ProgF\xampp1\htdocs\modx\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:248335beaeab4976693_16817257%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a640dcefcb5e042ed168f41c6cf74a0bd7d21158' => 
    array (
      0 => 'D:\\ProgF\\xampp1\\htdocs\\modx\\setup\\templates\\footer.tpl',
      1 => 1483440292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248335beaeab4976693_16817257',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5beaeab499adc4_19445749',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5beaeab499adc4_19445749')) {
function content_5beaeab499adc4_19445749 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'D:/ProgF/xampp1/htdocs/modx/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '248335beaeab4976693_16817257';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>