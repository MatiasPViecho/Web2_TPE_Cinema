<?php
/* Smarty version 4.2.1, created on 2022-10-10 01:36:37
  from 'C:\xampp\htdocs\WEB2\TPE\templates\categoryModify.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63435b05639c97_86437029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57cba805933a696183b108c5d3a838923806cad3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\categoryModify.tpl',
      1 => 1665358596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productsCategoryPanel.tpl' => 1,
    'file:editCategory.tpl' => 1,
  ),
),false)) {
function content_63435b05639c97_86437029 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='row mx-auto w-75'>
    <div class='col'>
    <?php $_smarty_tpl->_subTemplateRender('file:productsCategoryPanel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div class='col'>
    <?php $_smarty_tpl->_subTemplateRender('file:editCategory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div><?php }
}
