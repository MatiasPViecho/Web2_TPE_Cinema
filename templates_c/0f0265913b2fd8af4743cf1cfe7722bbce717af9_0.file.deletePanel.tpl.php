<?php
/* Smarty version 4.2.1, created on 2022-10-09 22:09:00
  from 'C:\xampp\htdocs\WEB2\TPE\templates\deletePanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63432a5cd40116_99970784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f0265913b2fd8af4743cf1cfe7722bbce717af9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\deletePanel.tpl',
      1 => 1665346140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error.tpl' => 1,
    'file:products.tpl' => 1,
    'file:categories.tpl' => 1,
  ),
),false)) {
function content_63432a5cd40116_99970784 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <a class='btn btn-success' href='<?php echo BASE_URL;?>
edit'>Go back</a>
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:error.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
    <div class='card'>
        <div class='card-header'>
            <p class='display-6'>PRDOCUTOS</p>
        </div>
            <?php $_smarty_tpl->_subTemplateRender('file:products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class='card-footer text-muted'>
            <p>Los productos eliminados no se pueden restaurar</p>
        </div>
    </div>
    <div class='category'>
        <div class='card-header'>
            <p class='display-6'>CATEGORIAS</p>
        </div>
        <div class='card-body'>
            <?php $_smarty_tpl->_subTemplateRender('file:categories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class='card-footer text-muted'>
            <p>Las categorías eliminadas no se pueden restaurar</p>
        </div>
    <div>
</div><?php }
}
