<?php
/* Smarty version 4.2.1, created on 2022-10-10 00:00:29
  from 'C:\xampp\htdocs\WEB2\TPE\templates\productModify.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6343447dd292b6_20615859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56527dfd95474f528afa7cb7fb82378d1140f40f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\productModify.tpl',
      1 => 1665352829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productInfo.tpl' => 1,
    'file:editProduct.tpl' => 1,
  ),
),false)) {
function content_6343447dd292b6_20615859 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='row mx-auto'>
    <div class='col'>
    <?php $_smarty_tpl->_subTemplateRender('file:productInfo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div class='col'>
    <?php $_smarty_tpl->_subTemplateRender('file:editProduct.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div><?php }
}
